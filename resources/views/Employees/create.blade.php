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
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="input nama">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">NIP</label>
                      <input type="text" class="form-control" id="nip" name="nip" placeholder="input nip">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="input email">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="input jabatan">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    
                  </form>
                                                  
                 
              </div>
          </div>
      </div>
@endsection
