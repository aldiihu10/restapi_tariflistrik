<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemuda_Olahraga_Model;
use App\Kegiatan_Model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Date(now())
      $datas = Pemuda_Olahraga_Model::all();
      $data = Kegiatan_Model::all();
        return view('layouts.dashboard', compact('datas','data'));

    }
}
