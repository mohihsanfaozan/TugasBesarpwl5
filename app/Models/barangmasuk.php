<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'barangmasuks';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'char';
}
