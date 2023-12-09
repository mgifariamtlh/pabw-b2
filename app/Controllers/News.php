<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
	public function index()
	{
		$news = new NewsModel();

		$data['newses'] = $news->where('status', 'published')->findAll();

		echo view('news',$data);
	}

	public function viewNews($slug)
	{
		$news = new NewsModel();
		$data['news'] = $news->where([
			'slug' => $slug,
			'status' => 'published'
		])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['news']) {
			throw PageNotFoundException::forPageNotFound();
		}

		$title = $data['news']['title'];

		echo view('news_detail', $data);
	}

	//----------------------------------------------------

}