<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = false;
/*стали добавляться категории после того как закомментировал*/
  /*  public static function firstOrCreate(array $data)
    {
    }*/
}
