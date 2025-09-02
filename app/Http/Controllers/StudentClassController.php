<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index($periodId = -1)
  {
    $periods = Period::all("id", "name");
    if ($periodId == null || $periodId == -1) {
      $studentClasses = collect();
    } else if ($periodId == 0) {
      $studentClasses = StudentClass::with('student', 'period')->get();
    } else {
      $studentClasses = StudentClass::with('student', 'period')->where('period_id', $periodId)->get();
    }
    return view('adm-student-class.index', compact('periods', 'studentClasses', 'periodId'));
  }

  /**
   * Filter the listing of the resource.
   */
  public function filter(Request $request)
  {
    $periodId = $request->get('periodId');
    return redirect()->route('adm-sclass.index', compact('periodId'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $periods = Period::all("id", "name");
    $students = Student::all("id", "name");
    return view('adm-student-class.create', compact('periods', 'students'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'period_id' => 'required|exists:period,id',
      'placements' => 'required|array',
      'placements.*.student_id' => 'nullable|exists:student,id',
      'placements.*.class' => 'nullable|string',
    ]);

    $studentIds = collect($request->placements)->pluck('student_id')->toArray();

    $existing = StudentClass::where('period_id', $request->period_id)
      ->whereIn('student_id', $studentIds)
      ->pluck('student_id')
      ->toArray();

    if (!empty($existing)) {
      return redirect()->back()
        ->withInput()
        ->withErrors(['err_msg' => 'One or several data are already placed in this period: ' . implode(', ', $existing)]);
    }

    $data = [];
    foreach ($request->placements as $placement) {
      if ($placement['student_id'] != null && $placement['class'] != null) {
        $data[] = [
          'period_id' => $request->period_id,
          'student_id' => $placement['student_id'],
          'class' => $placement['class'],
        ];
      }
    }

    StudentClass::insert($data);

    return redirect()->route('adm-sclass.index')->with('success', 'New student placement added successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(StudentClass $studentClass)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(StudentClass $studentClass)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, StudentClass $studentClass)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(StudentClass $studentClass)
  {
    //
  }
}
