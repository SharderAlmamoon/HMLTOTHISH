<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updatte</title>
</head>
<body>
<h1 align="center">UPDATE TABLE!</h1>
<form action="<?php echo url('view/edit',$stmp->id)?>">
    <label for="">NAME!</label>
    <input type="text" value="<?php echo $stmp->name?>" name="name">
    <br><br>
    <label for="">EMAIL</label>
    <input type="email" value="<?php echo $stmp->email?>" name="email">
    <label for="">Document</label>
    <input type="text" value="<?php echo $stmp->document?>" name="document">
    <br><br>
    <button type="submit">UpDaTe</button>
</form>
</body>
</html>
