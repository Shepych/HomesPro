<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalProjectController;
use App\Http\Controllers\IndividualProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AdminPanelController;

Route::name('order.')->group(function(){

    Route::post('/order_creation', [OrderController::class, 'create'])->name('create');

});

Route::name('user.')->group(function(){

    {
        Route::get('/cabinet/profile', [CabinetController::class, 'generate_profile'])->middleware('auth')->name('cabinet_profile');

        Route::get('/cabinet/users_list', [CabinetController::class, 'generate_users_list'])->middleware('auth')->name('cabinet_users_list');

        Route::get('/cabinet/personal_projects_list', [CabinetController::class, 'generate_personal_projects_list'])->middleware('auth')->name('cabinet_personal_projects_list');
    }


    {
        Route::post('/create_user', [UserController::class, 'create'])->middleware('auth')->name('create');

        Route::post('/edit_user_status', [UserController::class, 'edit_status'])->middleware('auth')->name('edit_status');
    }

    {
        Route::post('/login', [LoginController::class, 'login'])->name('login');

        Route::get('/logout',[LoginController::class, 'logout'])->middleware('auth')->name('logout');
    }

    {
        Route::post('change_major_info', [UserController::class, 'change_major_info'])->middleware('auth')->name('change_major_info');

        Route::post('change_contact_info', [UserController::class, 'change_contact_info'])->middleware('auth')->name('change_contact_info');

        Route::post('change_guard_info', [UserController::class, 'change_guard_info'])->middleware('auth')->name('change_guard_info');
    }

    {
        Route::post('/add_user_access', [UserController::class, 'add_access'])->middleware('auth')->name('add_access');

        Route::post('/change_user_access', [UserController::class, 'change_access'])->middleware('auth')->name('change_access');

        Route::post('/delete_user', [UserController::class, 'delete'])->middleware('auth')->name('delete');
    }

    {
        Route::get('/cabinet/personal_project',[PersonalProjectController::class, 'generate'])->middleware('auth')->name('project_generate');

        Route::post('/create_personal_project', [PersonalProjectController::class, 'create'])->middleware('auth')->name('create_personal_project');

        Route::post('/cabinet/change_personal_project_main_info', [PersonalProjectController::class, 'change_main_info'])->middleware('auth')->name('change_personal_project_main_info');
    }
    {
        Route::get('/cabinet/adminpanel_ru', [AdminPanelController::class, 'generate_ru'])->middleware('auth')->name('cabinet_adminpanel_ru');

        Route::get('/cabinet/adminpanel_en', [AdminPanelController::class, 'generate_en'])->middleware('auth')->name('cabinet_adminpanel_en');
    }

});

Route::name('site_ru.')->group(function() {

    Route::get('/ru/about', [AboutController::class, 'generate_ru'])->name('about');

    Route::get('/ru/individual_projects', [IndividualProjectsController::class, 'generate_ru'])->name('individual_projects');

    Route::get('/ru/projects_shop', [ProjectsShopController::class, 'generate_ru'])->name('projects_shop');

    Route::get('/ru/services', [ServicesController::class, 'generate_ru'])->name('services');

    Route::get('/ru', [IndexController::class, 'generate_ru'])->name('index');

    Route::get('/ru/books', [BooksController::class, 'generate_ru'])->name('books');

});

Route::name('site_en.')->group(function() {

    Route::get('/en/about', [AboutController::class, 'generate_en'])->name('about');

    Route::get('/en/individual_projects', [IndividualProjectsController::class, 'generate_en'])->name('individual_projects');

    Route::get('/en/projects_shop', [ProjectsShopController::class, 'generate_en'])->name('projects_shop');

    Route::get('/en/services', [ServicesController::class, 'generate_en'])->name('services');

    Route::get('/en', [IndexController::class, 'generate_en'])->name('index');

    Route::get('/en/books', [BooksController::class, 'generate_en'])->name('books');

});

# Админ панель
Route::middleware(['role:admin'])->name('admin.')->group(function() {

    {   # Маршруты таблицы `main_page_slider_ru`
        Route::get('/admin/main_page_slider_ru/add_slider', [AdminPanelController::class, 'main_page_slider_ru'])->name('main_page_slider_ru.add_slider');
        Route::get('/admin/main_page_slider_ru/delete_slider/{id}', [AdminPanelController::class, 'main_page_slider_ru_delete'])->name('main_page_slider_ru.delete_slider');
        Route::post('/admin/main_page_slider_ru/update_slider/{id}', [AdminPanelController::class, 'main_page_slider_ru_update'])->name('main_page_slider_ru.update_slider');
    }
});

Route::get('/lang', [LangController::class, 'change'])->name('lang_changer');
