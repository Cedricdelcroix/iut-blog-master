<?php


// Récupération des dernières URL
include_once('modele/ticket/ticket.php');

// On a passé un paramètre à l'application
if (isset($_GET['choix'])) {
    if ($_GET['choix'] == 'add') {
        // on souhaite ajouter une nouvelle URL en base
        echo $_GET['titre'];
        echo $_GET['contenu'];
        ajouter_ticket($_GET['titre'],$_GET['contenu']);

    } else if ($_GET['choix'] == 'suppr') {
        delete_ticket($_GET['id']);
            }else if($_GET['choix']=='modif'){
                $ticket_a_modifier = get_ticket_by_id($_GET['id']);
            }else if($_GET['choix']=='edit'){
                edit_contenu($_GET['id'],$_GET['contenu']);

            }
//}
/*
else if ($_GET != array()) {
    // on a un paramètre en GET, c'est qu'on souhaite rediriger
    // il faut donc rediriger vers l'URL originale
    $id = key($_GET);
    if(is_numeric($id)){
    // on récupère l'URL d'origine
    $url = get_url_by_id($id);
    // compteur de statistiques à mettre à jour
    incremente_compteur($id);
    // redirection
    header('Location: ' . $url);
    exit;
}*/
}
/*
//$page_courante= isset($_GET['p']) ? intval($_GET['p']) : 1;
//$indice = ($page_courante * PAGINATION ) - PAGINATION;
*/
$tickets = get_tickets();
$tags = get_tags();
//$total_url=compte_urls();
//$total_pages= ceil($total_url/PAGINATION);
/*
foreach ($urls as $key => $url) {
    $urls[$key]['url_courte'] = createShortURL($url['id']);
    $urls[$key]['url_originale'] = $url['originale'];
    $date = new DateTime($url['date_creation']);
    $urls[$key]['date'] = $date->format('d-m-Y');
}
*/
// On affiche la page (vue)
include_once('vues/index.php');