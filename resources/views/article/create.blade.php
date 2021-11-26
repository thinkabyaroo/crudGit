@extends('master')
@section('title')
    Create Article
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="my-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('article.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Article</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{old('title')}}">
                            @error('title')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category" class="form-select" id="">
                                @foreach(\App\Models\Category::all() as $c)
                                    <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-control" rows="5">{{old('description')}}</textarea>
                            @error('description')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary"> Create Article</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
