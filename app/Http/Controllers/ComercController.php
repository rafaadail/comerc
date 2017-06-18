<?php

namespace App\Http\Controllers;

class ComercController extends Controller
{
    public function index()
    {
        $feedUrl = config('app.feed_url');
        $feedTitle = config('app.feed_title');

        $data = file_get_contents($feedUrl);
        $feeds = simplexml_load_string(ltrim($data));

        return view('Comerc.index', ['feeds' => $feeds, 'feedTitle' => $feedTitle]);
    }
}