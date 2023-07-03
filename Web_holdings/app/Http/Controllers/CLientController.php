<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CLientController extends Controller
{
    public function introduce()
    {
        return view('client.introduce.general-introduction');
    }

    public function media_news()
    {
        return  view('client.news.news');
    }

    public function news_detail()
    {
        return view('client.news.news-detail');
    }

    public function ecosystem()
    {
        return view('client.ecosystem.ecosystem');
    }

    public function ecosystem_technology()
    {
        return view('client.ecosystem.ecosystem-technology');
    }

    public function ecosystem_education()
    {
        return view('client.ecosystem.ecosystem-digital-education');
    }

    public function ecosystem_medical()
    {
        return view('client.ecosystem.ecosystem-medical');
    }

    public function ecosystem_real_estate()
    {
        return view('client.ecosystem.ecosystem-real-estate');
    }

    public function ecosystem_entertainment()
    {
        return view('client.ecosystem.ecosystem-entertainment');
    }

    public function ecosystem_finance()
    {
        return view('client.ecosystem.ecosystem-finance');
    }

    public function develop()
    {
        return view('client.develop.develop');
    }

    public function develop_action()
    {
        return view('client.develop.develop-action');
    }

    public function develop_commit()
    {
        return view('client.develop.develop-commit');
    }

    public function develop_culture()
    {
        return view('client.develop.develop-culture');
    }

    public function develop_environments()
    {
        return view('client.develop.develop-environments');
    }

    public function develop_orientation()
    {
        return view('client.develop.develop-orientation');
    }

    public function develop_philosophy()
    {
        return view('client.develop.develop-philosophy');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('client.index', compact('posts'));
    }
}
