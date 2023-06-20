@extends('layouts.appDashboard')
@section('content')

    <div class="container">
        <div class="row">
       
            @forelse ($posts as $elem)
            <div class="col-4 d-flex my-4">
            <a href="{{ route('admin.posts.show',$elem)}}">
              <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$elem['title']}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$elem['type']}}</h6>
                  <p class="card-text">{{$elem['content']}}</p>
                  <p class="card-text">{{$elem['price']}}</p>
        
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </a>
            </div>
            @empty
                <h2>non ci sono elementi</h2>
            @endforelse   
           
        </div>
    </div>
@endsection