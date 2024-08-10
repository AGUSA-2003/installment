<?php
/*
Plugin Name: پلاگین اقساطی محصولات اپل
Plugin URI: http://installment.com
Description:  مدیریت محصولات اقساطی اپل در کاشان
Author: Alex Aghaghadiri Kashi
Version: 1.0.0
Author URI: http://github.com/AGUSA-2003
*/


add_action('admin_menu', function (){
	add_menu_page(
		'اقساط',
		'محصولات',
	'manage_options',

	
	'installment', function () {
	echo "hello";
	});

add_submenu_page(
	'installment',
	'اضافه کردن محصولات',
	'اضافه کردن محصولات',
	'manage_options',
	'add_installment', function(){

		echo "<h1>welcome to panel</h1>";
	}
);



});
