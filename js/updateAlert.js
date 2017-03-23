$(document).ready(function(){
    setTimeout(function(){
        $('#promptNotify').fadeOut('slow', function () {
            $('#promptNotify').remove();
        });
    }, 2000);
});