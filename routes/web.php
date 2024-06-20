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
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/apropos', Apropos::class);
Route::get('/procedure', Procedure::class);
Route::get('/verifier', Verifier::class);

Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/forgot', ForgotPassword::class);
Route::get('reset', ResetPassword::class);

Route::get('user-espace', UserEspace::class);
Route::get('user-espace/{id}', Suivi::class);
Route::get('demande-form', DemandeForm::class);

Route::get('payement', Payement::class);
