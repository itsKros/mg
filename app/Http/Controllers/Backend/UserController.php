<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Mail;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all()->where('isAdmin','=', null);
        return view('backend.user.index',compact('users'));
        
    }
    public function create()
    {
        return view('backend.user.create');
        
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'modelname' => 'required',
            'modelemail' => 'email',
            'modelpassword' => 'required'
        ]);

        

        $user = new User;
        $user->name = $request->input('modelname');
        $user->email = $request->input('modelemail');
        $user->password  = Hash::make($request->input('modelpassword'));
        $user->save();

        
    
        Mail::send([], [], function ($message) use ($request) {
    
            $message->from('ssquaresdev@gmail.com', 'Montreal Gentleman');
    
            $message->to($request->input('modelemail'))
            ->subject('Welcome '.$request->input('modelname'))
            ->setBody('<h3 style="font-weight:normal;">Hi, here is your password:  <strong>'.$request->input('modelpassword').'</strong></h3><p><em>Please change your password after first login.</em></p>','text/html');
    
        });


        return redirect('/admin/users')->with('success', 'User added successfully');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/users')->with('success', 'User deleted successfully');
        
    }
    
   
}
