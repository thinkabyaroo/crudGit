
@extends('admin')
@section('title')
    Article List
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h4 class="text-center">Article Show</h4>
            <div class="col-12 col-lg-8">
                <div class="my-5">
                    @foreach($articles as $article)
                        <div class="card">
                            <div class="card-body">
                                <h4>{{$article->title}}</h4>
                                <div class="badge bg-dark">{{$article->category->title}}</div>
                                <p>{{Str::words($article->description,20)}}</p>
                                <a href="{{route('article.show',$article->id)}}" class="btn btn-outline-warning">See More</a>
                                <a href="{{route('article.edit',$article->id)}}" class="btn btn-outline-success">Edit</a>
                                <form action="{{route('article.destroy',$article->id)}}" class="d-inline-block" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
