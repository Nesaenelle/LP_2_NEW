export default class Dropdown {
    constructor() {
        $('[data-dropdown-value]').on('click', function(e) {
            e.stopPropagation();
            if (!$(this).closest('[data-dropdown]').hasClass('active')) {
                $('[data-dropdown]').removeClass('active');
            }

            // if ($(this).closest('[data-dropdown]').hasClass('dealer')) {
            //     $(this).closest('[data-dropdown]').removeClass('dealer')
            //     $(this).closest('[data-dropdown]').removeClass('active')
            //     $(this).closest('[data-dropdown]').find('.dropdown--value').text('Выберете офис')
            //     return
            // }

            $(this).closest('[data-dropdown]').toggleClass('active');
        });

        $('[data-dropdown-item]').on('click', function(e) {
            var text = $(this).text();

            $(this).closest('[data-dropdown]').find('[data-dropdown-value]').text(text);
            $(this).closest('[data-dropdown]').removeClass('active');
        });


        $(window).on('click', function(e) {
            if ($('[data-dropdown]').length && !$('[data-dropdown]')[0].contains(e.target)) {
                $('[data-dropdown]').removeClass('active');
            }
        });
    }
}