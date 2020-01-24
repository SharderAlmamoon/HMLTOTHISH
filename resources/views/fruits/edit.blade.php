@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT_PAGE</title>
</head>
<body>
<h1 align="center" style="font-family: Verdana;font-size: 40px;color: chocolate;">EDITE_PAGE HERE!</h1>

<form action="{{url('fruitspage/edited',$all->id)}}" method="post">
{{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
    @csrf
{{--    <input type="hidden" name="_method" value="put">--}}
    @method('put')
    <label for="">NAME</label>
    <input type="text" name="name" value="{{$all->name}}">
    <br><br><br>
    <label for="">PRICE</label>
    <input type="text" name="price" value="{{$all->price}}">
    <br><br><br>
    <label for="">DETAILS</label>
    <textarea name="details" id="" cols="30" rows="10">{{$all->details}}</textarea>
    <br><br><br>
    <button type="submit">EdItEd</button>
</form>
</body>
</html>
