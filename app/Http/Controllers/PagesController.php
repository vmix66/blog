<?php
	/**
	 * Created by PhpStorm.
	 * User: vmix66
	 * Date: 11.12.2016
	 * Time: 20:29
	 */

	namespace App\Http\Controllers;


	class PagesController
	{
		public function getIndex()
		{
			return view('pages.welcome');
		}

		public function getAbout()
		{
			$first = "Viacheslav";
			$last = "Mikhailov";

			$full = $first . " " . $last;
			return view('pages.about')->with("fullname", $full);
		}

		public function getContact()
		{
			return view('pages.contact');
		}
	}