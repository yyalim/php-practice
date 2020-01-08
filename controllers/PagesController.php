<?php

namespace App\Controllers;

use App\Core\view;

class PagesController {
	public function home() {
		view('home');
	}

	public function about() {
		view('about');
	}

	public function contact() {
		view('contact');
	}
}

