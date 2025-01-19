<?php
	namespace App\Http\Controllers;
	
	class newContr extends Controller
	{
        public function show()
		{
			return view('new.show', [
				'title' => 'page title',
				'text'  => 'page content',
			]);
		}
	}
?>