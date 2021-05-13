@extends('layout.main')

@section('title', 'Create')

@section('container')
      <div class="container">
          <div class="row">
              <div class="col-6">
                  <h1 class="mt-3 mb-3">Detail Employee</h1>


                  <form method="POST" action="/employees">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="input nama" value="{{old('nama')}}">
                      @error('nama') <div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">NIP</label>
                      <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="input nip" value="{{old('nip')}}">
                       @error('nip') <div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="input email" value="{{old('email')}}">
                      @error('nip') <div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Jabatan</label>
                      <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="input jabatan" value="{{old('jabatan')}}">
                      @error('nip') <div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    
                  </form>
                                                  
                 
              </div>
          </div>
      </div>
@endsection
