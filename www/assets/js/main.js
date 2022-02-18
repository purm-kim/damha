var tabId = null;

$(function () {

    var origin = window.location.origin;
    var pathname = '/newoori';
    if (origin.includes('localhost')) {
        pathname = '';
    }

    /**
     * init
     */
    $('#mainContent').load(pathname + '/main.html');
    $('.main-wrapper').delay(100)
        .queue(function (next) {
            var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
            // if (!isMobile) {
            $('#bottom').show();
            // }
            next();
        });

    /**
     * main nav link click
     */
    $('.nav-link').click(function (e) {
        let menuId = $(this).data('value');
        document.querySelectorAll('#menuList > li > a').forEach(f => {
            if (menuId == f.dataset.value) {
                return;
            }
            $('#' + f.dataset.value).hide();
        });

        let $menuId = $('#' + menuId);
        if ($menuId.css('display') == 'none') {
            $menuId.fadeIn(100);
        } else {
            $menuId.fadeOut(100);
        }
    });

    /**
     * right menu button click
     */
    $('#fi-menu').click(function (e) {
        console.log('# >>>>>>>>>>>>>>> ');
    });

    /**
     * scroll Top
     */
    $('.top-btn').click(function () {
        let el = document.getElementById('top');
        el.scrollIntoView({ behavior: 'smooth' });
    });

    /**
     * Top button Event
     */
    $('.main-wrapper').scroll(function () {
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        if (!isMobile) {
            let $topBtn = $('.top-btn');

            // TODO Check
            $('.main-wrapper').delay(150)
                .queue(function (next) {
                    if ($('.main-wrapper').scrollTop() > $(document).height() + 220) {
                        $topBtn.css('bottom', '300px');
                    } else {
                        $topBtn.css('bottom', '69px');
                    }
                    next();
                });


            var scrollTop = $('.main-wrapper').scrollTop();

            if (scrollTop > 300) {
                $topBtn.fadeIn(200);
            }

            if (scrollTop === 0) {
                $topBtn.fadeOut(200);
            }
        } else {
            //MOBILE
        }
    });

    /**
     * Sub Menu Click Event
     */
    $('.submenu-menu-font').click(function () {
        var menuId = $(this).data('value');

        $('.right-menu').hide();
        $('#navbar').addClass('w-100');
        $('.submenu').addClass('other-page-sub-h');
        switch (menuId) {
            case 'neurosurgery-sub':
            case 'orthopedics-sub':
            case 'medicine-sub':
            case 'pain-medicine-sub':
            case 'department-radiology-sub':
                $('#mainContent').load(pathname + '/departments/index.html');
                tabId = menuId;
                break;
            case 'spine-center-sub':
            case 'joint-center-sub':
            case 'endoscopy-center-sub':
                $('#mainContent').load(pathname + '/ct-center/index.html');
                tabId = menuId;
                break;
            case 'pain-treatment-sub':
            case 'exercise-therapy-sub':
            case 'physio-therapy-sub':
            case 'minimally-invasive-sub':
                $('#mainContent').load(pathname + '/nst-center/index.html');
                tabId = menuId;
                break;
            case 'examination-center-sub':
                $('#mainContent').load(pathname + '/ce-center/index.html');
                tabId = menuId;
                break;
            case 'greetings-sub':
            case 'tour-sub':
            case 'news-sub':
            case 'concert-sub':
                $('#mainContent').load(pathname + '/introduction/index.html');
                tabId = menuId;
                break;
        }

        document.querySelectorAll('#menuList > li > a').forEach(f => {
            if (menuId == f.dataset.value) {
                return;
            }
            $('#' + f.dataset.value).fadeOut(100);
        });
    });


    /**
     * notice
     */
    $.getJSON('assets/json/main-notice.json', function (data) {
        $.each(data, function (key, val) {
            $('#mainContent').delay(0)
                .queue(function (next) {
                    $('#notice-board tbody').append('<tr><td>' + val.content + '</td><td>' + val.createAt + '</td></tr>');
                    next();
                });
        });
    });

});
