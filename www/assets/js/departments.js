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

    $('#departmentsTabContent').load(pathname + '/departments/' + tabName + '.html');

    var centerName;
    var centerContent;
    switch (tabName) {
        case 'neurosurgery':
            centerName = '신경외과';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.';
            break;
        case 'orthopedics':
            centerName = '정형외과';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.';
            break;
        case 'medicine':
            centerName = '내과';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.';
            break;
        case 'pain-medicine':
            centerName = '마취통증의학과';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.';
            break;
        case 'department-radiology':
            centerName = '영상의학과';
            centerContent = '새우리남산병원이 가슴으로 다가갑니다.';
            break;
    }
    $('.section-tab-header-font2').text(centerName);
    $('.section-tab-header-font3').html(centerContent);
}
