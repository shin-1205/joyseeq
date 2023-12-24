document.addEventListener('DOMContentLoaded', function() {
	var markerText = document.querySelectorAll('.js_animation'); // 監視対象を選択
	var markerTextArr = Array.prototype.slice.call(markerText); // 監視対象をArrayに変換（IE対策）

	/* IntersectionObserverに渡すコールバック関数 */
	var cb = function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				/* 監視対象が画面内に入ったときのアクション */
				entry.target.classList.add('is_active'); // 画面内に入った要素にinviewクラスを付与
			}
		});
	};

	var markerText02 = document.querySelectorAll('.js_animation_fv'); // 監視対象を選択
	var markerTextArr02 = Array.prototype.slice.call(markerText02); // 監視対象をArrayに変換（IE対策）

	/* IntersectionObserverに渡すコールバック関数 */
	var cb02 = function(entries, observer) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				/* 監視対象が画面内に入ったときのアクション */
				entry.target.classList.add('is_active'); // 画面内に入った要素にinviewクラスを付与
			}
		});
	};

	/* IntersectionObserverに渡すコールバック関数 */
	var options = {
		rootMargin: '-30px 0px'
	};

	var options_fv = {
		rootMargin: '-30% 0px'
	};

	/* IntersectionObserver初期化 */
	var io = new IntersectionObserver(cb, options);

	markerTextArr.forEach((el) => {
		io.observe(el);
	});

	/* IntersectionObserver初期化 */
	var io02 = new IntersectionObserver(cb02, options_fv);

	markerTextArr02.forEach((el) => {
		io02.observe(el);
	});
});
