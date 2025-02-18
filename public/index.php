<?php

if (isset($_GET['page'])){

    switch ($_GET['page']) {
        case 'accueil':
            include "../templates/accueilView.php";
            break;
        case 'apropos':
            include "../templates/aproposView.php";
            break;
        case 'contact':
            include "../templates/contactsView.php";
            break;
        case 'histoire':
            include "../templates/histoireView.php";
            break;
        default:
            include "../templates/error404View.php";
            break;
    }

}else{

    include "../tempates/accueilView.php";

    }

?>
 