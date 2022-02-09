<?php
use Illuminate\Support\Facades\Route;

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

// Route::get( '/contact', function () {
//     return view( 'contact::contact' );
// } );

Route::group( ['namespace' => "Oshit\Contact\Http\Controllers"], function () {
    Route::get( "contact", "ContactController@index" )->name( "contact.create" );
    Route::post( "contact", "ContactController@store" )->name( "contact.store" );
} );
