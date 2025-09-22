<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;

use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;

use App\Livewire\Teacher\TeacherCreate;
use App\Livewire\Teacher\TeacherEdit;
use App\Livewire\Teacher\TeacherList;

use App\Livewire\Principal\PrincipalCreate;
use App\Livewire\Principal\PrincipalEdit;
use App\Livewire\Principal\PrincipalList;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{id}/edit', UserEdit::class)->name('users.edit');

    Route::get('principal/list', PrincipalList::class)->name('principal.list');
    Route::get('principal/create', PrincipalCreate::class)->name('principal.create');
    Route::get('principal/edit', PrincipalEdit::class)->name('principal.edit');

        // In web.php or api.php
    Route::middleware(['role:super admin'])->group(function () {
        // Routes accessible only by users with the 'admin' role
        Route::get('roles', RoleIndex::class)->name('roles.index');
        Route::get('roles/create', RoleCreate::class)->name('roles.create');
        Route::get('roles/{id}/edit', RoleEdit::class)->name('roles.edit');
    });

    Route::get('teacher/list', TeacherList::class)->name('teacher.list');
    Route::middleware(['permission:create teachers'])->group(function () {
        // Routes accessible only by teachers with 'create teachers' permission
        Route::get('teacher/create', TeacherCreate::class)->name('teacher.create');
        Route::get('teacher/edit', TeacherEdit::class)->name('teacher.edit');
    });

});

require __DIR__.'/auth.php';
