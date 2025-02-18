<?php

if (isset($_GET['page'])){

    switch ($_GET['page']) {
        case 'accueil':
            include "../view/accueilView.php";
            break;
        case 'apropos':
            include "../view/aproposView.php";
            break;
        case 'contact':
            include "../view/contactsView.php";
            break;
        case 'histoire':
            include "../view/histoireView.php";
            break;
        default:
            include "../view/error404View.php";
            break;
    }

}else{

    include "../view/accueilView.php";

    }

?>
 