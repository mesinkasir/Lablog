<?php
use Illuminate\Support\Facades\Route;
Route::get('/welcome', function () {
    return view('/welcome');
});
Auth::routes(['register' => false, 'reset' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function(){
Route::get('/article', function(){
return view('article.index');
});
Route::middleware(['auth', 'VerifyAdmin'])->group(function(){
Route::get('/management', function(){
return view('management.index');
});
Route::resource('management/user','Management\UserController');
});
Route::resource('article/blog','Article\BlogController');
Route::resource('article/about','Article\AboutController');
Route::resource('article/group','Article\GroupController');
Route::resource('article/contact','Article\ContactController');
Route::resource('article/homepage','Article\HomepageController');
});
Route::view('/update/pos', 'update.pos', ['title' => 'POINT OF SALE','description' => 'You need to upgrade to using this modules, yeah.. lablog is powerfull with point of sale apps, so you can create an transaction with cloud web app , support for restaurant cafe , for shop store and outlet, lablog is not blog cms only but you can integrated your blog website with point of sale apps too.. so update now for complete web apps solutions.','uri' => 'https://wa.me/6285646104747?text=hay lablog i need update using this dexopos cloud pos apps','content' => 'For update and order cloud pos apps just contact us','vd1' => 'kjDh1BhSvz0','vd2' => 'fafCewP9xJk','svd1' => 'Cloud POS Point of sale apps for shop store and outlet.','svd2' => 'Cloud POS Point of sale apps for restaurant cafe bar.','wa' => 'Whatsapp Now',]);
Route::view('/update/pro', 'update.pro', ['title' => 'PRO VERSION PREMIUM WEB APPS','description' => 'With this web app you can handling for build a modern website with laravel then you can work with cloud point of sale application, and of course you and upload android bundle apps to google playstore with your google developer account, all in one integrated with premium website for support your bussiness, so this time to digital revolution with using our all in one web apps system.','uri' => 'https://wa.me/6285646104747?text=hay lablog i need update using this premium all in one website + pos app + android app integration','content' => 'For update and order all in on premium themes website + cloud pos point of sale application + android bundle apps just contact us.','vd1' => 'cenxi37fj-8','vd2' => 'KUsp5Rzk9Nc','svd1' => 'Full Web Application integration with premium themes for shop store and outlet.','svd2' => 'Full Web Application integration with premium themes for restaurant cafe bar.','wa' => 'Whatsapp Now','vd3' => 'A1lXnO30auE','vd4' => 'FCm4ijsw5FE','svd3' => 'Android application shop mobile apps.','svd4' => 'Android application resto mobile apps.',]);
Route::get('/site', function () {return view('site.index');});
Route::resource('/','Site\HomepageController');
Route::resource('site/menu','Site\MenuController');
Route::resource('site/about','Site\AboutController');
Route::resource('site/blog','Site\BlogController');
Route::resource('site/homepage','Site\HomepageController');
Route::resource('site/contact','Site\ContactController');