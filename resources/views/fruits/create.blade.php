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
<form action="{{url('fruitspage/store')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label for="">NAME</label>
    <input type="text" name="name" placeholder="enter fruits name">
    <br><br><br>
    <label for="">PRICE</label>
    <input type="text" placeholder="enter price" name="price">
    <br><br><br>
    <label for="">DETAILS</label>
    <textarea name="details" id="" cols="30" rows="10"></textarea>
    <br><br><br>
    <button type="submit">StOrE</button>
</form>
</body>
</html>
