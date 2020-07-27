    <div class="content_area">
      <div class="main_content floatleft">
        <?php foreach($kat as $rs){ if($katyazilar[0]->kategori_id==$rs->id){$adi=$rs->adi;}}?>
          <div class="single_left_coloum_wrapper">
		  
            <h2 class="title"><?=$adi?></h2>
            			<?php foreach($katyazilar as $rs2){?>
			
			  <div class="single_left_coloum floatleft"> 
			   <img style='max-height: 100%; max-width: 100%; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> <span class="overlay"></span> </a>
              <h3><?=$rs2->adi?></h3>
              <p><?=$rs2->aciklama?></p>
              <a class="readmore" href="<?=base_url()?>/Kategoriler/Yazi_goster/<?=$rs2->id?>">Devamını oku...</a> </div>
			<?php }?>
			 
				
				  
          </div>
		
          <div class="single_left_coloum_wrapper gallery">
		  
            <h2 class="title">Galeri</h2>
			 <a class="more" href="<?=base_url()?>Home/galeri">Dahası</a>
			<?php foreach($resim as $rsresim){ ?>
			
            <img width="50"src="<?=base_url()?>uploads/galeriresimler/<?=$rsresim->resim?>"  alt="" /> 
			<?php }?>
			</div>
    
      </div>