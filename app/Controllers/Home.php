<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function show()
	{
		$nama['title'] = 'Lita Amelia';
		$nama['npm'] = '1817051001';
		echo view('mahasiswa/header');
		echo view('mahasiswa/index', $nama);
		echo view('mahasiswa/footer');
	}
	//--------------------------------------------------------------------

}
