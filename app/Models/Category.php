<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categories';
    protected $guarded = false;
/*стали добавляться категории после того как закомментировал*/
  /*  public static function firstOrCreate(array $data)
    {
    }*/
}
