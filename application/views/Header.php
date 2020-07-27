<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$veri[0]->adi?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?=$veri[0]->aciklama?>" />
<meta name="keywords" content="<?=$veri[0]->keywords?>" /> 
<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="<?=base_url()?>Home"><img src="<?=base_url()?>uploads/images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
       <ul>
          <li><a href="<?=base_url()?>Home">Ana sayfa</a></li>
          <li><a href="<?=base_url()?>Hakkimizda">hakkımızda</a></li>
		  <?php
		  if($this->session->oturum2["email"])
		  {
		  ?>
		  
         	<li><a href="<?=base_url()?>Home/ayarlar">Ayarlar </a></li>
         	<li><a href="<?=base_url()?>Loginol/cikisyap">Çıkış Yap </a></li>

		  <?php
		  }else{
			  ?>
			<li><a href="<?=base_url()?>Kayitol">Kayıt ol </a></li>
          <li><a href="<?=base_url()?>Loginol">giriş yap</a></li>
			  <?php
		  }
		  ?>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
     <br/>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <?php foreach($ustkat as $rs2){?>
		  <li><a href="<?=base_url()?>Kategoriler/Kategorigoster/<?=$rs2->id?>"><?=$rs2->adi?></a></li>
		  <?php }?>
		  <li><a href="<?=base_url()?>Home/bizeyazin">bize ulasin </a></li>
		   
		  <?php if ($this->session->userdata('oturum2') !== NULL) {
				$oturum= $this->session->userdata('oturum2');  ?>
				<?php if($oturum['yetki']=="yazar"){?>
						<li> &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>
					<li><a href="<?=base_url()?>Home/yaziyaz"><i class="fa fa-pencil fa-fw"></i>&nbsp Yazi Yaz</a></li>
					<li><a href="<?=base_url()?>Home/Yazar_goster/<?=$oturum['id']?>"<i class="fa fa-list-alt"></i>&nbsp Yazilarim</a></li>
					<?php } ?>	
				<div class="btn-group" >
				  <a class="btn btn-primary" href="<?=base_url()?>/home/ayarlar"><i class="fa fa-user fa-fw"></i><?=$oturum['adsoy']?></a>
				</div>
		<?php }?>
		</ul>
		
    </div>