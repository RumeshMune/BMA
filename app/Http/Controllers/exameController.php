<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\products;
use App\helper\helper;
use Illuminate\Support\Facades\Auth;

class exameController extends Controller
{
    public function store(Request $request){
        $data=new store;
       $file = $request->file;
       $filename=time().'.'.$file->getClientOriginalExtension();
       $request->file->move('assets',$filename);
       $data->file=$filename;
       $data->name=$request->name;
       $data->indexnumber=$request->indexnumber;
       $data->save();
       return redirect()->back();
    }
    function index()
    {
        return view('exame');
    }

    function exame()
    {
        return view('exame');
    }

    function validate_exame(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6',
            'phone'     =>   'required|min:10'

        ]);

        $data = $request->all();

        exame::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password']),
            'phone'  =>  $data['phone']

        ]);

        return redirect('login')->with('success', 'exame Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
    function save(Request $request)
    {
        $student_Id = helper::IDGenerator(new student,'student_id',5,'std');
        $q = new student;
        $q->student_id = $student_Id;
        $q->name = $student_name;
        $q->save();
    }

}
