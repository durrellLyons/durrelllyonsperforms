var backgroundImages = ['images/Full_Body_No_Jacket.png', 'images/Full_Body_Hubby_At_Park.png', 'images/Full_Body_Vest.png'];
var backgroundImageIndex = 0;
function backgroundChange() {
    var mq = window.matchMedia( "(min-width: 960px)" );
    if(mq.matches) {
        if(backgroundImageIndex <= 2){
            $('.bio').css('background-image', 'url(' + backgroundImages[backgroundImageIndex] + ')');
            $('.bio').css('background-size', 'cover');
            $('.bio').css('height', '100vh');
            backgroundImageIndex++;
        }
        else {
            backgroundImageIndex = 0;
            $('.bio').css('background-image', 'url(' + backgroundImages[backgroundImageIndex] + ')');
            $('.bio').css('background-size', 'cover');
            $('.bio').css('height', '100vh');
        }
    } else {
        if(backgroundImageIndex <= 2){
            $('.brandingDiv').css('background-image', 'url(' + backgroundImages[backgroundImageIndex] + ')');
            $('.brandingDiv').css('background-size', 'cover');
            $('.brandingDiv').css('height', '100vh');
            backgroundImageIndex++;
        }
        else {
            backgroundImageIndex = 0;
            $('.brandingDiv').css('background-image', 'url(' + backgroundImages[backgroundImageIndex] + ')');
            $('.brandingDiv').css('background-size', 'cover');
            $('.brandingDiv').css('height', '100vh');
        }
    }
}

function displayFilmInfo() {
    var mq = window.matchMedia( "(max-width: 960px)" );
    if(mq.matches) {
        $(document).on('click', '.film_info_div h4',  function() {
            $(this).next('p').toggle(500);
        });
    } else {
        $('.film_div').hover(function() {
           $(this).find('.film_info_div').css('display', 'block');
        }, function() {
           $(this).find('.film_info_div').css('display', 'none');
        });
    }
}

function dataDisplay(url, div_id) {
    $.get(url, function(data){
        $(div_id).html(data);
    });
}

function getMediaList(id, media){
    if(media == 'photo') {
        dataDisplay('photo/photoList.php?cat_id='+id, '#photoDiv');
    }
    
    if(media == 'video') {
        dataDisplay('video/videoList.php?cat_id='+id, '#videoDiv');
    }
}