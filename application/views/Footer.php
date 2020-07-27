 <div class="footer_top_area"> 
    </div>
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="nav">
        <?php foreach($ustkat as $rs2){?>
		  <li><a href="<?=base_url()?>Kategoriler/Kategorigoster/<?=$rs2->id?>"><?=$rs2->adi?></a></li>
		  <?php }?>
		  <li><a href="<?=base_url()?>Home/bizeyazin">bize ulasin</a></li>
		 
		</ul>

      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2045 The News Reporter Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
        <p><?=$veriler[0]->iletisim?></p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="<?=base_url()?>assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
 </div>
</body>
</html>