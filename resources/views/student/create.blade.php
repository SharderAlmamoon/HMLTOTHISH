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
    <title>CREATE_PAGE</title>
</head>
<body>
<h1 align="center" style="font-family: Verdana;font-size: 40px;color: chocolate;">PUT FRUITS NAME AND INSERT!</h1>
<!--FORM-->
<form action="{{url('student/store')}}" method="post">
    {{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
    @csrf
    <label for="">NAME</label>
    <input type="text" name="name" placeholder="Student Name" value="{{old('name')}}">
    <br><br><br>
    <label for="">DATE_OF_BIRTH</label>
    <input type="date" placeholder="DATE OF BIRTH" name="date_of_birth" value="{{old('price')}}">
    <br><br><br>
    <label for="">PHONE</label>
    <input type="text" name="phone" placeholder="ENTER PHONE" value="{{old('name')}}">
    <br><br><br>
    <label for="">EMAIL</label>
    <input type="email" placeholder="ENter your mail" name="email" value="{{old('email')}}">
    <br><br><br>
    <button type="submit">StOrE</button>
</form>
</body>
</html>
