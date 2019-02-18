$(document).ready(function () {

    // Скролл до якоря
    $('.btn_scroll_to').on('click', function (event) {
        event.preventDefault();
        var $anchor = $('#' + $(this).data('anchor'));
        // Если есть такой элемент, то анимируем к нему
        if ($anchor.length) {
            $('html, body').animate({
                scrollTop: $anchor.offset().top
            }, 1000);
        }
    });

    // Анимация появления элементов, при старте страницы
    $('.top_menu').animate({
        //height: 40,
    }, 1000).promise().then(function (event) {
        $('.floating_menu').animate({
            top: 100
        }, 1000);
    });

    /**
     * Модальное окно
     */
    // Показать Модальное окно
    $('.btn_show_modal').on('click', function (event) {
        event.preventDefault();
        $modalBlock = $('#' + $(this).data('modal')).closest('.modal');
        $modalBlock.slideDown(500);
        $modalBlock.find('.modal_back').fadeIn(500);
    });
    // Клик по фону модалки (скрытие его)
    $('.modal_back').on('click', function (event) {
        closeModal($(this).closest('.modal'));
    });
    // Клик по кнопке "закрыть" модального окна
    $('.btn_close_modal').on('click', function (event) {
        closeModal($(this).closest('.modal'));
    });
    // Функция закрытия модального окна
    function closeModal($modal) {
        $modal.find('.modal_back').fadeOut(500);
        $modal.slideUp(300);
        // Если это закрытие Модалки Номеров, то сбрасываем ее содержание
        if ($modal.is('#room')) {
            resetRoomModal($modal);
        }
    }

    // Функция "обнуления" модалки с показом информации о номере
    function resetRoomModal($modal) {
        $modal.find('.modal_content').fadeOut();
        $modal.find('.process').show('slow');
    }

    // Отправка формы
    $('form').on('submit', function (event) {
        event.preventDefault();
        $data = $(this).serialize();
        $url = $(this).attr('action');
        $modal = $(this).closest('.modal');
        $form = $(this);
        $form.slideUp();
        $modal.find('.process').slideDown();
        $.ajax({
            type: 'POST',
            url: $url,
            data: $data,
            success: function success(data) {
                $modal.find('.process').slideUp();
                $modal.find('.success').slideDown();
                setTimeout(function () {
                    closeModal($modal);
                }, 3000);
            },
            error: function error(data) {
                alert('error!');
            }
        });
    });

    // Запрос данных через API
    $('.get_json').on('click', function (event) {
        // Читаем url запроса
        url = $(this).data('json');

        // Отправляем запрос
        $.ajax({
            url: url,
            type: 'GET',
            success: function success(response) {
                $('.modal#room').find('.process').hide();
                $('.modal#room').find('.modal_content').fadeIn();
                $('.modal#room').find('.room_title').text(response.title);
                $('.modal#room').find('.room_cost').text(response.cost);
            }
        });
    });

    // Яндекс-Карта в Контактах
    ymaps.ready(function () {
        var myMap = new ymaps.Map("map", {
            center: [59.933610, 30.368603],
            zoom: 15,
            controls: []
        });
        var myPlacemark = new ymaps.Placemark([59.933610, 30.368603], {
            balloonContent: 'ул. 7-ая Советская, д. 27',
            iconContent: "Мини-отель Майский"
        }, {
            preset: "islands#redStretchyIcon",
            // Балун будем открывать и закрывать кликом по иконке метки.
            hideIconOnBalloonOpen: false
        });
        myMap.geoObjects.add(myPlacemark);
    });

    $('.room_slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 100000,
        centerMode: true
        //adaptiveHeight: true,
    });
});
