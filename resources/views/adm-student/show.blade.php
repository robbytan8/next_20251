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
                <h5 class="m-b-10">Student Data</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Student Management</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
              <div class="mb-3">
                <div
                  class="rounded-circle bg-primary d-inline-flex align-items-center justify-content-center text-white shadow"
                  style="width: 80px; height: 80px; font-size: 2rem;">
                  {{ strtoupper(substr($student->name, 0, 1)) }}
                </div>
              </div>
              <h5 class="card-title mb-1">{{ $student->name }}</h5>
              <p class="text-muted small">ID: {{ $student->id }}</p>
              <hr>
              <div class="text-start">
                <label class="text-muted small d-block">Address</label>
                <p class="fw-bold">{{ $student->address ?? '-' }}</p>

                <label class="text-muted small d-block">Status</label>
                <span class="badge {{ $student->studentClasses->count() > 0 ? 'bg-success' : 'bg-secondary' }}">
                  {{ $student->studentClasses->count() > 0 ? 'Active' : 'Inactive' }}
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3">
              <h6 class="mb-0 fw-bold text-primary">Academic Placement History</h6>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover mb-0">
                  <thead class="table-light">
                    <tr>
                      <th class="px-4">Academic Period</th>
                      <th>Class Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($student->studentClasses as $placement)
                      <tr>
                        <td class="px-4">
                          <div class="fw-bold">{{ $placement->period->name }}</div>
                        </td>
                        <td>
                          <span class="badge bg-light text-dark border px-3 py-2">
                            {{ $placement->class }}
                          </span>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="3" class="text-center py-5 text-muted">
                          <em>No academic records found for this student.</em>
                        </td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
@endsection

@section('CSS')
  <!-- Datatables -->
  <link href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"
    integrity="sha384-zmMNeKbOwzvUmxN8Z/VoYM+i+cwyC14+U9lq4+ZL0Ro7p1GMoh8uq8/HvIBgnh9+" crossorigin="anonymous">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('JS')
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha384-NXgwF8Kv9SSAr+jemKKcbvQsz+teULH/a5UNJvZc6kP47hZgl62M1vGnw6gHQhb1" crossorigin="anonymous"></script>
  <!-- Datatables -->
  <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"
    integrity="sha384-Xp3hrez5cC/Ot5PMHmF9GYnsdNaAC3NNSHFmTVlIrm853c+UWMLJfwmGkpWCmOLJ" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.min.js"
    integrity="sha384-G85lmdZCo2WkHaZ8U1ZceHekzKcg37sFrs4St2+u/r2UtfvSDQmQrkMsEx4Cgv/W" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#table-student').DataTable();
    });
  </script>

  <!-- Toastr JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
    toastr.options = {
      "closeButton": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
    };

    @if (session('success'))
      toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
      toastr.error("{{ session('error') }}");
    @endif
  </script>
@endsection
