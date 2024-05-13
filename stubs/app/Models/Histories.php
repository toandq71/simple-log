<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    protected $table = "histories";

    protected $primaryKey = "id";
    
    protected $fillable = [
        'id',
        'action',
        'created_by'
    ];
}
