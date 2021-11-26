@extends('master')
@section('title')
    Create Category
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="my-5">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary"> Create Category</button>
                        </div>
                    </form>
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>

@endsection
