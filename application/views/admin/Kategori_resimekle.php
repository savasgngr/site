<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h3>Kategori resim ekleme</h3>
                <form action="<?=base_url()?>admin/kategoriler/resim_uploads/<?=$id?>" method="post" enctype="multipart/form-data">
				<input type="file" name="userfile" size="20" />
				<br/>
				<input type="submit" value="yükle" />
				</form>
                    </div>
                </div>   
				
			                      
</div>
</div>     
                 <!-- /. ROW  -->           
</div>
             <!-- /. PAGE INNER  -->
</div>
<?php
$this->load->view('admin/footer');
?>