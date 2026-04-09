<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $students = Student::select("id", "name", "address", "birth_date", "photo")->get();
    return view('adm-student.index', compact('students'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('adm-student.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'id' => 'required|string|max:10|unique:student,id',
      'name' => 'required|string|max:100',
      'address' => 'required|string|max:300',
      'birth_date' => 'required|date',
      'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);
    $student = new Student($validatedData);
    $student->save();
    return redirect()->route('adm-student.index')->with('success', 'Student created successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Student $student)
  {
    return view('adm-student.show', compact('student'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Student $student)
  {
    return view('adm-student.edit', compact('student'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Student $student)
  {
    $validatedData = $request->validate([
      'name' => 'required|string|max:100',
      'address' => 'required|string|max:300',
      'birth_date' => 'required|date',
      'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);
    if ($request->hasFile('photo')) {
      $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
    } else {
      $validatedData['photo'] = $student->photo;
    }
    $student->update($validatedData);
    return redirect()->route('adm-student.index')->with('success', 'Student updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Student $student)
  {
    $student->delete();
    return redirect()->route('adm-student.index')->with('success', 'Student deleted successfully.');
  }
}
