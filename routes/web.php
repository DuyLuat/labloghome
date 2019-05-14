<?php

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

Route::get('/', function () {
    return view('Welcome');
});

Route::get('hoten/{ten}', function ($ten) {
    return "Họ tên ban là ". $ten;
});
Route::get('women/{women?}', function ($women="Gà KFC") {
    return $women;
});
Route::get('thongtin/{ten}/{tuoi}', function ($ten, $tuoi){
return "Chào ban $ten có $tuoi tuổi";
}
)->where(['tuoi'=>'[0-9]+', 'ten'=>'[a-z]+']);

Route::get('thongtin/{hoten?}', function ($hoten="Đào Duy Luật") {

    return view('khoapham',compact('hoten'));
});

Route::get('thegioi', 'WelcomeController@thegioi');

Route::get('quoc-te', ['as' =>'qt', function () {
    return 'Đây là trang tin quốc tế';
}]);

Route::group(['prefix' =>'quan-ly'], function () {
    Route::get('tin-tuc', function(){
        echo 'Đây là trang quản lý tin tức';
    });
    Route::get('thanh-vien', function(){
        echo 'Đây là trang quản lý thành viên';
    });
    
});

Route::get('them-tin-tuc', function(){
    return view('tintuc.themtintuc');
});
Route::post('form/dang-ky-thanh-vien', ['as'=>'formdangky', 'uses'=>'KhoaPhamController@them']);