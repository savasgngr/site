<!-- /. NAV TOP  -->
       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
				
                    <img src="<?=base_url()?>uploads/login/<?=$this->session->oturum["resim"]?>" class="user-image img-responsive"/>
					<h2><?=$this->session->oturum["yetki"]?></h2><h2><?=$this->session->oturum["adsoy"]?></h2>
					
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="<?=base_url()?>admin/Home"><i class="glyphicon glyphicon-home "></i> Ana Sayfa</a>
                    </li>
                     <li>
                        <a  href="<?=base_url()?>admin/kullanicilar"><i class="fa fa-desktop fa"></i>Kullanıcılar</a>
					
                    </li>
						<li>
                        <a  href="<?=base_url()?>admin/uyeler"><i class="glyphicon glyphicon-user "></i> Üyeler</a>
                    </li>
     	                  <li>
                        <a  href="<?=base_url()?>admin/kategoriler"><i class="glyphicon  glyphicon-th "></i> Kategoriler</a>
                    </li>
                     
					   <li>
                        <a href="#"><i class="glyphicon glyphicon-th-large "></i>Galeri<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?=base_url()?>admin/resimler">Resimler</a>
                            </li>
                            
							
                            
                        </ul>
                      </li>  
                   
					
	                
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-comment"></i> Mesajlar<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?=base_url()?>admin/Iletisimmesajlari">İletişim mesajları </a>
                            </li>
                           
							
                            
                        </ul>
                      </li>  
					  <li>
                        <a  href="<?=base_url()?>admin/Yazilar"><i class="glyphicon glyphicon-pencil"></i>yazılar</a>
                    </li>
					<li>
                        <a  href="<?=base_url()?>admin/Ayarlar"><i class="glyphicon glyphicon-cog"></i>Ayarlar</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->