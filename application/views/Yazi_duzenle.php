<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
			<div class="single_post_content">
				<div class="contact_area">
				<h2>Yazınızı gönderin</h2>
				<p><strong>Lütfen yazınızda yazım kurallarına dikkat ediniz.</strong></p>
				
							
				<form action="<?=base_url()?>Home/Yazi_guncelle/<?=$yazi[0]->id?>" class="contact_form" enctype="multipart/form-data" method="post">
				  <h4>Yazı için bir resim yükle:</h4> <input type="file" name="userfile" ><br/>
				  <input class="form-control" value="<?=$yazi[0]->adi?>" name="adi" type="text" placeholder="Başlık*">
				  <input class="form-control" value="<?=$yazi[0]->keywords?>" name="keywords" type="text" placeholder="Etiketler*">
				  <textarea class="form-control"  name="aciklama" cols="30" rows="10" placeholder="Yazınızın açıklamasını (özetini) yazın...*"><?=$yazi[0]->aciklama?></textarea>
				  <textarea class="form-control"  cols="30" rows="10" name="icerik"  id="icerik" placeholder="Yazınızı yazınız..*"><?=$yazi[0]->icerik?></textarea>
				  <script>CKEDITOR.replace('icerik');</script><br/>
				  
				  <select name="kategori" required>
				  <?php foreach($kat as $rskat){ if($yazi[0]->kategori_id==$rskat->id){$katAd=$rskat->adi;}}?>
				  <option  value="<?=$yazi[0]->kategori_id?>"><?=$katAd?></option>
				  <?php foreach($kat as $rskat){?>
				  <option  value="<?=$rskat->id?>"><?=$rskat->adi?></option>
				  <?php }?>
				  </select>
				  <input type="submit" value="Yazıyı Güncelle">
				</form>
			  </div>
		
            </div>
			
           
            
           
          </div>
        </div>
      </div>

    </div>
  </section>

