<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function CateStory(){
    	$CateStory = DB::table('catestory')->select('id', 'catesto_title', 'desc', 'image', 'order')->orderBy('order', 'ASC')->skip(0)->take(6)->get();
    	return view('user.pages.CateStory', compact('CateStory'));
    }
}
