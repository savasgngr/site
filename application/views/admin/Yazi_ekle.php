<?php
$this->load->view('admin/Header');
$this->load->view('admin/Sidebar');
?><script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin yazi Ekleme</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/Yazilar/eklekaydet" method="POST" class="form-horizontal ">

                   
                    <div class="form-group">
                        <label class="control-label col-lg-4">konusu</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adi" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">etiket</label>

                        <div class="col-lg-4">
                            <input type="text"  name="keywords" class="form-control">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-lg-4">yazar id si</label>

                        <div class="col-lg-4">
                            <input type="number"  name="yazar_id" class="form-control">
                        </div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-lg-4">kategori id si</label>

                        <div class="col-lg-4">
                            <input type="number"  name="kategori_id" class="form-control">
                        </div>
                    </div>
					  
					<div class="form-group">
                        <label class="control-label col-lg-4">ekleme tarihi</label>

                        <div class="col-lg-4">
                            <input type="date"  name="tarih" class="form-control">
                        </div>
                    </div>
					
                   
						<div class="form-group">
                        <label class="control-label col-lg-4">içerik</label>
							
                        <div class="col-lg-4">
						
						<textarea name="icerik" id="icerik">
						
						</textarea>
						<script>
						CKEDITOR.replace('icerik');
						</script>
                           
                        </div>
                    </div>
				
					
					
					
						
							<div class="form-group">
                        <label class="control-label col-lg-4">açıklama</label>
							
                        <div class="col-lg-4">
						
						<textarea name="aciklama" id="aciklama">
						</textarea>
						<script>
						CKEDITOR.replace('aciklama');
						</script>
                           
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