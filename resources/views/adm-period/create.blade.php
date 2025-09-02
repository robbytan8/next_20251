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
                <h5 class="m-b-10">Period Form</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Period Management</li>
                <li class="breadcrumb-item" aria-current="page">New Period Form</li>
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
              <form method="post" action="{{ route('adm-period.store') }}">
                @csrf
                <div class="form-group mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" maxlength="100" required placeholder="e.g., 2025-2026" value="{{ old('name') }}">
                </div>
                @error('name')
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