<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'student';

  protected $fillable = [
    'id',
    'name',
    'address',
    'birth_date',
    'photo',
  ];

  protected $primaryKey = 'id';

  protected $keyType = 'string';

  public $incrementing = false;
}
