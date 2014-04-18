<?php
function get_tickets()
{
    global $bdd;
        
    $sql = 'SELECT * FROM billet';/*ASC LIMIT ' . $indice . ', ' . $pagination; */
    $req = $bdd->prepare($sql);
    $req->execute();
    $tickets = $req->fetchAll();
    
    return $tickets;
}

function get_tags()
{
    global $bdd;
        
    $sql = 'SELECT * FROM tag';/*ASC LIMIT ' . $indice . ', ' . $pagination; */
    $req = $bdd->prepare($sql);
    $req->execute();
    $tags = $req->fetchAll();
    return $tags;
}


function get_ticket_by_id($id) 
{
    global $bdd;

    $req = $bdd->prepare('
        SELECT *
        FROM billet
        WHERE id=:id');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $tickets = $req->fetch();
    
    return $tickets;
}

/*
function incremente_compteur($id)
{
    global $bdd;

    $sql = '
        UPDATE url
        SET compteur = compteur + 1
        WHERE id=:id
    ';
    $req = $bdd->prepare($sql);
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    
    return $req->execute();  
}

function get_url_by_url($id) 
{
    global $bdd;

    $req = $bdd->prepare('
        SELECT id
        FROM billet
        WHERE id=:id');
    $req->bindParam(':url', $url, PDO::PARAM_STR);
    $req->execute();

    return $req->fetch();
}

function compte_urls()
{
    global $bdd;

    $req = $bdd->prepare('SELECT COUNT(*) FROM url');
    $req->execute();
    $total = $req->fetchColumn();

    return $total;
}
*/
function ajouter_ticket($titre,$contenu) 
{
    global $bdd;

        $sql = '
            INSERT INTO billet (titre, contenu,date)
            VALUES (:titre, :contenu, :date)
        ';
        $req = $bdd->prepare($sql);
        $req->bindParam(':titre', $titre, PDO::PARAM_STR);
        $req->bindParam(':contenu', $contenu, PDO::PARAM_STR);
        $req->bindParam(':date', date('Y-m-d H:i:s'), PDO::PARAM_STR);

        return $req->execute(); 
}
function ajouter_tag($libelle) 
{
    global $bdd;

        $sql = '
            INSERT INTO tag (libelle)
            VALUES (:libelle)
        ';
        $req = $bdd->prepare($sql);
        $req->bindParam(':libelle', $libelle, PDO::PARAM_STR);
 
        return $req->execute(); 
}
function assoc_tag_billet($id_billet,$id_tag) 
{
    global $bdd;

        $sql = '
            INSERT INTO tag_billet (tag_id,billet_id)
            VALUES (:id_tag,:id_billet)
        ';
        $req = $bdd->prepare($sql);
        $req->bindParam(':id_tag', $id_tag, PDO::PARAM_STR);
        $req->bindParam(':id_billet', $id_billet, PDO::PARAM_STR);
        return $req->execute(); 
}

function delete_ticket($id) 
{
    global $bdd;

    $req = $bdd->prepare('
        DELETE FROM billet
        WHERE id=:id');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    
    return $req->execute(); 

}
function edit_contenu($id, $contenu) 
{
    global $bdd;

    $req = $bdd->prepare('
        UPDATE billet
        SET contenu = :contenu
        WHERE id=:id');
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->bindParam(':contenu', $contenu, PDO::PARAM_STR);
    
    return $req->execute(); 
}
/*
function last_id() 
{
    global $bdd;

    $req = $bdd->prepare('SELECT LAST_INSERT_ID()');
    $req->execute();
    $last_id = $req->fetch();
    
    return $last_id;
}*/