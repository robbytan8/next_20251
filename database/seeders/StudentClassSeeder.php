<?php

namespace Database\Seeders;

use App\Models\StudentClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * @author Robby Tan
 */
class StudentClassSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    StudentClass::insert([
      ['student_id' => 'S001', 'period_id' => 1, 'class' => 'X-A'],
      ['student_id' => 'S002', 'period_id' => 1, 'class' => 'X-A'],
      ['student_id' => 'S003', 'period_id' => 1, 'class' => 'X-B'],
      ['student_id' => 'S004', 'period_id' => 1, 'class' => 'X-B'],
      ['student_id' => 'S005', 'period_id' => 1, 'class' => 'X-C'],
      ['student_id' => 'S006', 'period_id' => 1, 'class' => 'X-C'],
      ['student_id' => 'S007', 'period_id' => 1, 'class' => 'X-D'],
      ['student_id' => 'S008', 'period_id' => 1, 'class' => 'X-D'],
      ['student_id' => 'S009', 'period_id' => 1, 'class' => 'X-E'],
      ['student_id' => 'S010', 'period_id' => 1, 'class' => 'X-E'],
      ['student_id' => 'S001', 'period_id' => 2, 'class' => 'XI-A'],
      ['student_id' => 'S002', 'period_id' => 2, 'class' => 'XI-A'],
      ['student_id' => 'S003', 'period_id' => 2, 'class' => 'XI-B'],
      ['student_id' => 'S004', 'period_id' => 2, 'class' => 'XI-B'],
      ['student_id' => 'S005', 'period_id' => 2, 'class' => 'XI-C'],
      ['student_id' => 'S006', 'period_id' => 2, 'class' => 'XI-C'],
      ['student_id' => 'S007', 'period_id' => 2, 'class' => 'XI-D'],
      ['student_id' => 'S008', 'period_id' => 2, 'class' => 'XI-D'],
      ['student_id' => 'S009', 'period_id' => 2, 'class' => 'XI-E'],
      ['student_id' => 'S010', 'period_id' => 2, 'class' => 'XI-E'],
    ]);
  }
}
