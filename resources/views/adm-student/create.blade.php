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
                <h5 class="m-b-10">Student Form</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Student Management</li>
                <li class="breadcrumb-item" aria-current="page">New Student Form</li>
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
            <div class="card-body">
              <form method="post" action="{{ route('adm-student.store') }}">
                @csrf
                <div class="form-group mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control" id="id" name="id" maxlength="10" required autofocus placeholder="e.g., 123456789" value="{{ old('id') }}">
                </div>
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" maxlength="100" required placeholder="e.g., John Doe" value="{{ old('name') }}">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea type="text" class="form-control" id="address" name="address" maxlength="300" required rows="2" placeholder="e.g. Surya Sumantri St. 65">{{ old("address") }}</textarea>
                </div>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                  <label for="birth_date" class="form-label">Birth Date</label>
                  <input type="date" class="form-control" id="birth_date" name="birth_date" required value="{{ old('birth_date') }}">
                </div>
                @error('birth_date')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group mb-3">
                  <label for="photo" class="form-label">Profile Photo</label>
                  <input type="file" class="form-control" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg">
                </div>
                @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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