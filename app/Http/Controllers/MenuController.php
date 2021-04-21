<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index() {
        $event = DB::table('news')->get();
        return view('blocks/menu', ['news' => $event]);

    }
}
