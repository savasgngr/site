﻿<?php
$this->load->view('admin/Header');
$this->load->view('admin/Sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Üye Ekleme</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/Uyeler/eklekaydet" method="POST" class="form-horizontal ">

                    <div class="form-group">
                        <label class="control-label col-lg-4">Adı soyadi</label>
                        <div class="col-lg-4">
                            <input type="text"  name="adsoy" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">şifre</label>

                        <div class="col-lg-4">
                            <input type="password"  name="sifre" class="form-control">
							
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">e-mail</label>

                        <div class="col-lg-4">
                            <input type="email"  name="email" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">telefon</label>

                        <div class="col-lg-4">
                            <input type="number"  name="tel" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">adres</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adres" class="form-control">
                        </div>
                    </div>
					 <div class="form-group">
                        <label class="control-label col-lg-4">Şehir</label>
                        <div class="col-lg-4">
                            <input type="text"  name="sehir" class="form-control">
                        </div>
                    </div>
					 <div class="form-group">
                        <label class="control-label col-lg-4">Cinsiyet</label>
                        <div class="col-lg-4">
                            <input type="text"  name="cinsiyet" class="form-control">
                        </div>
                    </div>
					 <div class="form-group">
                        <label class="control-label col-lg-4">Acıklama</label>
                        <div class="col-lg-4">
                            <textarea name="aciklama" style="width:350px;"></textarea>
                        </div>
                    </div>
				
					
					<div class="form-group">
                        <label class="control-label col-lg-4">kayıt tarihi</label>

                        <div class="col-lg-4">
                            <input type="date"  name="bas_tarih" class="form-control">
                        </div>
                    </div>
					
				
                
                  <div class="form-group">
						
                        <label class="control-label col-lg-4">Yetki</label>
						<br>
						<div class="controle">
							<select id="selectError" name="yetki" data-rel="chosen">
							<option>  admin</option>
							<option>  yazar</option>
							<option>  üye</option>
							
							</select>
						</div>
					</div>
                   
				   <button type="submit"  class="btn btn-info icon-blue ">Kaydet</button>
				 
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
<?php
$this->load->view('admin/Footer');
?>