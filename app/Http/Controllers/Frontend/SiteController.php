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
    
    public function add_appoinment(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'package'  => 'required',
            'date'     => 'required',
            'time'     => 'required',
            'address'  => 'required',
            'username' => '',
            'userid'   => ''

        ]);

        $booking = new Booking;

        $booking->model_name = $request->modelname;
        $booking->model_id = $request->modelid;
        $booking->client_name = $request->name;
        $booking->client_email = $request->email;
        $booking->client_phone = $request->phone;
        $booking->package = $request->package;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->address = $request->address;
        $booking->save();

        return back()->with('success',"Booked Successfully, will reach you out soon!");

    }
}
