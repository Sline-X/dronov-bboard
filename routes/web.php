<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [BbsController::class, 'index'])->name('index');
Auth::routes();

Route::get   ('/home',             [HomeController::class, 'index'])           ->name('home');
Route::get   ('/home/add',         [HomeController::class, 'showAddBbForm'])   ->name('bb.add');
Route::post  ('/home',             [HomeController::class, 'storeBb'])         ->name('bb.store');
Route::get   ('/home/{bb}/edit',   [HomeController::class, 'showEditBbForm'])  ->name('bb.edit')   ->middleware('can:update,bb');
Route::patch ('/home/{bb}',        [HomeController::class, 'updateBb'])        ->name('bb.update') ->middleware('can:update,bb');
Route::get   ('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete') ->middleware('can:destroy,bb');
Route::delete('/home/{bb}',        [HomeController::class, 'destroyBb'])       ->name('bb.destroy')->middleware('can:destroy,bb');;
Route::get   ('/{bb}',             [BbsController::class, 'detail'])           ->name('detail');
//Route::get('/{bb}', 'BbsController@detail')->name('detail);

//пример с регуляркой
//Route::get('/{bb}', function() {})->where('bb', '[a-z]+');

//ресурсконтроллер --resource
//Route::resource('bbs', BbsResourceController::class);
//GET	    /bbs	            index	bbs.index
//GET	    /bbs/create	        create	bbs.create
//POST	    /bbs	            store	bbs.store
//GET	    /bbs/{bb}	        show	bbs.show
//GET	    /bbs/{bb}/edit	    edit	bbs.edit
//PUT/PATCH	/photos/{bb}        update	bbs.update
//DELETE	/bbs/{bb}	        destroy	bbs.destroy
