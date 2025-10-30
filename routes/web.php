<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\LandingPage\Index::class)->name('home.index');
Route::get('/properties', \App\Livewire\LandingPage\Property\Index::class)->name('property.index');
Route::get('/properties/{property:slug}', \App\Livewire\LandingPage\Property\Detail::class)->name('property.detail');

Route::prefix('/cp')->group(function () {
    Route::get('', fn () => redirect()->route('cp.dashboard.index'));

    Route::middleware('guest')
        ->get('/sign-in', \App\Livewire\ControlPanel\Auth\SignIn::class)
        ->name('cp.sign-in');

    Route::middleware('auth:web')->group(function () {
        Route::get('/dashboard', \App\Livewire\ControlPanel\Dashboard\Index::class)->name('cp.dashboard.index');

        Route::prefix('/contacts')->group(function () {
            Route::get('', \App\Livewire\ControlPanel\Contacts\Index::class)->name('cp.contacts.index');
            Route::get('/{contact}', \App\Livewire\ControlPanel\Contacts\Detail::class)->name('cp.contacts.detail');
        });

        Route::prefix('/landing-pages')->group(function () {
            Route::prefix('/sections')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Section\Index::class)->name('cp.sections.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Section\Create::class)->name('cp.sections.create');
                Route::get('/{section}', \App\Livewire\ControlPanel\LandingPage\Section\Detail::class)->name('cp.sections.detail');
            });

            Route::prefix('/contents')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Content\Index::class)->name('cp.contents.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Content\Create::class)->name('cp.contents.create');
                Route::get('/{content}', \App\Livewire\ControlPanel\LandingPage\Content\Detail::class)->name('cp.contents.detail');
            });

            Route::prefix('/about')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\About\Index::class)->name('cp.about.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\About\Create::class)->name('cp.about.create');
                Route::get('/{about}', \App\Livewire\ControlPanel\LandingPage\About\Detail::class)->name('cp.about.detail');
            });

            Route::prefix('/benefits')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Benefit\Index::class)->name('cp.benefits.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Benefit\Create::class)->name('cp.benefits.create');
                Route::get('/{benefit}', \App\Livewire\ControlPanel\LandingPage\Benefit\Detail::class)->name('cp.benefits.detail');
            });

            Route::prefix('/menus')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Menu\Index::class)->name('cp.menus.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Menu\Create::class)->name('cp.menus.create');
                Route::get('/{menu}', \App\Livewire\ControlPanel\LandingPage\Menu\Detail::class)->name('cp.menus.detail');
            });

            Route::prefix('/social-links')->group(function () {
                Route::get('', \App\Livewire\ControlPanel\LandingPage\Social\Index::class)->name('cp.social-links.index');
                Route::get('/create', \App\Livewire\ControlPanel\LandingPage\Social\Create::class)->name('cp.social-links.create');
                Route::get('/{social}', \App\Livewire\ControlPanel\LandingPage\Social\Detail::class)->name('cp.social-links.detail');
            });
        });

        Route::prefix('testimonials')->group(function () {
            Route::get('', \App\Livewire\ControlPanel\Testimonial\Index::class)->name('cp.testimonials.index');
            Route::get('/create', \App\Livewire\ControlPanel\Testimonial\Create::class)->name('cp.testimonials.create');
            Route::get('/{testimonial}', \App\Livewire\ControlPanel\Testimonial\Detail::class)->name('cp.testimonials.detail');
        });

        Route::prefix('properties')->group(function () {
            Route::get('', \App\Livewire\ControlPanel\Property\Index::class)->name('cp.properties.index');
            Route::get('/create', \App\Livewire\ControlPanel\Property\Create::class)->name('cp.properties.create');
            Route::get('/{property}', \App\Livewire\ControlPanel\Property\Detail::class)->name('cp.properties.detail');
        });
    });
});
