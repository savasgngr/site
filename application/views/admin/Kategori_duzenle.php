<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?><div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Kategori Düzenleme</h2>   
                        
                    </div>
                </div>    
<div class="row">
    <div class="col-lg-12">
        <div class="box">
        
            <div id="collapseOne" class="body">
                <form action="<?=base_url()?>admin/Kategoriler/guncellekaydet/<?=$veri[0]->id?>" method="POST" class="form-horizontal" ">

                    <div class="form-group">
                        <label class="control-label col-lg-4">kategori adı</label>
                        <div class="col-lg-4">
                            <input type="text"  name="adi" value="<?=$veri[0]->adi?>"class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-4">üst id</label>

                        <div class="col-lg-4">
                            <input type="number"  name="ust_id" value="<?=$veri[0]->ust_id?>" class="form-control">
                        </div>
                    </div>
                    
				
					
					<div class="form-group">
                        <label class="control-label col-lg-4">tarih</label>

                        <div class="col-lg-4">
                            <input type="date"  name="tarih" value="<?=$veri[0]->tarih?>" class="form-control">
                        </div>
                    </div>
					  <div class="form-group">
                        <label class="control-label col-lg-4">etiketler</label>

                        <div class="col-lg-4">
                            <input type="text"  name="keywords" value="<?=$veri[0]->keywords?>" class="form-control">
                        </div>
                    </div>
					
                
                
                   
				   <button type="submit" class="btn btn-info icon-blue ">Kaydet</button>
				 
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>	
                               
</div>

<?php
$this->load->view('admin/footer');
?>