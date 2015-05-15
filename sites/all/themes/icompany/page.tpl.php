<?php
$help = $page['help'];
$content = $page['content'];
$footer = $page['footer'];
$page_top = $page['page_top'];
$page_bottom = $page['page_bottom'];

$main_menu = $page['main_menu'];

$social_region = $page['social'];
$search_box = $page['search_box'];
$slider_region = $page['slider_region'];
$highlighted = $page['highlighted'];
$highlighted_2 = $page['highlighted_2'];

$column_block1 = $page['column_block1'];
$column_block2 = $page['column_block2'];
$column_block3 = $page['column_block3'];
$column_block4 = $page['column_block4'];
$column_block5 = $page['column_block5'];
$column_block6 = $page['column_block6'];

$column_block1_second_row = $page['column_block1_second_row'];
$column_block2_second_row = $page['column_block2_second_row'];
$column_block3_second_row = $page['column_block3_second_row'];
$column_block4_second_row = $page['column_block4_second_row'];
$column_block5_second_row = $page['column_block5_second_row'];
$column_block6_second_row = $page['column_block6_second_row'];

$under1 = $page['under1'];
$under2 = $page['under2'];
$under3 = $page['under3'];
$under4 = $page['under4'];
$under5 = $page['under5'];
$under6 = $page['under6'];

$bottom1 = $page['bottom1'];
$bottom2 = $page['bottom2'];
$bottom3 = $page['bottom3'];
$bottom4 = $page['bottom4'];
$bottom5 = $page['bottom5'];
$bottom6 = $page['bottom6'];

$footer1 = $page['footer1'];
$footer2 = $page['footer2'];
$footer3 = $page['footer3'];
$footer4 = $page['footer4'];
$footer5 = $page['footer5'];
$footer6 = $page['footer6'];

$modal = $page['modal'];
$modal_2 = $page['modal_2'];
$modal_3 = $page['modal_3'];

$tab1 = $page['tab1'];
$tab2 = $page['tab2'];
$tab3 = $page['tab3'];
$tab4 = $page['tab4'];
$tab5 = $page['tab5'];
$tab6 = $page['tab6'];
$tabs_sidebar = $page['tabs_sidebar'];

$content_top = $page['content_top'];
$content_bottom = $page['content_bottom'];
$left_sidebar = $page['left_sidebar'];
$right_sidebar = $page['right_sidebar'];


// this will test if block regions which are above orange titile regions exist or not. if exist, normal page title will show else, orange background page title will show
$upper_blocks1 = region_blocks_exist($slider_region, $highlighted, $highlighted_2);
$upper_blocks2 = region_blocks_exist($column_block1, $column_block2, $column_block3, $column_block4, $column_block5, $column_block6);
$upper_blocks3 = region_blocks_exist($column_block1_second_row , $column_block2_second_row , $column_block3_second_row , $column_block4_second_row,  $column_block5_second_row , $column_block6_second_row );
$upper_blocks4 = region_blocks_exist($tab1,$tab2,$tab3,$tab4,$tab5,$tab6,$tabs_sidebar);

function upperRegionsExist($a = NULL, $b = NULL, $c = NULL , $d = NULL){
	if($a == TRUE || $b == TRUE || $c == TRUE ||$d == TRUE){
		return TRUE;
	}
	else {
		return FALSE;
	}
}

// for bread crumb use
$you_here = t("You are here: ");

?>
	
<!--<div id="testBed" class="row" style="padding: 100px;"></div> -->

<div class="container-fluid">
	<div id="topBar">
		<div class="clearfix row-fluid">
			<div id="top-bar-inner">
				<!-- Login | Register links -->
				<div class="span3 loginlinks">
					<?php if(theme_get_setting('use_login_links') == 1) { ?>
						<div id="user_links">			
							<?php if (!($user->uid)) { print user_login_links(); } else { print  icompany_welcome_user(); } ?>	
						</div>
					<?php } ?>
				</div>
				
				
				<!--Social Region -->
				<?php if($social_region) {?>
				<div class="social-region <?php if($search_box) print ' span7 '; else print ' span9 '?> hidden-phone">
					<div class="pull-right inner">
						<?php print render($social_region) ?>
					</div>
				</div>
				<?php } ?>
				
				
				<!--Search Block -->
				<?php if($search_box) {?>			
					<div class="search-box-top span2 <?php if(!$social_region) print ' offset7 '; ?> ">
						<div class="inner">
							<?php print render($search_box) ?>
						</div>
					</div>
				<?php } ?>
				
				
			</div>
		</div>
	</div><!--topBar-->
</div>


<div class="container-fluid theme-border" id="page-wrapper">
	
	<!--Header area -->
	<header class="row-fluid" id="header">
		
		<div id="header_left" class="span5 clearfix">
			<div class="inner">	
			<?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
				<div id="texttitles">
					  <?php if ($site_name) { ?><h1 id='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
				      <?php if ($site_slogan) { ?><span id="slogan"><?php print $site_slogan ?></span><?php } ?>
				</div>
			</div>
		</div>
		
		<div id="wap-menu" class="span7">
			<div class="pull-right main_menu_container">
				
				<?php
		            /*
		            if ($main_menu) {
		            $pid = variable_get('menu_main_links_source', 'main-menu');
		            $tree = menu_tree($pid);
		            $main_menu = drupal_render($tree);
		            }else{
		            $main_menu = FALSE;
		            }
		            ?>
		            <?php
		            if ($main_menu): print $main_menu; endif;
					 * */
		        ?> 
		        
		        <?php if($main_menu) print render($main_menu) ?>
		        
		        <script type="text/javascript">
					(function ($) {	
							/* MENU DESCRIPTION MAKER*/								
							var wapoWindowWidth = $(window).width();
							
							// fetch titles and add descriptions
							$('.content > #nav > li > a').each(function(){
								var mainMenuTitle = $(this).attr('title');
								var linkParent = $(this).parent();
								
								$('<span>', {
									'class' : 'tip hidden-phone hidden-tablet',
									'text' : mainMenuTitle,
								}).appendTo(linkParent);
							});		
									
							/* END MENU DESCRIPTION MAKER*/
					})(jQuery);
				</script>
					
			</div>
		</div>
		
		<?php if(!$slider_region && !$title) { ?>
			<div id="header-inner-shadow"></div>
		<?php } ?>
		
	</header><!--Header area -->
	
	
	<!--slider-->
	<?php  if($slider_region){ ?>
	<div id="main_slider" class="clearfix row-fluid <?php print theme_get_setting('slider_type').'-wrap'; ?>">
		<div id="slider-inner" class="span12">
			<div id="slider-inner-shadow"></div>
			<?php 
				$slider_type = theme_get_setting('slider_type') ? theme_get_setting('slider_type') : 'nivo';
				print  icomp_get_slider_html($slider_type) ;
				
				
			?>
			
			<?php if(theme_get_setting('slider_type') == 'piecemaker') { ?>							
				  <center>
				    <div id="piecemaker">
				      <p>Flash not supported by browser. <a href="http://get.adobe.com/flashplayer/">Get it </a> </p>
				    </div>
				  </center>					
			<?php } ?>
			
			<div id="slider-inner-shadow-bottom"></div>
		</div>
	</div> 		
	<?php  } ?>
	
	
	<!-- content zone -->
	<div id="zone1" class="row-fluid">
		
		<?php if($highlighted || $highlighted_2) { ?>
		<div class="row-fluid">
			<?php if($highlighted) {?>
			<div id="highlighted" class="<?php if(!$highlighted_2) print 'span12'; else print 'span9'; ?>">
				<?php print render($highlighted) ?>
			</div>
			<?php }?>
			
			<?php if($highlighted_2) {?>
			<div id="highlighted_2" class="<?php if(!$highlighted) print 'span12'; else print 'span3'; ?>">		
				<?php print render($highlighted_2) ?>
			</div>
			<?php }?>
			
			<span class="border"></span>
		</div>
		<?php } ?>
		
		
		<?php if(region_blocks_exist($column_block1, $column_block2, $column_block3, $column_block4, $column_block5, $column_block6)) {?>
		<span class="divider"></span>
		<div id="column-region" class="row-fluid">
			
			<?php $column_blocks_span = get_block_span($column_block1, $column_block2, $column_block3, $column_block4, $column_block5, $column_block6); ?>
			<?php $column_block_count = count_blocks($column_block1, $column_block2, $column_block3, $column_block4, $column_block5, $column_block6) ?>
			
			
			<?php if($column_block1) {?>
				<div id="column_block1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($column_block_count == 5) print ' span4 '; else print $column_blocks_span ?>">
					<?php print render($column_block1) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block2) {?>
				<div id="column_block2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block2) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block3) {?>
				<div id="column_block3" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block3) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block4) {?>
				<div id="column_block4" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block4) ?>
				</div>
			<?php } ?>
			<?php if($column_block5) {?>
				<div id="column_block5" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block5) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block6) {?>
				<div id="column_block6" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block6) ?>
				</div>
			<?php } ?>
		</div>
		<span class="border-color"></span>
		<?php } ?>
		
		
		<?php if(region_blocks_exist($column_block1_second_row , $column_block2_second_row , $column_block3_second_row , $column_block4_second_row,  $column_block5_second_row , $column_block6_second_row )) {?>
		<span class="divider"></span>
		<div id="column-region-row2" class="row-fluid">
			
			<?php $column_blocks_span = get_block_span($column_block1_second_row , $column_block2_second_row , $column_block3_second_row , $column_block4_second_row , $column_block5_second_row , $column_block6_second_row); ?>
			<?php $column_row2_block_count = count_blocks($column_block1, $column_block2, $column_block3, $column_block4, $column_block5, $column_block6) ?>
			
			<?php if($column_block1_second_row ) {?>
				<div id="column_block1-row2" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($column_row2_block_count == 5) print ' span4 '; else print $column_blocks_span ?>">
					<?php print render($column_block1_second_row ) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block2_second_row ) {?>
				<div id="column_block2-row2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block2_second_row ) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block3_second_row ) {?>
				<div id="column_block3-row2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block3_second_row ) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block4_second_row ) {?>
				<div id="column_block4-row2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block4_second_row ) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block5_second_row ) {?>
				<div id="column_block5-row2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block5_second_row ) ?>
				</div>
			<?php } ?>
			
			<?php if($column_block6_second_row ) {?>
				<div id="column_block6-row2" class="<?php print $column_blocks_span ?>">
					<?php print render($column_block6_second_row ) ?>
				</div>
			<?php } ?>
		</div>
		<span class="border"></span>
		<?php } ?>
		
		
		<!-- bootstrap tabs implementation on this region-->
		<?php if(region_blocks_exist($tab1,$tab2,$tab3,$tab4,$tab5,$tab6,$tabs_sidebar )) { 
			  $tabs_exist = region_blocks_exist($tab1,$tab2,$tab3,$tab4,$tab5,$tab6 );	?>
		<span class="divider"></span>
			<div id="tabs-region" class="row-fluid">
				
				<?php if($tabs_exist) {?>
				<div id="tabs-block" class="<?php if(region_blocks_exist($tabs_sidebar)) print ' span9 '; else print ' span12 ' ?>">
					 <div class="inner">
						 <div class="tabbable tabs-left"><!--bootstrap tabs implementation-->
						 	
						 	<ul class="nav nav-tabs">	
						 		 <!--tabs-->
								 <?php if($tab1) {?>					 	
								 	<li <?php if($tab1) print 'class="active"' ?> ><a href="#tab1" data-toggle="tab"><?php print theme_get_setting('tabname1'); ?></a></li>					 	
								 <?php } ?>
								 
								 <?php if($tab2) {?>					 	
								 	<li <?php if(!$tab1) print 'class="active"' ?> ><a href="#tab2" data-toggle="tab"><?php print theme_get_setting('tabname2'); ?></a></li>					 	
								 <?php } ?>
								 
								 <?php if($tab3) {?>					 	
								 	<li <?php if(!$tab1 && !$tab2) print 'class="active"' ?> ><a href="#tab3" data-toggle="tab"><?php print theme_get_setting('tabname3'); ?></a></li>					 	
								 <?php } ?>
								 
								 <?php if($tab4) {?>					 	
								 	<li <?php if(!$tab1 && !$tab2 && !$tab3) print 'class="active"' ?>><a href="#tab4" data-toggle="tab"><?php print theme_get_setting('tabname4'); ?></a></li>					 	
								 <?php } ?>
								 
								 <?php if($tab5) {?>					 	
								 	<li <?php if(!$tab1 && !$tab2 && !$tab3 && !$tab4) print 'class="active"' ?>><a href="#tab5" data-toggle="tab"><?php print theme_get_setting('tabname5'); ?></a></li>					 	
								 <?php } ?>
								 
								 <?php if($tab6) {?>					 	
								 	<li <?php if(!$tab1 && !$tab2 && !$tab3 && !$tab4 && $tab5) print 'class="active"' ?>><a href="#tab6" data-toggle="tab"><?php print theme_get_setting('tabname6'); ?></a></li>					 	
								 <?php } ?>
						 	</ul>
					 		
					 		<!--tabs content -->
						 	<div class="tab-content">
						 		  <?php if($tab1) {?>					 	
								 	<div class="tab-pane <?php if($tab1) print ' active ' ?>" id="tab1">
								 		<?php print render($tab1 ) ?>
								 	</div>					 	
								 <?php } ?>
								 
								 <?php if($tab2) {?>					 	
								 	<div class="tab-pane  fade  <?php if(!$tab1) print ' active ' ?>" id="tab2">
								 		<?php print render($tab2 ) ?>
								 	</div>				 	
								 <?php } ?>
								 
								 <?php if($tab3) {?>					 	
								 	<div class="tab-pane  fade  <?php if(!$tab1 && !$tab2) print ' active ' ?>" id="tab3">
								 		<?php print render($tab3 ) ?>
								 	</div>					 	
								 <?php } ?>
								 
								 <?php if($tab4) {?>					 	
								 	<div class="tab-pane  fade  <?php if(!$tab1 && !$tab2 && !$tab3) print ' active ' ?>" id="tab4">
								 		<?php print render($tab4) ?>
								 	</div>					 	
								 <?php } ?>
								 
								 <?php if($tab5) {?>					 	
								 	<div class="tab-pane  fade  <?php if(!$tab1 && !$tab2 && !$tab3 && !$tab4) print ' active ' ?>" id="tab5">
								 		<?php print render($tab5) ?>
								 	</div>					 	
								 <?php } ?>
								 
								 <?php if($tab6) {?>					 	
								 	<div class="tab-pane  fade  <?php if(!$tab1 && !$tab2 && !$tab3 && !$tab4 && $tab5) print ' active ' ?>" id="tab6">
								 		<?php print render($tab6 ) ?>
								 	</div>					 	
								 <?php } ?>
						 		 
						 	
						 	</div><!--tab content -->
						 </div><!--tabable--> 
					 </div><!--tab region inner-->
				</div>
				<?php } ?>
				
				<?php if($tabs_sidebar ) {?>
				<div id="tabs-Sidebar" class="span3 <?php if(!region_blocks_exist($tabs_exist)) print ' offset9 ';  ?>">
					<?php print render($tabs_sidebar ) ?>
				
				</div>				
				<?php } ?>
			
			</div>	
		<span class="divider"></span>
		<span class="border"></span>
		<?php } ?>
		
		
		<!--TITLE REGION-->
		<?php if(($title) && !(upperRegionsExist($upper_blocks1, $upper_blocks2, $upper_blocks3, $upper_blocks4))){ ?>
			<div id="title-region" class="row-fluid">	
				<div class="span12">
					<div class="inner">
						<?php print render($title_prefix); ?>
						<h1 class="page-title"><?php print $title ?></h1>  
						<?php print render($title_suffix); ?>
					</div>
				<?php if(!empty($breadcrumb)){  if(theme_get_setting('icompany_breadcrumb') == '1') print '<div class="breadcrumb">' . "<div id='home-icon'> <a href='$base_path'>" . ' <span class="icon-home"></span></a> </div> ' . $breadcrumb . ' &raquo; ' . breadcrumb_title($title) . '</div>'; elseif(!empty($breadcrumb)) print '<div class="breadcrumb">' . $breadcrumb . '</div>';  ?><?php } ?>						
				</div>
			</div>
		<?php } ?>
		
		
		<div id="zone2" class="row-fluid">
		
		<?php
		$left_right_count = count_blocks($left_sidebar, $right_sidebar);
		switch ($left_right_count) {
			case '0':
				$content_span = ' span12 ';
				break;
			
			case '1':
				$content_span = ' span9 ';
				break;
				
			case '2';
				$content_span = ' span6 ';
			break;
			
			default: 
				$content_span = ' span12 ';
				break;
		}
		?>
		
			<?php if($left_sidebar) {?>
				<div id="left-sidebar" class="span3">
					<?php print render($left_sidebar); ?>
				</div>
			<?php } ?>
			
			<div id="content-area" class="<?php print $content_span; ?>">
				<div class="inner <?php if(!$left_sidebar) print ' inner-no-left-sidebar '; if(!$right_sidebar) print ' inner-no-right-sidebar '; if(!$right_sidebar && !$left_sidebar) print ' inner-no-sidebar '; ?>">
					<?php if($content_top) {?>
						<div id="content-top">
							<?php print render($content_top); ?>
						</div>
					<?php } ?>
					
					<div id="content-region">
				        <?php if(!empty($tabs)){ ?><div class="tabs"><?php print render($tabs ); ?></div> <?php } ?>
				        <?php if ($show_messages) { print $messages; } ?>
				        <?php if($help){ ?><?php print render($help); ?><?php } ?>
				        <?php if(($title) && (upperRegionsExist($upper_blocks1, $upper_blocks2, $upper_blocks3, $upper_blocks4))){ ?>
				            <?php if(!empty($breadcrumb)){  if(theme_get_setting('icompany_breadcrumb') == '1') print '<div class="breadcrumb">' . $you_here . $breadcrumb . ' &raquo; ' . breadcrumb_title($title) . '</div>'; elseif(!empty($breadcrumb)) print '<div class="breadcrumb">' . $breadcrumb . '</div>';  ?><?php } ?>     
				        	<?php print render($title_prefix); ?>
								<h1 class="page-title"><?php print $title ?></h1>  
							<?php print render($title_suffix); ?>
				        <?php } ?>	
			              <?php if ($action_links): ?>
					        <ul class="links">
					          <?php print render($action_links); ?>
					        </ul>
					      <?php endif; ?>		        
				        <?php  print render($content); ?>	        
				        <?php if($feed_icons){ ?><?php print $feed_icons; ?><?php } ?>	
				        
					</div>
					
					<?php if($content_bottom) {?>
						<span class="divider"></span>
						<div id="content-bottom">
							<?php print render($content_bottom); ?>
						</div>
						
					<?php } ?>	
				</div>	
			</div><!--content area-->
			
			<?php if($right_sidebar) {?>
				<div id="right-sidebar" class="span3">
					<?php print render($right_sidebar); ?>	
				</div>
			<?php } ?>
			
		</div><!--content zone-->
	</div>
	
	
	
	
	<?php if(region_blocks_exist($under1, $under2, $under3, $under4, $under5, $under6)) {?>
		<div id="under-content-region" class="row-fluid">
			
			<?php $under_blocks_span = get_block_span($under1, $under2, $under3, $under4, $under5, $under6); ?>
			<?php $under_block_count = count_blocks($under1, $under2, $under3, $under4, $under5, $under6) ?>
			
			
			<?php if($under1) {?>
				<div id="under1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($under_block_count == 5) print ' span4 '; else print $under_blocks_span ?>">
					<?php print render($under1) ?>
				</div>
			<?php } ?>
			
			<?php if($under2) {?>
				<div id="under2" class="<?php print $under_blocks_span ?>">
					<?php print render($under2) ?>
				</div>
			<?php } ?>
			
			<?php if($under3) {?>
				<div id="under3" class="<?php print $under_blocks_span ?>">
					<?php print render($under3) ?>
				</div>
			<?php } ?>
			
			<?php if($under4) {?>
				<div id="under4" class="<?php print $under_blocks_span ?>">
					<?php print render($under4) ?>
				</div>
			<?php } ?>
			<?php if($under5) {?>
				<div id="under5" class="<?php print $under_blocks_span ?>">
					<?php print render($under5) ?>
				</div>
			<?php } ?>
			
			<?php if($under6) {?>
				<div id="under6" class="<?php print $under_blocks_span ?>">
					<?php print render($under6) ?>
				</div>
			<?php } ?>
		</div>
		<?php } ?>
	
	
	
	
	
	<div id="zone3">
		<!--bottom region -->
		<?php if( region_blocks_exist($bottom1 , $bottom2 , $bottom3 , $bottom4,  $bottom5 , $bottom6 )) {?>	
		<div id="bottom-region" class="row-fluid">
			
			<?php $bottom_span = get_block_span($bottom1 , $bottom2 , $bottom3 , $bottom4,  $bottom5 , $bottom6); ?>
			<?php $bottom_blocks_count = count_blocks($bottom1 , $bottom2 , $bottom3 , $bottom4,  $bottom5 , $bottom6) ?>
			
			<?php if($bottom1 ) {?>
				<div id="bottom1" class="<?php /* since 12 grids cannot be divided by 5, we use span4 for first block */ if($bottom_blocks_count == 5) print ' span4 '; else print $bottom_span ?>">
					<?php print render($bottom1 ) ?>
				</div>
			<?php } ?>
			
			<?php if($bottom2 ) {?>
				<div id="bottom2" class="<?php print $bottom_span ?>">
					<?php print render($bottom2 ) ?>
				</div>
			<?php } ?>
			
			<?php if($bottom3 ) {?>
				<div id="bottom3" class="<?php print $bottom_span ?>">
					<?php print render($bottom3 ) ?>
				</div>
			<?php } ?>
			
			<?php if($bottom4 ) {?>
				<div id="bottom4" class="<?php print $bottom_span ?>">
					<?php print render($bottom4 ) ?>
				</div>
			<?php } ?>
			
			<?php if($bottom5 ) {?>
				<div id="bottom5" class="<?php print $bottom_span ?>">
					<?php print render($bottom5 ) ?>
				</div>
			<?php } ?>
			
			<?php if($bottom6 ) {?>
				<div id="bottom6" class="<?php print $bottom_span ?>">
					<?php print render($bottom6 ) ?>
				</div>
			<?php } ?>
			
			
			
		</div>

		<?php } ?>
		
		<!--footer region-->
		<?php if( region_blocks_exist($footer1 , $footer2 , $footer3 , $footer4,  $footer5 , $footer6 )) {?>	
		
		<div id="footer-region" class="row-fluid">
			 <div class="footer-inner">
			<?php 
			
			$footerLeft = region_blocks_exist($footer1 , $footer2 , $footer3 , $footer4,  $footer5 );
			$footerRight = region_blocks_exist($footer6);
			$footerSmalls = region_blocks_exist($footer2 , $footer3 , $footer4 , $footer5);
			
			 
			
			?>
			
			<?php if($footerLeft == TRUE) {?>
			<div id="footer-left" class="<?php if(!$footerRight) print 'span12'; else print 'span9'; ?>">
				
				
				<?php if($footer1) {?>
				<div class="row-fluid" id="footer1">
					<div class="span12">
						<div class="inner">
							<?php  print render($footer1) ?>					
						</div>
					</div>
					 
				</div>
				<?php } ?>
				
				<?php if($footerSmalls == TRUE) {?>
					<?php $footerSmallsSpan = get_block_span($footer2 , $footer3 , $footer4 , $footer5); ?>
					<div class="row-fluid" id="footerSmalls">
						
						<?php if($footer2) {?>
							<div class="<?php print $footerSmallsSpan ?>">
								<?php print render($footer2) ?>
							</div>
						<?php } ?>
						
						<?php if($footer3) {?>
							<div class="<?php print $footerSmallsSpan ?>">
								<?php print render($footer3) ?>
							</div>
						<?php } ?>
						
						<?php if($footer4) {?>
							<div class="<?php print $footerSmallsSpan ?>">
								<?php print render($footer4) ?>
							</div>
						<?php } ?>
						
						<?php if($footer5) {?>
							<div class="<?php print $footerSmallsSpan ?>">
								<?php print render($footer5) ?>
							</div>
						<?php } ?>
						
						
					</div>
				<?php } ?>
				
				
			</div>
			<?php } ?>
			
			<?php if($footer6) {?>
			<div id="footer-right" class="<?php if(!$footerLeft) print 'span12'; else print 'span3'; ?>">
				<?php print render($footer6) ?>
			</div>
			<?php } ?>
			
			<span class="divider"> </span>
			</div>
		</div>
		 
		<?php } ?>
		
		
		<div id="footer-bar" class="row-fluid">
			<?php if ($secondary_nav):  ?>
				<div id="secondary_menu" class="span5">
			      <?php print $secondary_nav; ?> 
			    </div>
			<?php endif; ?>
			
			<div id="footer-note" class="span7">
				<div class="inner">
			      <?php if(theme_get_setting('footer_note')) { print theme_get_setting('footer_note'); }  print render($footer); ?>
			    </div>
		    </div>
		</div><!--footer bar-->
		
	</div>
	
	
	
</div><!--container fluid and page wrapper-->
<span class="divider"></span>

<?php
$toTop = t('Go to top');
if(theme_get_setting('show_feedback_link') == 1) {
$give_feedback = t('Give us your valuable feedback');
?>
<div id="feedback-div" class="visible-desktop">
	<a data-original-title="<?php print $give_feedback ?>" rel="tooltip" data-placement="right" id="feedback-link" href="#myModal" role="button"  data-toggle="modal"><img src="<?php print base_path() . path_to_theme() ?>/img/feedback.png" alt="" /></a>
</div>
<?php } ?>

<?php if($modal) print render($modal); ?>
<?php if($modal_2) print render($modal_2); ?>
<?php if($modal_3) print render($modal_3); ?>

<div id="toTop" ><img class="visible-desktop" src="<?php print base_path() . path_to_theme() ?>/img/toTop.png" alt="<?php print $toTop ?>" /></div>


<div id="preLoad" style="display:none; visibility:hidden;"> <!-- Preload Images for backgrounds -->
<?php if(drupal_is_front_page()) { ?>  <img style="display:none; visibility:hidden;" src="<?php print base_path() . path_to_theme() ?>/img/title-bg-shade.png" alt="" /><?php } ?>
</div>