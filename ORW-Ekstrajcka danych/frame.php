<pre><?php
/*
        @phpSolutions
        Kursy video dotyczące zagadnień związanych z PHP
       
        Odcinek 01: Pobieranie informacji z innych stron
*/
 
require('simple_html_dom.php'); /* plik wymagany do tego, by wszystko działło poprawnie*/
 
/*
        Klasa           .nazwaklasy
        ID              #nazwaid
        tag             img
        klasa + name    .nazwaklasy[name='nazwa']
*/
 
$html = file_get_html("https://www.youtube.com/user/PowerAmbroz/about");/*pobranie strony internetowej*/
$info ['nazwa'] = $html->find(".branded-page-header-title-link",0)->title;/*pobranie nazwy kanału w serwisie YouTube*/
$info ['opis'] = $html->find(".about-description p",0)->innertext;/*pobranie opisu kanału*/
$info ['subskruypcje'] = $html->find(".about-stat b",0)->innertext;/*pobranie ilości subskrypcji*/
$info ['logo'] = $html->find(".channel-header-profile-image",0)->src;/*pobranie obrazka w formie linku*/
print_r($info);
?>



