$(function () {
    var tabName = tabId.replaceAll('-sub', '');
    // main.js global variable
    doAction(tabName);

    var tabs = document.querySelector('a[data-value=' + tabName + ']');
    tabs.classList.add('active');

    $('.tab-link').click(function () {
        $('.tab-link').removeClass('active');
        $(this).addClass('active');

        var tabId = $(this).data('value');
        doAction(tabId);
    });
});

function doAction(tabName) {
    var origin = window.location.origin;
    var pathname = '/newoori';
    if (origin.includes('localhost')) {
        pathname = '';
    }

    $('#introTabContent').load(pathname + '/introduction/' + tabName + '.html');

    console.log(tabName);

    var centerName;
    var centerContent;
    switch (tabName) {
        case 'greetings':
            centerName = '병원원인사말';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.<br>새우리남산병원의 의료진은 항상 환자의 건강을 최우선으로 생각하며,<br>척추 · 관절 · 내과 분야에서 최고가 되기 위해 항상 노력합니다.';
            break;
        case 'tour':
            centerName = '병원둘러보기';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.<br>새우리남산병원의 의료진은 항상 환자의 건강을 최우선으로 생각하며,<br>척추 · 관절 · 내과 분야에서 최고가 되기 위해 항상 노력합니다.';
            break;
        case 'news':
            centerName = '병원소식';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.<br>새우리남산병원의 의료진은 항상 환자의 건강을 최우선으로 생각하며,<br>척추 · 관절 · 내과 분야에서 최고가 되기 위해 항상 노력합니다.';
        case 'concert':
            centerName = '새우리음악회';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.<br>새우리남산병원의 의료진은 항상 환자의 건강을 최우선으로 생각하며,<br>척추 · 관절 · 내과 분야에서 최고가 되기 위해 항상 노력합니다.';
            break;
    }
    $('.section-tab-header-font2').text(centerName);
    $('.section-tab-header-font3').html(centerContent);
}
