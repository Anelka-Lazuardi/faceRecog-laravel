@extends('app')
@section('title','Create Person')
@section('content')
<div class="container mt-4">
    <form method="post" action="{{route('createPerson')}}">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Person Name</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection