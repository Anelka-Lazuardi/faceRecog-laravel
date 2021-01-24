@extends('app')
@section('title','Create Person')
@section('content')
<div class="container mt-4">
   <div class="row">
       <div class="col-md-12 text-center">
           <h1>Face Recognition Demo</h1>
       </div>
   </div>
 
   <div class="face" id="dd">
     
        <video id="video" width="720" height="560" autoplay muted></video>
       {{-- </div> --}}
   </div>
</div>
{{-- <video id="video" width="720" height="560" autoplay muted></video> --}}
@endsection