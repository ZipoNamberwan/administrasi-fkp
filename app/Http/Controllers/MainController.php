<?php

namespace App\Http\Controllers;

use App\Helpers\Utilities;
use App\Models\Subdistrict;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use IntlDateFormatter;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;
use ZipArchive;

class MainController extends Controller
{
    public function index()
    {
        $subdistricts = Subdistrict::all();
        $fkpindexs = [1, 2, 3, 4, 5, 6, 7];

        return view('generate', ['subdistricts' => $subdistricts, 'fkpindexs' => $fkpindexs]);
    }

    public function getVillage($id)
    {
        return json_encode(Village::where('subdistrict_id', $id)->get());
    }

    public function generate(Request $request)
    {
        $this->validate($request, [
            'fkpindex' => 'required',
            'subdistrict' => 'required',
            'village' => 'required',
            'date' => 'required',
            'asfas1_name' => 'required',
            'asfas2_name' => 'required',
            'admin_name' => 'required',
            'total_sls' => 'required|max:13|min:1',
        ]);

        $rdmString = Utilities::generateRandomString();

        Storage::makeDirectory('public/generated/' . $rdmString);

        Storage::makeDirectory('public/generated/' . $rdmString . '/1 Konsumsi');
        Storage::makeDirectory('public/generated/' . $rdmString . '/2 Transport Peserta');
        Storage::makeDirectory('public/generated/' . $rdmString . '/3 Honor Fasilitator');
        Storage::makeDirectory('public/generated/' . $rdmString . '/4 Transport Babin');
        Storage::makeDirectory('public/generated/' . $rdmString . '/5 Honor Asfas dan Administrator');

        $subdistrict = Subdistrict::find($request->subdistrict);
        $village = Village::find($request->village);
        $date_str = date('Y-m-d', strtotime($request->date));
        $date_obj = date_create_from_format('Y-m-d', $date_str);

        $date_formatter = IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'cccc/dd LLLL yyyy'
        );

        $date = $date_formatter->format($date_obj);
        $total_sls = $request->total_sls;

        $zip = new ZipArchive();
        $zipfile = 'storage/generated/' . $rdmString . '/Berkas FKP ' . $request->fkpindex . ' ' . $subdistrict->name . ' ' . $village->name . ' ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj) . '.zip';

        if ($zip->open($zipfile, ZipArchive::CREATE) === true) {
            $zip->addEmptyDir("1 Konsumsi");
            $zip->addEmptyDir("2 Transport Peserta");
            $zip->addEmptyDir("3 Honor Fasilitator");
            $zip->addEmptyDir("4 Transport Babin");
            $zip->addEmptyDir("5 Honor Asfas dan Administrator");
        } else {
            echo "Failed to open/create $zipfile";
        }

        $zip->addFile('template/1 Konsumsi/4b# Nota Konsumsi.docx', '1 Konsumsi/4b# Nota Konsumsi.docx');
        $zip->addFile('template/1 Konsumsi/7# Dokumentasi FKP.docx', '1 Konsumsi/7# Dokumentasi FKP.docx');
        $zip->addFile('template/2 Transport Peserta/2# Foto Dokumentasi Pemberian Honor Peserta.docx', '2 Transport Peserta/2# Foto Dokumentasi Pemberian Honor Peserta.docx');
        $zip->addFile('template/3 Honor Fasilitator/1^ Daftar Hadir.xlsx', '3 Honor Fasilitator/1^ Daftar Hadir.xlsx');
        $zip->addFile('template/3 Honor Fasilitator/3^ Berita Acara FKP.docx', '3 Honor Fasilitator/3^ Berita Acara FKP.docx');
        $zip->addFile('template/3 Honor Fasilitator/4a^ Notulen.docx', '3 Honor Fasilitator/4a^ Notulen.docx');
        $zip->addFile('template/3 Honor Fasilitator/4b^ Prelist Hasil FKP.docx', '3 Honor Fasilitator/4b^ Prelist Hasil FKP.docx');
        $zip->addFile('template/3 Honor Fasilitator/6# Fotocopy NPWP Jika Ada.docx', '3 Honor Fasilitator/6# Fotocopy NPWP Jika Ada.docx');
        $zip->addFile('template/3 Honor Fasilitator/7# Dokumentasi Pemberian Honor.docx', '3 Honor Fasilitator/7# Dokumentasi Pemberian Honor.docx');
        $zip->addFile('template/3 Honor Fasilitator/8^ Surat Pendelegasian Wewenang.docx', '3 Honor Fasilitator/8^ Surat Pendelegasian Wewenang.docx');
        $zip->addFile('template/4 Transport Babin/2# Foto Dokumentasi Babinsa Babinkamtibmas.docx', '4 Transport Babin/2# Foto Dokumentasi Babinsa Babinkamtibmas.docx');
        $zip->addFile('template/4 Transport Babin/3^ Surat Pendelegasian Wewenang Bendahara.docx', '4 Transport Babin/3^ Surat Pendelegasian Wewenang Bendahara.docx');
        $zip->addFile('template/5 Honor Asfas dan Administrator/5# Dokumentasi Pemberian Honor.docx', '5 Honor Asfas dan Administrator/5# Dokumentasi Pemberian Honor.docx');
        $zip->addFile('template/5 Honor Asfas dan Administrator/6^ Surat Pendelegasian Wewenang Bendahara.docx', '5 Honor Asfas dan Administrator/6^ Surat Pendelegasian Wewenang Bendahara.docx');

        //1. Konsumsi Jadwal Kegiatan
        $templateProcessor = new TemplateProcessor('template/1 Konsumsi/2 Jadwal Kegiatan.docx');
        $templateProcessor->setValue('subdistrict', $subdistrict->name);
        $templateProcessor->setValue('village', $village->name);

        $templateProcessor->setValue('date', $date);
        $templateProcessor->setValue('asfas1_name', $request->asfas1_name);

        $pathToSave = 'storage/generated/' . $rdmString . '/1 Konsumsi/2 Jadwal Kegiatan.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/2 Jadwal Kegiatan.docx', '1 Konsumsi/2 Jadwal Kegiatan.docx');

        //1. Konsumsi Daftar Hadir
        $spreadsheet = IOFactory::load('template/1 Konsumsi/3 Daftar Hadir.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C4', $subdistrict->name);
        $worksheet->setCellValue('C5', $village->name);
        $worksheet->setCellValue('H4', '[' . $subdistrict->code . ']');
        $worksheet->setCellValue('H5', '[' . $village->code . ']');
        $worksheet->setCellValue('C6', $date);
        $worksheet->setCellValue('B37', $request->admin_name);
        $worksheet->setCellValue('E37', $request->asfas2_name);
        $worksheet->setCellValue('B43', $request->asfas1_name);
        // $total_member = $total_sls + 9;
        // $max_member = 22;
        // for ($i = $total_member; $i < $max_member; $i++) {
        //     $worksheet->removeRow($total_member + 11);
        // }

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/1 Konsumsi/3 Daftar Hadir.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/3 Daftar Hadir.xlsx', '1 Konsumsi/3 Daftar Hadir.xlsx');

        //1. Konsumsi Kuitansi Pelaksanaan
        $spreadsheet = IOFactory::load('template/1 Konsumsi/4a Kuitansi Pelaksanaan.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $total_member = $total_sls + 9;
        $worksheet->setCellValue('M15', $total_member);

        $value = str_replace('xxxxxx', $subdistrict->name, $worksheet->getCell('F12')->getValue());
        $worksheet->setCellValue('F12', $value);

        // $total_member = $total_sls + 9;
        // $max_member = 22;
        // for ($i = $total_member; $i < $max_member; $i++) {
        //     $worksheet->removeRow($total_member + 11);
        // }

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/1 Konsumsi/4a Kuitansi Pelaksanaan.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/4a Kuitansi Pelaksanaan.xlsx', '1 Konsumsi/4a Kuitansi Pelaksanaan.xlsx');

        //1. Konsumsi Notulen
        $templateProcessor = new TemplateProcessor('template/1 Konsumsi/5 Notulen.docx');
        $templateProcessor->setValue('subdistrict', strtoupper($subdistrict->name));
        $templateProcessor->setValue('village', strtoupper($village->name));
        $templateProcessor->setValue('admin_name', ucwords($request->admin_name));

        $templateProcessor->setValue('date', $date);

        $pathToSave = 'storage/generated/' . $rdmString . '/1 Konsumsi/5 Notulen.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/5 Notulen.docx', '1 Konsumsi/5 Notulen.docx');

        //1. Konsumsi Berita Acara
        $spreadsheet = IOFactory::load('template/1 Konsumsi/6 Berita Acara.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C4', $subdistrict->name);
        $worksheet->setCellValue('C5', $village->name);
        $worksheet->setCellValue('H4', '[' . $subdistrict->code . ']');
        $worksheet->setCellValue('H5', '[' . $village->code . ']');
        $worksheet->setCellValue('C6', $date);
        $worksheet->setCellValue('B36', $request->admin_name);
        $worksheet->setCellValue('E36', $request->asfas2_name);
        $worksheet->setCellValue('B42', $request->asfas1_name);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/1 Konsumsi/6 Berita Acara.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/6 Berita Acara.xlsx', '1 Konsumsi/6 Berita Acara.xlsx');

        //1. Konsumsi 8 Tanda Terima Pulpen
        $spreadsheet = IOFactory::load('template/1 Konsumsi/8 Tanda Terima Pulpen.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C3', ': ' . $subdistrict->name);
        $worksheet->setCellValue('C4', ': ' . $village->name);
        $worksheet->setCellValue('C5', ': ' . $date);
        $worksheet->setCellValue('E31', 'Probolinggo, ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));
        $worksheet->setCellValue('E37', $request->admin_name);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/1 Konsumsi/8 Tanda Terima Pulpen.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/1 Konsumsi/8 Tanda Terima Pulpen.xlsx', '1 Konsumsi/8 Tanda Terima Pulpen.xlsx');

        //2 Transport Peserta SPJ Transport Peserta
        $spreadsheet = IOFactory::load('template/2 Transport Peserta/1 SPJ Transport Peserta.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C11', ': ' . $subdistrict->name);

        $worksheet->setCellValue('G35', 'Probolinggo, ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));

        $total_member = $total_sls + 3;
        $max_member = 16;

        $worksheet->setCellValue('E32', $total_member);
        $worksheet->setCellValue('F32', ($total_member * 50000));
        $worksheet->setCellValue('G43', $request->admin_name);

        for ($i = $total_member; $i < $max_member; $i++) {
            $worksheet->removeRow($total_member + 16);
        }

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/2 Transport Peserta/1 SPJ Transport Peserta.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/2 Transport Peserta/1 SPJ Transport Peserta.xlsx', '2 Transport Peserta/1 SPJ Transport Peserta.xlsx');

        //2 Transport Peserta Surat Pendelegasian Wewenang Bendahara

        $templateProcessor = new TemplateProcessor('template/2 Transport Peserta/3 Surat Pendelegasian Wewenang Bendahara.docx');
        $templateProcessor->setValue('subdistrict', ucfirst($subdistrict->name));
        $templateProcessor->setValue('admin_name', ucfirst($request->admin_name));

        $templateProcessor->setValue('date', IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));

        $pathToSave = 'storage/generated/' . $rdmString . '/2 Transport Peserta/3 Surat Pendelegasian Wewenang Bendahara.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/2 Transport Peserta/3 Surat Pendelegasian Wewenang Bendahara.docx', '2 Transport Peserta/3 Surat Pendelegasian Wewenang Bendahara.docx');

        //3 Honor Fasilitator Daftar Riwayat Hidup
        $templateProcessor = new TemplateProcessor('template/3 Honor Fasilitator/2 Daftar Riwayat Hidup.docx');

        $templateProcessor->setValue('date', IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));

        $pathToSave = 'storage/generated/' . $rdmString . '/3 Honor Fasilitator/2 Daftar Riwayat Hidup.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/3 Honor Fasilitator/2 Daftar Riwayat Hidup.docx', '3 Honor Fasilitator/2 Daftar Riwayat Hidup.docx');

        //3 Honor Fasilitator Kuitansi Honor Fasilitator

        $spreadsheet = IOFactory::load('template/3 Honor Fasilitator/5 Kuitansi Honor Fasilitator.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $value = str_replace('xxxxxx', $subdistrict->name, $worksheet->getCell('E11')->getValue());
        $worksheet->setCellValue('E11', $value);
        $worksheet->setCellValue('M19', 'Probolinggo, ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/3 Honor Fasilitator/5 Kuitansi Honor Fasilitator.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/3 Honor Fasilitator/5 Kuitansi Honor Fasilitator.xlsx', '3 Honor Fasilitator/5 Kuitansi Honor Fasilitator.xlsx');

        //4 Transport Babin SPJ Babinsa dan Babinkatibnas
        $spreadsheet = IOFactory::load('template/4 Transport Babin/1 SPJ Babinsa dan Babinkatibnas.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C8', ': ' . $subdistrict->name);
        $worksheet->setCellValue('E13', IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));
        $worksheet->setCellValue('E14', IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));
        $worksheet->setCellValue('F13',  $village->name);
        $worksheet->setCellValue('F14',  $village->name);
        $worksheet->setCellValue('G13',  $village->name);
        $worksheet->setCellValue('G14',  $village->name);
        $worksheet->setCellValue('J18', 'Probolinggo, ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj));
        $worksheet->setCellValue('J23',  $request->admin_name);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/4 Transport Babin/1 SPJ Babinsa dan Babinkatibnas.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/4 Transport Babin/1 SPJ Babinsa dan Babinkatibnas.xlsx', '4 Transport Babin/1 SPJ Babinsa dan Babinkatibnas.xlsx');

        //5 Honor Asfas dan Administrator 1 Surat Tugas dan Visum
        $templateProcessor = new TemplateProcessor('template/5 Honor Asfas dan Administrator/1 Surat Tugas dan Visum.docx');

        $replacements = array(
            array('name' => $request->asfas1_name, 'nip' => $request->asfas1_nip, 'role' => 'Asisten Fasilitator', 'date' => IntlDateFormatter::create(
                'id_ID',
                IntlDateFormatter::GREGORIAN,
                IntlDateFormatter::NONE,
                null,
                null,
                'dd LLLL yyyy'
            )->format($date_obj), 'subdistrict' => $subdistrict->name, 'village' => $village->name,),
            array('name' => $request->asfas2_name, 'nip' => '-', 'role' => 'Asisten Fasilitator', 'date' => IntlDateFormatter::create(
                'id_ID',
                IntlDateFormatter::GREGORIAN,
                IntlDateFormatter::NONE,
                null,
                null,
                'dd LLLL yyyy'
            )->format($date_obj), 'subdistrict' => $subdistrict->name, 'village' => $village->name,),
            array('name' => $request->admin_name, 'nip' => '-', 'role' => 'Administrator', 'date' => IntlDateFormatter::create(
                'id_ID',
                IntlDateFormatter::GREGORIAN,
                IntlDateFormatter::NONE,
                null,
                null,
                'dd LLLL yyyy'
            )->format($date_obj), 'subdistrict' => $subdistrict->name, 'village' => $village->name,),
        );

        $templateProcessor->cloneBlock('main', 3, true, false, $replacements);
        $pathToSave = 'storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/1 Surat Tugas dan Visum.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/1 Surat Tugas dan Visum.docx', '5 Honor Asfas dan Administrator/1 Surat Tugas dan Visum.docx');

        //5 Honor Asfas dan Administrator 2 Daftar SPD Paket Meeting Dalam Kota
        $spreadsheet = IOFactory::load('template/5 Honor Asfas dan Administrator/2 Daftar SPD Paket Meeting Dalam Kota.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('B16', $request->asfas1_name);
        $worksheet->setCellValue('C16', $request->asfas1_nip ?? '');
        $worksheet->setCellValue('B17', $request->asfas2_name);
        $worksheet->setCellValue('B18', $request->admin_name);

        $d = IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj);
        $worksheet->setCellValue('K16', $d);
        $worksheet->setCellValue('K17', $d);
        $worksheet->setCellValue('K18', $d);

        $worksheet->setCellValue('L16', $d);
        $worksheet->setCellValue('L17', $d);
        $worksheet->setCellValue('L18', $d);

        $worksheet->setCellValue('I21', 'Probolinggo, ' . $d);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/2 Daftar SPD Paket Meeting Dalam Kota.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/2 Daftar SPD Paket Meeting Dalam Kota.xlsx', '5 Honor Asfas dan Administrator/2 Daftar SPD Paket Meeting Dalam Kota.xlsx');

        //5 Honor Asfas dan Administrator 3 Daftar Rincian Perhitungan Pembayaran
        $spreadsheet = IOFactory::load('template/5 Honor Asfas dan Administrator/3 Daftar Rincian Perhitungan Pembayaran.xlsx');

        $worksheet = $spreadsheet->getActiveSheet();

        $worksheet->setCellValue('C8', ': ' . $subdistrict->name);

        $worksheet->setCellValue('B13', $request->asfas1_name);
        $worksheet->setCellValue('C13', $request->asfas1_nip ?? '');
        $worksheet->setCellValue('B14', $request->asfas2_name);
        $worksheet->setCellValue('B15', $request->admin_name);

        $d = IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj);
        $worksheet->setCellValue('E13', $d);
        $worksheet->setCellValue('E14', $d);
        $worksheet->setCellValue('E15', $d);

        $worksheet->setCellValue('F13', 'BPS Kabupaten Probolinggo');
        $worksheet->setCellValue('F14', 'BPS Kabupaten Probolinggo');
        $worksheet->setCellValue('F15', 'BPS Kabupaten Probolinggo');

        $worksheet->setCellValue('G13', $subdistrict->name);
        $worksheet->setCellValue('G14', $subdistrict->name);
        $worksheet->setCellValue('G15', $subdistrict->name);

        $worksheet->setCellValue('J19', 'Probolinggo, ' . $d);
        $worksheet->setCellValue('J24', $request->admin_name);

        $worksheet->setCellValue('J13', $request->has('published') ? 150000 : 0);

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/3 Daftar Rincian Perhitungan Pembayaran.xlsx');
        $zip->addFile('storage/generated/' . $rdmString . '/5 Honor Asfas dan Administrator/3 Daftar Rincian Perhitungan Pembayaran.xlsx', '5 Honor Asfas dan Administrator/3 Daftar Rincian Perhitungan Pembayaran.xlsx');

        //Check List Kelengkapan Administrasi
        $templateProcessor = new TemplateProcessor('template/Check List dan Petunjuk Teknis Administrasi FKP Regsosek.docx');
        $templateProcessor->setValue('subdistrict', $subdistrict->name);
        $templateProcessor->setValue('village', $village->name);
        $templateProcessor->setValue('index', $request->fkpindex);
        $templateProcessor->setValue('date', $date);

        $pathToSave = 'storage/generated/' . $rdmString . '/Check List dan Petunjuk Teknis Administrasi FKP Regsosek.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/Check List dan Petunjuk Teknis Administrasi FKP Regsosek.docx', 'Check List dan Petunjuk Teknis Administrasi FKP Regsosek.docx');

        //Laporan Akhir
        $templateProcessor = new TemplateProcessor('template/Laporan Akhir Pelaksanaan FKP.docx');
        $templateProcessor->setValue('subdistrict', $subdistrict->name);
        $templateProcessor->setValue('village', $village->name);
        $templateProcessor->setValue('date', $date);
        $templateProcessor->setValue('asfas1_name', $request->asfas1_name);
        $templateProcessor->setValue('asfas2_name', $request->asfas2_name);
        $templateProcessor->setValue('admin_name', $request->admin_name);
        $templateProcessor->setValue('total_sls', $request->total_sls);

        $tomorrow = date('Y-m-d', strtotime($request->date . "+1 days"));
        $date_obj_tomorrow = date_create_from_format('Y-m-d', $tomorrow);

        $d = IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj_tomorrow);

        $templateProcessor->setValue('date_received', $d);

        $pathToSave = 'storage/generated/' . $rdmString . '/Laporan Akhir Pelaksanaan FKP.docx';
        $templateProcessor->saveAs($pathToSave);
        $zip->addFile('storage/generated/' . $rdmString . '/Laporan Akhir Pelaksanaan FKP.docx', 'Laporan Akhir Pelaksanaan FKP.docx');

        $zip->close();

        return Storage::download('public/generated/' . $rdmString . '/Berkas FKP ' . $request->fkpindex . ' ' . $subdistrict->name . ' ' . $village->name . ' ' . IntlDateFormatter::create(
            'id_ID',
            IntlDateFormatter::GREGORIAN,
            IntlDateFormatter::NONE,
            null,
            null,
            'dd LLLL yyyy'
        )->format($date_obj) . '.zip');

        // return response()->download('storage/generated/' . $rdmString . '/Berkas FKP ' . $request->fkpindex . ' ' . $subdistrict->name . ' ' . $village->name . ' ' . IntlDateFormatter::create(
        //     'id_ID',
        //     IntlDateFormatter::GREGORIAN,
        //     IntlDateFormatter::NONE,
        //     null,
        //     null,
        //     'dd LLLL yyyy'
        // )->format($date_obj) . '.zip');

        // return redirect('/');
    }
}
