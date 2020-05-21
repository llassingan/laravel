@extends('layout/defaultpage')

@section('title', 'Add New Student')

@section('container')

<div class="container">
<div class="row">
<div class="col-8">
<h1 class="mt-4">Add New Student</h1>

<form method="post" action="/students">
@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Enter Your Name">
    @error('nama') 
    <div class="invalid-feedback">{{$message}}
    </div>
    @enderror
  </div>
  
  
  <div class="form-group">
    <label for="formGroupExampleInput2">NIM</label>
    <input type="text" class="form-control @error ('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Enter Your NIM">
    @error('nim') 
  <div class="invalid-feedback">{{ $message }}
  </div>
  @enderror
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Major</label>
    <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" id="major" name="jurusan" placeholder="Enter Your Major">
    @error('jurusan') 
    <div class="invalid-feedback">{{ $message }}
    </div>
    @enderror
  </div>
  @error('jurusan') 
  <div class="invalid-feedback">{{$message}}
  </div>
  @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
</div> 

@endsection