<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
  protected $table = 'student_class';

  protected $fillable = [
    'period_id',
    'student_id',
    'class',
  ];

  protected $primaryKey = ['period_id', 'student_id', 'class'];

  protected $keyType = ['period_id' => 'int', 'student_id' => 'string', 'class' => 'string'];

  public $incrementing = false;

  public function period() {
    return $this->belongsTo(Period::class, 'period_id', 'id');
  }

  public function student() {
    return $this->belongsTo(Student::class, 'student_id', 'id');
  }
}
