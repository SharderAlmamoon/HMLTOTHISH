<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table_create</title>
</head>
<body>
<form action="<?php echo url('tableview/store')?>">
    <label for="">ENTER TITLE!</label>
    <input type="text" name="titleis">
    <label for="">ENTER BODYIS!</label>
    <input type="text" name="bodyis">
    <label for="">ADDRESSIS!</label>
    <textarea name="addressis" id="" cols="30" rows="10"></textarea>
    <button type="submit">Store</button>
</form>
</body>
</html>
