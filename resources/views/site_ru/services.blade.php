@extends("layouts.site_ru_layout")
@section('content')
    <section class="section banner">
        <div class="container">
            <div class="banner__inner">
                <div class="section__title">Наши услуги</div>
                <div class="banner__text">Мы предлагаем возможность обратиться за консультацией к ведущему архитектору</div><a class="banner__link open_application_form" href="#">Связаться с архитектором<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#E45847"/>
                    </svg></a>
            </div>
            <div class="banner__container">
                <div class="banner__info">100 + готовых проектов</div>
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
    <section class="section service_chapters">
        <div class="container">
            <div class="services">
                <div class="services__img"><img src="img/services/services.jpg"></div>
                <div class="service">
                    <div class="service__inner">
                        <button class="service__close" type="button"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#fff" d="m16.6152 50.5586 33.9411-33.9412M17.3223 16.6171l33.9411 33.9412"/>
                            </svg>
                        </button>
                        <div class="service__name">Эскизный проект</div>
                        <div class="service__text">Разработка общей концепции, предварительный набросок</div>
                        <button class="more_detail" type="button">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg>
                        </button><a class="service__download" href="#"><span>Скачать пример</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.15c-.469442 0-.85.38056-.85.85 0 .46944.380558.85.85.85v-1.7Zm17.601 1.45104c.332-.33194.332-.87014 0-1.20208L13.1917.989592c-.332-.331945-.8702-.331945-1.2021 0-.332.331948-.332.870138 0 1.202078L16.7979 7l-4.8083 4.8083c-.332.332-.332.8702 0 1.2021.3319.332.8701.332 1.2021 0l5.4093-5.40936ZM1 7.85h17v-1.7H1v1.7Z" fill="#E45847"/>
                            </svg></a>
                    </div>
                    <div class="service__slider service__slider1">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="title">Эскизный проект</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="title">Архитектурный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="service">
                    <div class="service__inner">
                        <button class="service__close" type="button"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#fff" d="m16.6152 50.5586 33.9411-33.9412M17.3223 16.6171l33.9411 33.9412"/>
                            </svg>
                        </button>
                        <div class="service__name">Архитектурный раздел</div>
                        <div class="service__text">Проектная документациия, схемы и чертежи</div>
                        <button class="more_detail" type="button">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg>
                        </button><a class="service__download" href="#"><span>Скачать пример</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.15c-.469442 0-.85.38056-.85.85 0 .46944.380558.85.85.85v-1.7Zm17.601 1.45104c.332-.33194.332-.87014 0-1.20208L13.1917.989592c-.332-.331945-.8702-.331945-1.2021 0-.332.331948-.332.870138 0 1.202078L16.7979 7l-4.8083 4.8083c-.332.332-.332.8702 0 1.2021.3319.332.8701.332 1.2021 0l5.4093-5.40936ZM1 7.85h17v-1.7H1v1.7Z" fill="#E45847"/>
                            </svg></a>
                    </div>
                    <div class="service__slider service__slider2">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="title">Архитектурный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="title">Архитектурный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="service">
                    <div class="service__inner">
                        <button class="service__close" type="button"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#fff" d="m16.6152 50.5586 33.9411-33.9412M17.3223 16.6171l33.9411 33.9412"/>
                            </svg>
                        </button>
                        <div class="service__name">Конструктивный раздел</div>
                        <div class="service__text">Разработка общей концепции, предварительный набросок</div>
                        <button class="more_detail" type="button">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg>
                        </button><a class="service__download" href="#"><span>Скачать пример</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.15c-.469442 0-.85.38056-.85.85 0 .46944.380558.85.85.85v-1.7Zm17.601 1.45104c.332-.33194.332-.87014 0-1.20208L13.1917.989592c-.332-.331945-.8702-.331945-1.2021 0-.332.331948-.332.870138 0 1.202078L16.7979 7l-4.8083 4.8083c-.332.332-.332.8702 0 1.2021.3319.332.8701.332 1.2021 0l5.4093-5.40936ZM1 7.85h17v-1.7H1v1.7Z" fill="#E45847"/>
                            </svg></a>
                    </div>
                    <div class="service__slider service__slider3">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="title">Конструктивный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="title">Конструктивный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="service">
                    <div class="service__inner">
                        <button class="service__close" type="button"><svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="#fff" d="m16.6152 50.5586 33.9411-33.9412M17.3223 16.6171l33.9411 33.9412"/>
                            </svg>
                        </button>
                        <div class="service__name">Инженерный раздел</div>
                        <div class="service__text">Разработка общей концепции, предварительный набросок</div>
                        <button class="more_detail" type="button">
                            Подробнее<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                            </svg>
                        </button><a class="service__download" href="#"><span>Скачать пример</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 6.15c-.469442 0-.85.38056-.85.85 0 .46944.380558.85.85.85v-1.7Zm17.601 1.45104c.332-.33194.332-.87014 0-1.20208L13.1917.989592c-.332-.331945-.8702-.331945-1.2021 0-.332.331948-.332.870138 0 1.202078L16.7979 7l-4.8083 4.8083c-.332.332-.332.8702 0 1.2021.3319.332.8701.332 1.2021 0l5.4093-5.40936ZM1 7.85h17v-1.7H1v1.7Z" fill="#E45847"/>
                            </svg></a>
                    </div>
                    <div class="service__slider service__slider4">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="title">Инженерный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="title">Инженерный раздел</div>
                                    <div class="text">
                                        <p>Архитектурный раздел — это важная часть проектной документации, которая содержит документы, схемы и чертежи, детализирующие эскизный проект и предваряет последующие разделы работы над проектом.</p>
                                        <p>При создании АР указываются все размеры, габариты, площади и подробные планировки, материалы и архитектурные схемы.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section service_packages">
        <div class="container">
            <div class="section__title">Пакеты услуг</div>
            <div class="packages">
                <div class="package">
                    <div class="package__num contour">№ 01</div>
                    <div class="package__inner">
                        <div class="package__img"><svg width="243" height="157" viewBox="0 0 243 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5540" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="243" height="157">
                                    <path fill="#1B1C1D" d="M0 .846558h242.959v156.015H0z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M.5 1.34656h241.959v155.015H.5z"/>
                                </mask>
                                <g mask="url(#mask0_167_5540)" stroke="#fff">
                                    <path transform="matrix(.76139 -.6483 .60965 .79267 -46.3287 2.91007)" stroke-opacity=".14" d="M.685516.0721875h127.587v128.957H.685516z"/>
                                    <path transform="matrix(.33727 -.9414 .92955 .3687 93.582 217.371)" stroke-opacity=".14" d="M.633412-.286357h130.719v125.782H.633412z"/>
                                    <path transform="matrix(.33727 -.9414 .92955 .3687 -7.3531 140.074)" stroke-opacity=".14" d="M.633412-.286357h153.439v147.651H.633412z"/>
                                    <path opacity=".14" transform="matrix(-.7289 -.68462 .64694 -.76255 200.591 191.479)" d="M-.0409815-.723583h150.136v151.007h-150.136z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Консультация архитектора или дизайнера</li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Стоимость  10 000 руб</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <div class="package__num contour">№ 02</div>
                    <div class="package__inner">
                        <div class="package__img package__img_light"><svg width="224" height="157" viewBox="0 0 224 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5549" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="224" height="157">
                                    <path fill="#1B1C1D" d="M.452148.846558h222.713v156.015H.452148z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M.952148 1.34656h221.713v155.015H.952148z"/>
                                </mask>
                                <g mask="url(#mask0_167_5549)" stroke="#E45847">
                                    <path transform="matrix(-.13292 -.99113 .98474 -.174 -19.2827 302.298)" d="M.42591-.582566h248.094v217.417H.42591z"/>
                                    <path transform="matrix(-.57806 -.816 .73105 -.68233 208.431 365.758)" d="M.0764959-.749162h277.476v269.8h-277.476z"/>
                                    <path transform="matrix(-.93685 .34974 -.27261 -.96213 463.028 60.1516)" d="M-.604728-.306193h258.001v288.482h-258.001z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Эскизный проект<span>(Стоимость — от 10000 руб.)</span></li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Стоимость от 800 руб/м2</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <div class="package__num contour">№ 03</div>
                    <div class="package__inner">
                        <div class="package__img"><svg width="225" height="157" viewBox="0 0 225 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5560" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="225" height="157">
                                    <path fill="#1B1C1D" d="M.658203.846558h223.725v156.015H.658203z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M1.1582 1.34656h222.725v155.015H1.1582z"/>
                                </mask>
                                <g mask="url(#mask0_167_5560)" stroke="#fff">
                                    <path transform="matrix(-.5798 -.81476 .73259 -.68067 130.627 235.923)" stroke-opacity=".14" d="M.0763938-.747714h236.87v230.524h-236.87z"/>
                                    <path transform="matrix(-.5798 -.81476 .73259 -.68067 -67.748 335.535)" stroke-opacity=".14" d="M.0763938-.747714h277.9v270.459h-277.9z"/>
                                    <path opacity=".14" transform="matrix(-.93737 .34835 -.27376 -.9618 188.012 29.924)" d="M-.605561-.306725h259.035v288.58h-259.035z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Эскизный проект</li>
                            <li>Архитектурный раздел</li>
                            <li>Конструктивный раздел</li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Стоимость от 1 900 руб/м2</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <div class="package__num contour">№ 04</div>
                    <div class="package__inner">
                        <div class="package__img package__img_light"><svg width="224" height="157" viewBox="0 0 224 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5569" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="224" height="157">
                                    <path fill="#1B1C1D" d="M.875977.846558h222.713v156.015H.875977z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M1.37598 1.34656h221.713v155.015H1.37598z"/>
                                </mask>
                                <g mask="url(#mask0_167_5569)" stroke="#E45847">
                                    <path transform="matrix(-.57806 -.816 .73105 -.68233 55.7494 192.686)" d="M.0764959-.749162h236.509v229.962h-236.509z"/>
                                    <path transform="matrix(-.57806 -.816 .73105 -.68233 -141.729 292.297)" d="M.0764959-.749162h277.476v269.8h-277.476z"/>
                                    <path transform="matrix(-.93685 .34974 -.27261 -.96213 112.868 -13.3087)" d="M-.604728-.306193h258.001v288.482h-258.001z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Эскизный проект</li>
                            <li>Архитектурный раздел</li>
                            <li>Конструктивный раздел</li>
                            <li>Инженерный раздел</li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Стоимость от 2 400 руб/м2</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <div class="package__num contour">№ 05</div>
                    <div class="package__inner">
                        <div class="package__img"><svg width="223" height="157" viewBox="0 0 223 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5579" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="223" height="157">
                                    <path fill="#1B1C1D" d="M.0820312.846558h222.713v156.015h-222.713z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M.582031 1.34656h221.713v155.015H.582031z"/>
                                </mask>
                                <g mask="url(#mask0_167_5579)">
                                    <path transform="matrix(.76538 -.64358 .53797 .84296 -205.336 -143.398)" stroke="#E45847" d="M.651679.0996929h228.368v238.049H.651679z"/>
                                    <path transform="matrix(.35293 -.93565 .8955 .44505 18.7374 273.784)" stroke="#fff" stroke-opacity=".14" d="M.624218-.245301h243.994v222.007H.624218z"/>
                                    <path transform="matrix(.35293 -.93565 .8955 .44505 -149.36 118.634)" stroke="#fff" stroke-opacity=".14" d="M.624218-.245301h286.252v260.472H.624218z"/>
                                    <path transform="matrix(-.66324 -.7484 .65049 -.75952 205.685 236.718)" stroke="#fff" stroke-opacity=".14" d="M-.0063777-.753962h273.344v273.986h-273.344z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Эскизный проект</li>
                            <li>Архитектурный раздел</li>
                            <li>Конструктивный раздел</li>
                            <li>Инженерный раздел</li>
                            <li>Дизайн интерьера</li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Индивидуальная стоимость</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="package">
                    <div class="package__num contour">№ 06</div>
                    <div class="package__inner">
                        <div class="package__img"><svg width="223" height="157" viewBox="0 0 223 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_167_5579" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="223" height="157">
                                    <path fill="#1B1C1D" d="M.0820312.846558h222.713v156.015h-222.713z"/>
                                    <path stroke="#fff" stroke-opacity=".14" d="M.582031 1.34656h221.713v155.015H.582031z"/>
                                </mask>
                                <g mask="url(#mask0_167_5579)">
                                    <path transform="matrix(.76538 -.64358 .53797 .84296 -205.336 -143.398)" stroke="#E45847" d="M.651679.0996929h228.368v238.049H.651679z"/>
                                    <path transform="matrix(.35293 -.93565 .8955 .44505 18.7374 273.784)" stroke="#fff" stroke-opacity=".14" d="M.624218-.245301h243.994v222.007H.624218z"/>
                                    <path transform="matrix(.35293 -.93565 .8955 .44505 -149.36 118.634)" stroke="#fff" stroke-opacity=".14" d="M.624218-.245301h286.252v260.472H.624218z"/>
                                    <path transform="matrix(-.66324 -.7484 .65049 -.75952 205.685 236.718)" stroke="#fff" stroke-opacity=".14" d="M-.0063777-.753962h273.344v273.986h-273.344z"/>
                                </g>
                            </svg>
                        </div>
                        <ul class="ul">
                            <li>Эскизный проект</li>
                            <li>Архитектурный раздел</li>
                            <li>Конструктивный раздел</li>
                            <li>Инженерный раздел</li>
                            <li>Ландшафтный дизайн</li>
                            <li>Дизайн интерьера</li>
                        </ul>
                        <div class="package__bottom">
                            <div class="package__info">Индивидуальная стоимость</div><a class="btn open_application_form" href="#">
                                Узнать больше<svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7c-.552285 0-1 .44772-1 1s.447715 1 1 1V7Zm31.7071 1.7071c.3905-.39052.3905-1.02369 0-1.41421L26.3431.92893c-.3905-.390524-1.0236-.390524-1.4142 0-.3905.39052-.3905 1.02369 0 1.41421L30.5858 8l-5.6569 5.6569c-.3905.3905-.3905 1.0236 0 1.4142.3906.3905 1.0237.3905 1.4142 0l6.364-6.364ZM1 9h31V7H1v2Z" fill="#fff" fill-opacity=".5"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="mob_show more_packages" type="button"><span>Загрузить еще</span><svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.15 1c0-.469442.38056-.85.85-.85.46944 0 .85.380558.85.85h-1.7Zm1.45104 17.601c-.33194.332-.87014.332-1.20208 0L.989592 13.1917c-.331945-.332-.331945-.8702 0-1.2021.331948-.332.870138-.332 1.202078 0L7 16.7979l4.8083-4.8083c.332-.332.8702-.332 1.2021 0 .332.3319.332.8701 0 1.2021L7.60104 18.601ZM7.85 1v17h-1.7V1h1.7Z" fill="#E45847"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="section faq">
        <div class="container">
            <div class="section__title">FAQ</div>
            <div class="faq__container">
                <div class="faq__inner">
                    <div class="faq__text">Создание частных проектов в современных направлениях минимализма, не только для самого высокого ценового сегмента, но и для уровня среднего класса.</div>
                    <div class="faq__img mob_hide"><img src="img/faq/faq.jpg"></div>
                </div>
                <ul class="faq__list">
                    <li class="drop">
                        <div class="drop__title"><span>Сколько стоит проект дома?</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.85C.530558 7.85.15 7.46944.15 7c0-.46944.380558-.85.85-.85v1.7Zm17.601-1.45104c.332.33194.332.87014 0 1.20208l-5.4093 5.40936c-.332.332-.8702.332-1.2021 0-.332-.3319-.332-.8701 0-1.2021L16.7979 7l-4.8083-4.80833c-.332-.33194-.332-.87013 0-1.202078.3319-.331945.8701-.331945 1.2021 0L18.601 6.39896ZM1 6.15h17v1.7H1v-1.7Z" fill="#717171"/>
                            </svg>
                        </div>
                        <div class="drop__content">Столько стоит проект дома!</div>
                    </li>
                    <li class="drop">
                        <div class="drop__title"><span>Что нужно для начала работы над проектом дома?</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.85C.530558 7.85.15 7.46944.15 7c0-.46944.380558-.85.85-.85v1.7Zm17.601-1.45104c.332.33194.332.87014 0 1.20208l-5.4093 5.40936c-.332.332-.8702.332-1.2021 0-.332-.3319-.332-.8701 0-1.2021L16.7979 7l-4.8083-4.80833c-.332-.33194-.332-.87013 0-1.202078.3319-.331945.8701-.331945 1.2021 0L18.601 6.39896ZM1 6.15h17v1.7H1v-1.7Z" fill="#717171"/>
                            </svg>
                        </div>
                        <div class="drop__content">То нужно для начала работы над проектом дома!</div>
                    </li>
                    <li class="drop">
                        <div class="drop__title"><span>Как происходит работа над проектом дома?</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.85C.530558 7.85.15 7.46944.15 7c0-.46944.380558-.85.85-.85v1.7Zm17.601-1.45104c.332.33194.332.87014 0 1.20208l-5.4093 5.40936c-.332.332-.8702.332-1.2021 0-.332-.3319-.332-.8701 0-1.2021L16.7979 7l-4.8083-4.80833c-.332-.33194-.332-.87013 0-1.202078.3319-.331945.8701-.331945 1.2021 0L18.601 6.39896ZM1 6.15h17v1.7H1v-1.7Z" fill="#717171"/>
                            </svg>
                        </div>
                        <div class="drop__content">Так происходит работа над проектом дома!</div>
                    </li>
                    <li class="drop">
                        <div class="drop__title"><span>Какое время требуется на создание проекта дома?</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.85C.530558 7.85.15 7.46944.15 7c0-.46944.380558-.85.85-.85v1.7Zm17.601-1.45104c.332.33194.332.87014 0 1.20208l-5.4093 5.40936c-.332.332-.8702.332-1.2021 0-.332-.3319-.332-.8701 0-1.2021L16.7979 7l-4.8083-4.80833c-.332-.33194-.332-.87013 0-1.202078.3319-.331945.8701-.331945 1.2021 0L18.601 6.39896ZM1 6.15h17v1.7H1v-1.7Z" fill="#717171"/>
                            </svg>
                        </div>
                        <div class="drop__content">Никакое время требуется на создание проекта дома!</div>
                    </li>
                    <li class="drop">
                        <div class="drop__title"><span>Есть ли авторский надзор за строительством дома?</span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7.85C.530558 7.85.15 7.46944.15 7c0-.46944.380558-.85.85-.85v1.7Zm17.601-1.45104c.332.33194.332.87014 0 1.20208l-5.4093 5.40936c-.332.332-.8702.332-1.2021 0-.332-.3319-.332-.8701 0-1.2021L16.7979 7l-4.8083-4.80833c-.332-.33194-.332-.87013 0-1.202078.3319-.331945.8701-.331945 1.2021 0L18.601 6.39896ZM1 6.15h17v1.7H1v-1.7Z" fill="#717171"/>
                            </svg>
                        </div>
                        <div class="drop__content">Да, есть. График посещения участка строительства привязывается к ППР (Проекту Производства Работ). Стоимость выезда архитектора — 9 000 рублей (до 50 км. от МКАД) плюс 100 рублей (за каждый километр свыше).</div>
                    </li>
                </ul>
                <div class="faq__img mob_show"><img src="img/faq/faq_mob.jpg"></div>
            </div>
        </div>
    </section>
@endsection

