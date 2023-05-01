<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'village';
    public $timestamps = false;

    public function subdistrictdetail()
    {
        return $this->belongsTo(Subdistrict::class, 'subdistrict_id');
    }
}
