<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Livewire\Employers\EmployerIndex;
use App\Livewire\Employers\EmployerCreate;
use App\Livewire\Principal\PrincipalCreate;
use App\Livewire\Principal\PrincipalEdit;
use App\Livewire\Principal\PrincipalList;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Teacher\TeacherCreate;
use App\Livewire\Teacher\TeacherEdit;
use App\Livewire\Teacher\TeacherList;
use App\Livewire\Users\UserIndex;
use Spatie\Permission\Contracts\Role;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('employers', EmployerIndex::class)->name('employers.index');
    Route::get('employer/create', EmployerCreate::class)->name('employer.create');

    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('roles/create', RoleCreate::class)->name('roles.create');
    Route::get('roles/{id}/edit', RoleEdit::class)->name('roles.edit');

    Route::get('users', UserIndex::class)->name('users.index');

    Route::get('teacher/list', TeacherList::class)->name('teacher.list');
    Route::get('teacher/create', TeacherCreate::class)->name('teacher.create');
    Route::get('teacher/edit', TeacherEdit::class)->name('teacher.edit');

    Route::get('principal/list', PrincipalList::class)->name('principal.list');
    Route::get('principal/create', PrincipalCreate::class)->name('principal.create');
    Route::get('principal/edit', PrincipalEdit::class)->name('principal.edit');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
