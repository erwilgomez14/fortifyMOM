<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acueductos extends Model
{
    use HasFactory;

    protected $table = 'ope_acueducto';

    protected $keyType = 'string';

    protected $primaryKey = 'id_acueducto';
    public $timestamps = false;

}
