<?php
$kcselector = get_option('kcselector');
if($kcselector != "")
{
$ktitle = get_option( 'ktitle', "TEXTO" );
$kminrange = get_option( 'kminrange', 10 );
if(!$kminrange) $kminrange = 10;
$kmaxrange = get_option( 'kmaxrange', 20 );
if(!$kmaxrange) $kmaxrange = 20;
$kbasecolor1 = get_option( 'kbasecolor1','#404040');
if(!$kbasecolor1) $kbasecolor1 = '#404040';
$kbasecolor2 = get_option( 'kbasecolor2','#404040');
if(!$kbasecolor2) $kbasecolor2 = '#404040';
$kbasecolor3 = get_option( 'kbasecolor3','#404040');
if(!$kbasecolor3) $kbasecolor3 = '#404040';
$kbasecolor4 = get_option( 'kbasecolor4','#404040');
if(!$kbasecolor4) $kbasecolor4 = '#404040';
$kbasecolor5 = get_option( 'kbasecolor5','#404040');
if(!$kbasecolor5) $kbasecolor5 = '#404040';
$kfont1= get_option( 'kfont1');
$kfont2= get_option( 'kfont2');
$kfont3= get_option( 'kfont3');
?>

<?php 
wp_enqueue_script( 'jquery' );

//wp_enqueue_script( 'jquery-ui-core' );
wp_enqueue_script( 'jquery-ui-slider'); 
wp_register_script( 'kscript', plugins_url( 'kscript.js' , __FILE__ ), array( 'jquery-ui-slider' ) );
wp_enqueue_script( 'kscript' );
$jquery_css_base = 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.20/themes/base/jquery-ui.css';
										
wp_enqueue_style ( 'jquery-ui-standard-css', $jquery_css_base );
wp_enqueue_style ( 'jquery-ui-css', plugin_dir_url( __FILE__ ).'kstyle.css' );
?>

<div id="ktext" class="widget-wrapper widget_text">
	<div class="ktitle"><?php if($ktitle)echo $ktitle; ?></div>

<div id="kcselector" data-selector="<?php if($kcselector) echo $kcselector; ?>" style="display:none;">&nbsp;</div>
<div id="kmin" data-min="<?php if($kminrange) echo $kminrange; ?>" style="display:none;">&nbsp;</div>
<div id="kmax" data-max="<?php if($kmaxrange) echo $kmaxrange; ?>" style="display:none;">&nbsp;</div>
<div id="ftext" class	="ftext" style="font-family:<?php if($kfont1)echo $kfont1;?>">Aa</div>
<div id="kslider"></div>
<div class="fcolor" id="fcolor">
	<ul>
		<li id="fcolor1" data-col="<?php if($kbasecolor1) echo $kbasecolor1; ?>"  class="active"></li>
		<li id="fcolor2" data-col="<?php if($kbasecolor2) echo $kbasecolor2; ?>"></li>
		<li id="fcolor3" data-col="<?php if($kbasecolor3) echo $kbasecolor3; ?>"></li>
		<li id="fcolor4" data-col="<?php if($kbasecolor4) echo $kbasecolor4; ?>"></li>
		<li id="fcolor5" data-col="<?php if($kbasecolor5) echo $kbasecolor5; ?>"></li>
	</ul>
</div>
<div class="selfont" id="selfont">
	<ul>
		<li id="font1" class="active" fdata="<?php if($kfont1)echo $kfont1;?>" style="font-family:<?php if($kfont1)echo $kfont1;?>">Aa</li> 
		<li id="font2" fdata="<?php if($kfont2)echo $kfont2;?>"style="font-family:<?php if($kfont2)echo $kfont2;?>">Aa</li>
		<li id="font3" fdata="<?php if($kfont3)echo $kfont3;?>"style="font-family:<?php if($kfont3)echo $kfont3;?>">Aa</li>
	</ul>
</div>
</div>
<?php } ?>