<?php
include_once('connect.php');
$pid = $_GET['id'];
$sql = "select * from prodacts where id = '$pid'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['submit'])){
    $pname = htmlspecialchars($_POST['pname']);
    $price = htmlspecialchars($_POST['price']);

    $sql = "update prodacts set pname = '$pname', price= '$price' where id = '$pid'";
    $result = mysqli_query($conn,$sql);
    if($result) {
        header('location:display.php');
    }else {
       echo $result ;
    }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <form method = "post" style=" width: 400px ; position:fixed; left:1%;">
    <div class="form-group">
       <label for="pname">Name:</label>
       <input type="text" class="form-control" name="pname"  aria-describedby="emailHelp" placeholder="Enter name"  value="<?php echo $row['pname'] ?>" >
    </div>
     <div class="form-group">
       <label for="price">Price:</label>
       <input type="number" class="form-control" name="price"  aria-describedby="emailHelp" placeholder="Enter price"  value="<?php echo $row['price'] ?>" >
       <small  class="form-text text-muted">the price shoud be in  US dollar</small>
    </div>
       <input class="btn btn-primary"style=" width: 100px; "type="submit" name="submit" value="Update">
      </form>
      <div class="mx-auto " style="width: 300px;  left:45%;  bottom:0px; position:fixed  " >
by Mustafa Al-sharif
</div>
    </body>
</html>