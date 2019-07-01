<?php 
function getImage($cont_name){
	
	$images = [
		'admin' => base_url().'/assets/images/bg.jpg',
		'patient' => base_url().'/assets/images/banner1.jpg'
		'doctor' => base_url().'/assets/images/banner1.jpg'
	];

	return $images[$cont_name];
}