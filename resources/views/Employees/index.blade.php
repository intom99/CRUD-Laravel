@extends('layout.main')

@section('title', 'Pegawai')

@section('container')
      <div class="container">
          <div class="row">
              <div class="col-6">
                  <h1 class="mt-3 mb-3">Employees List</h1>
                  <a href="/employees/create" class="btn btn-primary my-3"> Create</a>

                  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

                                  
                  <ul class="list-group">
                      @foreach( $employees as $row)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{ $row->nama}}
                     
                      <a href="/employees/{{$row->id}}" class="badge badge-info">Detail</a>
                    </li>
                   @endforeach
                  </ul>

              </div>
          </div>
      </div>
@endsection
