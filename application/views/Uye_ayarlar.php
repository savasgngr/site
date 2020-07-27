<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>üye ayaraları düzenleme sayfası</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
			<?php $oturum= $this->session->userdata('oturum2');?>
                <form action="<?=base_url()?>Home/guncellekaydet/<?=$oturum['id']?>" method="POST" class="form-horizontal" ">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Adı soyadi</label>
                        <div class="col-lg-4">
                            <input type="text"  name="adsoy" value="<?=$oturum['adsoy']?>"class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">e-mail</label>

                        <div class="col-lg-4">
                            <input type="email"  name="email" value="<?=$oturum['email']?>" class="form-control">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-lg-4">şifre</label>

                        <div class="col-lg-4">
                            <input type="text"  name="sifre" value="<?=$oturum['sifre']?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">telefon</label>

                        <div class="col-lg-4">
                            <input type="number"  name="tel" value="<?=$oturum['tel']?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">adres</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adres" value="<?=$oturum['adres']?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">şehir</label>

                        <div class="col-lg-4">
                            <input type="text"  name="sehir" value="<?=$oturum['sehir']?>" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">cinsiyet</label>

                        <div class="col-lg-4">
                            <input type="text"  name="cinsiyet" value="<?=$oturum['cinsiyet']?>" class="form-control">
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
</div>     
     <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                 <!-- /. ROW  -->           
</div>
             <!-- /. PAGE INNER  -->
</div>
<div>