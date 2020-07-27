<section id="contentSection">
  <div class="main_content floatleft">
    <div >
      <div class="col-lg-12 col-md-12 col-sm-12">
      
          <div class="contact_area">
           <h2>Yazınızı gönderin</h2>
				
				
				
				<p><strong>Lütfen yazınızda yazım kurallarına dikkat ediniz.</strong></p>
				<?php if ($this->session->userdata('oturum2') !== NULL) {
				$oturum2= $this->session->userdata('oturum2'); } ?>
				<form action="<?=base_url()?>Home/Yazi_gonder/<?=$oturum2['id']?>" class="contact_form" enctype="multipart/form-data" method="post">
				
				  <h4>Yazı için bir resim yükle:</h4> <input type="file" name="userfile" ><br/>
				  <input class="form-control" name="adi" type="text" placeholder="Başlık*">
				  <input class="form-control" name="keywords" type="text" placeholder="Etiketler*">
				  <textarea class="form-control" name="aciklama" cols="30" rows="10" placeholder="Yazınızın açıklamasını (özetini) yazın...*"></textarea>
				  <textarea class="form-control" cols="30" rows="10" name="icerik"  id="icerik" placeholder="Yazınızı yazınız..*"></textarea>
				  <script>CKEDITOR.replace('icerik');</script><br/>
				  
				  <select name="kategori" required>
				  
				  <option  value="">Bir Kategori seçin</option>
				  <?php foreach($kat as $rskat){?>
				  <option  value="<?=$rskat->id?>"><?=$rskat->adi?></option>
				  <?php }?>
				  </select>
				 
							  <button type="submit" class="btn btn-primary">gönder</button>
							  
							
				</form>
          </div>
        </div>
      </div>
  
    </div>
  </section>