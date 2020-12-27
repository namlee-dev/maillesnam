<?php

// DOC https://wpformation.com/wordpress-sans-plugins/
/*** BOUTONS DE PARTAGE SANS PLUGINS ***/

function my_sharing_buttons($content) {
    global $post;
    if(is_single()){

        // Récuperer URL de la page en cours
        $myCurrentURL = urlencode(get_permalink());

        // Récuperer TITRE de la page en cours
        $myCurrentTitle = urlencode(get_the_title()); // correction du 9 février 2017

        // Récuperer MINIATURE si l'image à la une existe
        if(has_post_thumbnail($post->ID)) {
            $myCurrentThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'mini-thumbnail'); // correction du 9 février 2017
        }

        // Construction des URL de partage - correction du 9 février 2017 (url échapées)
        $twitterURL = esc_url( 'https://twitter.com/intent/tweet?text='.$myCurrentTitle.'&amp;url='.$myCurrentURL.'&amp;via=maillesnam' ); // indiquez ici votre pseudo sans le @
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer?u='.$myCurrentURL );
        $linkedInURL = esc_url( 'https://www.linkedin.com/sharing/share-offsite/?url='.$myCurrentURL );
        $pinterestURL = esc_url( 'https://pinterest.com/pin/create/button/?url='.$myCurrentURL.'&amp;media='.$myCurrentThumbnail[0].'&amp;description='.$myCurrentTitle );
        $email_share = esc_url( 'mailto:?subject=Regarde cet article !&BODY=Hey ! Je voulais partager avec toi cet article interressant : '.$myCurrentURL.'&amp;title='.$myCurrentTitle );

        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="partage-reseaux-sociaux">';
        $content .= __('<h3>Partagez Maintenant !</h3>'); // correction du 9 février 2017 : texte traduisible
        $content .= '<a class="msb-link msb-twitter" href="'.$twitterURL.'" target="_blank">Twitter</a>';
        $content .= '<a class="msb-link msb-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
        $content .= '<a class="msb-link msb-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
        $content .= '<a class="msb-link msb-pinterest" href="'.$pinterestURL.'" target="_blank">Pin It</a>';
        $content .= '<a class="msb-link msb-email" href="'.$email_share.'" target="_blank">eMail</a>'; // correction du 9 février 2017
        $content .= '</div>';
    }

        // si ce n'est pas un article ou une page, ne pas inclure les boutons de partages
        return $content; // correction du 9 février 2017
};

add_filter( 'the_content', 'my_sharing_buttons');