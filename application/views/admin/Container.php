        <div id="page-wrapper" >
            <div id="page-inner">
			<div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        
                    </div>
                </div>       
             		<div class="col-md-12 mid-content-top">
							    <div class="row">
                <div class="col-md-6 col-sm-4 col-xs-4">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <a href="<?=base_url()?>admin/Iletisimmesajlari"><i class="fa fa-envelope-o"></i></a>
                </span>
                <div class="text-box" >
				<?php $toplammesaj=0; 
				foreach($mesaj as $rs) {
					
					if($rs->durum!='okundu')
					{$toplammesaj=$toplammesaj+1;}
				}?>
                    <p class="main-text"><?=$toplammesaj?> Mesaj</p>
                   
                </div>
             </div>
		     </div>
                    <div class="col-md-6 col-sm-4 col-xs-4">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <a href="<?=base_url()?>admin/Yazilar"><i class="fa fa-bars"></i></a>
                </span>
                <div class="text-box" >
				<?php $toplammesaj=0; 
				foreach($yazi as $rs) {
					
					$toplammesaj=$toplammesaj+1;
				}?>
				
                    <p class="main-text"><?=$toplammesaj?> Yazı</p>
                    
                </div>
             </div>
		     </div>
                    <div class="col-md-6 col-sm-4 col-xs-4">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <a href="<?=base_url()?>admin/Uyeler"><i class="fa fa-user"></i></a>
                </span>
                <div class="text-box" >
				<?php $toplammesaj=0; 
				foreach($uye as $rs) {
					
					$toplammesaj=$toplammesaj+1;
				}?>
                    <p class="main-text"><?=$toplammesaj?> Üye</p>
                    
                </div>
             </div>
		     </div>
           
			</div>	
								
						</div>
                      
			</div>
             <!-- /. PAGE INNER  -->
        </div>