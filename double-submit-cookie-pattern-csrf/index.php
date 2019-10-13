<!DOCTYPE html>
<html>
	<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
	
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Cross Site Request Forgery Protection</title>
	</head>
	<body>
    <h2>Double Submit Cokkie Pattern</h2>
    
    <!-- <h2 style="test-align:center; color:brown"> </h2> -->
    <div class="container login-container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 login-form-1">
                    <h3>Login </h3>
                    <form class="form" action="result.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username"  id="username" placeholder="User name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info btn-md " value="Login" />
                        </div>
                    </form>
                    
                </div>
                <div class="col-md-4">
                </div>
            </div>
    </div>
		
	</body> 
</html>



