<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Apropos;
use App\Livewire\DemandeForm;
use App\Livewire\HomePage;
use App\Livewire\Payement;
use App\Livewire\Procedure;
use App\Livewire\Suivi;
use App\Livewire\UserEspace;
use App\Livewire\Verifier;
use App\Livewire\VoirDemande;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/apropos', Apropos::class);
Route::get('/procedure', Procedure::class);
Route::get('/verifier', Verifier::class);

Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
    Route::get('/user-espace', UserEspace::class)->name('user.espace');
    Route::get('/suivi/{id}', Suivi::class);
    Route::get('/demande-form', DemandeForm::class);
    Route::get('/user-espace/{id}', Payement::class);
    Route::get('/voir-demande/{id}', VoirDemande::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class);
    Route::get('/register', Register::class);
    Route::get('/forgot', ForgotPassword::class)->name('password.request');
    Route::get('reset/{token}', ResetPassword::class)->name('password.reset');
});
