<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecomersmodel extends Model
{
    use HasFactory;
    protected $fillable =['id', 'title', 'description', 'image_url','harga'];
    protected $table = 'ecomerstb';
    public $timestamps = false;
}
