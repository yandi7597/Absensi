<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notabsen extends Model
{
    use HasFactory;
    protected $fillable = ['nis','keterangan','foto'];
    protected $table ='notabsen';
}
