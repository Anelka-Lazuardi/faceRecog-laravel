@extends('app')
@section('title','New Image')
@section('content')
<div class="container mt-4">
    <form method="post" action="{{route('addImage')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$person->id}}" name="personID">
        <div class="card text-center mb-2">
            <div class="card-header">
                {{$person->nama}}
            </div>
            <div class="card-body">
                <img src="/images/default.png"  id="default" width="300px" >
            </div>
            <div class="card-footer text-muted">
              New Photo
            </div>
          </div>
        <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="image" id="no-image">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection