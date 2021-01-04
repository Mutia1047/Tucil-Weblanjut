<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function login()
	{
		return view('sign/login');
    }

    public function register()
	{
		return view('sign/register');
    }

    public function index()
	{
		return view('page/index');
    }

    public function admin()
	{
		return view('Admin/admin');
    }

    public function about()
	{
		return view('page/about');
	}
	
	public function detail()
	{
		 // membuat data untuk dikirim ke view
		 $detail['data_pengurus'] = [
			[
				'siapa' => 'Muhammad Romli',
				'apa' => 'Pembina Komunitas'
			],
			[
				'siapa' => 'Zulkarnain',
				'apa' => 'Ketua Komunitas '
			],
			[
				'siapa' => 'Erika Salim',
				'apa' => 'Pengembangan SDM'
            ],
			[
				'siapa' => 'Mela Kalina',
				'apa' => 'Media dan Informasi'
            ],
            [
				'siapa' => 'Faiz Ubadillah',
				'apa' => 'Humas dan Networking'
            ],
            [
				'siapa' => 'Wahyu Damar',
				'apa' => 'Usaha Mandir'
            ]

        ];
        
        // load view dengan detail
		return view('page/detail', $detail);
    }
}
?>