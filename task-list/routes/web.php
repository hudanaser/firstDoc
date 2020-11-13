<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Route::get('about',function(){
$name='huda';

return view('about',compact('name' ));
});


Route::post('send',function(Request $request){
    $name = $request->myname ;
    return view('about',compact('name'));
});



Route::get('tasks',function(){
    $tasks = [
    'task1', 'task2' ,'task3'];

    return view('tasks',compact('tasks' ));

    });


    Route::get('task/show/{id}',function($id){
        $tasks = [
        'task1', 'task2' ,'task3'];
        $task = $tasks[$id];

        return view('show',compact('task' ));

        });
