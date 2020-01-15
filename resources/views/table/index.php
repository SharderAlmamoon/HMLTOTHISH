<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>table_view</title>
</head>
<body>
   <h1 align="center">TABLE VIEW</h1>
   <a href="<?php echo url('tableview/create')?>">CLICK HERE!</a>
   <br><br><br><br><br><br>

<table border="2" cellpadding="10">
   <tr align="center">
       <th>ID</th>
       <th>TITLES</th>
       <th>BODYIS</th>
       <th>ADDRESSIS</th>
       <th>OPTION!</th>
   </tr>
    <?php foreach ($view as $pp) {?>
 <tr align="center">
    <td><?php echo $pp->id?></td>
    <td><?php echo $pp->titleis?></td>
    <td><?php echo $pp->bodyis?></td>
    <td><?php echo $pp->addressis?></td>
  <td>
      <a href="<?php echo url('tableview/edit',$pp->id)?>">EDIT</a>
      || <br><br>
      <a href="<?php echo url('tableview/delete',$pp->id)?>">DELETE</a></td>

 </tr>
    <?php }?>
</table>

</body>
</html>
