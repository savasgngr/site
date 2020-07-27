<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?><script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Ayarları Düzenle</h2>   
                        
                    </div>
                </div>    
				<?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">*</button>
							<strong></strong><?=$this->session->flashdata("sonuc")?>
						
						</div>	
						<?php 
						}
						?>						
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/Ayarlar/ayarlarkaydet/<?=$veri[0]->id?>" method="POST" class="form-horizontal">

                    <div class="form-group">
                        <label class="control-label col-lg-4">id</label>
                        <div class="col-lg-4">
                            <input type="text"  name="adsoy" value="<?=$veri[0]->id?>"class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">Adı soyadı</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adi" value="<?=$veri[0]->adi?>" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-lg-4">açıklama</label>

                        <div class="col-lg-4">
                            <input type="text"  name="aciklama" value="<?=$veri[0]->aciklama?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">kelimeler</label>

                        <div class="col-lg-4">
                            <input type="text"  name="keywords" value="<?=$veri[0]->keywords?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">telefon</label>

                        <div class="col-lg-4">
                            <input type="number"  name="tel" value="<?=$veri[0]->tel?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">e-mail</label>

                        <div class="col-lg-4">
                            <input type="text"  name="email" value="<?=$veri[0]->email?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">adres</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adres" value="<?=$veri[0]->adres?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">sehir</label>

                        <div class="col-lg-4">
                            <input type="text"  name="sehir" value="<?=$veri[0]->sehir?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">smtp server</label>

                        <div class="col-lg-4">
                            <input type="text"  name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">smtp mail</label>

                        <div class="col-lg-4">
                            <input type="text"  name="smtpemail" value="<?=$veri[0]->smtpemail?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">smtp şifre</label>

                        <div class="col-lg-4">
                            <input type="text"  name="smtpsifre" value="<?=$veri[0]->smtpsifre?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">smtp port</label>

                        <div class="col-lg-4">
                            <input type="text"  name="smtpport" value="<?=$veri[0]->smtpport?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">twitter</label>

                        <div class="col-lg-4">
                            <input type="text"  name="twitter" value="<?=$veri[0]->twitter?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">facebook</label>

                        <div class="col-lg-4">
                            <input type="text"  name="facebook" value="<?=$veri[0]->facebook?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">instagram</label>

                        <div class="col-lg-4">
                            <input type="text"  name="instagram" value="<?=$veri[0]->instagram?>" class="form-control">
                        </div>
                    </div>
                   
					<div class="form-group">
                        <label class="control-label col-lg-4">iletişim</label>
							
                        <div class="col-lg-4">
						
						<textarea name="iletisim" id="iletisim">
						<?=$veri[0]->iletisim?>
						</textarea>
						<script>
						CKEDITOR.replace('iletisim');
						</script>
                           
                        </div>
                    </div>
					 <div class="form-group">
                        <label class="control-label col-lg-4">hakkımızda</label>
							
                        <div class="col-lg-4">
						
						<textarea name="hakkimizda" id="hakkimizda">
						<?=$veri[0]->hakkimizda?>
						</textarea>
						<script>
						CKEDITOR.replace('hakkimizda');
						</script>
                           
                        </div>
                    </div>
  
				   <button type="submit" class="btn btn-info icon-blue ">Kaydet</button>
				 
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>	
                               
</div>
    
     

             <!-- /. PAGE INNER  -->
</div>
<?php
$this->load->view('admin/footer');
?>