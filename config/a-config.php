
<?php 

$page = $_GET['page'];
$pages = scandir('pages');

// Vérifie si la page n'est pas vide et existe dans le dossier pages
if(!empty($page) && in_array($page.".php", $pages)) { 
	$content = 'pages/'.$page.".php";
}
//Renvoi à la page d'accueil si la page est vide ou n'existe pas
else {
	header("Location:index.php?page=accueil");
}


switch ($page) {
	case 'about':
	$CURRENT_PAGE = "About";
	$PAGE_TITLE = "A Propos";
	$PAGE_DESCRIPTION = "Je suis dans ma page à propos";
	break;
	case 'users':
	$CURRENT_PAGE = "Users";
	$PAGE_TITLE = "Utilisateurs";
	$PAGE_DESCRIPTION = "Je suis dans ma page users";
	break;
	case 'contact':
	$CURRENT_PAGE = "Contact";
	$PAGE_TITLE = "Contact";
	$PAGE_DESCRIPTION = "Je suis dans ma page de contact";
	break;
	case 'boucles':
	$CURRENT_PAGE = "Boucles";
	$PAGE_TITLE = "Boucles";
	$PAGE_DESCRIPTION = "Je suis dans ma page boucles";
	break;	
	default:
	$CURRENT_PAGE = "Home";
	$PAGE_TITLE = "Accueil";
	$PAGE_DESCRIPTION = "Je suis dans ma page d'accueil";
	break;
} 

?>




