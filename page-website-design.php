<?php

get_header();

?>
   
   <article class="post">
       <h2 class="main-heading">Responsive Websites</h2>
       <div class="portfolio website-design website-design-list">
	       	<div class="row">
	       		
	       		<div class="portfolio-item">
	       			<a rel="lightbox" href="<?php echo get_template_directory_uri ()?>/images/yoyomoidesign.jpg">
	       				<img src="http://chameleonwebsolutions.com/wp-content/uploads/2016/06/yoyomoiscreenshot.jpg"/>
	       				<span class="portfolio-title">YoYoMoi</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<a alias="lightbox" >
	       					View Design >
	       				</a>
	       				<a href="http://yoyomoi.com/" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       			<div class="clearfix"></div>
                </div>
	       		
	       		<div class="portfolio-item">
	       			<a rel="lightbox" href="<?php echo get_template_directory_uri ()?>/images/dogsondutydesign.jpg">
	       				<img src="http://chameleonwebdesign.drawyourpets.com/wp-content/uploads/2016/05/dogsonduty.jpg"/>
	       				<span class="portfolio-title">Dogs On Duty</span>
	       			</a>
		       			<div class="portfolio-links">
		       				<a alias="lightbox" >
		       					View Design >
		       				</a>
		       				<a href="http://dogsondutymo.org/" target="_blank">
		       					View Site >
		       				</a>
		       			</div>
		       			<div class="clearfix"></div>
	       		</div>
	       		
	       		<div class="portfolio-item">
	       			<a rel="lightbox" href="<?php echo get_template_directory_uri ()?>/images/adriennedesign.jpg">
	       				<img src="http://chameleonwebdesign.drawyourpets.com/wp-content/uploads/2016/05/adrienne-1.jpg"/>
	       				<span class="portfolio-title">Adrienne Coleman</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<a alias="lightbox" >
	       					View Design >
	       				</a>
	       				<a href="http://adriennecoleman.drawyourpets.com/" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       			<div class="clearfix"></div>
	       		</div>
	       		
	       		<div class="portfolio-item">
	       			<a rel="lightbox" href="<?php echo get_template_directory_uri ()?>/images/christiedesign.jpg"> 
	       				<img src="http://chameleonwebdesign.drawyourpets.com/wp-content/uploads/2016/06/christie.jpg"/>
	       				<span class="portfolio-title">Christie Schmuke</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<a alias="lightbox" >
	       					View Design >
	       				</a>
	       				<a href="http://christischmuke.drawyourpets.com" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       			<div class="clearfix"></div>
	       		</div>
	       		
	       		<div class="portfolio-item">
	       			<a rel="lightbox" href="<?php echo get_template_directory_uri ()?>/images/TheHamburgerCollectionThumbnail.jpg">
	       				<img src="http://chameleonwebsolutions.com/wp-content/uploads/2017/01/TheHamburgerCollectionThumbnail.jpg" id = "hamburger">
	       				<span class="portfolio-title">The Hamburger Collection</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<a alias="lightbox" >
	       					View Design >
	       				</a>
	       				<a href="http://thehamburgercollection.com/" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       			<div class="clearfix"></div>
                </div>
	       		
	       	</div>
	       	</div>
	       	
	       
	       		
       <div class="clearfix"></div>
       
       <h2 class="main-heading">Javascript Applications</h2>
       <div class="portfolio website-design website-design-list">
	       	
	       	<div class="row">
	       		<div class="portfolio-item">
	       			<a href="http://castaway.drawyourpets.com" target="blank">
	       				<img src="http://chameleonwebdesign.drawyourpets.com/wp-content/uploads/2016/05/castaway.jpg"/>
	       				<span class="portfolio-title">Castaway Vacations</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<!--<a href="#">
	       					View Design >
	       				</a>-->
	       				<a class="full-width" href="http://castaway.drawyourpets.com" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       		</div>
	       		
	       		<div class="portfolio-item">
	       			<a href="http://hardware.drawyourpets.com" target="blank">
	       				<img src="http://chameleonwebdesign.drawyourpets.com/wp-content/uploads/2016/05/hardware.jpg"/>
	       				<span class="portfolio-title">Hardware Store</span>
	       			</a>
	       			<div class="portfolio-links">
	       				<!--<a href="#">
	       					View Design >
	       				</a>-->
	       				<a class="full-width" href="http://hardware.drawyourpets.com" target="_blank">
	       					View Site >
	       				</a>
	       			</div>
	       		</div>
	       		
	       	</div>
       </div>
   </article>
   
<script>
(function($){jQuery(document).ready(function(){
   $(".portfolio-links [alias='lightbox']").click(function(e){
        e.stopPropagation();  
	$(this).closest(".portfolio-item").find("[rel='lightbox'] img").eq(0).trigger('click');
  });
});})(jQuery)
</script>
   <?php

get_footer();

?>