        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>  
						<h4>Üye  Listesi</h4>
						<a class="btn btn-info" href="<?=base_url()?>admin/Uyeler/ekle"><i class="glyphicon glyphicon-plus  icon-blue"></i> Yeni Üye Ekle</a>
						<br />
						<br />
						
						<?php if ($this->session->flashdata("sonuc"))
						{
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">*</button>
							<strong>işlem: </strong><?=$this->session->flashdata("sonuc")?>
						
						</div>	
						<?php 
						}
						?>						
                       <table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								   <th>id</th>
								  <th>Adı Soyadı</th>
								  <th>e-mail</th>
								  <th>şifre</th>
								  <th>telefon</th>
								  <!--<th>adres</th>-->
								  <th>şehir</th>
								  <th>cinsiyet</th>
								  <th>yetki</th>
								  
								  <!--<th>resim</th>-->
								 <!-- <th>açıklama</th>-->
								  <th>kayıt tarihi</th>
								  
								  <th>İşlemler</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  foreach($veri as $rs)
						  {
						  ?>
							<tr>
							    <td><?=$rs->id?></td>
								<td><?=$rs->adsoy?></td>
								<td class="center"><?=$rs->email?></td>
								
								<td class="center"><?=$rs->sifre?></td>
								<td class="center"><?=$rs->tel?></td>
								
								<td class="center"><?=$rs->sehir?></td>
								<td class="center"><?=$rs->cinsiyet?></td>
								<td class="center"><?=$rs->yetki?></td>
								
												
								
								<td class="center"><?=$rs->bas_tarih?></td>
								
								
								
									<td class="center">
									<a class="btn btn-success" href="<?=base_url()?>admin/Uyeler/goster/<?=$rs->id?>">
										<i class="icon-zoom-in icon-white"></i>  
										Görüntüle                                           
									</a>
									<a class="btn btn-info" href="<?=base_url()?>admin/Uyeler/duzenle/<?=$rs->id?>">
										<i class="icon-edit icon-white"></i>  
										Düzenle                                           
									</a>
									<a class="btn btn-danger" href="<?=base_url()?>admin/Uyeler/delete/<?=$rs->id?>" onclick="return confirm('silmek istediğinizden eminmisiniz ?');">
										<i class="icon-trash icon-white"></i> 
										Sil
									</a>
								</td>
							</tr>
						<?php
						}
						?>
				 <!--  -->
						  </tbody>
					  </table>
					   
						  <ul  class="pagination pagination-centered">
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						
                    </div>
                </div>      
					
			</div>
             
                                         

                        
        </div>
                         

                    