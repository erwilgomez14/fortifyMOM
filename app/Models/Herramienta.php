<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    use HasFactory;
    protected $table = 'herramienta';
    protected $primaryKey = 'id_herramienta';
    public $timestamps = false;


}
