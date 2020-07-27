        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>  
						<h4>Kategoriler Listesi</h4>
						<a class="btn btn-info" href="<?=base_url()?>admin/Kategoriler/ekle"><i class="glyphicon glyphicon-plus  icon-blue"></i> Yeni Kategori Ekle</a>
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
								  <th>kategori adı</th>
								  <th>üst id</th>
								  <th>resim</th>
								  
								  <th>oluşturma tarihi</th>
								  <th>etiketler</th>
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
								
								<td class="center"><?=$rs->adi?></td>
								<td class="center"><?=$rs->ust_id?></td>
								<td class="center">
								
								<?php if($rs->resim){?>
								<a class="btn btn-info" href="<?=base_url()?>admin/kategoriler/resimekle/<?=$rs->id?>">
								<img width="100" src="<?=base_url()?>uploads/kategoriresimler/<?=$rs->resim?>"/>
								<?php
								}else{
								?>
								<a class="btn btn-info" href="<?=base_url()?>admin/kategoriler/resimekle/<?=$rs->id?>">
										<i class="icon-edit icon-white"></i>  
										resim ekle                                          
									</a>
								<?php }?>
								</td>
								
								<td class="center"><?=$rs->tarih?></td>
								<td class="center"><?=$rs->keywords?></td>
									<td class="center">
								
									<a class="btn btn-info" href="<?=base_url()?>admin/kategoriler/duzenle/<?=$rs->id?>">
										<i class="icon-edit icon-white"></i>  
										Düzenle                                           
									</a>
									<a class="btn btn-danger" href="<?=base_url()?>admin/Kategoriler/sil/<?=$rs->id?>" onclick="return confirm('silmek istediğinizden eminmisiniz ?');">
										<i class="icon-trash icon-white"></i> 
										Sil
									</a>
								</td>
							</tr>
						<?php
						}
						?>
				 
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
                         

                    