$(function(){

	var html = $('html')

	$('select').niceSelect()

	// $(window).on('load resize', function() {
	// 	if ($(window).width() <= '768'){
			
	// 	}
	// });

	// $(document).on('click', '.password_control', function(evt) {
	// 	evt.preventDefault();
	// 	$(this).toggleClass('active');
	// 	if ($(this).siblings('input').attr('type') == 'password'){
	// 		$(this).siblings('input').attr('type', 'text');
	// 	} else {
	// 		$(this).siblings('input').attr('type', 'password');
	// 	}
	// });

	$(document).on('click', '.burger', function(evt) {
		evt.preventDefault()
		$(this).toggleClass('active')
		html.toggleClass('menu_open').removeClass('ofh')
		$('.cabinet_btn, .sidebar').removeClass('active')
	})

	// swiper_main
	var swiper_main = new Swiper(".swiper_main", {
		spaceBetween: 30,
		navigation: {
			nextEl: ".swiper_main .swiper-button-next",
			prevEl: ".swiper_main .swiper-button-prev",
		},
	})

	// swiper_projects
	var swiper_projects = new Swiper(".swiper_projects", {
		slidesPerView: 1,
		pagination: {
			el: ".swiper_projects .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper_projects .swiper-button-next",
			prevEl: ".swiper_projects .swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
		},
	})

	// swiper_team
	var swiper_team = new Swiper(".swiper_team", {
		slidesPerView: 1,
		navigation: {
			nextEl: ".swiper_team .swiper-button-next",
			prevEl: ".swiper_team .swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 4,
			},
		},
	})

	// swiper_service1
	var swiper_service1 = new Swiper(".service__slider1 .swiper", {
		pagination: {
			el: ".service__slider1 .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".service__slider1 .swiper-button-next",
			prevEl: ".service__slider1 .swiper-button-prev",
		},
	})

	// swiper_service2
	var swiper_service2 = new Swiper(".service__slider2 .swiper", {
		pagination: {
			el: ".service__slider2 .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".service__slider2 .swiper-button-next",
			prevEl: ".service__slider2 .swiper-button-prev",
		},
	})

	// swiper_service3
	var swiper_service3 = new Swiper(".service__slider3 .swiper", {
		pagination: {
			el: ".service__slider3 .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".service__slider3 .swiper-button-next",
			prevEl: ".service__slider3 .swiper-button-prev",
		},
	})

	// swiper_service4
	var swiper_service4 = new Swiper(".service__slider4 .swiper", {
		pagination: {
			el: ".service__slider4 .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".service__slider4 .swiper-button-next",
			prevEl: ".service__slider4 .swiper-button-prev",
		},
	})

	// swiper_videos
	var swiper_videos = new Swiper(".swiper_videos", {
		slidesPerView: 1,
		navigation: {
			nextEl: ".swiper_videos .swiper-button-next",
			prevEl: ".swiper_videos .swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
		},
	})

	// swiper_gallery
	var swiper_gallery = new Swiper(".swiper_gallery", {
		centeredSlides: true,
		loop: true,
		pagination: {
			el: ".swiper_gallery .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper_gallery .swiper-button-next",
			prevEl: ".swiper_gallery .swiper-button-prev",
		},
	})

	// swiper_plans
	var swiper_plans = new Swiper(".swiper_plans", {
		pagination: {
			el: ".swiper_plans .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper_plans .swiper-button-next",
			prevEl: ".swiper_plans .swiper-button-prev",
		},
	})

	// swiper_reviews
	var swiper_reviews = new Swiper(".swiper_reviews", {
		slidesPerView: 1,
		pagination: {
			el: ".swiper_reviews .swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper_reviews .swiper-button-next",
			prevEl: ".swiper_reviews .swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
		},
	})



	if ($(window).width() <= '768'){
		var swiper_team_mob = new Swiper(".swiper_team_mob", {
			navigation: {
				nextEl: ".swiper_team_mob .swiper-button-next",
				prevEl: ".swiper_team_mob .swiper-button-prev",
			},
		})
	}


	$('.swiper__num').html('<span>001</span>')

	function numbering_slides(argument) {
		argument.on('slideChange', function () {
			let slide_num = this.activeIndex + 1
			if (slide_num < 10) {
				this.el.querySelector('.swiper__num span').innerHTML = '00' + slide_num
			} else if (slide_num >= 10 && slide_num < 100) {
				this.el.querySelector('.swiper__num span').innerHTML = '0' + slide_num
			} else {
				this.el.querySelector('.swiper__num span').innerHTML = slide_num
			}
		})
	}
	if ($(window).width() <= '768'){
		numbering_slides(swiper_team_mob)
	}
	numbering_slides(swiper_main)
	numbering_slides(swiper_projects)
	numbering_slides(swiper_team)
	numbering_slides(swiper_videos)
	numbering_slides(swiper_reviews)


	$(document).on('click', '.service .more_detail', function(evt) {
		evt.preventDefault()
		$(this).parents('.service').addClass('active')
	})

	$(document).on('click', '.service__close', function(evt) {
		evt.preventDefault()
		$(this).parents('.service').removeClass('active')
	})

	var package = $('.package')
	var show_start = 2

	$(document).on('click', '.more_packages', function(evt) {
		evt.preventDefault()
		var show_end = show_start + 2

		if (show_end <= package.length) {
			package.slice(show_start, show_end).slideDown()
			show_start = show_start + 2
			if (show_end == package.length) {
				$(this).addClass('all').children('span').text('Скрыть')
			}
		} else {
			$(this).removeClass('all').children('span').text('Загрузить еще')
			show_start = 2
			show_end = 0
			package.slice(show_start).slideUp()
		}
	})

	$(document).on('click', '.drop__title', function(evt) {
		$(this).parent('.drop').toggleClass('active')
	})


	// form placeholders
	let inputs = $('input, textarea')

	if (inputs) {
		inputs.each(function() {
			if ($(this).val()) {
				$(this).parent().addClass('focused')
			}
		})
		inputs.focusin(function() {
			$(this).parent().addClass('focused')
		})
		inputs.focusout(function() {
			if ($(this).val()) {
				$(this).parent().addClass('focused')
			} else {
				$(this).parent().removeClass('focused')
			}
		})
	}

	$(document).on('click', '.read_more', function(evt) {
		evt.preventDefault()
		$(this).addClass('active').html('Свернуть')
		$(this).parents('.infobox').addClass('active')
	})

	$(document).on('click', '.read_more.active', function(evt) {
		evt.preventDefault()
		$(this).removeClass('active').html('Читать далее...')
		$(this).parents('.infobox').removeClass('active')
	})

	$(document).on('click', '.popup__close', function(evt) {
		evt.preventDefault()
		html.removeClass('ofh')
		$('.popup').removeClass('active')
		$('.popup form').removeClass('form_error')
		$('.popup label').removeClass('invalid')
	})

	$(document).on('click', '.open_application_form', function(evt) {
		evt.preventDefault()
		html.addClass('ofh')
		$('.popup_application_form').addClass('active')
	})

	$(document).on('click', '.open_popup_login', function(evt) {
		evt.preventDefault()
		html.addClass('ofh')
		$('.popup_login').addClass('active')
	})

	$(document).on('click', '.open_popup_password_recovery', function(evt) {
		evt.preventDefault()
		html.addClass('ofh')
		$('.popup').removeClass('active')
		$('.popup_password_recovery').addClass('active')
	})


	$(document).on('click', '.edit_btn_account', function(evt) {
		evt.preventDefault()
		$(this).parents('.account').toggleClass('edit')
	})







	var scrollbar_width = $('.scrollbar').outerWidth()
	var scroll_width = $('.scroll').outerWidth()

	var drag_wrap_width = $('.drag_wrap').outerWidth()
	var drag_margin = (drag_wrap_width - scrollbar_width) / 2
	var drag_width = $('.drag').css('margin', 0 + ' ' + drag_margin + 'px').outerWidth()

	var factor = (scrollbar_width - scroll_width) / (drag_width - scrollbar_width)

	var clicked = false, base = 0, base_drag = 0;

	$('.drag').on({
		mousemove: function(e) {
			clicked && function(xAxis) {
				var _this = $(this);
				$('.drag_wrap').scrollLeft( base_drag + base - xAxis )
			}.call($(this), e.pageX);
			current_scroll = $('.drag_wrap').scrollLeft()
			$('.scroll').css('left', current_scroll * factor + 'px')
		},
		touchmove: function(e) {
			setInterval(function() {
				current_scroll = $('.drag_wrap').scrollLeft()
				$('.scroll').css('left', current_scroll * factor + 'px')
			}, 1);
		},
		mousedown: function(e) {
			clicked = true;
			base = e.pageX;
			base_drag = $('.drag_wrap').scrollLeft()
		},
		mouseup: function(e) {
			clicked = false;
		}
	})

	$(document).on('click', '.comment_btn', function(evt) {
		evt.preventDefault()
		$(this).hide()
		$(this).siblings('.comment').show()
	})

	$(document).on('click', '.comment_close', function(evt) {
		evt.preventDefault()
		$(this).parent().hide().siblings('.comment_btn').show()
	})

	$(document).on('click', '.comment_edit', function(evt) {
		evt.preventDefault()
		let comment_text = $(this).siblings('.comment__text').text()
		console.log(comment_text)
		$('.popup_add_comment').addClass('active').find('textarea').val(comment_text)
	})

	$(document).on('click', '.popup_add_comment .popup__close', function(evt) {
		evt.preventDefault()
		let popup_add_comment = $('.popup_add_comment');
		let input_cell_id = popup_add_comment.find('.cell_id');
		let textarea = popup_add_comment.find('textarea');
		textarea.val('');
		input_cell_id.val('');
	})

	$(document).on('click', '.comment_add_btn', function(evt) {
		evt.preventDefault();
		let popup_add_comment = $('.popup_add_comment');
		let textarea = popup_add_comment.find('textarea');
		let input_cell_id = popup_add_comment.find('.cell_id');
		let cell_id = $(this).parent('td').attr('id');
		html.addClass('ofh');
		popup_add_comment.addClass('active');
		textarea.focus();
		input_cell_id.val(cell_id);
	})

	$(document).on('click', '.create_access', function(evt) {
		evt.preventDefault()
		html.addClass('ofh')
		$('.popup_create_access').addClass('active')
	})

	$(document).on('click', '.create_project', function(evt) {
		evt.preventDefault()
		html.addClass('ofh')
		$('.popup_create_project').addClass('active')
	})

	$(document).on('click', '.phones_btn', function(evt) {
		evt.preventDefault()
		$('.header__phones').toggleClass('active')
	})

	$(document).on('click', '.scroll_to_team', function(evt) {
		evt.preventDefault()
		$('html, body').animate({
			scrollTop: $('.team_slider').offset().top
		}, 1000);
	})

	$(document).on('click', '.scroll_to_project_buy', function(evt) {
		evt.preventDefault()
		$('html, body').animate({
			scrollTop: $('.project_buy').offset().top
		}, 1000);
	})


	let setup_inputs = [];
	$(document).on('click', '.btn_change', function(evt) {
		evt.preventDefault();
		setup_inputs.splice(0, setup_inputs.length)
		$(this)
		.addClass('btn_cancel')
		.removeClass('btn_change')
		.children('span').text('Отменить')
		.parents('.setup__section').addClass('edit')
		.find('input').each((index, elem) => {
			setup_inputs.push(elem.value)
		})
	})

	$(document).on('click', '.btn_cancel', function(evt) {
		evt.preventDefault()
		$(this)
		.addClass('btn_change')
		.removeClass('btn_cancel')
		.children('span').text('Редактировать')
		.parents('.setup__section').removeClass('edit')
		.find('input').each((index, elem) => {
			elem.value = setup_inputs[index];
		})
	})

	$(document).on('submit', '.popup_create_access form', function(evt) {

		let $this = $(this);
		let surname = $this.find('.surname_validate');
		let name = $this.find('.name_validate');
		let email = $this.find('.email_validate');
		let access = $this.find('.access_validate');
		let phone = $this.find('.phone_mask');
		let pass = $this.find('.pass_mask');

		if (surname.val().length < 1) {
			evt.preventDefault();
			surname.parent().addClass('invalid');
		} else surname.parent().removeClass('invalid')

		if (name.val().length < 1) {
			evt.preventDefault();
			name.parent().addClass('invalid');
		} else name.parent().removeClass('invalid')

		if (email.val().length < 1) {
			evt.preventDefault();
			email.parent().addClass('invalid');
		} else email.parent().removeClass('invalid')

		if (phone.val().length < 11) {
			evt.preventDefault();
			phone.parent().addClass('invalid');
		} else phone.parent().removeClass('invalid')

		if (pass.val().length < 8) {
			evt.preventDefault();
			pass.parent().addClass('invalid');
		} else pass.parent().removeClass('invalid')

		if (access.val() == 'empty') {
			evt.preventDefault();
			access.parent().addClass('invalid');
		} else access.parent().removeClass('invalid')

		if (surname.val().length < 1
			|| name.val().length < 1
			|| email.val().length < 1
			|| phone.val().length < 11
			|| pass.val().length < 8
			|| access.val() == 'empty'
			) {
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			$this.removeClass('form_error')
		}

	});

	$(document).on('submit', '.popup_create_project form', function(evt) {

		let $this = $(this);
		let contract_number = $this.find('.contract_number_validate');
		let name = $this.find('.name_validate');
		let square = $this.find('.square_validate');
		let employee = $this.find('.employee_validate');
		let customer = $this.find('.customer_validate');

		if (contract_number.val().length < 1) {
			evt.preventDefault();
			contract_number.parent().addClass('invalid');
		} else contract_number.parent().removeClass('invalid')

		if (name.val().length < 1) {
			evt.preventDefault();
			name.parent().addClass('invalid');
		} else name.parent().removeClass('invalid')

		if (square.val().length < 1) {
			evt.preventDefault();
			square.parent().addClass('invalid');
		} else square.parent().removeClass('invalid')

		if (employee.val().length < 3) {
			evt.preventDefault();
			employee.parent().addClass('invalid');
		} else employee.parent().removeClass('invalid')

		if (customer.val().length < 3) {
			evt.preventDefault();
			customer.parent().addClass('invalid');
		} else customer.parent().removeClass('invalid')

		if (contract_number.val().length < 1
			|| name.val().length < 1
			|| square.val().length < 1
			|| employee.val().length < 3
			|| customer.val().length < 3
			) {
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			$this.removeClass('form_error')
		}
	});

	$(document).on('submit', '.application_form', function(evt) {

		let $this = $(this);
		let name = $this.find('.name_validate');
		let email = $this.find('.email_validate');
		let phone = $this.find('.phone_mask');

		if (name.val().length < 1) {
			evt.preventDefault();
			name.parent().addClass('invalid');
		} else name.parent().removeClass('invalid')

		if (email.val().length < 1) {
			evt.preventDefault();
			email.parent().addClass('invalid');
		} else email.parent().removeClass('invalid')

		if (phone.val().length < 11) {
			evt.preventDefault();
			phone.parent().addClass('invalid');
		} else phone.parent().removeClass('invalid')


		if (name.val().length < 1
			|| email.val().length < 1
			|| phone.val().length < 11
			) {
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			$this.removeClass('form_error')
		}

	});

	$(document).on('submit', '.popup_login form', function(evt) {
		let $this = $(this);
		let email = $this.find('.email_validate');
		let pass = $this.find('.pass_mask');

		if (email.val().length < 1) {
			evt.preventDefault();
			email.parent().addClass('invalid');
		} else email.parent().removeClass('invalid')

		if (pass.val().length < 8) {
			evt.preventDefault();
			pass.parent().addClass('invalid');
		} else pass.parent().removeClass('invalid')


		if (email.val().length < 1
			|| pass.val().length < 8
			) {
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			$this.removeClass('form_error')
		}
	});

	$(document).on('submit', '.popup_access_correction form', function(evt) {
		let $this = $(this);
		let login = $this.find('.login_mask');
		if (login.val().length < 1) {
			evt.preventDefault();
			login.parent().addClass('invalid');
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			login.parent().removeClass('invalid')
			$this.removeClass('form_error')
		}
	});

	$(document).on('submit', '.popup_password_recovery form', function(evt) {
		let $this = $(this);
		let email = $this.find('.email_validate');

		if (email.val().length < 3) {
			evt.preventDefault();
			email.parent().addClass('invalid');
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			email.parent().removeClass('invalid')
			$this.removeClass('form_error')
		}
	});

	$('.pass_mask').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {
			A: {pattern: /[A-Za-z0-9]/},
		}
	});
	$('.login_mask').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {
			A: {pattern: /[A-Za-z0-9-_]/},
		}
	});
	$('.text_mask').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {
			A: {pattern: /[A-Za-zА-Яа-я]/},
		}
	});
	$('.text_num_mask').mask('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', {'translation': {
			A: {pattern: /[A-Za-zА-Яа-я0-9]/},
		}
	});
	$('.phone_mask').mask('+0 (000) 000 00-00');
	$('.price_mask').mask('000 000 000 руб.', {reverse: true});
	$('.date_mask').mask('00.00.0000');
	$('.num_mask').mask('0#');

	$(document).on('click', '.open_access_correction', function(evt) {
		evt.preventDefault();
		html.addClass('ofh');
		$('.popup_access_correction').addClass('active');
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.scroll_up').addClass('active')
		} else {
			$('.scroll_up').removeClass('active')
		}
	});

	$(document).on('click', '.scroll_up', function(evt) {
		evt.preventDefault()
		$(this).removeClass('active')
		html.animate({scrollTop: 0}, 300)
	});

	$(document).on('click', '.mob_show.cabinet_btn', function(evt) {
		evt.preventDefault();
		$(this).toggleClass('active');
		html.toggleClass('ofh');
		$('.sidebar').toggleClass('active');
	});

	$(document).on('click', '.project_settings', function(evt) {
		evt.preventDefault();
		let popup = $('.popup_project_settings');
		html.addClass('ofh');
		popup.addClass('active');
		popup.find('label').addClass('focused');
	});

	$(document).on('submit', '.popup_project_settings form', function(evt) {

		let $this = $(this);
		let contract_number = $this.find('.contract_number_validate');
		let name = $this.find('.name_validate');
		let square = $this.find('.square_validate');
		let employee = $this.find('.employee_validate');

		if (contract_number.val().length < 1) {
			evt.preventDefault();
			contract_number.parent().addClass('invalid');
		} else contract_number.parent().removeClass('invalid')

		if (name.val().length < 1) {
			evt.preventDefault();
			name.parent().addClass('invalid');
		} else name.parent().removeClass('invalid')

		if (square.val().length < 1) {
			evt.preventDefault();
			square.parent().addClass('invalid');
		} else square.parent().removeClass('invalid')

		if (employee.val().length < 3) {
			evt.preventDefault();
			employee.parent().addClass('invalid');
		} else employee.parent().removeClass('invalid')

		if (contract_number.val().length < 1
			|| name.val().length < 1
			|| square.val().length < 1
			|| employee.val().length < 3
			) {
			$this.removeClass('form_error');
			setTimeout(function(){$this.addClass('form_error')}, 1);
		} else {
			$this.removeClass('form_error')
		}
	});



	$(document).on('click', '.admin-panel__item .edit_btn', function(evt) {
		evt.preventDefault()
		$(this).toggleClass('active').parents('.admin-panel__item').find('.admin-panel__parameters').toggleClass('edit')
	});

	$(document).on('change', '.admin-panel__select', function(evt) {
		if ($(this).val() == 'Телефон') {
			$(this).parents('.admin-panel__item').addClass('select_tel')
		} else {
			$(this).parents('.admin-panel__item').removeClass('select_tel')
		}
	});

	$('.admin-panel__select').each(function(index, elem) {
		if (elem.value == 'Телефон') {
			$(this).parents('.admin-panel__item').addClass('select_tel')
		}
	})


})