<section id="contentSection">
    <div class="main_content floatleft">
      <div >
        <div class="left_content">
          <div class="single_page">
			
			<div  class="single_post_content">
			
		
			
			
	
		
              <h2><span><?=$uye[0]->adsoy?> YAZILARI</span></h2>
			
              <ul class="spost_nav">
			  <?php foreach($uyeyazilar as $rs2){ ?>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="media-left"> 
				  <img style=' max-width: 100%; height:500px; object-fit: contain' class="img-center" src="<?=base_url()?>/uploads/yaziresimler/<?=$rs2->resim?>"> </a>
                    
					<div class="media-body"> <a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rs2->id?>" class="catg_title"> <?=$rs2->adi?></a>
			
					<?php if ($this->session->userdata('oturum2') !== NULL) {
							$oturum= $this->session->userdata('oturum2'); 
						  if ($rs2->yazar_id==$oturum['id']){?>
					
					
					
						<br/><br/><a href="<?=base_url()?>Home/Yazi_sil/<?=$rs2->id?>" 
									onclick="return confirm('<?=$rs2->adi?> \n Yazısını silmek istediğinizden emin misiniz ?');" class="btn btn-danger" >
								<i class="fa fa-trash-o fa-lg"></i>&nbsp Sil</a>
							<a class="btn btn-primary" href="<?=base_url()?>Home/Yazi_duzenle/<?=$rs2->id?>" aria-label="Skip to main navigation">
								  <i class="fa fa-pencil-square-o " aria-hidden="true">&nbsp Düzenle</i>
							</a>
						  <?php }} ?>		
				
					</div>
					
                  </div>
                </li>
			  <?php } ?>
    		 </ul>
           
		
            </div>
			
           
          </div>
        </div>
      </div>
     
    </div>
  </section>

