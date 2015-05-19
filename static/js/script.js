// scripts
$(window).load(function() {
    // set up hamburger menu
    $('#hamburger-menu').on('click', function() {
        var $menubar = $('.menubar').first();
        var $bodyWrapper = $('#body-wrapper');
        $menubar.toggleClass('x-open');
        // freeze body 
        if ($menubar.hasClass('x-open')) {
            $bodyWrapper.addClass('x-freeze');
            var $menuItems = $menubar.find('ul.x-main').children('li');
            $menuItems.removeClass('x-open').removeClass('x-sm-open');
            if ($menuItems.filter('.x-sm-open').length < 1) {
                $menubar.removeClass('x-sm-open');
                $bodyWrapper.removeClass('x-sm-freeze');
            }
            $(this).find('.fa')
                .removeClass('fa-bars')
                .addClass('fa-close')
                .parent()
                .css({
                    'background-color': '#eee', 
                    'border-top-color': '#E04E18',
                });
        } else {
            $bodyWrapper.removeClass('x-freeze');
            // close sm menu 
            $menubar.removeClass('x-sm-open');
            $menubar.find('ul.x-main').children('li').removeClass('x-sm-open');
            $bodyWrapper.removeClass('x-sm-freeze');

            $(this).find('.fa')
                .removeClass('fa-close')
                .addClass('fa-bars')
                .parent()
                .css({
                    'background-color': '', 
                    'border-top-color': '',
                });
        }
    });
    $('.menubar .x-main').children('li').each(function() {
        var $elem = $(this);
        $elem.children('a').on('click', function() {
            var $elem_li = $(this).parent('li');
            $elem_li.siblings('li').removeClass('x-open');
            $elem_li.toggleClass('x-open');
            if ($elem_li.hasClass('x-open')) {
                $('#body-wrapper').addClass('x-sm-freeze');
                $elem_li.parents('.menubar').addClass('x-sm-open');
                $elem_li.addClass('x-sm-open').siblings('li').removeClass('x-sm-open');

            } else {
                $('#body-wrapper').removeClass('x-sm-freeze');
                $elem_li.parents('.menubar').removeClass('x-sm-open');
                $elem_li.removeClass('x-sm-open');
            }
            // set scrollTop
            var offsetTop = 0;
            var $items = $elem_li.parent().children('li');
            for (var i = 0; i < $items.length; i++) {
                if ($items[i] == $elem_li[0]) offsetTop = i;
            }
            $elem_li.parent().scrollTop(offsetTop * 51);
        });
    });
});