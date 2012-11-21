<?php
/*
Plugin Name: kfont
Plugin URI: http://runwalsoft.com
Description: Kfont plugin is for user to change of font,color and size of particular css selector. 
Version: 1.0
Author: Pritam Mundada
Author URI: http://runwalsoft.com
License: 
 Copyright 2012  PRITAM MUNDADA  (email : pritam@runwalsoft.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 1, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'admin_menu', 'kf_menu' );

function kf_menu() {
	add_options_page( 'My Plugin Options', 'kfont', 'manage_options', 'kfont.php', 'my_plugin_options' );
}

function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}
/**** Register widget *************/
class KWidget extends WP_Widget {

	function KWidget() {
		// Instantiate the parent object
		parent::__construct( false, 'kwidget title' );
	}

	function widget( $args, $instance ) {
		// Widget output 
		kwidget_user_interface( $args );
	}

	function update( $new_instance, $old_instance ) {
    $instance =  $oldinstance;
    //print_r($_POST);exit;
    $ktitle = mysql_real_escape_string($_POST['ktitle']);
    update_option( 'ktitle', $ktitle);
    $kminrange = mysql_real_escape_string($_POST['kminrange']);
    update_option( 'kminrange', $kminrange);
    $kmaxrange = mysql_real_escape_string($_POST['kmaxrange']);
    update_option( 'kmaxrange', $kmaxrange);
    $kcselector = mysql_real_escape_string($_POST['kcselector']);
    update_option( 'kcselector', $kcselector);
    $kbasecolor1 = mysql_real_escape_string($_POST['kbasecolor1']);
    update_option( 'kbasecolor1', $kbasecolor1);
    $kbasecolor2 = mysql_real_escape_string($_POST['kbasecolor2']);
    update_option( 'kbasecolor2', $kbasecolor2);
    $kbasecolor3 = mysql_real_escape_string($_POST['kbasecolor3']);
    update_option( 'kbasecolor3', $kbasecolor3);
    $kbasecolor4 = mysql_real_escape_string($_POST['kbasecolor4']);
    update_option( 'kbasecolor4', $kbasecolor4);
    $kbasecolor5 = mysql_real_escape_string($_POST['kbasecolor5']);
    update_option( 'kbasecolor5', $kbasecolor5);
    $ktxtfonts[] = $_POST['ktxtfonts'];
    $kfont1 = mysql_real_escape_string($ktxtfonts[0][0]);
    $kfont2 = mysql_real_escape_string($ktxtfonts[0][1]);
    $kfont3 = mysql_real_escape_string($ktxtfonts[0][2]);
    update_option( 'kfont1', $kfont1);
    update_option( 'kfont2', $kfont2);
    update_option( 'kfont3', $kfont3);
    
    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
		$ktitle = get_option( 'ktitle', "TEXTO" );
		$kminrange = get_option( 'kminrange', 10 );
		$kmaxrange = get_option( 'kmaxrange', 20 );
		$kcselector = get_option( 'kcselector');
		$kbasecolor1 = get_option( 'kbasecolor1');
		$kbasecolor2 = get_option( 'kbasecolor2');
		$kbasecolor3 = get_option( 'kbasecolor3');
		$kbasecolor4 = get_option( 'kbasecolor4');
		$kbasecolor5 = get_option( 'kbasecolor5');
		$kfont1= get_option( 'kfont1');
		$kfont2= get_option( 'kfont2');
		$kfont3= get_option( 'kfont3');
		include('kadmin.php');
	}
}

function kstyle_register_widgets() {
	register_widget( 'KWidget' );
}

add_action( 'widgets_init', 'kstyle_register_widgets' );
/*****  output widget Form function *****/
function kwidget_user_interface( $args )
{
    echo $args['before_widget'];
    echo $args['before_title'] . "Texto" . $args['after_title'];
	include('kuser.php');
    echo $args['after_widget'];
} 
/*****  output widget Form function *****/
?>