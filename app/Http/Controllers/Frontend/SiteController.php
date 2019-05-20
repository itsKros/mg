<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use App\Homeinfo;
use App\user;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('myaccount','myprofile');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
    **/
    public function index()
    {
        $homeinfo = Homeinfo::find(1);
        return view('frontend.home',compact('homeinfo'));
    }

    public function testmail()
    {
        $data = array(
            'name' => "Montreal Test Mail",
        );
    
        Mail::send('welcome', $data, function ($message) {
    
            $message->from('ssquaresdev@gmail.com', 'Montreal Admin');
    
            $message->to('roshan@ssquares.co.in')->subject('Montreal Test Mail');
    
        });
    
        return "Your email has been sent successfully";
    }

    public function about()
    {
       return view('frontend.about');
    }
    
    public function services()
    {
       return view('frontend.services');
    }
    public function contact()
    {
       return view('frontend.contact');
    }
    
    
}
