$(document).ready(function () {

    // Скролл до якоря
    $('.btn_scroll_to').on('click', function (event) {
        event.preventDefault();
        let $anchor = $('#' + $(this).data('anchor'));
        $('html, body').animate({
            scrollTop: $anchor.offset().top
        }, 1000);
    });

    // Показать Модальное окно
    $('.btn_show_modal').on('click', function (event) {
        event.preventDefault();
        $modalBlock = $('#' + $(this).data('modal')).closest('.modal');
        $modalBlock.slideDown(500);
        $modalBlock.find('.modal_back').fadeIn(500);
    });

    // Скрыть модальное окно
    $('.modal_back').on('click', function (event) {
        $(this).fadeOut(500);
        $(this).closest('.modal').slideUp(300);
    })


    var Site = function($container) {
        var self = this;
        self.$container = $container;
        self.floatingMenu = new FloatingMenu($('.floating_menu', self.$container));
        console.log(self.floatingMenu);
        //self.floatingMenu
    };

    var FloatingMenu = function (container) {
        var self = this;

    };

    new Site($('body'));





});