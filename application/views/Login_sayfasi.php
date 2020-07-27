<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/loginform/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font-awesome.min.css" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font.css" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.bxslider.css" media="screen" />

  
</head>

<body>
  <div class="form">

          <h1>Welcome Back!</h1>
          
          <form class="login" action="<?=base_url()?>Loginol/girisYap" method="POST">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"required autocomplete="on"/>
          </div>
          
          <div class="field-wrap">
		  <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="sifre"required autocomplete="on"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

     
        
      
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="assets/loginform/js/index.js"></script>

</body>
</html>
