<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $table='book';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'Author_name',
    ];


}
