//Функция живого поиска в каталоге поставщиков
$(document).ready(function(){
    $("#filter").keyup(function(){
        var filter = $(this).val();
        $(".search").each(function(){
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            } else {
                $(this).show();
            }
        });
    });
});