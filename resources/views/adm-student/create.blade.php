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
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <form method="post" action="{{ route('adm-student.store') }}">
                @csrf
                <div class="form-group mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" maxlength="10" required autofocus placeholder="e.g., 123456789" value="{{ old('id') }}">
                  @error('id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" maxlength="100" required placeholder="e.g., John Doe" value="{{ old('name') }}">
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="address" class="form-label">Address</label>
                  <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" maxlength="300" required rows="2" placeholder="e.g. Surya Sumantri St. 65">{{ old("address") }}</textarea>
                  @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="birth_date" class="form-label">Birth Date</label>
                  <input type="date" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" required value="{{ old('birth_date') }}">
                  @error('birth_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label for="photo" class="form-label">Profile Photo</label>
                  <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg">
                  @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
@endsection

@section('CSS')

@endsection

@section('JS')

@endsection