<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\exameController;
use App\Http\Controllers\qrcodeController;
use App\Http\Controllers\portalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[aboutController::class,'about']);
Route::get('/ablh9596vo',[aboutController::class,'ablh9596vo']);
Route::get('/aipm4385aa',[aboutController::class,'aipm4385aa']);
Route::get('/biyr4519ri',[aboutController::class,'biyr4519ri']);
Route::get('/bnkg4533xp',[aboutController::class,'bnkg4533xp']);
Route::get('/cnsm6207jn',[aboutController::class,'cnsm6207jn']);
Route::get('/dbtj4425bb',[aboutController::class,'dbtj4425bb']);
Route::get('/dnzg8401wf',[aboutController::class,'dnzg8401wf']);
Route::get('/fcog8697ac',[aboutController::class,'fcog8697ac']);
Route::get('/gufd8440mp',[aboutController::class,'gufd8440mp']);
Route::get('/hsgr4103rk',[aboutController::class,'hsgr4103rk']);
Route::get('/iqbe5558uc',[aboutController::class,'iqbe5558uc']);
Route::get('/jhvk7316gs',[aboutController::class,'jhvk7316gs']);
Route::get('/jqvg2382ba',[aboutController::class,'jqvg2382ba']);
Route::get('/kfdf5011lx',[aboutController::class,'kfdf5011lx']);
Route::get('/mjub7013vj',[aboutController::class,'mjub7013vj']);
Route::get('/lmnb8974bp',[aboutController::class,'lmnb8974bp']);
Route::get('/mpie8973mg',[aboutController::class,'mpie8973mg']);

Route::get('/mvop2246hy',[aboutController::class,'mvop2246hy']);
Route::get('/nbfp8229ha',[aboutController::class,'nbfp8229ha']);
Route::get('/otaa2493nv',[aboutController::class,'otaa2493nv']);
Route::get('/oxno4195iv',[aboutController::class,'oxno4195iv']);
Route::get('/phnr8859rt',[aboutController::class,'phnr8859rt']);
Route::get('/pjlf0355jt',[aboutController::class,'pjlf0355jt']);
Route::get('/qlzz5607xr',[aboutController::class,'qlzz5607xr']);
Route::get('/qrml4924sh',[aboutController::class,'qrml4924sh']);
Route::get('/scfl0806wj',[aboutController::class,'scfl0806wj']);
Route::get('/smzz7475hk',[aboutController::class,'smzz7475hk']);
Route::get('/tszn9610xh',[aboutController::class,'tszn9610xh']);

Route::get('/uxpe4911mg',[aboutController::class,'uxpe4911mg']);
Route::get('/vwbq4379mt',[aboutController::class,'vwbq4379mt']);
Route::get('/wcnj5535co',[aboutController::class,'wcnj5535co']);
Route::get('/whqe8709mh',[aboutController::class,'whqe8709mh']);
Route::get('/wkca1195wm',[aboutController::class,'wkca1195wm']);
Route::get('/wxqf4327ek',[aboutController::class,'wxqf4327ek']);
Route::get('/ydcx3314db',[aboutController::class,'ydcx3314db']);
Route::get('/zigr3018fh',[aboutController::class,'zigr3018fh']);
Route::get('/ZXNW3364HL',[aboutController::class,'ZXNW3364HL']);
Route::get('/xoox0999qm',[aboutController::class,'xoox0999qm']);

Route::get('/cat',[aboutController::class,'cat']);






















Route::get('/', function () {
    return view('welcome');
});

Route::controller(SampleController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});



Route::get('/nursing',[PagesController::class,'nursing']);
Route::get('/medical',[PagesController::class,'medical']);
Route::get('/psychology',[PagesController::class,'psychology']);
Route::get('/teaching',[PagesController::class,'teaching']);
//Route::get('/login',[PagesController::class,'login']);
Route::get('/qrcode',[qrcodeController::class,'qrcode']);

Route::get('/portal',[portalController::class,'portal']);
Route::get('/autocomplete',[portalController::class,'autocomplete'])->name('autocomplete');
Route::post('/exame',[portalController::class,'exameview'])->name('exameview');
Route::post('/portal',[portalController::class,'exameview']);
// Route::get('/portal2',[portalController::class,'portal2']);
Route::get('/certificate/{id}',
function ($id){
    return view('view')->with('id',$id);
});


Route::get('/certificate',[addController::class,'certificate']);
Route::post('/product',[addController::class,'upload']);
Route::post('/uploadproduct',[exameController::class,'store']);



Route::get('/uploadpage',[exameController::class,'uploadpage']);


Route::controller(exameController::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('exame', 'exame')->name('exame');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_exame', 'validate_exame')->name('exame.validate_exame');

    Route::post('validate_login', 'validate_login')->name('exame.validate_login');

    Route::post('validate_login', 'validate_login')->name('exame.validate_login');
    
    Route::get('dashboard', 'dashboard')->name('dashboard');
    

});