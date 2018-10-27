<?php

namespace App\Http\Controllers;

use App\Page;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Page $page)
    {

        $features = $page->where('slug','product-features')->with('posts')->first();
        return $features;
        return view('frontend.pages.index');
    }
}
