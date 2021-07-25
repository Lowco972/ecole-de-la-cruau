 @extends('layouts.index')
 @section('content') 
 <div class="card">
    <div class="col mb-5">
        @foreach ($posts as $post )
        <div class="card-body shadow p-3 mb-5 bg-white rounded">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">
                {{$post->description}}
            </p>
            <small class=" text-muted">{{$post->autor}}</small>
        
            <a href="{{route('article.show', $post->id)}}" class="btn btn-info float-right ">More</a>
            {{-- <a class="like btn btn-primary float-right mr-3 clicks" onclick="click()">like: 0</a> --}}
        </div>
        @endforeach
    </div>

 </div>
 @endsection