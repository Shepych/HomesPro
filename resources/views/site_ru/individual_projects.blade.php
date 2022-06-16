@extends("layouts.site_ru_layout")
@section('content')
    <section class="section banner">
        <div class="container">
            <div class="banner__inner">
                <div class="section__title">Индивидуальные проекты</div><a class="banner__link open_application_form" href="#">Связаться с архитектором<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#E45847"/>
                    </svg></a>
            </div>
            <div class="banner__container">
                <div class="banner__info">10 +  лет опыта</div>
                <div class="banner__img">
                    <picture>
                        <source media="(min-width: 48.1em)" srcset="img/services/banner.jpg"/><img src="img/services/banner_mob.jpg"/>
                    </picture>
                </div>
                <div class="socials"><a class="soc soc_ig" href="#"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4972 6.99851c-1.92804 0-3.50145 1.57344-3.50145 3.50149 0 1.9281 1.57341 3.5015 3.50145 3.5015 1.928 0 3.5014-1.5734 3.5014-3.5015 0-1.92805-1.5734-3.50149-3.5014-3.50149ZM20.9988 10.5c0-1.44998.0132-2.88683-.0683-4.33418-.0814-1.68113-.4649-3.17314-1.6942-4.40247C18.0044.53139 16.515.150507 14.8339.0690774c-1.45-.08143-2.8868-.068296-4.3341-.068296-1.44995 0-2.88677-.013134-4.33409.068296C4.4846.150507 2.99262.534016 1.76331 1.76335.53138 2.9953.150505 4.48469.0690761 6.16582-.0123524 7.6158.0007813 9.05265.0007813 10.5c0 1.4474-.0131337 2.8868.0682948 4.3342.0814289 1.6811.4649309 3.1731 1.6942339 4.4025 1.23194 1.2319 2.72129 1.6128 4.4024 1.6942 1.44995.0815 2.88677.0683 4.33409.0683 1.45 0 2.8868.0132 4.3341-.0683 1.6811-.0814 3.1731-.4649 4.4024-1.6942 1.2319-1.232 1.6128-2.7214 1.6942-4.4025.0841-1.4474.0683-2.8842.0683-4.3342Zm-10.5016 5.3875c-2.98136 0-5.38744-2.4061-5.38744-5.3875 0-2.98139 2.40608-5.38752 5.38744-5.38752 2.9813 0 5.3874 2.40613 5.3874 5.38752 0 2.9814-2.4061 5.3875-5.3874 5.3875Zm5.608-9.73744c-.696 0-1.2582-.56213-1.2582-1.25822 0-.6961.5622-1.25823 1.2582-1.25823.6961 0 1.2582.56213 1.2582 1.25823.0002.16529-.0322.32899-.0953.48174-.0632.15275-.1558.29154-.2727.40842-.1169.11688-.2557.20955-.4084.27271-.1528.06316-.3165.09556-.4818.09535Z" fill="#656666"/>
                        </svg></a><a class="soc soc_fb" href="#"><svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="m9.34475 11.6505.51826-3.74843H6.621V5.47066c0-1.02549.45297-2.02617 1.90503-2.02617H10V.253271S8.66233 0 7.38333 0C4.71324 0 2.96804 1.79519 2.96804 5.04517v2.8569H0v3.74843h2.96804v8.192c1.21029.21 2.44267.21 3.65296 0v-8.192h2.72375Z" fill="#656666"/>
                        </svg></a><a class="soc soc_vk" href="#"><svg width="29" height="17" viewBox="0 0 29 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.3348 1.15114C28.5354.488143 28.3348 0 27.3742 0h-3.1718c-.8071 0-1.1793.421357-1.3811.886429 0 0-1.6131 3.880861-3.898 6.401711-.7395.731-1.0754.96293-1.479.96293-.2017 0-.505-.23193-.505-.89614V1.15114C16.9393.354571 16.7169 0 16.0451 0h-4.9879c-.5038 0-.8071.369143-.8071.720071 0 .754069 1.143.928929 1.2602 3.051499v4.61186c0 1.0115-.1848 1.19486-.5884 1.19486-1.0754 0-3.69138-3.89908-5.24406-8.36036C5.37697.349714 5.07248 0 4.2617 0H1.08748C.181246 0 0 .421357 0 .886429 0 1.71457 1.07539 5.82857 5.00844 11.2698 7.63047 14.9855 11.3218 17 14.6846 17c2.0166 0 2.2655-.4469 2.2655-1.2179v-2.8087c0-.8949.191-1.0734.8302-1.0734.4712 0 1.2771.2331 3.1597 2.0242C23.0908 16.048 23.4448 17 24.6555 17h3.1718c.9063 0 1.3606-.4469 1.0996-1.3309-.2876-.8791-1.3146-2.1553-2.6764-3.6695-.7395-.8622-1.8487-1.7911-2.1858-2.25617-.4701-.59622-.3359-.86214 0-1.39279 0 0 3.8665-5.37443 4.2689-7.1995h.0012Z" fill="#656666"/>
                        </svg></a><a class="soc soc_yt" href="#"><svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.3928 3.138c-.1642-.60558-.484-1.15385-.9255-1.58651-.4539-.44597-1.0103-.764985-1.6165-.926929C23.5818.0061946 14.4915.0061948 14.4915.0061948 10.7019-.0383868 6.91321.157694 3.14682.59333c-.60627.173909-1.16158.50005-1.61653.94941-.44702.44473-.770813.99314-.939957 1.59401C.184017 5.40003-.0133996 7.6981.0007457 9.99999-.0137524 12.2998.183179 14.5971.590333 16.8632c.165519.5984.488097 1.1443.936337 1.5853.44823.441 1.0064.7595 1.62015.9282 2.29915.6171 11.34468.6171 11.34468.6171 3.7945.0446 7.588-.1514 11.3593-.5871.6062-.162 1.1626-.481 1.6165-.927.447-.4409.7648-.9894.9243-1.5865.4169-2.2624.6196-4.5614.6052-6.8645.0314-2.31278-.1711-4.62265-.604-6.89195V3.138ZM11.6016 14.2773V5.7239l7.5632 4.2773-7.5632 4.2761Z" fill="#656666"/>
                        </svg></a><a class="soc soc_tg" href="#"><svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.7754.336778 1.09037 8.31328c-1.411662.567-1.403496 1.3545-.258996 1.70562l5.310666 1.6567L18.4294 3.92311c.581-.3535 1.1118-.16333.6755.224L9.14971 13.1316h-.00234l.00234.0012-.36634 5.474c.53667 0 .7735-.2462 1.0745-.5367l2.57953-2.5083 5.3655 3.9631c.9893.5449 1.6998.2649 1.946-.9158L23.271 2.00978c.3605-1.445502-.5518-2.1000016-1.4956-1.673002Z" fill="#656666"/>
                        </svg></a></div>
            </div>
        </div>
    </section>
    <section class="section section_cards individual_projects">
        <div class="container">
            <div class="section__top">
                <div class="section__title">Индивидуальные проекты</div><a class="btn open_application_form" href="#">
                    Связаться с архитектором<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                    </svg></a>
            </div>
            <form>
                <div class="filter">
                    <div class="filter__by">Фильтр по:</div>
                    <div class="filter__select"><span>Выберете проект:</span>
                        <select>
                            <option value="Все">Все</option>
                            <option value="Флэтхаус">Флэтхаус</option>
                            <option value="Барнхаус">Барнхаус</option>
                            <option value="Вальма">Вальма</option>
                        </select><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1.5c0-.552285-.44772-1-1-1s-1 .447715-1 1h2ZM7.29289 19.7071c.39053.3905 1.02369.3905 1.41422 0l6.36399-6.364c.3905-.3905.3905-1.0236 0-1.4142-.3906-.3905-1.0237-.3905-1.4142 0L8 17.5858l-5.65685-5.6569c-.39053-.3905-1.02369-.3905-1.414218 0-.390525.3906-.390525 1.0237 0 1.4142l6.363958 6.364ZM7 1.5V19h2V1.5H7Z" fill="#fff" fill-opacity=".5"/>
                        </svg>
                    </div>
                    <div class="filter__info"><span>Найдено:</span>
                        <div class="filter__count">20</div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__top">
                            <div class="card__name">Минимализм</div>
                        </div>
                        <div class="card__img">
                            <div class="card__info">
                                <div class="card__number">№ 24</div>
                                <div class="card__year">2022 г.</div>
                            </div>
                            <picture>
                                <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                            </picture>
                        </div>
                        <div class="card__bottom">
                            <div class="card__area"><span>общая площадь</span>
                                <div class="card__area_num">190 м<sup>2</sup></div>
                            </div><a class="more_detail" href="#">
                                Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="section section_cards">
        <div class="container">
            <div class="section__top">
                <div class="section__title">Дополнительные услуги</div><a class="btn open_application_form" href="#">
                    Связаться с архитектором<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                    </svg></a>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="card__top">
                        <div class="card__name">ДИЗАЙН ИНТЕРЬЕРА</div>
                    </div>
                    <div class="card__img">
                        <div class="card__info">
                            <div class="card__number">№ 24</div>
                            <div class="card__year">2022 г.</div>
                        </div>
                        <picture>
                            <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                        </picture>
                    </div>
                    <div class="card__bottom">
                        <div class="card__area"><span>общая площадь</span>
                            <div class="card__area_num">190 м<sup>2</sup></div>
                        </div><a class="more_detail" href="#">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg></a>
                    </div>
                </div>
                <div class="card">
                    <div class="card__top">
                        <div class="card__name">ЛАНДШАФТНЫЙ ДИЗАЙН</div>
                    </div>
                    <div class="card__img">
                        <div class="card__info">
                            <div class="card__number">№ 24</div>
                            <div class="card__year">2022 г.</div>
                        </div>
                        <picture>
                            <source media="(min-width: 48.1em)" srcset="img/individual_projects/card.jpg"><img src="img/individual_projects/card_mob.jpg">
                        </picture>
                    </div>
                    <div class="card__bottom">
                        <div class="card__area"><span>общая площадь</span>
                            <div class="card__area_num">190 м<sup>2</sup></div>
                        </div><a class="more_detail" href="#">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
