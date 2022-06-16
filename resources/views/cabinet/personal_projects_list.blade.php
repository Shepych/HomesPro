@extends('layouts.cabinet_layout')
@section('content')
    <section class="section cabinet_top">
        <div class="container">
            <div class="crumbs">
                <ul>
                    <li><a href="{{route('site_ru.index')}}">homespro</a></li>
                    <li><a href="{{route('user.cabinet_profile')}}">личный кабинет</a></li>
                    <li class="active"><a href="#">проекты</a></li>
                </ul>
            </div>
            <div class="section__top">
                @if(Auth::User()->status=='admin')
                <div class="section__title">Проекты</div><a class="btn create_access" href="#">
                    Добавить участника<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                    </svg></a><a class="btn create_project" href="#">
                    Создать проект<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                    </svg></a>
                @endif
            </div>
        </div>
    </section>
    <section class="section setup setup_projects">
        <div class="container">
            <div class="sidebar">
                <a class="sidebar__item sidebar__item_user" href="{{route('user.cabinet_profile')}}">
                    <div class="icon">
                        <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.52765 0c-2.0457 0-3.7088 1.66486-3.7088 3.71271 0 2.00877 1.56941 3.63454 3.6151 3.70489.06247-.00782.12493-.00782.17178 0h.05465c1.99885-.07035 3.56822-1.69612 3.57602-3.70489C10.2364 1.66486 8.57334 0 6.52765 0ZM11.2377 11.4717c-2.58693-1.72463-6.80569-1.72463-9.41112 0C.64904 12.2598 0 13.3261 0 14.4665c0 1.1405.64904 2.1975 1.81731 2.9763 1.29808.8716 3.00413 1.3074 4.71018 1.3074 1.70604 0 3.41209-.4358 4.71021-1.3074 1.1682-.7881 1.8173-1.8451 1.8173-2.9948-.0093-1.1405-.6491-2.1975-1.8173-2.9763Z" fill="#757D85"/>
                        </svg>
                    </div>
                    Профиль
                </a>
                <a class="sidebar__item sidebar__item_accounts" href="{{route('user.cabinet_users_list')}}">
                    <div class="icon">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M.625 2.75C.625 1.71445 1.46445.875 2.5.875s1.875.83945 1.875 1.875c0 1.03516-.83945 1.875-1.875 1.875S.625 3.78516.625 2.75ZM18.75 1.5c.6914 0 1.25.55977 1.25 1.25C20 3.44141 19.4414 4 18.75 4H7.5c-.69141 0-1.25-.55859-1.25-1.25 0-.69023.55859-1.25 1.25-1.25h11.25Zm0 6.25c.6914 0 1.25.55859 1.25 1.25s-.5586 1.25-1.25 1.25H7.5c-.69141 0-1.25-.55859-1.25-1.25s.55859-1.25 1.25-1.25h11.25Zm0 6.25c.6914 0 1.25.5586 1.25 1.25s-.5586 1.25-1.25 1.25H7.5c-.69141 0-1.25-.5586-1.25-1.25S6.80859 14 7.5 14h11.25ZM.625 15.25c0-1.0352.83945-1.875 1.875-1.875s1.875.8398 1.875 1.875c0 1.0352-.83945 1.875-1.875 1.875S.625 16.2852.625 15.25ZM4.375 9c0 1.0352-.83945 1.875-1.875 1.875S.625 10.0352.625 9c0-1.03516.83945-1.875 1.875-1.875S4.375 7.96484 4.375 9Z" fill="#757D85"/>
                        </svg>
                    </div>
                    Учетные записи
                </a>
                <a class="sidebar__item sidebar__item_projects active">
                    <div class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 4.5h-3v-1c0-.79565-.3161-1.55871-.8787-2.12132C12.5587.816071 11.7956.5 11 .5H9c-.79565 0-1.55871.316071-2.12132.87868C6.31607 1.94129 6 2.70435 6 3.5v1H3c-.79565 0-1.55871.31607-2.12132.87868C.316071 5.94129 0 6.70435 0 7.5v9c0 .7956.316071 1.5587.87868 2.1213C1.44129 19.1839 2.20435 19.5 3 19.5h14c.7956 0 1.5587-.3161 2.1213-.8787.5626-.5626.8787-1.3257.8787-2.1213v-9c0-.79565-.3161-1.55871-.8787-2.12132C18.5587 4.81607 17.7956 4.5 17 4.5Zm-9-1c0-.26522.10536-.51957.29289-.70711C8.48043 2.60536 8.73478 2.5 9 2.5h2c.2652 0 .5196.10536.7071.29289.1875.18754.2929.44189.2929.70711v1H8v-1Zm10 13c0 .2652-.1054.5196-.2929.7071S17.2652 17.5 17 17.5H3c-.26522 0-.51957-.1054-.70711-.2929C2.10536 17.0196 2 16.7652 2 16.5v-5.05h3v1.05c0 .2652.10536.5196.29289.7071.18754.1875.44189.2929.70711.2929s.51957-.1054.70711-.2929C6.89464 13.0196 7 12.7652 7 12.5v-1.05h6v1.05c0 .2652.1054.5196.2929.7071s.4419.2929.7071.2929c.2652 0 .5196-.1054.7071-.2929S15 12.7652 15 12.5v-1.05h3v5.05Zm0-7H2v-2c0-.26522.10536-.51957.29289-.70711C2.48043 6.60536 2.73478 6.5 3 6.5h14c.2652 0 .5196.10536.7071.29289.1875.18754.2929.44189.2929.70711v2Z" fill="#757D85"/>
                        </svg>
                    </div>
                    Проекты
                </a>
                <a class="sidebar__item sidebar__item_admin" href="{{route('user.cabinet_adminpanel_ru')}}">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.0" viewBox="0 0 1300 1300">
                            <path fill="#757D85" d="M723.5 1.4c-1.6.8-4.2 2.6-5.6 4.2-1.4 1.6-15.3 26.7-30.9 55.9-15.6 29.1-29.8 55.3-31.6 58.2-5.3 8.4-4.9 8.3-32.8 9.4l-24.7 1.1-5.3-2.6c-5.3-2.6-5.9-3.4-41.6-54.9-20-28.7-37.3-53.6-38.6-55.3-2.9-3.9-8-6.4-13.2-6.4-4.3 0-117.4 37.6-121.3 40.3-5.8 4.1-7 8.9-5.9 23.5 2.4 29.6 7.1 89.2 8.1 102.9l1.2 15.3-2.9 5.7c-2.8 5.5-3.8 6.4-23.4 20-11.3 7.8-22.1 14.7-24 15.3-8.2 2.4-9.2 2.1-73.6-24.6-66.1-27.4-64.2-26.7-72-23.2-3.8 1.8-78.1 94.2-79.6 99-.8 2.9-.8 4.8 0 7.7.8 2.5 15.2 22.3 40.2 55.2 33.8 44.6 39.1 52.1 40.1 56.4 1.4 6.5 1.4 6.5-11.6 37.5-11.5 27.7-14.1 31.6-21.9 34.4-2.3.8-32.4 6.6-67.1 12.8-66 11.8-66.3 11.9-70.7 17.9-5.2 7-18.1 126.8-13.9 129.3.6.4 29.3 11 63.7 23.6 34.4 12.6 64 23.8 65.7 24.8 6.6 3.8 8.1 8.1 14.1 41.3 3.1 16.9 5.6 32.8 5.6 35.5 0 3.1-.9 6.5-2.3 9.1-1.5 2.9-16.7 17.7-49.2 47.9-25.9 24-47.9 45.1-49 46.7-1.3 2.1-1.9 4.7-1.8 8.1 0 4.6 2.5 9.7 25.5 54.4 14.1 27.1 26.8 50.6 28.3 52.2 1.4 1.5 4.5 3.3 6.8 3.9 3.9 1.1 8.7.2 66.7-12.9 65.4-14.8 67.7-15.1 75-11.7 3.9 1.9 50.4 49.9 53.2 54.9 3.8 7 3.6 9-6.6 48.8-23.5 91.7-23 89.7-21.7 94 .6 2.2 2.2 5.1 3.4 6.5 1.2 1.4 24.2 14.9 51.1 30 44.3 24.9 49.4 27.5 53.5 27.5 2.7 0 5.9-.8 7.6-1.8 1.7-1.1 23-22.2 47.5-47.1 24.5-24.9 46.1-46.1 48.2-47.1 7.3-3.9 9.3-3.7 45.9 4.5 18.9 4.2 35.5 8.3 36.8 9.2 6.9 4.5 7.3 5.4 28.6 69.4 20.1 60.3 20.7 61.9 24.5 65.3 2.2 2 5.5 3.8 7.7 4.2 9.1 1.7 65.8-1.9 102-6.5 16.4-2.1 19.9-3.8 22.7-11.3.9-2.4 7.5-32.2 14.6-66.2 8.6-40.6 13.7-63 14.9-65 3.9-6.2 6.8-7.7 37.3-19.3 32.9-12.6 37.1-13.5 44.4-9.6 1.8 1 24.8 19.1 51 40.3 26.3 21.2 49.1 39.3 50.8 40.3 2.2 1.3 4.5 1.7 8.3 1.4 5.1-.3 6.2-1.1 34.9-22.8 58.3-44.1 63.8-48.4 65.7-51.1 1.1-1.4 2.2-4.8 2.4-7.5.5-4.4-1.5-10.2-22.7-65.8-12.8-33.6-23.5-62.6-23.7-64.5-1-6.9 1.3-11.2 17.3-33.2 8.6-11.7 16.6-22.4 17.8-23.6 3.5-3.9 9.5-6.5 15.1-6.4 2.7 0 32.6 3 66.3 6.7l61.2 6.6 4.3-1.9c2.3-1.1 5-2.8 6-3.9 1.4-1.6 36.4-95.4 42.2-113.1 2.2-6.5.8-12-4.3-17.2-2-2.1-26.8-20.8-55.1-41.6-50.8-37.3-51.4-37.8-53.9-43.3l-2.5-5.5 1.2-21.5c1.6-28.1 1.8-29.4 5.5-34.8 3-4.3 5.3-5.6 61.3-33.7 32.1-16.1 59-29.9 59.9-30.6 2.2-1.9 5.4-8.5 5.4-11.2 0-4.2-25.9-121.7-27.5-124.8-.9-1.7-3.2-4.1-5.3-5.5-4.2-2.7.1-2.4-101.3-8.9-38.9-2.5-39.6-2.7-45.5-8.3-4.3-4.1-22.3-38-23-43.4-.4-2.7 0-6 .8-8.4.8-2.2 16.2-28.9 34.2-59.3 31.4-52.8 32.8-55.4 32.8-60.2-.1-2.7-.7-6-1.4-7.4-1.3-2.5-85-88.4-89.8-92.1-1.5-1.2-4.5-2.1-8-2.3l-5.7-.4-56.4 31.3c-31 17.2-58.2 31.9-60.4 32.7-6.9 2.4-11.4.9-30-9.5-18.8-10.5-20.8-12-23.7-17.7-2.6-5-2.5-3.7-4.9-75.1-2-59-2.1-61.1-4.3-65.5-3.7-7.5 3.6-5.3-98.4-29.6C745 3.4 729.9 0 728.7 0c-1.2.1-3.5.7-5.2 1.4zm-38.5 265c27.5 3.6 50.3 8.7 74 16.6 125.9 41.6 222.3 150 248.4 279.2 5.7 28.3 7 41.9 7 74.8.1 31-.4 38.6-4.5 63.5-19.2 116.9-95.5 219.7-202.4 272.5-40.5 20-75.5 30.5-124.5 37.2-15.3 2.1-71.1 1.7-88-.5-87.4-11.9-163.6-49.9-223-111.3-84.9-87.8-121.2-208.8-99-330 14.6-79.7 57.9-155.8 119.6-210.3 60.9-53.7 135.2-85.6 216.9-93 15.1-1.4 60.8-.6 75.5 1.3z"/>
                        </svg>
                    </div>Админ-панель Ru</a>
                <a class="sidebar__item sidebar__item_admin" href="{{route('user.cabinet_adminpanel_en')}}">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" version="1.0" viewBox="0 0 1300 1300">
                            <path fill="#757D85" d="M723.5 1.4c-1.6.8-4.2 2.6-5.6 4.2-1.4 1.6-15.3 26.7-30.9 55.9-15.6 29.1-29.8 55.3-31.6 58.2-5.3 8.4-4.9 8.3-32.8 9.4l-24.7 1.1-5.3-2.6c-5.3-2.6-5.9-3.4-41.6-54.9-20-28.7-37.3-53.6-38.6-55.3-2.9-3.9-8-6.4-13.2-6.4-4.3 0-117.4 37.6-121.3 40.3-5.8 4.1-7 8.9-5.9 23.5 2.4 29.6 7.1 89.2 8.1 102.9l1.2 15.3-2.9 5.7c-2.8 5.5-3.8 6.4-23.4 20-11.3 7.8-22.1 14.7-24 15.3-8.2 2.4-9.2 2.1-73.6-24.6-66.1-27.4-64.2-26.7-72-23.2-3.8 1.8-78.1 94.2-79.6 99-.8 2.9-.8 4.8 0 7.7.8 2.5 15.2 22.3 40.2 55.2 33.8 44.6 39.1 52.1 40.1 56.4 1.4 6.5 1.4 6.5-11.6 37.5-11.5 27.7-14.1 31.6-21.9 34.4-2.3.8-32.4 6.6-67.1 12.8-66 11.8-66.3 11.9-70.7 17.9-5.2 7-18.1 126.8-13.9 129.3.6.4 29.3 11 63.7 23.6 34.4 12.6 64 23.8 65.7 24.8 6.6 3.8 8.1 8.1 14.1 41.3 3.1 16.9 5.6 32.8 5.6 35.5 0 3.1-.9 6.5-2.3 9.1-1.5 2.9-16.7 17.7-49.2 47.9-25.9 24-47.9 45.1-49 46.7-1.3 2.1-1.9 4.7-1.8 8.1 0 4.6 2.5 9.7 25.5 54.4 14.1 27.1 26.8 50.6 28.3 52.2 1.4 1.5 4.5 3.3 6.8 3.9 3.9 1.1 8.7.2 66.7-12.9 65.4-14.8 67.7-15.1 75-11.7 3.9 1.9 50.4 49.9 53.2 54.9 3.8 7 3.6 9-6.6 48.8-23.5 91.7-23 89.7-21.7 94 .6 2.2 2.2 5.1 3.4 6.5 1.2 1.4 24.2 14.9 51.1 30 44.3 24.9 49.4 27.5 53.5 27.5 2.7 0 5.9-.8 7.6-1.8 1.7-1.1 23-22.2 47.5-47.1 24.5-24.9 46.1-46.1 48.2-47.1 7.3-3.9 9.3-3.7 45.9 4.5 18.9 4.2 35.5 8.3 36.8 9.2 6.9 4.5 7.3 5.4 28.6 69.4 20.1 60.3 20.7 61.9 24.5 65.3 2.2 2 5.5 3.8 7.7 4.2 9.1 1.7 65.8-1.9 102-6.5 16.4-2.1 19.9-3.8 22.7-11.3.9-2.4 7.5-32.2 14.6-66.2 8.6-40.6 13.7-63 14.9-65 3.9-6.2 6.8-7.7 37.3-19.3 32.9-12.6 37.1-13.5 44.4-9.6 1.8 1 24.8 19.1 51 40.3 26.3 21.2 49.1 39.3 50.8 40.3 2.2 1.3 4.5 1.7 8.3 1.4 5.1-.3 6.2-1.1 34.9-22.8 58.3-44.1 63.8-48.4 65.7-51.1 1.1-1.4 2.2-4.8 2.4-7.5.5-4.4-1.5-10.2-22.7-65.8-12.8-33.6-23.5-62.6-23.7-64.5-1-6.9 1.3-11.2 17.3-33.2 8.6-11.7 16.6-22.4 17.8-23.6 3.5-3.9 9.5-6.5 15.1-6.4 2.7 0 32.6 3 66.3 6.7l61.2 6.6 4.3-1.9c2.3-1.1 5-2.8 6-3.9 1.4-1.6 36.4-95.4 42.2-113.1 2.2-6.5.8-12-4.3-17.2-2-2.1-26.8-20.8-55.1-41.6-50.8-37.3-51.4-37.8-53.9-43.3l-2.5-5.5 1.2-21.5c1.6-28.1 1.8-29.4 5.5-34.8 3-4.3 5.3-5.6 61.3-33.7 32.1-16.1 59-29.9 59.9-30.6 2.2-1.9 5.4-8.5 5.4-11.2 0-4.2-25.9-121.7-27.5-124.8-.9-1.7-3.2-4.1-5.3-5.5-4.2-2.7.1-2.4-101.3-8.9-38.9-2.5-39.6-2.7-45.5-8.3-4.3-4.1-22.3-38-23-43.4-.4-2.7 0-6 .8-8.4.8-2.2 16.2-28.9 34.2-59.3 31.4-52.8 32.8-55.4 32.8-60.2-.1-2.7-.7-6-1.4-7.4-1.3-2.5-85-88.4-89.8-92.1-1.5-1.2-4.5-2.1-8-2.3l-5.7-.4-56.4 31.3c-31 17.2-58.2 31.9-60.4 32.7-6.9 2.4-11.4.9-30-9.5-18.8-10.5-20.8-12-23.7-17.7-2.6-5-2.5-3.7-4.9-75.1-2-59-2.1-61.1-4.3-65.5-3.7-7.5 3.6-5.3-98.4-29.6C745 3.4 729.9 0 728.7 0c-1.2.1-3.5.7-5.2 1.4zm-38.5 265c27.5 3.6 50.3 8.7 74 16.6 125.9 41.6 222.3 150 248.4 279.2 5.7 28.3 7 41.9 7 74.8.1 31-.4 38.6-4.5 63.5-19.2 116.9-95.5 219.7-202.4 272.5-40.5 20-75.5 30.5-124.5 37.2-15.3 2.1-71.1 1.7-88-.5-87.4-11.9-163.6-49.9-223-111.3-84.9-87.8-121.2-208.8-99-330 14.6-79.7 57.9-155.8 119.6-210.3 60.9-53.7 135.2-85.6 216.9-93 15.1-1.4 60.8-.6 75.5 1.3z"/>
                        </svg>
                    </div>Админ-панель En</a>
                <a class="sidebar__item sidebar__item_out" href="{{route('user.logout')}}">
                    <div class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.68917 14.6475c.4225.4225 1.105.4225 1.52753 0l3.8891-3.8892c.1005-.1002.1801-.2192.2345-.3503.0544-.131.0823-.2715.0823-.41342 0-.14188-.0279-.28237-.0823-.41342-.0544-.13106-.134-.2501-.2345-.35033l-3.8891-3.88916c-.2026-.20256-.47732-.31636-.76378-.31636s-.56119.1138-.76375.31636c-.20256.20256-.31636.47728-.31636.76375 0 .28646.1138.56119.31636.76375l2.03663 2.0475H1.33333C.7375 8.91667.25 9.40417.25 10c0 .5958.4875 1.0833 1.08333 1.0833h9.39247L8.68917 13.12c-.4225.4225-.41167 1.1158 0 1.5275ZM17.5833.25H2.41667C1.84203.25 1.29093.478273.884602.884602.478273 1.29093.25 1.84203.25 2.41667v3.25C.25 6.2625.7375 6.75 1.33333 6.75c.59584 0 1.08334-.4875 1.08334-1.08333V3.5c0-.59583.4875-1.08333 1.08333-1.08333h13c.5958 0 1.0833.4875 1.0833 1.08333v13c0 .5958-.4875 1.0833-1.0833 1.0833h-13c-.59583 0-1.08333-.4875-1.08333-1.0833v-2.1667c0-.5958-.4875-1.0833-1.08334-1.0833C.7375 13.25.25 13.7375.25 14.3333v3.25c0 1.1917.975 2.1667 2.16667 2.1667H17.5833c1.1917 0 2.1667-.975 2.1667-2.1667V2.41667C19.75 1.225 18.775.25 17.5833.25Z" fill="#757D85"/>
                        </svg>
                    </div>
                    Выйти
                </a>
            </div>
            <div class="setup__content">
                <div class="setup__section">
                    <div class="section__title">В работе</div>
                    @foreach($active_projects as $active_projects_array)
                        @foreach($active_projects_array as $active_project)
                    <div class="project">
                        <div class="project__title">{{$active_project['name']}}</div>
                        <form>
                            <label><span>Сумма</span>
                                <input class="price_mask" type="text" name="price" value="{{$active_project['price']}} руб.">
                            </label>
                            <label><span>Дата начала</span>
                                <input class="date_mask" type="text" name="start_date" value="{{date("d.m.Y",strtotime($active_project['start']))}}">
                            </label>
                            <label><span>Срок контроля</span>
                                <input class="" type="text" name="control_date" value="{{date("d.m.Y",strtotime($active_project['control']))}}">
                            </label>
                            <label><span>Дата окончания</span>
                                <input class="" type="text" name="end_date" value="{{date("d.m.Y",strtotime($active_project['end']))}}">
                            </label>
                        </form>
                        <div class="controls">
                            <button class="edit_btn" type="button"><span><a href="/cabinet/personal_project?id={{$active_project['id']}}">Внести изменения</a></span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z" fill="#E45847"/>
                                </svg>
                            </button>
                            <a class="btn" href="#">
                                Скачать документацию<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                        @endforeach
                    @endforeach
                </div>
                <div class="setup__section">
                    <div class="section__title">Превышение проектного срока в 3 месяца</div>
                    <div class="project">
                        <div class="project__title">Проект №1</div>
                        <form>
                            <label><span>Сумма</span>
                                <input class="price_mask" type="text" name="price" value="500 000 руб.">
                            </label>
                            <label><span>Дата начала</span>
                                <input class="date_mask" type="text" name="start_date" value="22.02.2022">
                            </label>
                            <label><span>Срок контроля</span>
                                <input class="date_mask" type="text" name="control_date" value="22.02.2022">
                            </label>
                            <label><span>Дата окончания</span>
                                <input class="date_mask" type="text" name="end_date" value="22.02.2022">
                            </label>
                        </form>
                        <div class="controls">
                            <button class="edit_btn" type="button"><span>Внести изменения</span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z" fill="#E45847"/>
                                </svg>
                            </button><a class="btn" href="#">
                                Скачать документацию<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>

        <div class="setup__section history_changes">
            <div class="section__title">
                Журнал изменений (логов)<svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.15 1c0-.469442.38056-.85.85-.85.46944 0 .85.380558.85.85h-1.7Zm1.45104 17.601c-.33194.332-.87014.332-1.20208 0L.989592 13.1917c-.331945-.332-.331945-.8702 0-1.2021.331948-.332.870138-.332 1.202078 0L7 16.7979l4.8083-4.8083c.332-.332.8702-.332 1.2021 0 .332.3319.332.8701 0 1.2021L7.60104 18.601ZM7.85 1v17h-1.7V1h1.7Z" fill="#E45847"/>
                </svg>
            </div>
            <div class="changes">
                <div class="change">
                    <div class="change__item">
                        <div class="change__top">Проект</div>
                        <div class="change__bottom">Проект №1</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Тип изменений</div>
                        <div class="change__bottom">Добавлен комментария</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Дата изменений</div>
                        <div class="change__bottom">22.02.2022</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Кто зименил</div>
                        <div class="change__bottom">Сергей Викторов, инженер</div>
                    </div>
                    <div class="controls mob_show">
                        <button class="edit_btn" type="button"><span>Внести изменения</span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z" fill="#E45847"/>
                            </svg>
                        </button><a class="btn" href="#">
                            Скачать документацию<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg></a>
                    </div>
                </div>
                <div class="change">
                    <div class="change__item">
                        <div class="change__top">Проект</div>
                        <div class="change__bottom">Проект №1</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Тип изменений</div>
                        <div class="change__bottom">Увеличен срок<br>по этапу ЭК<br>на 10 дней</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Дата изменений</div>
                        <div class="change__bottom">22.02.2022</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Кто зименил</div>
                        <div class="change__bottom">Сергей Викторов, инженер</div>
                    </div>
                    <div class="controls mob_show">
                        <button class="edit_btn" type="button"><span>Внести изменения</span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z" fill="#E45847"/>
                            </svg>
                        </button><a class="btn" href="#">
                            Скачать документацию<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg></a>
                    </div>
                </div>
                <div class="change">
                    <div class="change__item">
                        <div class="change__top">Проект</div>
                        <div class="change__bottom">Проект №1</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Тип изменений</div>
                        <div class="change__bottom">Добавлено описание проекта</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Дата изменений</div>
                        <div class="change__bottom">22.02.2022</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Кто зименил</div>
                        <div class="change__bottom">Сергей Викторов, инженер</div>
                    </div>
                    <div class="controls mob_show">
                        <button class="edit_btn" type="button"><span>Внести изменения</span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z" fill="#E45847"/>
                            </svg>
                        </button><a class="btn" href="#">
                            Скачать документацию<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg></a>
                    </div>
                </div>
            </div>

        </div>
            </div>
        </div>
    </section>
@endsection