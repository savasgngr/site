   <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
		<?php foreach ($sonyazilar as $rsson){ ?>
          <li><a href="<?=base_url()?>Kategoriler/Yazi_goster/<?=$rsson->id?>">
		  <img style='height:350; width:980; ' src="<?=base_url()?>uploads/yaziresimler/<?=$rsson->resim?>" alt="" title="<?=$rsson->adi?>" /></a></li>
		<?php }?>
        </ul>
      </div>
    </div>