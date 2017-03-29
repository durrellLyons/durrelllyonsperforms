<!Doctype html>
<html lang='en'>
    <head>
        <title>Durrell Lyons The Artist</title>
        <meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='styles/normalize.css' />
        <link rel='stylesheet' type='text/css' href='styles/styles.css' />
        <?php include('inc/meta.php'); ?>
    </head>
    <body>
        
        <!---  Visuals --->
        <?php include('inc/header.php'); ?>        
        <main role='main'>
            <?php include('branding.php'); ?>
            <?php include('film/filmography.php'); ?>
            <?php include('video/video.php'); ?>
            <?php include('bio.php'); ?>
            <?php include('photo/photo.php'); ?>
            <?php include('contact.php'); ?>
        </main>
        <?php include('inc/footer.php'); ?>
        <!---  End Visuals --->
        
        
        <script type='text/javascript' src='js/jquery-3.1.1.js'></script>
        <script type='text/javascript' src='js/modernizr-custom.js'></script>
        <script type='text/javascript' src='js/jquery.scrollTo.min.js'></script>
        <script type='text/javascript' src='js/updateAlert.js'></script>
        <script type='text/javascript' src='js/nav.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
        <script type='text/javascript' src='js/footer.js'></script>
        <script type='text/javascript'>
            $(document).ready(function(){
                mobileMenu();
                navigation('#brand', 'brandingDiv');
                
                navigation('#navFilmography', 'film');
                navigation('#mobileNavFilmography', 'film');
                
                navigation('#navVideo', 'video')
                navigation('#mobileNavVideo', 'video');
                
                navigation('#navBio', 'bio');
                navigation('#mobileNavBio', 'bio');
                
                navigation('#navPhotos', 'photo');
                navigation('#mobileNavPhotos', 'photo');
                
                navigation('#navContact', 'contact');
                navigation('#mobileNavContact', 'contact');
                
                setInterval(backgroundChange, 5000);
                //mediaCheck();
                displayFilmInfo();
                dataDisplay('film/filmHome.php', '#filmDiv');
                dataDisplay('photo/photoHome.php', '#photoDiv');
                dataDisplay('video/videoHome.php', '#videoDiv');
                
            });
        </script>
    </body>
</html>