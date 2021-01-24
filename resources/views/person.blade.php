@extends('app')
@section('title','Person')
@section('content')
<div class="container mt-4">
    @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
     @endif
    <table class="table " id="table_person">
        <thead class="text-center thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Photos</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($persons as $p)
            <tr>
                <th scope="row">{{$p->nama}}</th>
                <td>{{count($p->images)}}</td>
                <td>
                  @if (count($p->images) < 2)
                    <a type="button" class="btn btn-info" href="/newImage/{{$p->id}}">New Photo</a>
                  @endif
                    <a type="button" class="btn btn-success" href="/listImage/{{$p->id}}">List Photo</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection