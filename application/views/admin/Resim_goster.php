<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Resim bilgileri gösterme</h2>   
                        
                    </div>
                </div>    
						<div class="box span6">
					
					<div class="box-content">
						<table class="table table-striped" action="<?=base_url()?>admin/Resimler/goster/<?=$veri[0]->id?>">
							  <thead>
								  <tr>
									  <th>id</th>
									  <th>yazi_id</th>
									  <th>resim</th>
									  
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									<td class="center"><?=$veri[0]->id?></td>
									<td class="center"><?=$veri[0]->yazi_id?></td>
									<td class="center"><?=$veri[0]->resim?></td>
									
									                                  
								</tr>
								      
								                    
							  </tbody>
							  </table>
							  
							 <button  action="<?=base_url()?>admin/Resimler/geri" class="btn btn-info icon-blue ">geri</button>
						  
						   
					</div>
				</div><!--/span-->
			</div><!--/row-->
	
                               
</div>
   


<?php
$this->load->view('admin/footer');
?>