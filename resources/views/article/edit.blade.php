<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
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
                <form action="{{route('article.update',$article->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="" class="form-label">Article</label>
                        <input type="text" class="form-control" name="title" value="{{old('title',$article->title)}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category" class="form-select" id="">
                            @foreach(\App\Models\Category::all() as $c)
                                <option value="{{$c->id}}" {{$c->id==$article->category_id?'selected':''}}>{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control" rows="5">{{$article->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-primary"> Update Article</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
</html>
