<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;

/**
 * @author Robby Tan
 */
class PeriodSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Period::insert([
      ['name' => '2024/2025'],
      ['name' => '2025/2026'],
      ['name' => '2026/2027'],
    ]);
  }
}
