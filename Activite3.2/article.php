<?php
class ArticlesView extends Articles {
    public  function showArticle() {

        $articles=$this->getarticles ();
        echo "les articles:" .$articles;
    
     }
}