@extends('app')
@section('title','List Image')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>List Image</h1>
        </div>
    </div>

    <div class="row mt-3">
        @foreach ($person->images as $p)
        <div class="col-md-4">
            <div class="card text-center mb-2">
                <div class="card-header">
                    {{$person->nama}}
                </div>
                <div class="card-body">
                    <img src="/images/{{$person->nama . '/'. $p->image}}"  id="default" width="300px" >
                </div>
                <div class="card-footer text-muted">
                    {{$p->created_at->diffForHumans()}}
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection