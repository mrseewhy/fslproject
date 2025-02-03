<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Noauth\OurOffer;
use App\Livewire\Pages\Noauth\HowItWorks;
use App\Livewire\Pages\Client\AllCaseFile;
use App\Http\Middleware\RedirectBasedOnRole;
use App\Livewire\Pages\Client\CaseDetails;
use App\Livewire\Pages\Client\CreateCaseFile;
use App\Livewire\Pages\Noauth\AboutComponent;
use App\Livewire\Pages\Client\ClientDashboard;
use App\Livewire\Pages\Client\ContractAgreement;
use App\Livewire\Pages\Noauth\ContactComponent;
use App\Livewire\Pages\Noauth\GalleryComponent;
use App\Livewire\Pages\Noauth\SectorsComponent;
use App\Livewire\Pages\Noauth\HomePageComponent;
use App\Livewire\Pages\Noauth\ServicesComponent;
use App\Livewire\Pages\Noauth\GetStartedComponent;
use App\Livewire\Pages\Practitioner\PractitionerDashboard;

// Route::view('/', 'welcome');

Route::get('/', HomePageComponent::class)->name('home');
Route::get('/sectors', SectorsComponent::class)->name('sectors');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/gallery',GalleryComponent::class)->name('gallery');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/get-started', GetStartedComponent::class)->name('get-started');
Route::get('/our-offer', OurOffer::class)->name('our-offer');
Route::get('/how-it-works', HowItWorks::class)->name('how-it-works');
Route::get('/benefits', OurOffer::class)->name('benefits');
Route::get('/faqs', OurOffer::class)->name('faqs');




// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

    Route::get('/dashboard', function () {
        $user = Auth::user();
    
        if ($user) { // Important null check
            switch ($user->user_type) {
                case 'client':
                    return redirect()->route('client.dashboard');
                case 'practitioner':
                    return redirect()->route('practitioner.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                default:
                    // Handle unknown roles (important for security)
                    Auth::logout();
                    session()->flash('error', 'Invalid user role.');
                    return redirect()->route('login'); // Or a dedicated error page
                }
        } else {
            // Handle unauthenticated users (shouldn't happen due to middleware, but good practice)
            return redirect()->route('login');
        }
    })->middleware(['auth', 'verified'])->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    //for client
Route::prefix('/client')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', ClientDashboard::class)->name('client.dashboard');
    Route::get('/create-case-file', CreateCaseFile::class)->name('client.case-file');
    Route::get('/all-case-files', AllCaseFile::class)->name('client.all-case-files');
    Route::get('/case-details/{id}', CaseDetails::class)->name('client.case-details');
    Route::get('/contract-agreement', ContractAgreement::class)->name('client.contract-agreement');
});

//Practitioner
Route::prefix('practitioner')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', PractitionerDashboard::class)->name('practitioner.dashboard');
});

require __DIR__.'/auth.php';
