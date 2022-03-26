<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/menuStyles.css" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/indexStyles.css" rel="stylesheet" />
    <title>Croix Verte</title>

</head>

<!-- body c lui qui contient nav, body , footer-->
<body>


    
    <?php 
    if(isset($_SESSION['email'])){
        echo "<p> Welcome " . $_SESSION['username'] . "</p>"; 
      
       include 'menuWelcome.php';  
    }
    else{
        
        include 'menu.php'; 
    }
       
    ?>


        <section class="tm-mb-1" id="about">
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                    <img src="img/imgHome.png" alt="About image" class="tm-img-responsive">
                </div>
                <article class="tm-section-1-r tm-bg-color-8">
                    <h2 class="tm-mb-2 tm-title-color">Histoire de l'associaton</h2>
                    <p><a rel="nofollow" href="#contact" target="_parent">Croix-Verte</a>  est une association caritative indépendante aux côtés des gouvernements et des pouvoirs publics. Acteur clé de la société, nous proposons des services humanitaires, sanitaires, sociaux, sociaux et de formation. Pour nous aider à mener à bien nos missions, nous avons une équipe solide de 2 000 employés.cohérents et inébranlables pour fournir un soutien local et fournir des résultats tangibles et des solutions à long terme.</p>
                    <p>pour savoir plus <a rel="nofollow" href="#services" target="_parent">cliquez ici</a> 
                    
                    <a href="#services" class="tm-btn tm-btn-1 tm-link-to-services">More Detail</a>
                </article>
            </div>
        </section>
        <div class="tm-bg-color-1 tm-mb-1 tm-row tm-social-row">
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#services">
                        <i class="fas fa-synagogue fa-4x tm-mb-1"></i>
                        <p>Pourquoi faire le dons</p>
                    </a>
                </div>
            </div>
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#gallery">
                        <i class="fas fa-chart-bar fa-4x tm-mb-1"></i>
                        <p>qu'ce q'on peut apporter dans ce monde?</p>
                    </a>
                </div>
            </div>
            <div class="tm-icon">
                <div class="tm-icon-inner">
                    <a href="#contact">
                        <i class="fas fa-images fa-4x tm-mb-1"></i>
                        <p>notre siège</p>
                    </a>
                </div>
            </div>
        </div>
        <section class="tm-mb-1 tm-row tm-services-row" id="services">
            <div class="tm-section-2-l">
                <article class="tm-bg-color-6 tm-box-pad tm-mb-1">
                    <h2 class="tm-mb-2">Histoires des dons </h2>

                    <p>Cras tempus, velit amet facilisis venenatis, erat felis imperdiet lectus, at posuere elit metus. Title #333 BG #F2F2F2</p>
                    <p class="tm-mb-0">Nam iaculis, urna ut laoreet aliquam, massa magna dapibus. Text #666</p>
                </article>
                <div class="tm-bg-color-7 tm-em-box">
                <h2 class="tm-mb-2">actulités importantes</h2>
                <h3 class="tm-mb-2"> La Croix-Verte s’engage pour le Grand Âge. Soutenez-la !</h2>
                    <p class="tm-text-color-2">La Croix-Verte fait partie des nominés aux “Trophées SilverEco - Bien vieillir 2021” qui auront lieu les 13 et 14 décembre à Cannes. Son projet : répondre aux besoins en ressources humaines dans les EHPAD et au domicile des personnes âgées au moyen du développement de son Centre de Formation des Apprentis. Vous pouvez soutenir le projet en votant sur le site SilverEco Festival. </p>
                    <a href="#gallery" class="tm-btn tm-btn-2">Read More</a>
                </div>
            </div>
            <div class="tm-section-2-r">
                <img src="img/comparto-image-02.jpg" alt="Services image" class="tm-img-responsive">
            </div>
        </section>


   

        <section id="contact" class="tm-bg-color-5 tm-mb-3">
            <h2 class="tm-text-white tm-contact-title">Contact Us</h2>
            <div class="tm-bg-color-white tm-contact-main">
                <div class="map-outer">
                    <div class="gmap-canvas">
                        <!-- How to change your own map point
                            1. Go to Google Maps
                            2. Click on your location point
                            3. Click "Share" and choose "Embed map" tab
                            4. Copy only URL and paste it within the src="" field below
                        -->
                        
                           <iframe width="100%" height="400" id="gmap-canvas"

                            src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            	
                            </iframe>
							
							



                    </div>
                </div>
                <div class="contact-form-outer">
                    <form id="contact-form" action="" method="POST" class="tm-bg-color-6 tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div class="form-group">
                            <textarea rows="4" name="message" class="form-control" placeholder="Message..."
                                required=""></textarea>
                        </div>
                        <div>
                            <button type="submit" class="ml-auto tm-btn tm-btn-3">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="contact-info-outer">
                    <div class="tm-bg-color-6 contact-info">
                        <p>Besoin plus d'informationssur croix-Verte</p>
                        <p>Contactez-nous </p>
                        <p class="tm-mb-0">Tel: <a href="tel:0100200990">01-02-09-90-90</a></p>
                        <p>Email: <a href="mailto:info@company.com">croixVerte@company.com</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->


        <?php include 'footer.php';?>



        <!-- fin de footer-->
        
   
</body>
</html>