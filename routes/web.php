<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\IndexController::class);
Route::get('/properties', fn() => view('landing-page.property.index'))->name('property.index');
Route::get('/properties/{property}', fn() => view('landing-page.property.detail'))->name('property.detail');

Route::post('/contacts', [ContactController::class, 'submit'])->name('contact.store');

Route::prefix('/cp')->group(function () {
    Route::get('', fn() => redirect()->route('cp.dashboard.index'));

    Route::middleware('guest')
        ->get('/sign-in', \App\Livewire\ControlPanel\Auth\SignIn::class)
        ->name('cp.sign-in');

    Route::middleware('auth:web')->group(function() {
        Route::get('/dashboard', \App\Livewire\ControlPanel\Dashboard\Index::class)->name('cp.dashboard.index');

        Route::prefix('/contacts')->group(function() {
            Route::get('', \App\Livewire\ControlPanel\Contacts\Index::class)->name('cp.contacts.index');
            Route::get('/{contact}', \App\Livewire\ControlPanel\Contacts\Detail::class)->name('cp.contacts.detail');
        });

        Route::prefix('/landing-pages')->group(function () {
            Route::prefix('/menus')->group(function() {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Menu\Index::class)->name('cp.landing-pages.menu.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Menu\Create::class)->name('cp.landing-pages.menu.create');
                Route::get('/{menu}', \App\Livewire\ControlPanel\LandingPage\Menu\Detail::class)->name('cp.landing-pages.menu.detail');

                Route::prefix('/{menu}')->group(function() {
                    Route::get('/contents/create', \App\Livewire\ControlPanel\LandingPage\Content\Create::class)->name('cp.landing-pages.menu.contents.create');
                    Route::get('/contents/{content}', \App\Livewire\ControlPanel\LandingPage\Content\Detail::class)->name('cp.landing-pages.menu.contents.detail');
                });
            });
        });

        Route::prefix('properties')->group(function() {
            Route::get('', \App\Livewire\ControlPanel\Property\Index::class)->name('cp.properties.index');
            Route::get('/create', \App\Livewire\ControlPanel\Property\Create::class)->name('cp.properties.create');
            Route::get('/{property}', \App\Livewire\ControlPanel\Property\Detail::class)->name('cp.properties.detail');
        });
    });
});

