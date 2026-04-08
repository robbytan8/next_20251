<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

/**
 * @author Robby Tan
 */
class StudentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Student::insert([
      ['id' => 'S001', 'name' => 'John Doe', 'address' => '123 Main St', 'birth_date' => '2000-01-01'], 
      ['id' => 'S002', 'name' => 'Jane Smith', 'address' => '456 Elm St', 'birth_date' => '2001-02-02'], 
      ['id' => 'S003', 'name' => 'Alice Johnson', 'address' => '789 Oak St', 'birth_date' => '2002-03-03'], 
      ['id' => 'S004', 'name' => 'Bob Brown', 'address' => '321 Pine St', 'birth_date' => '2003-04-04'],
      ['id' => 'S005', 'name' => 'Charlie Davis', 'address' => '654 Cedar St', 'birth_date' => '2004-05-05'],
      ['id' => 'S006', 'name' => 'Diana Evans', 'address' => '987 Maple St', 'birth_date' => '2005-06-06'],
      ['id' => 'S007', 'name' => 'Ethan Wilson', 'address' => '246 Birch St', 'birth_date' => '2006-07-07'] ,
      ['id' => 'S008', 'name' => 'Fiona Clark', 'address' => '135 Spruce St', 'birth_date' => '2007-08-08'],
      ['id' => 'S009', 'name' => 'George Lee', 'address' => '864 Willow St', 'birth_date' => '2008-09-09'],
      ['id' => 'S010', 'name' => 'Hannah Martin', 'address' => '753 Aspen St', 'birth_date' => '2009-10-10'],
    ]);
  }
}
