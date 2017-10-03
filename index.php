
<?php
include 'views/head.php';
include 'views/menu.php';
$current_page = isset($_GET['action'])?$_GET['action']:'home';

switch ($current_page) {
    case 'home':
        include 'views/home.php';
        break;
    case '9levens':
        include 'views/9levens.php';
        break;
    case 'bram':
        include 'views/bram.php';
        break;
    case 'funzige':
        include 'views/funzige.php';
        break;
    case 'facetival':
        include 'views/facetival.php';
        break;
}
include 'views/footer.php';
?>