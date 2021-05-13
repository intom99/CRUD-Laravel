@extends('layout.main')

@section('title', 'Detail')

@section('container')
      <div class="container">
          <div class="row">
              <div class="col-6">
                  <h1 class="mt-3 mb-3">Detail Employee</h1>

                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$employee->nama}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$employee->nip}}</h6>
                      <p class="card-text">{{$employee->email}}</p>
                      <p class="card-text">{{$employee->jabatan}}</p>
                     
                      <button type="submit" class="btn btn-primary">Edit</button>
                      <form action="{{$employee->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3 mr-3">Delete</button>
                      </form>
                      <a href="/employees" class="card-link">Back</a>
                    </div>
                  </div>
                                  
                 
              </div>
          </div>
      </div>
@endsection
