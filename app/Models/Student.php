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

  protected $keyType = 'string';

  public $incrementing = false;

  public function studentClasses()
  {
    return $this->hasMany(StudentClass::class);
  }
}
