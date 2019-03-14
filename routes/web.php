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

//Route::resource('posts','PostController');

Route::get('/posts', function() {        
    
    // dd(App::getLocale());

     $post = new  \App\Post([
        //'id'=>'5',
       'code'=>'mi third sandjas json',
       'name'=>'asdsadas',
       'observaciones'=>'sdfd'
       
    ]);
    $post->save();
    dd($post->toArray()); 

  //  $post = \App\Post::orderBy('id','desc')->first();
  //  $translation = $post->translateOrNew('es');
  //  $translation->name = 'hello';
  //  $post->save();
  //  dd($post->toArray());
   // return view('welcome')->with(compact);
});  


Route::get('locale/{locale} ',function($locale){
    Session::put('locale',$locale);

    // de translatable
    //\App::setLocale('en');
    //fin translatable
    
    return redirect()->back();
});





