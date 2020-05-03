@extends('layouts.admin')
@section('title')
  Extrakulikuler | BakeBlog
@endsection
@section('content')
<div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary bg-img-repeat" style="background-image: url('{{ url('backend/assets/img/pattern-shapes.png')}}');">
  <div class="container-fluid">
      <div class="page-header-content">
          <h1 class="page-header-title">
              <div class="page-header-icon">
                <i data-feather="filter"></i>
              </div>
              <span>Data Exstrakulikuler</span>
          </h1>
          <div class="page-header-subtitle">Data jurusan ini akan ditampilkan pada Frontend Website
          </div>
      </div>
  </div>
</div>
<div class="container-fluid mt-n10">
  <div class="row">
    <div class="col-lg-6">
      <div class="card mb-4">
        <div class="card-header">Tambah Exstrakulikuler</div>
        <div class="card-body">
            <div class="sbp-preview">
              <div class="sbp-preview-content">
                <form action="{{route('eskul.store')}}" method="POST">
                  @csrf
                  <div class="form-group ">
                    <label for="eskul">Exstrakulikuler *</label>
                    <input class="form-control shadow-right {{$errors->has('eskul') ? ' border-danger' : ''}}" id="eskul" name="eskul" type="text" value="{{old('eskul')}}" placeholder="Enter exstrakulikuler...">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                          <span class="text-danger">{{$error}}</span> 
                        @endforeach
                    @endif
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-sm shadow-lg">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card mb-4">
        <div class="card-header">Data Exstrakulikuler</div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Extrakulikuler</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Extrakulikuler</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->eskul}}</td>
                          <td>
                            <form action="{{route('eskul.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-datatable btn-icon btn-transparent-dark" onclick="return confirm('Yakin ingin hapus data ini?')"><i data-feather="trash-2"></i>
                            </button>
                            </form>
                          </td>
                        </tr>
                        @empty
                          <tr>
                            <td colspan="3" class="text-center">Data Exstrakulikuler Kosong</td>
                          </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('prepend-style')
<link href="{{ url('toastr/build/toastr.css')}}" rel="stylesheet"/>
@endpush
@push('prepend-script')
<script src="{{ url('toastr/toastr.js')}}"></script>
<script>
  @if(Session::has('sukses'))
  toastr.success("Sukses! {{Session::get('sukses')}}")  
  @endif
  @if(Session::has('error'))
  toastr.error("Error! {{Session::get('error')}}")  
  @endif
  @if(Session::has('warning'))
  toastr.warning("Warning! {{Session::get('warning')}}")  
  @endif
</script>
@endpush