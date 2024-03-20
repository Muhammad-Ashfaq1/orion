$(document).ready(function(){
    $('.nav > li').click(function(){
        $(this).find('ul.nav').toggle();
    });
});