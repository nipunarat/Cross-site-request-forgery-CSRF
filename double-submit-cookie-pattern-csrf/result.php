<?php
echo '<h5>checking login credentials</h5>';
if(isset($_POST['username'],$_POST['password'])){
    echo '<h5>associate array succeded in getting values</h5>';
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'testing123'){
		echo '<h1>Logged in successfully</h1>';
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+ 60*60 ,'/');
        setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60 ,'/');
        echo '<h5>session started</h5>';
        echo '<h5>sessionCookie & csrfTokenCookie is set</h5>';
		
	}else{
		echo '<h1>Invalid Credentials</h1>';
		exit();
    }
    
}
else{
    echo '<h1>function failed to access values in "POST" associate array</h1>';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var cookie_value = "";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
	var csrf = decodedCookie.split(';')[2]
	// alert(decodedCookie)
	if(csrf.split('=')[0] = "csrfTokenCookie" ){
		// alert(csrf.split('csrfTokenCookie=')[1])
		cookie_value = csrf.split('csrfTokenCookie=')[1];
		document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;
	}
	});

    </script>

  <head>
	<body>
		<div class="container login-container">
        <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">

                    <h3></h3>
                    <form class="login-form-1" action="home.php" method="post">
                        `<div class="form-group">
                                <input type="text" name="updatepost" class="form-control" placeholder="Write Something *" value="" />
                        </div>
                        <div id="div1">
                                <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-info btn-md" value="updatepost" />
                        </div>`
                    </form>    
                
                <div class="col-md-4">
                </div>
        </div>
        </div>

        </div>
        
	</body> 
</html>
