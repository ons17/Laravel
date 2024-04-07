<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = 'id'; // Assuming your primary key column is named 'id'
    protected $fillable = ['name', 'price', 'qte'];

    use HasUuids;
    use HasFactory;
}