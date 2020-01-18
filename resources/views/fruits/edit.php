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

<form action="<?php echo url('fruitspage/edited',$all->id)?>">
    <label for="">NAME</label>
    <input type="text" name="name" value="<?php echo $all->name?>">
    <br><br><br>
    <label for="">PRICE</label>
    <input type="text" name="price" value="<?php echo $all->price?>">
    <br><br><br>
    <label for="">DETAILS</label>
    <textarea name="details" id="" cols="30" rows="10"><?php echo $all->details?></textarea>
    <br><br><br>
    <button type="submit">EdItEd</button>
</form>
</body>
</html>
