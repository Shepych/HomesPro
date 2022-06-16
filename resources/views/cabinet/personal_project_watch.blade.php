@extends('layouts.cabinet_layout')
@section('content')
    <section class="section cabinet_top cabinet_project">
        <div class="container">
            <div class="crumbs">
                <ul>
                    <li><a href="#">homespro</a></li>
                    <li><a href="#">личный кабинет</a></li>
                    <li><a href="#">Проекты</a></li>
                    <li class="active"><a href="#">название</a></li>
                </ul>
            </div>
            <div class="section__title">Название проекта</div>
            <div class="cabinet_top__inner">
                <div class="props">
                    <div class="props__item">
                        <div class="prop">Номер договора</div>
                        <div class="value">с-12443-р32423</div>
                    </div>
                    <div class="props__item">
                        <div class="prop">Площадь</div>
                        <div class="value">144 м<sup>2</sup></div>
                    </div>
                    <div class="props__item">
                        <div class="prop">Ведущий архитектор</div>
                        <div class="value">Иванов Иван</div>
                    </div>
                    <div class="props__item">
                        <div class="prop">Дата создания</div>
                        <div class="value">22.05.2022</div>
                    </div>
                </div>
                <div class="comment_section">
                    <div class="title">Добавьте комментарий</div>
                    <form>
                        <textarea placeholder="Добавить комментарий"></textarea>
                        <button class="btn" type="submit">
                            Добавить<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section cabinet_table">
        <div class="scrollbar">
            <div class="scroll"></div>
        </div>
        <div class="table drag_wrap">
            <table class="drag">
                <thead>
                <tr>
                    <th>Название этапа</th>
                    <th>Сроки</th>
                    <th>Отправлено</th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                    <th>
                        <div class="date">22.02.22</div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="status"></div>
                        <button class="comment_btn" type="button"><svg width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.242 35.5h-.0001c-.9282.0002-1.8182.3691-2.4745 1.0255l-8.55895 8.5589-.00045.0005c-.13974.1401-.3179.2356-.51193.2744-.19403.0388-.39521.0191-.57807-.0565-.182866-.0755-.339196-.2037-.449205-.3681C.558804 44.7702.500063 44.5768.5 44.379V6c0-1.45869.57946-2.85764 1.61091-3.88909S4.54131.5 6 .5h36c1.4587 0 2.8576.57946 3.8891 1.61091C46.9205 3.14236 47.5 4.54131 47.5 6v24c0 1.4587-.5795 2.8576-1.6109 3.8891C44.8576 34.9205 43.4587 35.5 42 35.5H13.242ZM15.5 18c0-.9283-.3688-1.8185-1.0251-2.4749C13.8185 14.8688 12.9283 14.5 12 14.5c-.9283 0-1.8185.3688-2.47487 1.0251C8.86875 16.1815 8.5 17.0717 8.5 18c0 .9283.36875 1.8185 1.02513 2.4749C10.1815 21.1313 11.0717 21.5 12 21.5c.9283 0 1.8185-.3687 2.4749-1.0251C15.1312 19.8185 15.5 18.9283 15.5 18Zm12 0c0-.9283-.3687-1.8185-1.0251-2.4749C25.8185 14.8688 24.9283 14.5 24 14.5c-.9283 0-1.8185.3688-2.4749 1.0251C20.8687 16.1815 20.5 17.0717 20.5 18c0 .9283.3687 1.8185 1.0251 2.4749C22.1815 21.1313 23.0717 21.5 24 21.5c.9283 0 1.8185-.3687 2.4749-1.0251C27.1313 19.8185 27.5 18.9283 27.5 18Zm8.5 3.5c.9283 0 1.8185-.3687 2.4749-1.0251C39.1313 19.8185 39.5 18.9283 39.5 18c0-.9283-.3687-1.8185-1.0251-2.4749C37.8185 14.8688 36.9283 14.5 36 14.5c-.9283 0-1.8185.3688-2.4749 1.0251C32.8687 16.1815 32.5 17.0717 32.5 18c0 .9283.3687 1.8185 1.0251 2.4749C34.1815 21.1313 35.0717 21.5 36 21.5Z" fill="#fff" stroke="#000"/>
                            </svg>
                        </button>
                        <div class="comment">
                            <button class="comment_close" type="button"><svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.0014 9.0014c.08999-.09021.19689-.16179.31459-.21063.11769-.04884.24386-.07397.37129-.07397.12742 0 .25359.02513.37132.07397.1177.04884.2246.12042.3146.21063l5.1266 5.1286 5.1266-5.1286c.0901-.09007.197-.16152.3147-.21026.1177-.04875.2438-.07384.3712-.07384.1274 0 .2535.02509.3712.07384.1177.04874.2246.12019.3147.21026.09.09007.1615.197.2102.31468.0488.11769.0739.24382.0739.3712 0 .12738-.0251.25351-.0739.37122-.0487.1177-.1202.2246-.2102.3147l-5.1286 5.1266 5.1286 5.1266c.09.0901.1615.197.2102.3147.0488.1177.0739.2438.0739.3712 0 .1274-.0251.2535-.0739.3712-.0487.1177-.1202.2246-.2102.3147-.0901.09-.197.1615-.3147.2102-.1177.0488-.2438.0739-.3712.0739-.1274 0-.2535-.0251-.3712-.0739-.1177-.0487-.2246-.1202-.3147-.2102l-5.1266-5.1286-5.1266 5.1286c-.0901.09-.197.1615-.3147.2102a.9692531.9692531 0 0 1-.37122.0739c-.12738 0-.25351-.0251-.3712-.0739-.11768-.0487-.22461-.1202-.31468-.2102-.09007-.0901-.16152-.197-.21026-.3147-.04875-.1177-.07384-.2438-.07384-.3712 0-.1274.02509-.2535.07384-.3712.04874-.1177.12019-.2246.21026-.3147l5.1286-5.1266-5.1286-5.1266c-.09021-.09-.16179-.1969-.21063-.3146-.04884-.11773-.07397-.2439-.07397-.37132 0-.12743.02513-.2536.07397-.37129.04884-.1177.12042-.2246.21063-.31459Z" fill="#E45847"/>
                                </svg>
                            </button>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="stage_name">ЭОМ — электроосвещение и электрооборудование</div>
                    </td>
                    <td>
                        <div class="deadlines">
                            <div class="date"><span>Дата начала:</span> 22.02.22</div>
                            <div class="date"><span>Дата окончания:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td>
                        <div class="sent">
                            <div class="date"><span>Дата:</span> 22.02.22</div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="status"></div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="section history_changes">
        <div class="container">
            <div class="section__title">
                История изменений<svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </div>
                <div class="change">
                    <div class="change__item">
                        <div class="change__top">Проект</div>
                        <div class="change__bottom">Проект №1</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Тип изменений</div>
                        <div class="change__bottom">Увеличен срок по этапу<br>ЭК на 10 дней</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Дата изменений</div>
                        <div class="change__bottom">22.02.2022</div>
                    </div>
                    <div class="change__item">
                        <div class="change__top">Кто зименил</div>
                        <div class="change__bottom">Сергей Викторов, инженер</div>
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
                </div>
            </div>
        </div>
    </section>
    <section class="section docs">
        <div class="container">
            <div class="docs__left">
                <div class="docs__original">
                    <div class="title">Ссылка на исходную документацию:</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="title">Дополнительные расценки</div>
                <div class="btns"><a class="btn" href="#">
                        Скачать<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                        </svg></a><a class="btn" href="#">
                        Загрузить<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                        </svg></a></div>
            </div>
            <div class="docs__table">
                <div class="doc">
                    <div class="title">ЭП</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ВК</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">КЖ</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ЭОМ</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">КМ</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ГП</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ОВ</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ДИ</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
                <div class="doc">
                    <div class="title">ВК</div>
                    <div class="link"><a href="#">ссылка яндекс диск</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection