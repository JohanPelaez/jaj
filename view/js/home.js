$(document).ready(function(){
    $('.title-content').click(function(){
        var hasActive = $(this).parent().hasClass('active');
        $.each($('.jaj-menu-title.active'), function(i, e) {
            $(e).removeClass('active');
        });
        if (!hasActive){
            $(this).parent().toggleClass('active');
        }
    })
})