<div class="sidebar floatright">
       
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Son Yazilar</h2>
            <ul>
			<?php foreach($sonyazilar as $rs3){?>
              <li>
                <div class="single_popular">
                  <p><?=$rs3->tarih?></p>
                  <h3> <?=$rs3->adi?><a href="<?=base_url()?>/Kategoriler/Yazi_goster/<?=$rs3->id?>" class="readmore"><br/>Devamını oku</a></h3>
                </div>
              </li>
			<?php }?> 
            </ul>
           </div>
        </div>
       
        
      </div>
    </div>