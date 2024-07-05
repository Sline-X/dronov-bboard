<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Bb;

class BbsController extends Controller
{
    public function index()
    {
        //$bbs = BbsResourceController::latest()->get();
        //$s = "Объявления\r\n\r\n";
        //foreach ($bbs as $bb) {
        //    $s .= $bb->title . "\r\n";
        //    $s .= $bb->price . " руб.\r\n";
        //    $s .= "\r\n";
        //}
        //return response($s)
        //        ->header('Content-Type', 'text/plain');

        $context = ['bbs' => Bb::latest()->get()];
        return view('index', $context);
    }

    public function detail(Bb $bb) {
        //$bb = BbsResourceController::find($bb);
        //$s = $bb->title . "\r\n\r\n";
        //$s .= $bb->content . "\r\n";
        //$s .= $bb->price . " руб. \r\n";

        //return response($s)->header('Content-Type', 'text/plain');
        return view('detail', ['bb' => $bb]);
    }

    public function getElement(Request $request)
    {
        $dParam = $request->d;
//        Dolore modi
        $result = Bb::where('description', 'like', 'Dolore modi%')->count();
        dd($result);
    }
}
