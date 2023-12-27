
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


// ファーストビュー　アニメーション

gsap.registerPlugin(ScrollTrigger) 

const hero1 = document.querySelector(".hero_text1");
const hero2 = document.querySelector(".hero_text2");
const hero3 = document.querySelector(".hero_text3");
const hero4 = document.querySelector(".hero_text4");
const hero5 = document.querySelector(".hero_text5");
const hero6 = document.querySelector(".hero_text6");
const hero7 = document.querySelector(".hero_text7");
const hero8 = document.querySelector(".hero_text8");
const hero9 = document.querySelector(".hero_text9");
const hero10 = document.querySelector(".hero_text10");
const hero11 = document.querySelector(".hero_text11");
const hero12 = document.querySelector(".hero_text12");
const hero13 = document.querySelector(".hero_text13");
const hero14 = document.querySelector(".hero_text14");
const hero15 = document.querySelector(".hero_text15");

const tl = gsap.timeline();

// hero1 から hero9 までのアニメーションをループで処理
for (let i = 1; i <= 9; i++) {
    tl.fromTo(`.hero_text${i}`, 0.4, 
              { opacity: 0, x: -300, scale: 2.5, ease: "power2.out" }, 
              { opacity: 1, x: 0, scale: 1 },
              0.1 * (i - 1)); // ここでスタートタイムをずらす
}

// hero10 の特別なアニメーション
tl.fromTo(".hero_text10", { opacity: 0, scale: 3 }, 
          { opacity: 1, scale: 4, ease: "power2.out", duration: 0.4 })
  .to(".hero_text10", { opacity: 1, scale: 1, ease: "power2", duration: 0.4 });

tl.fromTo(".hero_text14", { opacity: 0, y: 50 }, { opacity: 1, y:0, ease: "power2" })
tl.fromTo(".hero_text11", { opacity: 0, x: -100 }, { opacity: 1, x:0, ease: "power2" })
tl.fromTo(".hero_text12", { opacity: 0, x: -100 }, { opacity: 1, x:0, ease: "power2" })
tl.fromTo(".hero_text13", { opacity: 0, x: -100 }, { opacity: 1, x:0, ease: "power2" })

tl.fromTo(".hero_text15",0.2, { y: 0 }, {  onComplete: () => document.querySelector('.hero_text15').classList.add('hilight')
});


document.addEventListener("DOMContentLoaded", function() {
    const topFloat = document.querySelector('.top-float');
    let fadedIn = false;

    function checkScroll() {
      if (window.scrollY > 100 && !fadedIn) {
        topFloat.style.display = 'block';
        topFloat.style.opacity = 0;
        topFloat.style.transition = 'opacity 0.4s ease-in-out';
        setTimeout(() => {
          topFloat.style.opacity = 1;
        }, 10); // 少し遅延を入れてCSSが適用されるのを確実にする
        fadedIn = true;
      } else if (window.scrollY <= 100 && fadedIn) {
        topFloat.style.opacity = 0;
        topFloat.addEventListener('transitionend', function handler() {
          topFloat.style.display = 'none';
          topFloat.removeEventListener('transitionend', handler);
        });
        fadedIn = false;
      }
    }

    window.addEventListener('scroll', checkScroll);
  });




