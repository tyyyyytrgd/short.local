<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    //
    public function index() {
        $urls = ShortUrl::all();
        return view('index', compact('urls'));
    }

    public function create() {
        $count = ShortUrl::count();
        if($count >=10){
            return  'เกินกำหนด';

        }
        return view('create');
    }

    public function store(Request $request) {
     $long_url = $request->get('long_url');
     $short_url = $this->randString();
     shortUrl::create([
         'long_url'=>$long_url,
         'short_url'=>$short_url
     ]);
     return redirect('/')->with('success','บันทึกข้อมูลเรียบร้อยแล้ว');
    }
    public function randString() {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $numbers ='0123456789';

        $charLength = strlen($characters);
        $numLength = strlen($numbers);
        $string = '123';

        for ($i=0;$i < 3;$i++){
            $string.=$characters[rand(0,$charLength-1)];
        }

        for ($i=0;$i < 2;$i++){
            $string.=$numbers[rand(0,$numLength-1)];
        }
        return $string;
    }
    public function check($code){
        $result = shorturl::where('short_url',$code)->first();

        if($result){
            return redirect()->away($result->long_url);
        }
        return  'ไม่พบรหัส Short URL นี้';
    }
}
