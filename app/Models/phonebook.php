<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    use HasFactory;

    protected $table = 'phonebook'; // Tambahkan ini
    protected $fillable = ['nama', 'no_telepon', 'instansi'];
}