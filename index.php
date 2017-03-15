<!Doctype html>
<html lang='en'>
    <head>
        <title>Durrell Lyons The Artist</title>
        <meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='styles/normalize.css' />
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Cantarell'>
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Actor'>
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Cinzel'>
        <link rel='stylesheet' type='text/css' href='styles/styles.css' />
    </head>
    <body>
        <?php include('header.php'); ?>
        
        <main role='main'>
            <?php include('branding.php'); ?>
            <?php include('bio.php'); ?>
            <?php include('contact.php'); ?>
        </main>
        
        <?php include('footer.php'); ?>
        <script type="text/javascript" src="js/twitterfeed.js"></script>
        <script type='text/javascript' src='js/jquery-3.1.1.js'></script>
        <script type='text/javascript' src='js/jquery.scrollTo.min.js'></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                setInterval(backgroundChange, 5000);
                //mediaCheck();
                mobileMenu();
                navigation('#brand', 'brandingDiv');
                navigation('#navBio', 'bio');
                navigation('#mobileNavBio', 'bio');
            });
            
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
            
            function mobileMenu() {
                $('#mobileMenuButton').click(function(){
                    $('.mobileNav').toggle(500);
                });
            }
            
            function navigation(selector, div_id){
                $(selector).click(function() {
                    $.scrollTo(document.getElementById(div_id), 800);
                    if($('nav').hasClass('mobileNav')) {
                        $('.mobileNav').hide(500);
                    }
                });
            }
            
            /*
            function mediaCheck(){
                var mq = window.matchMedia( "(min-width: 960px)" );
                if(mq.matches) {
                    setInterval(backgroundChange('.bio'), 5000);
                } else {
                    setInterval(backgroundChange('.brandingDiv'), 5000);
                }
            }
            */
        </script>
    </body>
</html>