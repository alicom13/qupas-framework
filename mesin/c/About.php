<?php

class About {
	public function index($nama = 'Ali', $pekerjaan = 'Pelajar'){
		echo "Halo saya $nama, Saya adalah $pekerjaan";
	}
	
	public function page(){
		echo '<h1>Ini adalah Controller About & Method Page</h1>';
		echo '<p>About/page</p>';
	}
}