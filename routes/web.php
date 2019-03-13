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
    return view('welcome');
});

Route::resource('posts','PostController');

Route::get('create', function($locale) {
    $post = new Article();
    $article->online = true;
    $article->save();

    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
        $article->translateOrNew($locale)->name = "Title {$locale}";
        $article->translateOrNew($locale)->text = "Text {$locale}";
    }

    $article->save();

    echo 'Created an article with some translations!';
});

Route::get('locale/{locale} ',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


Route::get('create', function($locale) {
    $article = new Article();
    $article->online = true;
    $article->save();

    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
        $article->translateOrNew($locale)->name = "Title {$locale}";
        $article->translateOrNew($locale)->text = "Text {$locale}";
    }

    $article->save();

    echo 'Created an article with some translations!';
});




