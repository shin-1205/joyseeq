$('#js_toggle').on('click', function() {
	$(this).toggleClass('is-open');
	$('#js_nav').toggleClass('is-open');
});

$('.js_sp_anchor').on('click', function() {
	$('#js_toggle').removeClass('is-open');
	$('#js_nav').removeClass('is-open');
});

/*
画像遅延読み込み
------------*/

const observer = lozad();
observer.observe();

/*
アンカーリンク
------------*/
$('a[href^="#"]').click(function(e) {
	var href = $(this).attr('href');
	var target = $(href == '#' || href == '' ? 'html' : href);
	var position = target.offset().top;
	var header = $('#js_header').outerHeight();

	$.when(
		$('html, body').animate(
			{
				scrollTop: position - header
			},
			400,
			'swing'
		),
		e.preventDefault()
	).done(function() {
		var diff = target.offset().top;
		if (diff === position) {
		} else {
			$('html, body').animate(
				{
					scrollTop: diff - header
				},
				10,
				'swing'
			);
		}
	});
});

$(function() {
	// 別ページの場合は以下
	var urlHash = location.hash;
	if (urlHash) {
		$('body,html').stop().scrollTop(0);
		setTimeout(function() {
			// ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
			var headerHight = $('#js_header').outerHeight();
			var target = $(urlHash);
			var position = target.offset().top - headerHight;
			$('body,html').stop().animate({ scrollTop: position }, 400);
		}, 100);
	}
});

$('#js_slide').slick({
	//centerMode: true,
	//centerPadding: '0',

	slidesToShow: 1,
	//arrows: false,
	autoplay: false,
	autoplaySpeed: 3000,
	//adaptiveHeight: true,
	speed: 1000,
	prevArrow: '<div class="arrow --prev"></div>',
	nextArrow: '<div class="arrow --next"></div>',
	//variableWidth: true,
	infinite: true,
	dots: true,
	appendDots: $('#js_dots'),
	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				adaptiveHeight: true,
				arrows: false

				//appendArrows: $('#js-sp-slide-nav'),
				//
			}
		}
	]
});

$('#js_slide').on('setPosition', function() {
	const observer = lozad();
	observer.observe();
});

document.addEventListener('DOMContentLoaded', function() {
	// アコーディオンに対してクリックイベントを適用
	const accordion = document.getElementsByClassName('js-accordion');
	for (let i = 0; i < accordion.length; i++) {
		accordion[i].addEventListener('click', function(event) {
			// document.getElementsByClassName('is-accordion-open')[0].classList.remove('is-accordion-open');
			event.stopPropagation();
			this.classList.toggle('is-accordion-open');
			//document.getElementsByClassName('is-accordion-contents-open')[0].classList.remove('is-accordion-contents-open');
			const arrayTabs = Array.prototype.slice.call(accordion);
			const index = arrayTabs.indexOf(this);
			document
				.getElementsByClassName('js-accordion-contents')
				[index].classList.toggle('is-accordion-contents-open');
		});
	}
});
