<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\assertJson;

class Decoration extends Model
{

    protected $fillable = ['name','price','img_url'];

    use HasFactory;
}
