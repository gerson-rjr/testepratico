@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card-body">
        <form action="/home" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <input type="submit" value="Upload">
        </form>
    </div> 
</div>
@endsection
