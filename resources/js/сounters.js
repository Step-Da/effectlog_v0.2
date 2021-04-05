//Функция живого вывода статистика на странице
$(document).ready(function () {
    $('.counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});

$('.image-button').click(function(){
    if(event.target.tagName == 'I') {
    event.preventDefault();
    let title = event.target.title || '';
      if(title) {
        mirrorTitle = title;
      }
    }
    $('#mirror-imag-offer').attr('src',mirrorTitle);
    $('#mirror-image-link-offer').attr('href',mirrorTitle);
    $('#imag-modal-window').trigger('click');
});