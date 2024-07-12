<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('main', ["message"=>"main"]);
});

Route::get('/contacts', function () {
    $users = DB::select('select * from users where id = ?', [1]);
//    dump($users);
//    return;
    return view('contacts', ['users' => $users]);
});

Route::get('/billboard', function () {
    $client = DB::connection('pgsql2')->select('select * from clients where id = ?', [1]);
    dump($client);
    return view('billboard');
});

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
//    $user = DB::connection('snt')->select('select * from clients where id = ?', [1]);

    if (Auth::check()) {
        /**
         * После проверки уже можешь получать любое свойство модели
         * пользователя через фасад Auth, например id
         */
        $id = Auth::user()->id;
        dump($id);
        $user = DB::select('select * from users where id = ?', [$id]);
        dump($user);
    }
//    return;
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
