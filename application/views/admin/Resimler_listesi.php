        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>  
						<h4>Resimler Listesi</h4>
						<a class="btn btn-info" href="<?=base_url()?>admin/Resimler/ekle"><i class="glyphicon glyphicon-plus  icon-blue"></i> Yeni Resim Ekle</a>
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
								    <th>resim adı</th>
									<th>resim</th>
								  <th>İşlemler</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php
						  foreach($veri as $rs)
						  {
						  ?>
							<tr>
								<td><?=$rs->resim_id?></td>
								
								<td class="center"><?=$rs->resim_adi?></td>
								
								<td class="center">
								
								<?php if(isset($rs->resim))
								{
								?>
									<img width="50" src="<?=base_url()?>uploads/galeriresimler/<?=$rs->resim?>">
								<?php
								}
								?>
								
								
								</td>
							
								
									<td class="center">
									
									
									<a class="btn btn-danger" href="<?=base_url()?>admin/Resimler/sil/<?=$rs->resim_id?>" onclick="return confirm('silmek istediğinizden eminmisiniz ?');">
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
      </div>              

                    