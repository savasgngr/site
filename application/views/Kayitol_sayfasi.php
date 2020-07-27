


<head>
  <meta charset="UTF-8">
  <title>Kayıt sayfası</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/loginform/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font-awesome.min.css" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font.css" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.bxslider.css" media="screen" />

  
</head>

<body>
  <div class="form" style="background-color:#757575">

      <div class="tab-content">
	  <?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">*</button>
							<strong></strong><?=$this->session->flashdata("sonuc")?>
						
						</div>	
						<?php 
						}
						?>	
         
          <h1>Üye kayıt</h1>
          
          <form class="login" action="<?=base_url()?>Kayitol/eklekaydet/" method="POST">
          
			<div class="field-wrap">
				<label>
              adınız ve soyadınızı giriniz<span class="req">*</span>
				</label>
				<input type="text" name="adsoy"required autocomplete="off"/>
			</div>

          <div class="field-wrap">
            <label>
              Email Addresinizi giriniz<span class="req">*</span>
            </label>
            <input type="email"name="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              şifrenizi giriniz<span class="req">*</span>
            </label>
            <input type="password" name="sifre"required autocomplete="off"/>
          </div>
		  <div class="field-wrap">
            <label>
              şifrenizi tekrar giriniz<span class="req">*</span>
            </label>
            <input type="password" name="sifre2"required autocomplete="off" height="0%"/>
          </div>
		<div class="field-wrap">
				<label>
              telefon<span class="req">*</span>
				</label>
				<input type="number" name="tel"required autocomplete="off"/>
			</div>
			<div class="field-wrap">
				<label>
              adresinizi giriniz<span class="req">*</span>
				</label>
				<input type="text" name="adres"required autocomplete="off"/>
			</div>
          
          <button type="submit" class="button button-block"/>Kaydol</button>
		  
          
          </form>

        
        
              
      </div><!-- tab-content -->
      
</div> <!-- /form -->
 
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="<?=base_url()?>assets/loginform/js/index.js"></script>
