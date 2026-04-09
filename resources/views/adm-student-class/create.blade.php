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
                <div class="form-group mb-4">
                  <label for="period_id" class="form-label fw-bold">Period ID</label>
                  <select class="form-select select2-init" id="period_id" name="period_id" required>
                    <option value="" disabled selected>-- Select Period --</option>
                    @foreach ($periods as $period)
                      <option value="{{ $period->id }}">{{ $period->name }}</option>
                    @endforeach
                  </select>
                </div>

                <table class="table align-middle" id="placements-table">
                  <thead class="table-light">
                    <tr>
                      <th style="width: 60%;">Student</th>
                      <th>Class</th>
                      <th style="width: 50px;"></th>
                    </tr>
                  </thead>
                  <tbody id="table-body">
                    <tr>
                      <td>
                        <select name="placements[0][student_id]" class="form-select select2-init" required>
                          <option value="" disabled selected>-- Select Student --</option>
                          @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->id }} - {{ $student->name }}</option>
                          @endforeach
                        </select>
                      </td>
                      <td>
                        <input type="text" name="placements[0][class]" class="form-control @error('placements.0.class') is-invalid @enderror" required placeholder="Ex: 10-A" value="{{ old('placements.0.class') }}">
                        @error('placements.0.class')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>

                <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="add-row">
                  <i class="bi bi-plus"></i> + Add Row
                </button>

                <div class="border-top pt-3">
                  <button type="submit" class="btn btn-primary px-4">Save All Data</button>
                </div>
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet">
@endsection

@section('JS')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      function initSelect2(element) {
        $(element).select2({
          theme: 'bootstrap-5',
          width: '100%',
          placeholder: $(element).data('placeholder'),
        });
      }

      $('.select2-init').each(function() {
        initSelect2(this);
      });

      let rowIndex = 1;

      $('#add-row').click(function() {
        let newRow = `
            <tr>
                <td>
                    <select name="placements[${rowIndex}][student_id]" class="form-select select2-dynamic" required>
                        <option value="" disabled selected>-- Select Student --</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->id }} - {{ $student->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" name="placements[${rowIndex}][class]" class="form-control @error('placements[${rowIndex}][class]') is-invalid @enderror" required placeholder="Ex: 10-A">
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm remove-row">×</button>
                </td>
            </tr>`;

        $('#table-body').append(newRow);

        initSelect2($(`select[name="placements[${rowIndex}][student_id]"]`));

        rowIndex++;
      });

      $(document).on('click', '.remove-row', function() {
        $(this).closest('tr').remove();
      });
    });
  </script>
@endsection
