<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'ope_area';


    protected $keyType = 'string';
    protected $primaryKey = 'id_area';

    public $timestamps = false;
}
