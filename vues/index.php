<!--<ul>-->

<table>
    <tr>
        <td>id</td>
        <td>titre</td>
        <td>publie</td>
        <td>date</td>
        <td>modifier</td>
        <td>supprimer</td>
    </tr>
<?php foreach($tickets as $ticket) : ?>
    <tr>
        <td><?php echo $ticket['id']; ?></td>
        <td><?php echo $ticket['titre']; ?></td>
        <td><?php echo $ticket['publie']; ?></td>
        <td><?php echo $ticket['date']; ?></td>
        <td><a href="?choix=modif&id=<?php echo $ticket['id'];?>"><img src="images/modifier.png" /></a></td>
        <td><a href="?choix=suppr&id=<?php echo $ticket['id'];?>"><img src="images/delete_32.png" /></a></td>
    </tr>
   <!--<li>
        <a href="<?php echo $url['url_courte']; ?>" target="_blank"><?php echo $url['url_courte']; ?></a> (<?php echo $url['compteur']; ?> clic<?php echo ($url['compteur'] > 1 ? 's' : ''); ?>)<br />
        <?php echo $url['url_originale']; ?> — <em>ajoutée le <?php echo $url['date']; ?></em>
        <p><?php echo $url['commentaire']; ?></p>
        <form method="post">
            <input type="hidden" name="action" value="delete" />
            <input type="hidden" name="id" value="<?php echo $url['id']; ?>" />
            <input type="submit" value="X" />
        </form>
    </li>
--><?php
endforeach;
?>
</table>

<!--</ul>
<?php if ($page_courante>1) : ?>
<p><a href="?p=<?php echo($page_courante -1);?>"> << Préc.</a></p>
<?php endif; ?>

<?php 
for($i=1; $i<=$total_pages;$i++){
	echo '<a href="?p=' . $i .'">'. $i .'</a>';
}?>

<?php if ($page_courante<$total_pages) : ?>
<p><a href="?p=<?php echo($page_courante +1);?>">Suiv.>></a>
<?php endif; ?>-->