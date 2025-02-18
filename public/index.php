<?php

if (isset($_GET['page'])){

    switch($_GET['page']){
        case "df": 
    }

}else{

    switch ($page) {
        case 'accueil':
            include "../templates/accueilView.php";
            break;
        case 'apropos':
            include "../templates/aproposView.php";
            break;
        case 'contact':
            include "../templates/contactView.php";
            break;
        case 'histoire':
            include "../templates/histoireView.php";
            break;
        default:
            include "../templates/error404.php";
            break;
    }
}
?>
