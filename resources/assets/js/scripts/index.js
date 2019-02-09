$(document).ready(function () {

    // Скролл до якоря
    $('.btn_scroll_to').on('click', function (event) {
        event.preventDefault();
        let $anchor = $('#' + $(this).data('anchor'));
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
            top: 100,
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
    }


    // Отправка формы
    $('form').on('submit', function (event) {
        event.preventDefault();
        $data = $(this).serialize();
        $url = $(this).attr('action');
        $modal = $(this).closest('.modal');
        $form = $(this);
        $form.html('<img src="/img/ajax-loader.gif">');
        $.ajax({
            type: 'POST',
            url: $url,
            data: $data,
            success: function (data) {
                $form.html('Успешно отправлено!');
                setTimeout(function () {
                    closeModal($modal);
                }, 5000);
            },
            error: function (data) {
                alert('error!');
            },
        });
    });





});