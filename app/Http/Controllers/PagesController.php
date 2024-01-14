<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\cetificate;

    class PagesController extends Controller
    {

        public function index(){
            return view('addceti');
        }
    public function uploadpage() {
        
        return view('upload');
    }
       
    //about
    public function upload(Request $request){
        $data=new addceti;
       $file = $request->file;
       $filename=time().'.'.$file->getClientOriginalExtension();
       $request->file->move('assets',$filename);
       $data->file=$filename;
       $data->name=$request->name;
       $data->indexnumber=$request->indexnumber;
       $data->save();
       return redirect()->back();
    }
   
    
   
    public function about(){
        return view('about');
    }
   
    //certifications
   
    public function medical(){
        return view('medical');
    }

    public function nursing(){
        return view('nursing');
    }

    public function teaching(){
        return view('teaching');
    }

    public function psychology(){
        return view('psychology');
    }
    //login and register user

    public function register(){
        return view('register');
    }
    
    public function login(){
        return view('login');
    }
    
}
