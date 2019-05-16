<?php include_once('includes/header.php') ?>
<?php include_once('config/config.php') ?>

<?php
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		
	
		$sql = ("INSERT INTO users (username, email,password)
		VALUES ( '$username', '$email','$password')");
		
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			ini_set( 'display_errors', 1 );
           error_reporting( E_ALL );
           $from = "susma'chaudhary04@gmail.com";
           $to = $email;
           $subject = "Checking PHP mail";
           $message = "PHP mail works just fine";
		   $headers = "From:" . $from;
		//    "From: root@localhost.com
		   echo(mail($to,$subject,$message, $headers));
           if(mail($to,$subject,$message, $headers))
			   echo "The email message was sent.";
			else echo "the mail wasnot sent";
			header('Location: login.php');          
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
        <div class="row justify-content-center mt-5">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="POST">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			                <input type="text" id="username" class="form-control input-sm" placeholder="username" name="username" required>
			    					</div>
			    				</div>
								</div>
			    			
		
								<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    			<div class="form-group">
			    		<input type="email"  id="email" class="form-control input-sm" placeholder="Email Address" name="email" required>
			    			</div>
							</div>
							</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password"  id="password" class="form-control input-sm" placeholder="Password" name="password" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password"  id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password"  name="password_confirmation" required>
			    					</div>
			    				</div>
			    			</div>
							
			    			<input type="submit" value="Register" name="register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	
<hr/>
           


	<script type="text/javascript">
         function Register()
    {
        
        var username= document.forms[0].elements[0].value;
        var email = document.forms[0].elements[1].value;
        var password = document.forms[0].elements[2].value;
        var confirmpassword = document.forms[0].elements[3].value;

        var y = "@";
            var z=".";
            if(email.indexOf(y)== -1)
                {
                    alert("Email must contain @");
                    document.forms[0].elements[1].focus();
                    return false;
                }
             if(email.indexOf(z)== -1)
                {
                    alert("Email must contain  . ");
                    document.forms[0].elements[1].focus();
                    return false;
                }

                var num = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@#$%&";
                for (var j =0; j < pass.length; j++)
                        {
                            var ch = pass.charAt(j);
                            if (num.indexOf (ch)!= -1)
                                {
                                    continue;
                                }
                                else
                                {
                                 alert(" password Should consists of at least one capital letter, a number and a symbol ");
                                    document.forms[0].elements[2].focus();
                                    return false;
                                }
                        }
                        
                        if (document.forms[0].elements[2].value != document.forms[0].elements[3].value)
                            {
                                alert("Password don't match,Re-enter!!");
                                document.forms[0].elements[3].focus();
                                return false;
                            }
        
            return true;
        }
        
    </script>

	
	

<?php include_once('includes/footer.php') ?>