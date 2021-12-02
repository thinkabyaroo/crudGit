@extends('admin')
@section('title')
    Photo Upload
@stop
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-lg-4">
                <form action="{{route('photo.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Photo Upload</label>
                        <input type="file" class="form-control" accept="image/jpeg" name="photo[]" multiple>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-primary">Upload</button>

                    </div>
                </form>
                {{asset('storage/images/nFxTFuFviAePPv5ppFqVXp6W3Z25uBQY8ngsUtI2.jpg')}}

            </div>
        </div>
    </div>
@stop
