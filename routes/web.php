<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Hero_sectionController;
use App\Http\Controllers\step_process_sectionController;
use App\Http\Controllers\Academic_services_sectionController;
use App\Http\Controllers\Assignments_title_sectionController;
use App\Http\Controllers\Works_best_sectionController;
use App\Http\Controllers\How_work_sectionController;
use App\Http\Controllers\Res_heroController;
use App\Http\Controllers\Res_guidesController;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\FeaturedArticleController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\Services_sectionController;
use App\Http\Controllers\res_toolController;
use App\Http\Controllers\Res_articleController;
use App\Http\Controllers\contactus_socalmediyaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

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
use App\Http\Controllers\Frontend\ForgetPasswordController;





Route::get('/',[HomeController::class,'index'])->name('home');


// Login and Register routes for frontend 
Route::post('/register/store', [RegisterController::class, 'registerStore'])->name('frontend.register.store')->middleware('throttle:5,1'); 
Route::post('/login/check', [LoginController::class, 'loginCheck'])->name('frontend.login.check')->middleware('throttle:5,1'); 
Route::get('/logout', [LoginController::class, 'logout'])->name('frontend.logout');
Route::get('/forget-password', [ForgetPasswordController::class, 'index'])->name('frontend.forget_password');


Route::get('/how-works', [HowWorksController::class, 'index'])->name('frontend.how.works');
Route::get('/services', [ServicesController::class, 'index'])->name('frontend.services');
Route::get('/ai-tools', [AiToolsController::class, 'index'])->name('frontend.ai.tools');
Route::get('/assignment-brief', [AssignmentBriefController::class, 'index'])->name('frontend.assignment_brief');
Route::post('/assignment-brief/store', [AssignmentBriefController::class, 'store'])->name('assignment-brief.store')->middleware('throttle:3,1');;
Route::get('/careers', [CareersController::class, 'index'])->name('frontend.careers');
Route::get('/articles', [ArticlesController::class, 'index'])->name('frontend.articles');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('frontend.testimonials');
Route::get('/faq', [FaqController::class, 'index'])->name('frontend.faq');
Route::get('/contact_us', [ContactUsController::class, 'index'])->name('frontend.contact_us');
Route::post('/contact-store',[ContactUsController::class,'store'])->name('contact.store')->middleware('throttle:3,1');;
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

// Admin Auth routes
Route::get('admin/login',[AuthController::class,'showLogin'])->name('showLogin');
Route::post('admin/login',[AuthController::class,'login'])->name('login');
Route::get('admin/logout',[AuthController::class,'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {

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

        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');

        Route::get('/table', function () {
            return view('admin.tables');
        })->name('admin.table');

Route::get('/contactus',[ContactUsController::class,'show'])->name('admin.contactus.index');
Route::get('/contactus/delete/{id}',[ContactUsController::class,'delete'])->name('admin.contactus.delete');

Route::get('/assignment-briefs',[AssignmentBriefController::class,'show'])->name('admin.assignment_briefs.show');
Route::get('/assignment-briefs/delete/{id}',[AssignmentBriefController::class,'delete'])->name('admin.assignment_briefs.delete');

Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::get('/create-role',[RoleController::class,'create'])->name('role.create');
Route::post('/store-role',[RoleController::class,'store'])->name('role.store');
Route::get('/edit-role/{id}',[RoleController::class,'edit'])->name('role.edit');
Route::post('/update-role/{id}',[RoleController::class,'update'])->name('role.update');
Route::get  ('/delete-role/{id}',[RoleController::class,'delete'])->name('role.delete');

// Employee Routes
Route::get('/employees',[EmployeeController::class,'index'])->name('admin.employees.index');
Route::get('/employees/create',[EmployeeController::class,'create'])->name('admin.employees.create');
Route::post('/employees/store',[EmployeeController::class,'store'])->name('admin.employees.store');
Route::get('/employees/edit/{id}',[EmployeeController::class,'edit'])->name('admin.employees.edit');
Route::put('/employees/update/{id}',[EmployeeController::class,'update'])->name('admin.employees.update');
Route::get('/employees/delete/{id}',[EmployeeController::class,'delete'])->name('admin.employees.delete');

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


// Assignments Title Section
Route::get('/assignments_title_section/create',[assignments_title_sectionController::class,'create'])->name('assignments_title_section.create');
Route::post('/assignments_title_section/store',[assignments_title_sectionController::class,'store'])->name('assignments_title_section.store');
Route::get('/assignments_title_section',[assignments_title_sectionController::class,'index'])->name('assignments_title_section.index');
Route::get('/assignments_title_section/edit/{id}',[assignments_title_sectionController::class,'edit'])->name('assignments_title_section.edit');
Route::put('/assignments_title_section/update/{id}',[assignments_title_sectionController::class,'update'])->name('assignments_title_section.update');
Route::get('/assignments_title_section/delete/{id}',[assignments_title_sectionController::class,'delete'])->name('assignments_title_section.delete');

// Works best section
Route::get('/works_best_section/create',[works_best_sectionController::class,'create'])->name('works_best_section.create');
Route::post('/works_best_section/store',[works_best_sectionController::class,'store'])->name('works_best_section.store');
Route::get('/works_best_section',[works_best_sectionController::class,'index'])->name('works_best_section.index');
Route::get('/works_best_section/edit/{id}',[works_best_sectionController::class,'edit'])->name('works_best_section.edit');
Route::put('/works_best_section/update/{id}',[works_best_sectionController::class,'update'])->name('works_best_section.update');
Route::get('/works_best_section/delete/{id}',[works_best_sectionController::class,'delete'])->name('works_best_section.delete');

// How work section
Route::get('/how_work_section/create',[How_work_sectionController::class,'create'])->name('how_work_section.create');
Route::post('/how_work_section/store',[How_work_sectionController::class,'store'])->name('how_work_section.store');
Route::get('/how_work_section',[How_work_sectionController::class,'index'])->name('how_work_section.index');
Route::get('/how_work_section/edit/{id}',[How_work_sectionController::class,'edit'])->name('how_work_section.edit');
Route::put('/how_work_section/update/{id}',[How_work_sectionController::class,'update'])->name('how_work_section.update');
Route::get('/how_work_section/delete/{id}',[How_work_sectionController::class,'delete'])->name('how_work_section.delete');

// Resource Heroes
Route::get('/res_hero/create',[Res_heroController::class,'create'])->name('res_hero.create');
Route::post('/res_hero/store',[Res_heroController::class,'store'])->name('res_hero.store');
Route::get('/res_hero',[Res_heroController::class,'index'])->name('res_hero.index');
Route::get('/res_hero/edit/{id}',[Res_heroController::class,'edit'])->name('res_hero.edit');
Route::put('/res_hero/update/{id}',[Res_heroController::class,'update'])->name('res_hero.update');
Route::get('/res_hero/delete/{id}',[Res_heroController::class,'delete'])->name('res_hero.delete');

// Resource Guides
Route::get('/res_guides/create',[Res_guidesController::class,'create'])->name('res_guides.create');
Route::post('/res_guides/store',[Res_guidesController::class,'store'])->name('res_guides.store');
Route::get('/res_guides',[Res_guidesController::class,'index'])->name('res_guides.index');
Route::get('/guide-download/{id}',[Res_guidesController::class,'download'])->name('guide.download');
Route::get('/res_guides/edit/{id}',[Res_guidesController::class,'edit'])->name('res_guides.edit');
Route::put('/res_guides/update/{id}',[Res_guidesController::class,'update'])->name('res_guides.update');
Route::get('/res_guides/delete/{id}',[Res_guidesController::class,'delete'])->name('res_guides.delete');

// Resource Tools
Route::get('/res_tools/create',[res_toolController::class,'create'])->name('res_tools.create');
Route::post('/res_tools/store',[res_toolController::class,'store'])->name('res_tools.store');
Route::get('/res_tools',[res_toolController::class,'index'])->name('res_tools.index');
Route::get('/res_tools/edit/{id}',[res_toolController::class,'edit'])->name('res_tools.edit');
Route::put('/res_tools/update/{id}',[res_toolController::class,'update'])->name('res_tools.update');
Route::get('/res_tools/delete/{id}',[res_toolController::class,'delete'])->name('res_tools.delete');


// Resource Articles
Route::get('/res_articles/create',[Res_articleController::class,'create'])->name('res_articles.create');
Route::post('/res_articles/store',[Res_articleController::class,'store'])->name('res_articles.store');
Route::get('/res_articles',[Res_articleController::class,'index'])->name('res_articles.index');
Route::get('/res_articles/edit/{id}',[Res_articleController::class,'edit'])->name('res_articles.edit');
Route::put('/res_articles/update/{id}',[Res_articleController::class,'update'])->name('res_articles.update');
Route::get('/res_articles/delete/{id}',[Res_articleController::class,'delete'])->name('res_articles.delete');

// Featured Articles Section
Route::get('/featured-article', [FeaturedArticleController::class, 'index'])->name('featured_article.index');
Route::get('/featured-article/create', [FeaturedArticleController::class, 'create'])->name('featured_article.create');
Route::post('/featured-article/store', [FeaturedArticleController::class, 'store'])->name('featured_article.store');
Route::get('/featured-article/edit/{id}', [FeaturedArticleController::class, 'edit'])->name('featured_article.edit');
Route::put('/featured-article/update/{id}', [FeaturedArticleController::class, 'update'])->name('featured_article.update');
Route::get('/featured-article/delete/{id}', [FeaturedArticleController::class, 'delete'])->name('featured_article.delete');

// Blog/Articles Section
Route::get('/blog-article', [BlogArticleController::class, 'index'])->name('blog_article.index');
Route::get('/blog-article/create', [BlogArticleController::class, 'create'])->name('blog_article.create');
Route::post('/blog-article/store', [BlogArticleController::class, 'store'])->name('blog_article.store');
Route::get('/blog-article/edit/{id}', [BlogArticleController::class, 'edit'])->name('blog_article.edit');
Route::put('/blog-article/update/{id}', [BlogArticleController::class, 'update'])->name('blog_article.update');
Route::get('/blog-article/delete/{id}', [BlogArticleController::class, 'delete'])->name('blog_article.delete');

// Services Section
Route::get('/services-section', [Services_sectionController::class, 'index'])->name('services_section.index');
Route::get('/services-section/create', [Services_sectionController::class, 'create'])->name('services_section.create');
Route::post('/services-section/store', [Services_sectionController::class, 'store'])->name('services_section.store');
Route::get('/services-section/edit/{id}', [Services_sectionController::class, 'edit'])->name('services_section.edit');
Route::put('/services-section/update/{id}', [Services_sectionController::class, 'update'])->name('services_section.update');
Route::get('/services-section/delete/{id}', [Services_sectionController::class, 'delete'])->name('services_section.delete');

// Contactus -Socalmediya Section
Route::get('/contactus-socalmediya', [Contactus_socalmediyaController::class, 'index'])->name('contactus_socalmediya.index');
Route::get('/contactus-socalmediya/create', [Contactus_socalmediyaController::class, 'create'])->name('contactus_socalmediya.create');
Route::post('/contactus-socalmediya/store', [Contactus_socalmediyaController::class, 'store'])->name('contactus_socalmediya.store');
Route::get('/contactus-socalmediya/edit/{id}', [Contactus_socalmediyaController::class, 'edit'])->name('contactus_socalmediya.edit');
Route::put('/contactus-socalmediya/update/{id}', [Contactus_socalmediyaController::class, 'update'])->name('contactus_socalmediya.update');
Route::get('/contactus-socalmediya/delete/{id}', [Contactus_socalmediyaController::class, 'delete'])->name('contactus_socalmediya.delete');

//Student Routes
Route::get('/students',[StudentController::class,'index'])->name('admin.students.index');
Route::get('/students/delete/{id}',[StudentController::class,'delete'])->name('admin.students.delete');
});