<?php
$this->load->view('admin/Header');
$this->load->view('admin/Sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Kullanıcı Ekleme</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/Kategoriler/eklekaydet" method="POST" class="form-horizontal ">

                   
                    <div class="form-group">
                        <label class="control-label col-lg-4">kategori adı</label>

                        <div class="col-lg-4">
                            <input type="text"  name="adi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">üst id</label>

                        <div class="col-lg-4">
                            <input type="number"  name="ust_id" class="form-control">
                        </div>
                    </div>
				
					
			
                
					<div class="form-group">
                        <label class="control-label col-lg-4">ekleme tarihi</label>

                        <div class="col-lg-4">
                            <input type="date"  name="tarih" class="form-control">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-lg-4">etiket</label>

                        <div class="col-lg-4">
                            <input type="text"  name="keywords" class="form-control">
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