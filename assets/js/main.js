(function($){

	$('.news-slider').slick({
		dots: true, // Navigation dots
		infinite: true, // Infinite loop
		speed: 600, // Animation speed
		slidesToShow: 3, // Visible slides
		slidesToScroll: 1, // Scroll slides
		autoplay: true, // Autoplay
		autoplaySpeed: 4000, // Autoplay speed
		responsive: [
			{
				breakpoint: 992, // Tablets
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 768, // Mobile devices
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.testimonial-slider').slick({
		dots: true, // Відображаємо навігаційні точки
		infinite: true, // Бескінечний слайдер
		speed: 500, // Швидкість анімації
		slidesToShow: 1, // Кількість слайдів на екрані
		slidesToScroll: 1, // Кількість слайдів для прокрутки
		autoplay: true, // Автоматична прокрутка
		autoplaySpeed: 3000, // Швидкість автопрокрутки
		arrows: false // Відключаємо стрілки
	});

})(jQuery);