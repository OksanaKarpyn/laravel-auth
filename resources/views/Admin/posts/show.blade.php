@extends('layouts.appDashboard')
@section('content')
<div class="container">
    <div class="row">
        <a class="text-decoration-none mb-4" href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-arrow-left fs-1"></i></a>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post['title']}}</h5>
                  <p class="card-text">{{$post['content']}}</p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection