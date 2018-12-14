<?php
/*
    Template Name: loginTemplate 
*/ 

 get_header(); ?>
	<style type="text/css">
	form{
		border: 1px solid;
	}

	.form-control {
		min-height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: 1px solid;
	}
	.form-control:focus {
		background: #e2e2e2;
	}
	.form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 350px;
		margin: 30px auto;
		text-align: center;
	}
	.login-form h2 {
        margin: 10px 0 25px;
    }
    .login-form form {
		color: #7a7a7a;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #212529;
		border: none;
        outline: none !important;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #2389cd;
	}

</style>
</head>
<body>
<div class="login-form">
    <form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
        <h2 class="text-center">Login2</h2>   
        <div class="form-group has-error">
        	<input type="text" class="form-control" id="user_login" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" id="user_pass" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" name="wp-submit" name="wp-submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
        <p><a href="#">Lost your Password?</a></p>
    </form>
    <p class="text-center small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>
</body>
</html>                            