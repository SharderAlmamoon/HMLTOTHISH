<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <h1 align="center">UPDATE PAGE HERE</h1>
    <br><br><br>
    <form action="<?php echo url('tableview/update',$pp->id)?>">
        <label for="">TITLEIS!</label>
        <input type="text" value="<?php echo $pp->titleis?>" name="titleis">
        <br><br>
        <label for="">BODYIS!</label>
        <input type="text" value="<?php echo $pp->bodyis?>" name="bodyis">
        <br><br>
        <label for="">ADDRESS!</label>
        <textarea name="addressis" id="" cols="30" rows="10"><?php echo $pp->addressis?></textarea>
        <br><br>
        <button type="submit">UpDaTe!</button>
    </form>
</body>
</html>
