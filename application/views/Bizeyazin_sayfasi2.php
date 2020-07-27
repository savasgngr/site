<section id="contentSection">

    <div >
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="left_content">
          <div class="contact_area">
            <h2 style="background-color:#e0e0e0"> &nbsp Bize yazın </h2>
			<?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">*</button>
							<strong>işlem:</strong><?=$this->session->flashdata("sonuc")?>
							<strong>sonuç:</strong><?=$this->session->flashdata("sonuc2")?>
						
						</div>	
						<?php 
						}
						?>	
           
			<script>
						function validateForm() {
						
						 
						
						    if (document.forms["myForm"]["adsoy"].value== "") {
							alert("lütfen adınızı ve soyadınızı giriniz");
								return false;
										}
										  if (document.forms["myForm"]["email"].value== "") {
							alert("lütfen mail adresiniz giriniz");
								return false;
										}
										if (document.forms["myForm"]["tel"].value== "") {
							alert("lütfen telefon numaranızı  giriniz");
								return false;
										}
										if (document.forms["myForm"]["konu"].value== "") {
							alert("lütfen konuyu giriniz giriniz");
								return false;
										}
										if (document.forms["myForm"]["mesaj"].value== "") {
							alert("lütfen mesajınızı giriniz giriniz");
								return false;
										}
								} 
						
						</script>
            <form action="<?=base_url()?>Home/mesajekle" method="POST" class="contact_form"   name="myForm" onsubmit="return validateForm()">
              <input class="form-control" name="adsoy"type="text" placeholder="adınız ve soyadınız">
			   <br/>
              <input class="form-control" name="email"type="email"  placeholder="Email adresiniz">
			   <br/>
			    <input class="form-control" name="tel"type="text" placeholder="telefon numaranızı giriniz">
				 <br/>
				<input class="form-control" name="baslik"type="text" placeholder="ne hakkında yazacaksınız?">
				 <br/>
              <textarea class="form-control" cols="30" rows="10" name="mesaj"placeholder="Mesajınız"></textarea>
			  <br/>
			 <div class="form-actions">
							  <button type="submit" class="btn btn-primary">gönder</button>
							  
							</div>
            </form>
          </div>
        </div>
      </div>
  
    </div>
  </section>