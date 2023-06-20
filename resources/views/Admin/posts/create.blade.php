@extends('layouts.appDashboard')
@section('content')
<h2>paggina create</h2>
<div class="container">
<form action="{{route('admin.posts.update')}}" method="POST">
    @csrf
    <div class="form-control">
        
    </div>
</form>
</div>
@endsection