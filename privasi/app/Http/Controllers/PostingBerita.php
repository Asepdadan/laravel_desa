<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;

class PostingBerita extends Controller
{

  public function __construct()
    {
        $this->middleware('admin');
    }

    public function posting(){
        if (Input::hasFile('gambar'))
        {
            $file     = Input::file('gambar');
            $filename = $file->getClientOriginalName();

            $destinationPath = 'uploads/image/';
            $file->move($destinationPath, $filename);

        }
            $file     = Input::file('gambar');
            $filename = $file->getClientOriginalName();
            
            DB::table('tbl_berita')->insert(
                array('judul' => Input::get('judul'),'image' => $filename, 'posted_at' => 'Admin Kelurahan')
                );
           
           return redirect('posting-berita');


    }


}