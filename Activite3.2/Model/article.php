<?php

class Articles extends dbh {


  protected function getarticles () {

         $articlesStatement = $db->prepare('SELECT * FROM articles');
          $articlesStatement->execute();
          $articles = $articlesStatement->fetchAll();
          return $articles;
         }
        
  protected function setarticles ($titre,$texte,$auteur,$date_publication) {

          $articlesStatement = $db->prepare('INSERT INTO articles(titre, texte, auteur, date_publication) VALUES (:titre, :texte, :auteur, :date_publication)');
           $articlesStatement->execute($titre,$texte,$auteur,$date_publication);
           $articles = $articlesStatement->fetchAll();
           
          }
         }