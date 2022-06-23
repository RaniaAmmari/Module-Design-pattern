<?php
class ArticlesContr extends Articles {
    public  function creatArticle( $titre,$texte,$auteur,$date_publication  ) {

       $this->setarticles ($titre,$texte,$auteur,$date_publication);
        echo "les articles:" .$articles;
    }
}
