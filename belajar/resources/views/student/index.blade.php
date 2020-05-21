@extends('layout/defaultpage')

@section('title', 'Students List')

@section('container')

<div class="container">
<div class="row">
<div class="col-6">
<h1 class="mt-4">Students List</h1>

<!-- succes message -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<a href="/students/create" class="btn btn-primary my-3">Add Data</a>
<ul class="list-group">
  @foreach($students as $s)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $s->nama }}
    <!--  disini nge link ke page student yang akan emnampilkan detaill dari student, sleanjutnya akan di
    kerjakan oleh route ke controller dan method yang sesuai -->
    <a href="/students/{{ $s->id }}" class="badge badge-info">Detail</a>
  </li>
  @endforeach
</ul>
</div>
</div>
</div> 

@endsection