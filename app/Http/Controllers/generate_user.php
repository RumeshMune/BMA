<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use QRCode;
class generate_user extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
 
      
        return view('generate_user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('generate_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
             'name'=>$request->name,   
             'email'=>'lolo66@4'.str_random(20).'fr',   
             // 'password'=>$request->password, 
             'password' => 'lollollololol', 
             // 'password' => Hash::make($request->password), 
             'poste'=>$request->poste,   
             'nombre_visiteur'=>$request->nombre_visiteur,   
             'prenom'=>$request->prenom,   
             'qrcode'=>bcrypt($request->name.$request->prenom),
//            'qrcode'=>' Nom : '.$request->name.' Prenom : '.$request->prenom, 
             'updated_at'=>NOW(),   
             'created_at'=>NOW()   
        ]);
         return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('generate_user.show',compact('user'));
    
    }

    public function checkQrcode(Request $request){
        // header('Access-Control-Allow-Origin: *');
        $msg='';
        if($request->data){
            $user = User::where('qrcode',$request->data)->first();
             if($user){
     
                      

                      if($user->nombre_visiteur > 0){
                         $user->nombre_visiteur--;
                     
                       
                         $msg=['nbre_visite'=>$user->nombre_visiteur];
                         $info = "ok";

                     }else{
                        $msg="Accès refuse";
                        
                    
                     }
              
               $user->save();
               /* $msg=$user->nombre_visiteur;*/
                

             }else{
                $msg='Qrcode invalide';
             }
        }else{
            $msg='erreur';
        }
       return response()->json(['msg'=>$msg,'info'=>$info ?? '']);
    }

       // public function checkQrcode(Request $request){
       public function checkQrcode11(Request $request, $id){
        header('Access-Control-Allow-Origin: *');
        $msg='';
        if($request->data){
            // $user = User::where('qrcode',$request->data)->first();
            $user = User::findOrFail($id);
            // $user = User::where('qrcode',$request->data)->();
            // $user = DB::SELECT("select * from users where id =",$id);
            // dump($user->qrcode);
            //            dump($request->data);
            // dd($request->data);
            // dd($user->qrcode);
             if( $request->data == $user->qrcode ){
     
                      

                      if($user->nombre_visiteur > 0){
                         $user->nombre_visiteur--;
                     
                       
                         $msg="Ok";

                     }else{
                        $msg="Accès refuse";
                        
                    
                     }
              
               $user->save();
               /* $msg=$user->nombre_visiteur;*/
                

             }else{
                $msg='Qrcode invalide';
             }
        }else{
            $msg='erreur';
        }
       return response()->json(['msg'=>$msg]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = User::findOrFail($id);
        return view('generate_user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $User = User::findOrFail($id);
        $User->update([
             'name'=>$request->name,   
             'email'=>'lolo66@4'.str_random(20).'fr',   
             // 'password'=>$request->password, 
             'password' => 'lollollololol', 
             // 'password' => Hash::make($request->password), 
             'poste'=>$request->poste, 
             'nombre_visiteur'=>$request->nombre_visiteur,   
             'prenom'=>$request->prenom,   
//             'qrcode'=>bcrypt($request->name.$request->prenom),
//            'qrcode'=>' Nom : '.$request->name.' Prenom : '.$request->prenom, 
             'updated_at'=>NOW()  
//             'created_at'=>NOW()   
            ]);   
        // dd($model);
        // $pu2 = Familles::find($request->familles_id);
        // $pu2->update(['etat'=>0])
        // $a= DB::update('update familles set etat = 1 where etat =',0);
        // $a->update(['etat'=>0,
        // 'nom_famille'=>'BIT'
        // ]);
//          Flashy::mutedDark("Félicitation ! La Mise à jour à été éffectuée!");
        return Redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
//        Flashy::error(" La Famille à bien été Supprimer !");
        return Redirect()->route('user.index');
    }
}
