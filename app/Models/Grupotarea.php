<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupotarea extends Model
{
    use HasFactory;
    protected $table = 'tareas_equipos';
    protected $primaryKey = 'id_tareas';
    public $timestamps = false;
}
