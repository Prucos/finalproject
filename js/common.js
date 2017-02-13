$(function(){
    $('.mainNav > li').on('click', function(){
        $('.mainNav li').removeClass('active');
        $(this).addClass('active');
    });
})