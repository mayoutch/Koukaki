
<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <!-- ajout d'une div pour séparer vidéo/photo du logo -->
            <div id="background">
            <!-- Ajout de la vidéo -->
            <video id="background_video" autoplay loop muted><source src="<?php echo get_stylesheet_directory_uri() . '/css/assets/images/Studio_Koukaki_video.mp4'; ?> " type="video/mp4"></video> 
            </div>
            <!--Et ajout d'un Id au Logo pour le styliser et faire le parallax avec SkrollR : -->
            <div id="logo" data-0 ="top:40%" data-450="top:70%"> 
            
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <!-- Ajout de SkrollR -->
                <!-- https://www.novaway.fr/blog/ui-ux-design/effet-parallax-guide-bonne-utilisation : lien conseillé par OC
                https://www.youtube.com/watch?v=qPI8WpJRjM0 : vidéo explicative en français 
                https://github.com/Prinzhorn/skrollr : github avec documentation et exemples
                https://cdnjs.com/libraries/skrollr : lien pour télécharger/installer SkrollR
                http://web.simmons.edu/~grovesd/comm244/demo/skrollr/examples-gotchas#ex1a : exemples en anglais très parlants
            -->
                <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                <script>
                var s = skrollr.init();
                </script>
                <!-- fin de l'ajout de SkrollR -->
            </div>
        </section>
        <section id="#story" class="story">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
             <!-- Ajout du caroussel des personnages" par un get_template_part : -->
             <?php
            get_template_part('/template-parts/section-personnages')
            ?>

   
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>

                    <!-- Ajout des nuages avec le SkrollR -->
                    <div>
                        <div class="gros-nuage" data-center-top ="left:900px" data-top="left:600px">
                        <img src="wp-content/themes/foce-child/css/assets/images/big_cloud.png" alt="gros nuage">
                        </div>
                   
                        <div class="petit-nuage" data-bottom-top ="left:800px" data-top-bottom="left:500px">
                        <img src="wp-content/themes/foce-child/css/assets/images/little_cloud.png" alt="petit nuage">
                        </div>

                        <!-- Ajout de SkrollR -->
                        <script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>
                        <script>
                        var s = skrollr.init();
                        </script>
                        <!-- fin de l'ajout de SkrollR -->
                    </div>

                </div>

            </article>
        </section>


        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
          
            <!-- Ajout de la "section-oscars" par un get_template_part : -->
            <?php
            get_template_part('/template-parts/section-oscar')
            ?>
           
           
    </main><!-- #main -->
    
 
<?php
get_footer();

