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
                <h5 class="m-b-10">Period Data</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Period Management</li>
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
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h3>Period Data</h3>
              <a href="{{ route('adm-period.create') }}" class="btn btn-primary">Add Period</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="table-period">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($periods as $period)
                    <tr>
                      <td>{{ $period->id }}</td>
                      <td>{{ $period->name }}</td>
                      <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                            Delete
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
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
  <!-- Datatables -->
  <link href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"
        integrity="sha384-zmMNeKbOwzvUmxN8Z/VoYM+i+cwyC14+U9lq4+ZL0Ro7p1GMoh8uq8/HvIBgnh9+" crossorigin="anonymous">
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('JS')
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
          integrity="sha384-NXgwF8Kv9SSAr+jemKKcbvQsz+teULH/a5UNJvZc6kP47hZgl62M1vGnw6gHQhb1"
          crossorigin="anonymous"></script>
  <!-- Datatables -->
  <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"
          integrity="sha384-Xp3hrez5cC/Ot5PMHmF9GYnsdNaAC3NNSHFmTVlIrm853c+UWMLJfwmGkpWCmOLJ"
          crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.min.js"
          integrity="sha384-G85lmdZCo2WkHaZ8U1ZceHekzKcg37sFrs4St2+u/r2UtfvSDQmQrkMsEx4Cgv/W"
          crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#table-period').DataTable();
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

    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
  </script>

@endsection