<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Kullanıcı bilgileri gösterme</h2>   
                        
                    </div>
                </div>    
						<div class="box span6">
					
					<div class="box-content">
						<table class="table table-striped" action="<?=base_url()?>admin/kullanicilar/goster/<?=$veri[0]->id?>">
							  <thead>
								  <tr>
										<th>id</th>
									  <th>adı soyadı</th>
									  <th>şifre</th>
									  <th>e-mail</th>
									  <th>yetki</th>
									
									  <th>kayıt tarihi</th>
									 
									  
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td class="center"><?=$veri[0]->id?></td>
									<td class="center"><?=$veri[0]->adsoy?></td>
									<td class="center"><?=$veri[0]->sifre?></td>
									<td class="center"><?=$veri[0]->email?></td>
									<td class="center">
										<span class="label label-success"><?=$veri[0]->yetki?></span>
									</td>
									    
									<td class="center"><?=$veri[0]->kayıt_tarih?></td>
									
									                                  
								</tr>
								      
								                    
							  </tbody>
							  </table>
							  
							 
						  
						   
					</div>
				</div><!--/span-->
			</div><!--/row-->
	
                               
</div>
   


<?php
$this->load->view('admin/footer');
?>