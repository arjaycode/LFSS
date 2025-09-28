<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::view('/', 'auth.login');
Route::view('/admin', 'admin.login');

Route::get('/create/user/account', [UserController::class, 'create']);
Route::view('/success', 'auth.success')->name('success');

Route::prefix('/user')->group( function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('user.dashboard');
});

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');




// Route::get('/recent', function () {
//     $data = items::all();
//     return view('item.recent', compact('data'));
// })->name('lost');

// Route::get('/submit-found-property', function () {
//     return view('item.found');
// });

// Route::get('/found-property', function () {
//     return view('item.found');
// });

// Route::get('/submit-lost-property', function () {
//     return view('item.lost');
// });

// Route::get('/lost-property', function (Request $request) {
//     $data = $request->all();
//     if (isset($data['id'])) {
//         $update = items::where('id', $data['id'])->update($data);
//         if ($update) {
//             echo 'successfully updated<br>';
//             echo '<a href="' . route('lost') . '">go to Recent List</a>';
//         }
//     } else {
//         unset($data['id']);
//         $save = items::insert($data);
//         if ($save) {
//             echo 'successfully added<br>';
//             echo '<a href="' . route('lost') . '">go to Recent List</a>';
//         } else {
//             echo 'adding was not successful';
//         }
//     }
// })->name('saveLostItem');

// Route::get('/update', function (Request $request) {
//     $id = $request->id;
//     $data = items::find($id);
//     return view('item.lost', compact('data'));
// })->name('updateItem');

// Route::get('/delete', function (Request $request) {
//     $id = $request->id;
//     $delete = items::where('id', $id)->delete();
//     if ($delete) {
//         echo 'successfully Deleted<br>';
//         echo '<a href="' . route('lost') . '">go to Recent List</a>';
//     } else {
//         echo 'Deleting was not successful';
//     }
// })->name('deleteItem');
