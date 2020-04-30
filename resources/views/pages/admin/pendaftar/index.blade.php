@extends('layouts.admin')
@section('title')
  Pendaftar | BakeBlog
@endsection
@section('content')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary bg-img-repeat" style="background-image: url('{{ url('backend/assets/img/pattern-shapes.png')}}');">
  <div class="container-fluid">
      <div class="page-header-content">
          <h1 class="page-header-title">
              <div class="page-header-icon"><i data-feather="filter"></i></div>
              <span>Data Pendaftar</span>
          </h1>
          <div class="page-header-subtitle">An extended version of the DataTables library, customized for SB Admin Pro</div>
      </div>
  </div>
</div>
<div class="container-fluid mt-n10">
  <div class="card mb-4">
      <div class="card-header">Extended DataTables</div>
      <div class="card-body">
          <div class="datatable table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td><div class="badge badge-primary badge-pill">Full-time</div></td>
                          <td>
                              <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i>
                              </a>
                              <a class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i class="fa fa-pencil-alt"></i>
                              </a>
                              <button class="btn btn-datatable btn-icon btn-transparent-dark" onclick="return confirm('Yakin ingin hapus data ini?')"><i data-feather="trash-2"></i>
                              </button>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
@endsection
@push('prepend-style')
  <link href="{{ url('backend/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endpush
@push('prepend-script')
  <script src="{{ url('backend/cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ url('backend/cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
  <script src="{{ url('backend/assets/demo/datatables-demo.js') }}"></script>
@endpush
