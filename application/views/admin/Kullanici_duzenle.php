<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Kullanıcı Düzenleme</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/kullanicilar/guncellekaydet/<?=$veri[0]->id?>" method="POST" class="form-horizontal" ">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Adı soyadi</label>
                        <div class="col-lg-4">
                            <input type="text"  name="adsoy" value="<?=$veri[0]->adsoy?>"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">şifre</label>

                        <div class="col-lg-4">
                            <input type="text"  name="sifre" value="<?=$veri[0]->sifre?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">e-mail</label>

                        <div class="col-lg-4">
                            <input type="email"  name="email" value="<?=$veri[0]->email?>" class="form-control">
                        </div>
                    </div>
				
					
					<div class="form-group">
                        <label class="control-label col-lg-4">kayıt tarihi</label>

                        <div class="col-lg-4">
                            <input type="text"  name="kayıt_tarih" value="<?=$veri[0]->kayıt_tarih?>" class="form-control">
                        </div>
                    </div>
				
                
                  <div class="form-group">
						
                        <label class="control-label col-lg-4">Yetki</label>
						<br>
						<div class="controle">
							<select id="selectError" name="yetki" data-rel="chosen">
							<option><?=$veri[0]->yetki?></option>
							<option>  Admin</option>
							<option>  yazar</option>
							<option>  üye</option>
							</select>
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

<?php
$this->load->view('admin/footer');
?>