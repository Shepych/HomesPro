<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminPanelController extends Controller
{
    public function generate_ru(){
        # Список слайдеров
        $main_page_slider_ru = DB::table('main_page_slider_ru')->orderByDesc('id')->get();
        return view('cabinet.adminpanel_ru', [
            'main_page_slider_ru' => $main_page_slider_ru,
        ]);
    }

    public function generate_en(){
        return view('cabinet.adminpanel_en');
    }

    public function add_new_contact(Request $request){
        $database_row=0;
        DB::insert('insert into socials (`id`, `created_at`, `updated_at`, `type`, `city_or_url`, `content`, `url`) values (?, ?, ?, ?, ?, ?, ?)', $database_row);
    }

    ##################### Главная страница ######################
    # Название методов - это название таблиц в БД
    # Добавление слайда
    public function main_page_slider_ru() {
        # Проверка на максимальное количество слайдов
        $maxSlides = 10;
        $slides = DB::table('main_page_slider_ru')->get();

        if($slides->count() >= $maxSlides) {
            return Ajax::message('Максимум ' . $maxSlides . ' слайдов');
        }

        # Создаём слайд и получаем его id
        $slide_id = DB::table('main_page_slider_ru')->insertGetId([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'page_id' => 1,
            'title' => null,
            'subtitle' => null,
            'architect' => null,
            'object_name' => null,
            'banner' => null,
        ]);

        # Создаём шаблон и отправляем в Ajax
        return Ajax::layout(view('ajax.slider_test', [
            'count' => $slides->count() + 1,
            'slide' => $slide_id
        ])->render());
    }

    # Удаление слайда
    public function main_page_slider_ru_delete($id) {
        # Удаление
        DB::table('main_page_slider_ru')->where('id', $id)->delete();
    }

    # Изменение данных слайда
    public function main_page_slider_ru_update(Request $request, $id) {
        # Валидация
        # Загрузка баннера
        if($request->file('banner')) {
            $path = 'storage/' . str_replace('public/', '', $request->file('banner')->store('public/banners'));
            DB::table('main_page_slider_ru')->where('id', $id)->update([
                'banner' => $path,
            ]);
        }
        # Обновление заголовка
        if($request->input('title')) {
            DB::table('main_page_slider_ru')->where('id', $id)->update([
                'title' => $request->input('title'),
            ]);
        }

//        # Обновление подзаголовка
        if($request->input('subtitle')) {
            DB::table('main_page_slider_ru')->where('id', $id)->update([
                'subtitle' => $request->input('title'),
            ]);
        }

        return 'trash';
    }
}
