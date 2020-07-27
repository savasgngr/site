<?php
$this->load->view('admin/Header');
$this->load->view('admin/Sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Üye bilgileri gösterme</h2>   
                        
                    </div>
                </div>    
						<div class="box span6">
					
					<div class="box-content">
						<table class="table table-striped" action="<?=base_url()?>admin/Uyeler/goster/<?=$veri[0]->id?>">
							  <thead>
								  <tr>
									<th>id</th>
								  <th>Adı Soyadı</th>
								  <th>e-mail</th>
								  <th>şifre</th>
								  <th>telefon</th>
								  <th>adres</th>
								  <th>şehir</th>
								  <th>cinsiyet</th>
								  <th>yetki</th>
								 
								  <th>resim</th>
								  <th>açıklama</th>
								  <th>kayıt tarihi</th>
								 
								 
									  
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td class="center"><?=$veri[0]->id?></td>
									<td class="center"><?=$veri[0]->adsoy?></td>
									<td class="center"><?=$veri[0]->email?></td>
									<td class="center"><?=$veri[0]->sifre?></td>
									<td class="center"><?=$veri[0]->tel?></td>
									<td class="center"><?=$veri[0]->adres?></td>
									<td class="center"><?=$veri[0]->sehir?></td>
									<td class="center"><?=$veri[0]->cinsiyet?></td>
							
									<td class="center">
										<span class="label label-success"><?=$veri[0]->yetki?></span>
									</td>
									
									<td class="center"><?=$veri[0]->resim?></td>
									<td class="center"><?=$veri[0]->aciklama?></td>
									<td class="center"><?=$veri[0]->bas_tarih?></td>
									
									                                  
								</tr>
								      
								                    
							  </tbody>
							  </table>
							
						  
						   
					</div>
				</div><!--/span-->
			</div><!--/row-->
	
                               
</div>
</div>     
             

             <!-- /. PAGE INNER  -->
</div>
<?php
$this->load->view('admin/Footer');
?>