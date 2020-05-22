@extends('layout/defaultpage')

@section('title', 'Student Detail')

@section('container')

<div class="container">
<div class="row">
<div class="col-6">
<h1 class="mt-4">Student Detail</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $student->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
    <p class="card-text">{{$student->jurusan}}</p>
    <!-- tampilan link : localhost/student/id/edit -->
    <a href="{{$student->id}}/edit" class="btn btn-info">Edit</a>

    <form action="/students/{{$student->id}}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/students" class="btn btn-secondary">Back</a>
  </div>
</div>
</div>
</div>
</div> 

@endsection