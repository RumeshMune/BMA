<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\portal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\str;

class portalController extends Controller

{
    public function autocomplete(request $req){
        $data = view::select('name')->where("name","like","%{$req->input('query')}%")->get();
        return response()->json($data);

    }
    public function exameview(Request $req){
        $view_slug = str::slug($req->q,'-');
        // header("/portal-data/'".$view_slug."'");
        if($view_slug)
        {
            return redirect('certificate/'.$view_slug);
        }
        else {
            
        }
    }
    public function exameview2(Request $req){
        $view_slug = str::slug($req->q,'-');
        if($view_slug)
        {
            return redirect(''.$view_slug);
        }
        else {
            
        }
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function portal(){
        return view('portal');
    }
    public function portal2(){
        return view('view');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = user::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer' // user who registers themselves are all customers.
        ]);

        event(new Registered($user));

        

        return redirect(RouteServiceProvider::HOME);
    }
}
