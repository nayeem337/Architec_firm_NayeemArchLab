<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SomantoralController;        // Frontend


use App\Http\Controllers\DashboardController;         // BackEnd
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkProcessController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;






  Route::get('/', [SomantoralController::class, 'index'])->name('home');   //  frontEnd
  Route::get('/about-us', [SomantoralController::class, 'about'])->name('about-us');   //  frontEnd
  Route::get('/contact-us', [SomantoralController::class, 'contact_us'])->name('contact-us-home');   //  frontEnd
  Route::get('/our-project', [SomantoralController::class, 'our_project'])->name('our-project');   //  frontEnd

  Route::get('/service-details', [SomantoralController::class, 'serviceDetails'])->name('service-details');  // returns service details page


  Route::post('/new/contact', [ContactController::class, 'create'])->name('new.contact'); // insert Data


  Route::get('/show-project/{id}', [SomantoralController::class, 'showProject'])->name('project.details');









//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Admin Panel


// Start Settings

   Route::get('/setting', [SettingController::class, 'index'])->name('setting'); // return view page
   Route::get('/add-setting', [SettingController::class, 'addButton'])->name('add.setting'); //For add setting button

   Route::post('/new/setting', [SettingController::class, 'create'])->name('new.setting'); // Insert setting data Database

 //  Route::get('/setting/manage', [SettingController::class, 'manage'])->name('setting.manage'); // Manage in index page NO NEEDED for this project

   Route::get('/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit'); // Edit setting
   Route::post('/setting/update/{id}', [SettingController::class, 'update'])->name('setting.update'); // Update Setting

// Route::get('/setting/delete/{id}', [SettingController::class, 'delete'])->name('setting.delete');

// End Settings


// Start Home  Using HomeController and Home Model
    Route::get('/home/slider', [HomeController::class, 'slider'])->name('home.slider'); // return view page
    Route::get('/add/slider', [HomeController::class, 'addSliderButton'])->name('add.home.slider'); //For click add slider return a view page

    Route::post('/new/slider', [HomeController::class, 'create'])->name('new.home.slider'); // Insert Slider data in Database

    Route::get('/home/edit/{id}', [HomeController::class, 'edit'])->name('home.slider.edit'); // Edit Home
    Route::post('/home/update/{id}', [HomeController::class, 'update'])->name('home.slider.update'); // Update Home
// End Home


// Start Home/work_process
    Route::get('/home/work-process', [WorkProcessController::class, 'index'])->name('home.work_process'); // return view page
    Route::get('/add/work-process', [WorkProcessController::class, 'addWorkProcessButton'])->name('add.home.work_process'); //For click add Work Process return a view page

    Route::post('/new/work-process', [WorkProcessController::class, 'create'])->name('new.work_process'); // Insert Slider data in Database

    Route::get('/work-process/edit/{id}', [WorkProcessController::class, 'edit'])->name('work_process.edit'); // Edit work process
    Route::post('/work-process/update/{id}', [WorkProcessController::class, 'update'])->name('work_process.update'); // Update work process
// End/work_process


    // Start Home  Testimonial
    Route::get('/home/testimonial', [TestimonialController::class, 'index'])->name('home.testimonial'); // return view page
    Route::get('/add/testimonial', [TestimonialController::class, 'addTestimonialButton'])->name('add.home.testimonial'); //For click add Work Process return a view form page

    Route::post('/new/testimonial', [TestimonialController::class, 'create'])->name('new.testimonial'); // Insert Work Process data in Database

    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit'); // Edit  Testimonial
    Route::post('/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update'); // Update  Testimonial
    // End Testimonial


    // Start About/Who We Are
    Route::get('/about/who-we-are', [WhoWeAreController::class, 'index'])->name('about.who-we-are'); // return view page
    Route::get('/add/who-we-are', [WhoWeAreController::class, 'addWhoWeAreButton'])->name('add.about.who-we-are'); //For click add Who We Are return a view form page

   Route::post('/new/who-we-are', [WhoWeAreController::class, 'create'])->name('new.who-we-are'); // Insert Who We Are data in Database

    Route::get('/who-we-are/edit/{id}', [WhoWeAreController::class, 'edit'])->name('who-we-are.edit'); // Edit  Who We Are
    Route::post('/who-we-are/update/{id}', [WhoWeAreController::class, 'update'])->name('who-we-are.update'); // Update  Who We Are

 //   Route::get('/who-we-are/delete/{id}', [WhoWeAreController::class, 'delete'])->name('who-we-are.delete'); // Delete  Who We Are

    // End About/Who We Are


    // Start About/Mission
    Route::get('/about/mission', [MissionController::class, 'index'])->name('about.mission'); // return view page
    Route::get('/add/mission', [MissionController::class, 'addMissionButton'])->name('add.about.mission'); //For click add Who We Are return a view form page

    Route::post('/new/mission', [MissionController::class, 'create'])->name('new.mission'); // Insert Who We Are data in Database

    Route::get('/mission/edit/{id}', [MissionController::class, 'edit'])->name('mission.edit'); // Edit  Who We Are
    Route::post('/mission/update/{id}', [MissionController::class, 'update'])->name('mission.update'); // Update  Who We Are
    // End About/Mission



    // Start About/Vision
    Route::get('/about/vision', [VisionController::class, 'index'])->name('about.vision'); // return view page
    Route::get('/add/vision', [VisionController::class, 'addVisionButton'])->name('add.about.vision'); //For click add  return a view form page

   Route::post('/new/vision', [VisionController::class, 'create'])->name('new.vision'); // Insert Who  in Database


    Route::get('/vision/edit/{id}', [VisionController::class, 'edit'])->name('vision.edit'); // Edit
    Route::post('/vision/update/{id}', [VisionController::class, 'update'])->name('vision.update'); // Update
    // End About/Mission



    // Start About/Vision
    Route::get('/about/faq', [FAQController::class, 'index'])->name('about.faq'); // return view page
    Route::get('/add/faq', [FAQController::class, 'addFaqButton'])->name('add.about.faq'); //For click add Who We Are return a view form page

    Route::post('/new/faq', [FAQController::class, 'create'])->name('new.faq'); // Insert  data in Database

    Route::get('/faq/edit/{id}', [FAQController::class, 'edit'])->name('faq.edit'); // Edit  Who We Are
    Route::post('/faq/update/{id}', [FAQController::class, 'update'])->name('faq.update'); // Update  Who We Are
    // End About/Mission


    // Start Service
    Route::get('/service', [ServiceController::class, 'index'])->name('view.service'); // return view page
    Route::get('/add/service', [ServiceController::class, 'addServiceButton'])->name('add.service'); //For click add Who We Are return a view form page

    Route::post('/new/service', [ServiceController::class, 'create'])->name('new.service'); // Insert service data in Database

    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit'); // Edit
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update'); // Update
    // End Service


   // Start Category
    Route::get('/category', [CategoryController::class, 'index'])->name('view.category'); // return view page

    Route::get('/add/category', [CategoryController::class, 'addCategoryButton'])->name('add.category'); //For click add Who We Are return a view form page

    Route::post('/new/category', [CategoryController::class, 'create'])->name('new.category'); // Insert category data in Database
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit'); // Edit  Who We Are
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update'); // Update
    Route::get('/category/update/{id}', [CategoryController::class, 'delete'])->name('category.delete'); // Delete

    // End Category


    // Start Sub Category
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('view.sub-category'); // return view page

    Route::get('/add/sub-category', [SubCategoryController::class, 'addSub_Category_Button'])->name('add.sub-category'); //For click add Who We Are return a view form page

    Route::post('/new/sub-category', [SubCategoryController::class, 'create'])->name('new.sub-category'); // Insert category data in Database

    Route::get('/sub-category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit'); // Edit
    Route::post('/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update'); // Update


  //  Route::get('/sub-category/delete/{id}', [CategoryController::class, 'delete'])->name('sub-category.delete');  // Delete


    // End Sub Category


    // start Project

    Route::get('/project', [ProjectController::class, 'index'])->name('view.project'); // return view page

    Route::get('/add/project', [ProjectController::class, 'addProjectButton'])->name('add.project'); //For click add  return a view form page

    Route::post('/new/project', [ProjectController::class, 'create'])->name('new.project'); // Insert Project data in Database

    Route::get('/Project/edit/{id}', [ProjectController::class, 'edit'])->name('Project.edit'); // Edit
    Route::post('/Project/update/{id}', [ProjectController::class, 'update'])->name('Project.update'); // Update

    Route::get('/get-subcategories/{id}', [ProjectController::class, 'getSubCategories'])->name('get-subcategories'); // get Auto Sub Category





    //  Route::get('/Project/delete/{id}', [CategoryController::class, 'delete'])->name('Project.delete');  // Delete

    // End Project


    // start Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('view.blog'); // return view page

    Route::get('/add/blog', [BlogController::class, 'addBlogButton'])->name('add.blog'); //For click add  return a view form page

    Route::post('/new/blog', [BlogController::class, 'create'])->name('new.blog'); // Insert Project data in Database

    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit'); // Edit
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update'); // Update

    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');  // Delete

    // End Blog




    // start Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('view.contact'); // return view page

    Route::get('/add/contact', [ContactController::class, 'addContactButton'])->name('add.contact'); //For click add  return a view form page

 //   Route::post('/new/contact', [ContactController::class, 'create'])->name('new.contact'); // Insert Project data in Database

    Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit'); // Edit
    Route::post('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update'); // Update

    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');  // Delete

    // End Contact





});

require __DIR__.'/auth.php';
