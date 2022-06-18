<div id="main_page_slider_ru_slide_{{ $slide }}" style="margin-bottom: 50rem" class="admin-panel__content animate__animated animate__fadeInRight">
    <div class="admin-panel__item_title">
        Слайд № {{ $count }}
        <button onclick="clickDeleteSlide('{{ route('admin.main_page_slider_ru.delete_slider', $slide) }}', {{ $slide }})" class="admin-panel__delete_btn delete_btn" type="button">
            Удалить
        </button>
    </div>
    <div class="admin-panel__item">
        <form style="width:100%;display:flex" class="main_page_slider_ru_slide_update" action="{{ route('admin.main_page_slider_ru.update_slider', $slide) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="admin-panel__parameters">
                <div class="admin-panel__content_name">
                    Главная фотография
                </div>
                <div class="admin-panel__label">
                    photo.jpeg
                </div>
                <label class="admin-panel__label">
                    <input id="banner_{{ $slide }}" type="file" name="banner">
                </label>
            </div>
            <div class="admin-panel__access">
                <button class="admin-panel__edit_btn edit_btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z"
                              fill="#E45847" />
                    </svg>
                    <span>
                        Изменить
                    </span>
                </button>
                <button onclick="$(this).closest('form').submit()" class="admin-panel__save_btn save_btn" type="button">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="#E45847" d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>
                        Сохранить
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="admin-panel__item">
        <form style="width:100%;display:flex" class="main_page_slider_ru_slide_update" action="{{ route('admin.main_page_slider_ru.update_slider', $slide) }}" method="post">
            @csrf
            <div class="admin-panel__parameters">
                <div class="admin-panel__content_name">
                    Название проекта
                </div>
                <label class="admin-panel__label">
                    <input type="text" name="title" value="Prairie House">
                </label>
            </div>
            <div class="admin-panel__access">
                <button class="admin-panel__edit_btn edit_btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z"
                              fill="#E45847" />
                    </svg>
                    <span>
                                                                                            Изменить
                                                                                    </span>
                </button>
                <button onclick="$(this).closest('form').submit()" class="admin-panel__save_btn save_btn" type="button">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="#E45847" d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>
                                                                                            Сохранить
                                                                                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="admin-panel__item">
        <form style="width:100%;display:flex" class="main_page_slider_ru_slide_update" action="{{ route('admin.main_page_slider_ru.update_slider', $slide) }}" method="post">
            @csrf
            <div class="admin-panel__parameters">
                <div class="admin-panel__content_name">
                    Фотография архитектора
                </div>
                <div class="admin-panel__label">
                    photo.jpeg
                </div>
                <label class="admin-panel__label ">
                    <input type="file" name="architector_img">
                </label>
            </div>
            <div class="admin-panel__access">
                <button class="admin-panel__edit_btn edit_btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z"
                              fill="#E45847" />
                    </svg>
                    <span>
                        Изменить
                    </span>
                </button>
                <button onclick="$(this).closest('form').submit()" class="admin-panel__save_btn save_btn" type="button">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="#E45847" d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>
                        Сохранить
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="admin-panel__item">
        <form style="width:100%;display:flex" class="main_page_slider_ru_slide_update" action="{{ route('admin.main_page_slider_ru.update_slider', $slide) }}" method="post">
            @csrf
            <div class="admin-panel__parameters">
                <div class="admin-panel__content_name">
                    Имя Фамилия
                </div>
                <label class="admin-panel__label">
                    <input type="text" name="fio" value="ФИО">
                </label>
            </div>
            <div class="admin-panel__access">
                <button class="admin-panel__edit_btn edit_btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z"
                              fill="#E45847" />
                    </svg>
                    <span>
                                                                                            Изменить
                                                                                    </span>
                </button>
                <button onclick="$(this).closest('form').submit()" class="admin-panel__save_btn save_btn" type="button">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="#E45847" d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>

                    <span>
                        Сохранить
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="admin-panel__item">
        <form style="width:100%;display:flex" class="main_page_slider_ru_slide_update" action="{{ route('admin.main_page_slider_ru.update_slider', $slide) }}" method="post">
            @csrf
            <div class="admin-panel__parameters">
                <div class="admin-panel__content_name">
                    Ссылка на проект
                </div>

                <label class="admin-panel__label">
                    <input type="text" name="project_href" value="Ваша ссылка">
                </label>
            </div>
            <div class="admin-panel__access">
                <button class="admin-panel__edit_btn edit_btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3344.603957c.7812-.781187 2.05-.781187 2.8312 0l1.2313 1.232183c.7812.78094.7812 2.04844 0 2.82969l-1.5125 1.5125-4.06253-4.06187L11.3344.603957Zm1.8437 6.280623L5.89062 14.169c-.325.325-.72813.5656-1.16875.6937L.961554 15.969c-.263125.0781-.547812.0062-.741875-.2157-.194062-.1656-.2666245-.45-.189187-.7156l1.106058-3.7594c.13-.4406.36844-.8437.69375-1.1687l7.28532-7.28627 4.06248 4.06125Z"
                              fill="#E45847" />
                    </svg>
                    <span>
                        Изменить
                    </span>
                </button>
                <button onclick="$(this).closest('form').submit()" class="admin-panel__save_btn save_btn" type="button">
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="#E45847" d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                    <span>
                        Сохранить
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
