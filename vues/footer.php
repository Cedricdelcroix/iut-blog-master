          </div>
          
          <nav class="span4">

            <h2>Ajouter un billet</h2>
            <form method="get">
                <input type="hidden" name="choix" value="<?php echo (isset($ticket_a_modifier) ? 'edit' : 'add'); ?>" />
                <label for="titre">Billet : </label>
                <input type="titre" name="titre" id="titre" required="" placeholder="titre" <?php if (isset($ticket_a_modifier)) echo 'value="' . $ticket_a_modifier['titre']. '" disabled="disabled"';?> />
                <textarea name="contenu" id="contenu" placeholder="saississez votre article"><?php if (isset($ticket_a_modifier)) echo $ticket_a_modifier['contenu'] ?></textarea>
                 <?php if (isset($url_a_modifier)) : ?>
                  <input type="hidden" name="id" value="<?php echo $ticket_a_modifier['id'] ?>" />
                <?php endif; ?>
                
            <h2>Tag</h2>
            <?php foreach($tags as $tag) : ?>
              <input type="checkbox" name="tag<?php echo $tag['id'] ;?>" value="<?php echo $tag['libelle'] ;?>"/><?php echo $tag['libelle'] ;?>
              <?php
                endforeach;
              ?>
                <br/>
               
               
                <input type="submit" value="<?php echo (isset($ticket_a_modifier) ? 'Modifier' : 'Ajouter'); ?>" />
            </form>
            
          </nav>
        </div>
        
      </div>

      <footer>
        
      </footer>

    </div>

  </body>
</html>

