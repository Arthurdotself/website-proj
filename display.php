<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        table,td{
            border: solid black 1px;
        }
 

    </style>

</head>
<body>
<div class="mx-auto" style="width: 100px;">
  All products
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <table class="table table-dark"  >
    <thead >
        <tr>
            <td> ID</td>
            <td> Product name</td>
            <td> Price</td>
            <td> Edit</td>
            <td> Delete</td>
        </tr>
    </thead>

<?php
$sql = "select * from prodacts";
$result = mysqli_query($conn,$sql);
while($row =mysqli_fetch_assoc($result)){
    echo '
    <tr>
      <td>'.$row['ID'].'</td>
      <td>'.$row['pname'].'</td>
      <td>'.$row['price'].'</td>
      <td><a class="btn btn-success" href= "update.php?id='.$row['ID'].' ">Edit</a></td>
      <td><a class="btn btn-danger" href= "Delete.php?id='.$row['ID'].' ">Delete</a></td>
    </tr>
    ';
}
?>

</table>

    <div style="  position:fixed; left:1%;" >
        <br> <a class="btn btn-dark" href ="insert.php">Add product</a><br>
    </div>

<div class="mx-auto " style="width: 300px;  left:45%;  bottom:0px; position:fixed  " >
by Mustafa Al-sharif
</div>
</body>
</html>