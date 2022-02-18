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
    
    $('#departmentsTabContent').load(pathname + '/ce-center/' + tabName + '.html');

    var centerName;
    var centerContent;
    switch (tabName) {
        case 'neurosurgery':
            centerName = '종합검진센터';
            centerContent = '1년에 한 번, 정기검진 받으시고 우리가족 행복지수 올리세요!';
            break;
    }
    $('.section-tab-header-font2').text(centerName);
    $('.section-tab-header-font3').html(centerContent);
}
