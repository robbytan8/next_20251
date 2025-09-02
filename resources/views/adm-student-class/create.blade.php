@extends('layouts.admin.master')

@section('content')
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Student Class Form</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Student Class Management</li>
                <li class="breadcrumb-item" aria-current="page">New Class Management Form</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ page ] start -->
        <div class="col-sm-12">
          @if ($errors->has('err_msg'))
            <div class="alert alert-danger">
              {{ $errors->first('err_msg') }}
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form method="post" action="{{ route('adm-sclass.store') }}">
                @csrf
                <div class="form-group mb-3">
                  <label for="period_id" class="form-label">ID</label>
                  <select class="form-select" id="period_id" name="period_id" required>
                    <option value="" disabled selected>-- Select Period --</option>
                    @foreach($periods as $period)
                      <option value="{{ $period->id }}" {{ old('period_id') == $period->id ? 'selected' : '' }}>
                        {{ $period->name }}
                      </option>
                    @endforeach
                  </select>
                  @error('period_id')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <table class="table" id="placements-table">
                  <thead>
                  <tr>
                    <th>Student</th>
                    <th>Class</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <select name="placements[0][student_id]" class="form-select" required>
                        <option value="" disabled selected>-- Select Student 1 --</option>
                        @foreach($students as $student)
                          <option value="{{ $student->id }}">{{ $student->id }}  -  {{ $student->name }}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <input type="text" name="placements[0][class]" class="form-control" required placeholder="Enter Class">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <select name="placements[1][student_id]" class="form-select">
                        <option value="" selected>-- Select Student 2 --</option>
                        @foreach($students as $student)
                          <option value="{{ $student->id }}">{{ $student->id }}  -  {{ $student->name }}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <input type="text" name="placements[1][class]" class="form-control" placeholder="Enter Class">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <select name="placements[2][student_id]" class="form-select">
                        <option value="" selected>-- Select Student 3 --</option>
                        @foreach($students as $student)
                          <option value="{{ $student->id }}">{{ $student->id }} - {{ $student->name }}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <input type="text" name="placements[2][class]" class="form-control" placeholder="Enter Class">
                    </td>
                  </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <!-- [ page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
@endsection

@section('CSS')

@endsection

@section('JS')

@endsection