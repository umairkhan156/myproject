<?php
	echo "Welcome Umair Testing commit in new branch";
	exit;
?>
<?php
/**
* Template Name Posts: Library Post Template
*
* @package WordPress
* @subpackage LearningRx_Main
*/
?>
<html>
<head>
<title></title>
<META name="robots" content="noindex,follow">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/iframe-style.css" />
<script src="http://aws18.learningrx.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
</head>
<body onresize="adjestfontsizeifrrame()" onload="adjestfontsizeifrrame()"><?php 
while ( have_posts() ) : the_post();
			$post_id 		= get_the_ID();
			$pagetitle		= get_post_meta ($post_id,'default_sub_title',true );
			$default_link	= get_post_meta ($post_id,'default_link',true );
			if(!empty($pagetitle))
			{
				echo '<h2>';				
				if(!empty($default_link))
				{
					echo '<a class="home" target="_top" href="'.$default_link.'" title="'.$pagetitle.'">'.$pagetitle.'</a>';
				}
				else
				{
					echo $pagetitle;
				}
				echo '</h2>';
			}
			the_content();
		endwhile; // end of the loop. ?>
<!--<div onclick="OpenPopUpParent();">click here</div>-->
<script>
function OpenPopUpParent()
{
	window.parent.document.getElementById('results_popup').click();
	return false;
} 
function adjestfontsizeifrrame()
{
	var w = window.parent.innerWidth;
	if(w<768)
	{
		var mvar	=	'<style>body{ font:13px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;}p{ font:13px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;} table.content_tb > tbody > tr > td:last-child {font: 13px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;}</style>';	
		document.getElementById('mystyle').innerHTML=mvar;
	}else{
		var mvar	=	'<style>body{ font:14px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;}p{ font:14px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;} table.content_tb > tbody > tr > td:last-child {font: 14px/1.86 "open_sans","Helvetica Neue","Helvetica",sans-serif !important;}</style>';
		document.getElementById('mystyle').innerHTML=mvar;
	}
	//console.log(w);
}
</script>
<script>

jQuery( "td.chartcover>a").on( "click", function()
{
  jQuery('#tooltip').fadeIn();
});

jQuery( ".chartcover a" ).on( "mouseover", function()
{
  jQuery('#tooltip').fadeIn();
});
jQuery( ".chartcover button" ).on( "click", function()
{
  jQuery('#tooltip').fadeOut();
});
 jQuery( ".chartcover a" ).on( "mouseout", function()
{
	  jQuery('#tooltip').fadeOut();
});

</script>
<style>
.chartcover a
{
	cursor:pointer;
}
</style>
<div id="mystyle"></div>
</body>
</html>