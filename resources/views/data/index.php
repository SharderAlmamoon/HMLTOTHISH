<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table</title>
</head>
<body>
<a href="<?php echo url('view/create')?>">CLICKE_STORE</a>
<br><br><br><br>
<table border="2" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PASSWORD</th>
        <th>DOCUMENT</th>
        <th>OPTION</th>
    </tr>
    <?php foreach ($viewon as $ss){?>
    <tr>
        <td><?php echo $ss->id?></td>
        <td><?php echo $ss->name?></td>
        <td><?php echo $ss->email?></td>
        <td><?php echo $ss->document?></td>
        <td>
            <a href="<?php echo url('view/update',$ss->id)?>">EDIT</a>
            ||
            <a href="<?php echo url('view/delete',$ss->id)?>">DELETE</a>
        </td>
    </tr>
    <?php }?>
</table>

</body>
</html>
