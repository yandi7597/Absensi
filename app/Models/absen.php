<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;
    protected $fillable = ['nis','jam_kedatangan','jam_kepulangan','foto'];
    protected $table ='absen';
}
