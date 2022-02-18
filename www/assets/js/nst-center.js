$(function () {
    var tabName = tabId.replaceAll('-sub', '');
    doAction(tabName);

    var tabs = document.querySelector('a[data-value=' + tabName + ']');
    tabs.classList.add('active');

    $('.tab-link').click(function () {
        $('.tab-link').removeClass('active');
        $(this).addClass('active');

        var tabId = $(this).data('value');
        doAction(tabId);
    });

    $('.carousel').carousel({
        interval: 3000
    });

    let items = document.querySelectorAll('.carousel .carousel-item');

    items.forEach((el) => {
        const minPerSlide = 4;
        let next = el.nextElementSibling;
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                next = items[0];
            }
            let cloneChild = next.cloneNode(true);
            el.appendChild(cloneChild.children[0]);
            next = next.nextElementSibling;
        }
    });

});

function doAction(tabName) {
    var origin = window.location.origin;
    var pathname = '/newoori';
    if (origin.includes('localhost')) {
        pathname = '';
    }

    $('#nstTabContent').load(pathname + '/nst-center/' + tabName + '.html');

    var centerName, centerContent;
    switch (tabName) {
        case 'pain-treatment':
            centerName = '통증주사치료';
            centerContent = '새우리남산병원 비수술치료센터<br>다양한 진단을 통해 수술없이 통증을 줄여주는 개인별 맞춤 비수술치료를 진행합니다.';
            break;
        case 'exercise-therapy':
            centerName = '도수/운동치료';
            centerContent = '새우리남산병원 비수술치료센터<br>다양한 진단을 통해 수술없이 통증을 줄여주는 개인별 맞춤 비수술치료를 진행합니다.';
            break;
        case 'physio-therapy':
            centerName = '물리치료';
            centerContent = '새우리남산병원 비수술치료센터<br>다양한 진단을 통해 수술없이 통증을 줄여주는 개인별 맞춤 비수술치료를 진행합니다.';
            break;
        case 'minimally-invasive':
            centerName = '최소침습';
            centerContent = '새우리남산병원 비수술치료센터<br>다양한 진단을 통해 수술없이 통증을 줄여주는 개인별 맞춤 비수술치료를 진행합니다.';
            break;
    }
    $('.section-tab-header-font2').text(centerName);
    $('.section-tab-header-font3').html(centerContent);
}
