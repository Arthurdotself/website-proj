<?php include_once('connect.php');

if(isset($_POST['submit'])){
    $email = htmlspecialchars($_POST['email']);
    $Password = htmlspecialchars($_POST['password']);
    $Password1 = htmlspecialchars($_POST['password1']);
    $sql = "INSERT INTO users (email, password )
    VALUES ('$email', '$Password' )";
     $result = mysqli_query($conn,$sql);
    if($result) {
       header('location:index.php');
     }else {
      echo "something went wrong" ;
     }
  
  }
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
  <style>

.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))

}

</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50 mb-5">Please enter your email and password!</p>
<form method='post'>
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" name='email'class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name='password' class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name='password1' class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Re-write Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5"name="submit" type="submit">SIGN UP</button>
            </div>
</form>
            <div>
              <p class="mb-0">Have already an account? <a href="index.php" class="text-white-50 fw-bold">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>