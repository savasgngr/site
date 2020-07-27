    <div class="content_area">
      <div class="main_content floatleft">
        <?php foreach($ustkat as $rs){?>
          <div class="single_left_coloum_wrapper">
            <h2 class="title"><?=$rs->adi?></h2>
            <a class="more" href="<?=base_url()?>/Kategoriler/Kategorigoster/<?=$rs->id?>">Dahası</a>
			<?php foreach($yazilar as $rs2){
			  if($rs2->kategori_id==$rs->id){?>
			  <div class="single_left_coloum floatleft"> 
			   <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> <span class="overlay"></span> </a>
              <h3><?=$rs2->adi?></h3>
              <p><?=$rs2->aciklama?></p>
              <a class="readmore" href="<?=base_url()?>/Kategoriler/Yazi_goster/<?=$rs2->id?>">Devamını oku...</a> </div>
			  <?php  }foreach($altkat as $rs3){
				if($rs3->ust_id==$rs->id){
					if($rs2->kategori_id==$rs3->id){?>	
					<div class="single_left_coloum floatleft"> 
					 <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> <span class="overlay"></span> </a>
					<h3><?=$rs2->adi?></h3>
					<p><?=$rs2->aciklama?></p>
				<a class="readmore" href="<?=base_url()?>/Kategoriler/Yazi_goster/<?=$rs2->id?>">Devamını oku...</a> </div>  <?php }}}}?>
          </div>
		  <?php }?>
          <div class="single_left_coloum_wrapper gallery">
		  
            <h2 class="title">Galeri</h2>
			 <a class="more" href="<?=base_url()?>Home/galeri">Dahası</a>
			<?php foreach($resim as $rsresim){ ?>
			
            <img width="50"src="<?=base_url()?>uploads/galeriresimler/<?=$rsresim->resim?>"  alt="" /> 
			<?php }?>
			</div>
			
			
    
      </div>