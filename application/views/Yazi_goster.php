


<head>
  <meta charset="UTF-8">
  <title>savaş </title>
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
<div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
			<?php foreach($kat as $rs){ if($yazi[0]->kategori_id==$rs->id){$yazikategori=$rs->adi;}}?>
			<?php foreach($uyeler as $rs2){ if($yazi[0]->yazar_id==$rs2->id){$yaziyazar=$rs2->adsoy;}}?>
              <li><a href="<?=base_url()?>">Anasayfa</a></li>
              <li><a href="<?=base_url()?>/Kategoriler/Kategorigoster/<?=$yazi[0]->kategori_id?>"><?=$yazikategori?></a></li>
              <li class="active"><?=$yazi[0]->adi?></li>
            </ol>
            <h2><?=$yazi[0]->adi?></h2>
            <div class="post_commentbox"> 
			<ol class="breadcrumb">
			<li><?=$yaziyazar?></li>
             <li><a href="<?=base_url()?>/Kategoriler/Kategorigoster/<?=$yazi[0]->kategori_id?>"><?=$yazikategori?></a></li>
             <li class="active"><?=$yazi[0]->tarih?></li>
			 </ol>
			 </div>
            <div class="single_page_content">
			 <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$yazi[0]->resim?>"> <span class="overlay"></span> </a>
			<br/>
			<br/>
			<br/>
			<blockquote> <?=$yazi[0]->aciklama?> </blockquote>
            <p><strong><?=$yazi[0]->icerik?></strong></p>
			<div class="single_left_coloum_wrapper" style="background-color: #000000"></div>
            </div>
				<?php if ($this->session->userdata('oturum2') !== NULL) {
				$oturum= $this->session->userdata('oturum2');  ?>
			<div  id="yorumlar">
            <h2>Yorum Yaz</h2>
			<?php if ($this->session->flashdata("yorumsonuc")){?>
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">*</button>
				<?=$this->session->flashdata("yorumsonuc")?></div>
			<?php }?>
			
            <form action="<?=base_url()?>/Kategoriler/Yorum_gonder/<?=$yazi[0]->id?>/#yorumlar"  method="post" >
			
              <textarea name="icerik" class="form-control" cols="30" rows="5" placeholder="Yorum Yaz*"></textarea>
              <input type="submit" value="Gönder"  style="background-color: #000000" >
            </form>
			</div>
			<?php } ?>
			
			<h2>Yorumlar <i class="fa fa-comments"></i></h2>	
			<?php foreach($yaziyorumlar as $rsyorum){?>
			
			<div class="post_commentbox" >
			<?php foreach($uyeler as $rsuye){ if($rsyorum->uye_id==$rsuye->id){$yorumyazar=$rsuye->adsoy;}}?>
			 <ol class="breadcrumb">
					
              <li><a href="<?=base_url()?>"><?=$yorumyazar?></a></li>
              <li><a href="<?=base_url()?>/Kategoriler/Kategorigoster/<?=$yazi[0]->kategori_id?>"><?=$yazikategori?></a></li>
              <li class="active"><?=$rsyorum->tarih?></li>
			  <?php if ($this->session->userdata('oturum2') !== NULL) {
				$oturum= $this->session->userdata('oturum2');
				if($rsyorum->uye_id==$oturum['id']){?>
				<span><a  onclick="return confirm('Yorumu silmek istediğinizden emin misiniz ?');" href="<?=base_url()?>/Kategoriler/Yorum_sil/<?=$rsyorum->id?>"> <i class="fa fa-trash-o"></i> Sil</a></span><?php }}?>
            </ol>
			 
			
			
			
			<ul>
				<li><span><blockquote> <?=$rsyorum->icerik?> </blockquote></span></li>
			</ul>
			</div>
			<?php } ?>
          
          </div>
        </div>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="<?=base_url()?>assets/loginform/js/index.js"></script>
