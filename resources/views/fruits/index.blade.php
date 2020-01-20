<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits_Table</title>
</head>
<body>
    <h1 align="center" style="font-family: Verdana;font-size: 40px;color: chocolate;">FACE ALL FRUITS TABLE!</h1>
    <br><br><br>
    <a href="{{url('fruitspage/create')}}" style="color: yellow;float: right;padding: 5px 10px;
    border: 1px solid chartreuse;background-color: blue;text-decoration: none;margin-right: 200px;">CLICK_INSERT</a>
    <br><br><br>

<table border="2" cellpadding="10">
  <tr style="background-color: #636b6f;color: white;font-family: Verdana;">
      <th>ID</th>
      <th>NAME</th>
      <th>PRICE</th>
      <th>DETAILS</th>
      <th>OPTION</th>
  </tr>

    @foreach($all as $fruits)
    <tr>
        <td style="font-family: cursive;background-color: chocolate;color: white;">{{$fruits->id}}</td>
        <td style="color: black;font-family: 'Times New Roman';background-color: aqua;">{{$fruits->name}}</td>
        <td style="background-color: orangered;color: yellow;">{{$fruits->price}}</td>
        <td style="background-color: bisque;color: darkblue;">{{$fruits->details}}</td>
        <td>
            <a href="{{url('fruitspage/edit',$fruits->id)}}">EDIT!</a>
            ||
            <form action="{{url('fruitspage/delete',$fruits->id)}}" method="post">
{{--                <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--                <input type="hidden" name="_method" value="delete">--}}
                @csrf
                @method('delete')
                <button type="submit" style="border: 1px solid red;">DeLeTe</button>
            </form>
        </td>
    </tr>
        @endforeach
</table>
</body>
</html>
