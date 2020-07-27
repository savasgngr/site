<br/>	
<br/>	
<br/>								
<br/>															
		
					<div class="box-content">
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
						
						 
						  if (document.forms["myForm"]["email"].value== "") {
							alert("lütfen mail adresiniz giriniz");
								return false;
										}
						    if (document.forms["myForm"]["adsoy"].value== "") {
							alert("lütfen adınızı ve soyadınızı giriniz");
								return false;
										}
										
										if (document.forms["myForm"]["tarih"].value== "") {
							alert("lütfen tarihi  giriniz");
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
						<form class="form-horizontal" name="myForm"  onsubmit="return validateForm()" action="<?=base_url()?>Home/mesajekle" method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">email adresiniz</label>
							  <div class="controls">
								<input type="email" name="email"  class="input-xlarge datepicker"  >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Adınızı ve soyAdınızı giriniz</label>
							  <div class="controls">
								<input type="text" name="adsoy" class="input-xlarge datepicker" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">tarih</label>
							  <div class="controls">
								<input type="date" name="tarih" class="input-xlarge datepicker" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">telefon</label>
							  <div class="controls">
								<input type="number" name="tel" class="input-xlarge datepicker" >
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">konu</label>
							  <div class="controls">
								<input type="text" name="adi" class="input-xlarge datepicker" >
							  </div>
							</div>
							         
							<div class="control-group">
							  <label class="control-label" for="textarea2">mesajınız</label>
							  <div class="controls">
								<textarea class="cleditor" name="mesaj"id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">gönder</button>
							  
							</div>
						  </fieldset>
						</form>   

					</div>