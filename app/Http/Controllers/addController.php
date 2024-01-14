<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\cetificate;

    class addController extends Controller
    {
        public function index(){
            return view('product');
        }
    public function product() {
        
        return view('product');
    }


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
       




    }