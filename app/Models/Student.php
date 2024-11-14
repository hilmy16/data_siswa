<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rombel;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'name',
        'gender',
    ];

    //
    public function rombel(){
        return $this->belongsTo(rombel::class);
    }
}