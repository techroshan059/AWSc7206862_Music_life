<?php include_once 'includes/header.php'?>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = ("INSERT INTO users (email,password)
		VALUES ( '.$email.','.$password.')");

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Please sign in</h3>
            </div>
              <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="POST" action="loginform.php">
                        <fieldset>
                    <div class="form-group">
                     <label>Email Address <span style="color:red">**</span></label>
                      <input class="form-control" placeholder="E-mail" name="email" type="text" require>
                  </div>
                  <div class="form-group">
                  <label>Password<span style="color:red">**</span></label>
                    <input class="form-control" placeholder="Password" name="password" type="password" require>
                  </div>
                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                </fieldset>
                  </form>
              </div>
          </div>
        </div>
    </div>
  </div>


<hr/>
         


<?php include_once 'includes/footer.php'?>
