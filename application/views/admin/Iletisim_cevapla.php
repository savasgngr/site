<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?>  
  <div id="page-wrapper" >
            <div id="page-inner">
             		<div class="col-md-7 mid-content-top">
						                    <div class="panel panel-default">
												<div class="panel-heading">
													iletişim mesajları cevaplama formu
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															
															<form role="form" action="<?=base_url()?>admin/Iletisimmesajlari/guncellekaydet/<?=$veri[0]->id?>" method="POST">
															
																<div class="form-group" >
																	<div class="panel panel-default">
																			<div class="panel-heading"  >
																				adı soyadı:<?=$veri[0]->adsoy?>
																			</div>

																		</div>
																	
																</div>
																<div class="form-group">
																	<div class="panel panel-default">
																			<div class="panel-heading" >
																				email adresi:<?=$veri[0]->email?>
																			</div>
																		</div>
																	
                    
																</div>
																<div class="form-group">
																	 
																		<div class="panel panel-default">
																			<div class="panel-heading" >
																				başlık:<?=$veri[0]->baslik?>
																			</div>
																			<div class="panel-body" >
																				mesaj:<?=$veri[0]->mesaj?>
																			</div>
																			<div class="panel-footer" >
																				tel:<?=$veri[0]->tel?>
																			</div>
																		</div>
																	
                    
																</div>
																
																<div class="form-group">
																	<label>cevap</label>
																	<textarea class="form-control" name="cevap" rows="3"><?=$veri[0]->cevap?></textarea>
																	
																</div>
													
																<button type="submit"  class="btn btn-default">Gönder</button>
																

															</form>
															
															 

														 
											</div>
														
														
										</div>
                        </div>
                    </div>
								
						</div>
                      
			</div>
             <!-- /. PAGE INNER  -->
        </div>
<?php
$this->load->view('admin/footer');
?>