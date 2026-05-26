<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Hero_sectionController;
use App\Http\Controllers\step_process_sectionController;
use App\Http\Controllers\academic_services_sectionController;

use App\Http\Controllers\Frontend\HowWorksController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\AiToolsController;
use App\Http\Controllers\Frontend\AssignmentBriefController;
use App\Http\Controllers\Frontend\CareersController;
use App\Http\Controllers\Frontend\ArticlesController;
use App\Http\Controllers\Frontend\TestimonialsController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\SamplesController;
use App\Http\Controllers\Frontend\ResourcesController;
use App\Http\Controllers\Frontend\LiveChatController;
use App\Http\Controllers\Frontend\RefundPolicyController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\TermsConditionsController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\StudentResourcesController;
use App\Http\Controllers\Frontend\ProgramStackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/how-works', [HowWorksController::class, 'index'])->name('frontend.how.works');
Route::get('/services', [ServicesController::class, 'index'])->name('frontend.services');
Route::get('/ai-tools', [AiToolsController::class, 'index'])->name('frontend.ai.tools');
Route::get('/assignment-brief', [AssignmentBriefController::class, 'index'])->name('frontend.assignment_brief');
Route::get('/careers', [CareersController::class, 'index'])->name('frontend.careers');
Route::get('/articles', [ArticlesController::class, 'index'])->name('frontend.articles');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('frontend.testimonials');
Route::get('/faq', [FaqController::class, 'index'])->name('frontend.faq');
Route::get('/contact_us', [ContactUsController::class, 'index'])->name('frontend.contact_us');
Route::get('/samples', [SamplesController::class, 'index'])->name('frontend.samples');
Route::get('/resources', [ResourcesController::class, 'index'])->name('frontend.resources');
Route::get('/live_chat', [LiveChatController::class, 'index'])->name('frontend.live_chat');
Route::get('/refund_policy', [RefundPolicyController::class, 'index'])->name('frontend.refund_policy');
Route::get('/privacy_policy', [PrivacyPolicyController::class, 'index'])->name('frontend.privacy_policy');
Route::get('/terms_conditions', [TermsConditionsController::class, 'index'])->name('frontend.terms_conditions');
Route::get('/frontend/login', [LoginController::class, 'index'])->name('frontend.login');
Route::get('/frontend/register', [RegisterController::class, 'index'])->name('frontend.register');
Route::get('/about', [AboutController::class, 'index'])->name('frontend.about');
Route::get('/student_resources', [StudentResourcesController::class, 'index'])->name('frontend.student_resources');
Route::get('/program_stack', [ProgramStackController::class, 'index'])->name('frontend.program_stack');

// Route::middleware(['auth'])->group(function () {

        

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/users', function () {
            return view('admin.users');
        })->name('admin.user');

        Route::get('/add-users', function () {
            return view('admin.add-user');
        })->name('admin.add-user');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');

        Route::get('/table', function () {
            return view('admin.tables');
        })->name('admin.table');

Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::get('/create-role',[RoleController::class,'create'])->name('role.create');
Route::post('/store-role',[RoleController::class,'store'])->name('role.store');
Route::get('/edit-role/{id}',[RoleController::class,'edit'])->name('role.edit');
Route::post('/update-role/{id}',[RoleController::class,'update'])->name('role.update');
Route::get  ('/delete-role/{id}',[RoleController::class,'delete'])->name('role.delete');

// Hero Section
Route::get('/hero_section/create',[Hero_sectionController::class,'create'])->name('hero_section.create');
Route::post('/hero_section/store',[Hero_sectionController::class,'store'])->name('hero_section.store');
Route::get('/hero_section',[Hero_sectionController::class,'index'])->name('hero_section.index');
Route::get('/hero_section/edit/{id}',[Hero_sectionController::class,'edit'])->name('hero_section.edit');
Route::put('/hero_section/update/{id}',[Hero_sectionController::class,'update'])->name('hero_section.update');
Route::get('/hero_section/delete/{id}',[Hero_sectionController::class,'delete'])->name('hero_section.delete');

// Step process section
Route::get('/step_process_section/create',[step_process_sectionController::class,'create'])->name('step_process_section.create');
Route::post('/step_process_section/store',[step_process_sectionController::class,'store'])->name('step_process_section.store');
Route::get('/step_process_section',[step_process_sectionController::class,'index'])->name('step_process_section.index');
Route::get('/step_process_section/edit/{id}',[step_process_sectionController::class,'edit'])->name('step_process_section.edit');
Route::put('/step_process_section/update/{id}',[step_process_sectionController::class,'update'])->name('step_process_section.update');
Route::get('/step_process_section/delete/{id}',[step_process_sectionController::class,'delete'])->name('step_process_section.delete');

// Academic services section
Route::get('/academic_services_section/create',[academic_services_sectionController::class,'create'])->name('academic_services_section.create');
Route::post('/academic_services_section/store',[academic_services_sectionController::class,'store'])->name('academic_services_section.store');
Route::get('/academic_services_section',[academic_services_sectionController::class,'index'])->name('academic_services_section.index');
Route::get('/academic_services_section/edit/{id}',[academic_services_sectionController::class,'edit'])->name('academic_services_section.edit');
Route::put('/academic_services_section/update/{id}',[academic_services_sectionController::class,'update'])->name('academic_services_section.update');
Route::get('/academic_services_section/delete/{id}',[academic_services_sectionController::class,'delete'])->name('academic_services_section.delete');
// });
