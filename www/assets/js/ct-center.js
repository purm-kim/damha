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

    $('#ctTabContent').load(pathname + '/ct-center/' + tabName + '.html');

    var centerName;
    var centerContent;
    switch (tabName) {
        case 'spine-center':
            centerName = '척추센터';
            centerContent = '10,000여차례 이상의 수술사례를 바탕으로 한 풍부한 임상경험과<br>첨단 장비를 통한 정확한 검사로 우수한 진단과 환자별 1:1 맞춤치료 시행하고 있습니다.';
            break;
        case 'joint-center':
            centerName = '관절센터';
            centerContent = '정확한 진단을 바탕으로 원인에 맞는 치료 방법을 선택하고<br>수술시에는 최소상처수술법을 우선으로 합니다.';
            break;
        case 'endoscopy-center':
            centerName = '소화기내시경센터';
            centerContent = '정확한 진단을 바탕으로 원인에 맞는 치료 방법을 선택하고<br> 수술시에는 최소상처수술법을 우선으로 합니다.';
            break;
    }
    $('.section-tab-header-font2').text(centerName);
    $('.section-tab-header-font3').html(centerContent);
}
