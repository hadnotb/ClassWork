<?php
namespace App\Model;
use App\Framework\AbstractModel;


class ArticleModel extends AbstractModel {

    function getOneArticle(int $id): array
    {
       $sql = 'SELECT *
               FROM article art
               INNER JOIN categorie cat on cat.idCategorie = art.idCategorie
               WHERE art.idArticle = ?';
    
       $article = $this -> database -> getOneResult($sql,[$id]);
    
       return $article;


    }
}