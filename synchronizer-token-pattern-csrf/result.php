<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'testing123'){
		echo '<h3>Successfully logged in</h1>';
	
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script>
	
	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("tokenIn_hidden_field").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	</head>
	<body>
		<div class="container login-container">
        <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">

                    <h3></h3>
                    <form class="login-form-1" action="home.php" method="post">
                        `<div class="form-group">
                                <input type="text" name="updatepost" class="form-control" placeholder="Write Something *" value="" />
                        </div>
                        <div id="div1">
                                <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
                        </div>
                        <div class="form-group">
                                <input type="submit" class="btn btn-success btn-md" value="updatepost" />
                        </div>`
                    </form>    
                
                <div class="col-md-3">
                </div>
        </div>
        </div>

        </div>
        
	</body> 
</html>
