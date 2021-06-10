<?php




$data = [

    'Article' =>[
            "id_article" => 0,
            "nom_article" => "501",
            "prix" => 10,
            "details" => 'Lorem ipsum dolor sit amet, consectetur        adipisicing elit. Omnis, voluptatem odio nihil iure laborum    in, doloribus incidunt recusandae sequi labore veniam rerum! Ex sapiente quibusdam officiis debitis est et quaerat.'


    ],
    'Categorie' =>[
            "idCategorie" => 0,
            "lib_categorie" => 'Pantalons'
    ],
    'Marque'=>[
            "idMarque" => 0,
            "lib_marque" => "Levi's"
    ],
    'Couleur'=>[
            "idCouleur"=> 0,
            "nom_couleur" => "bleu"

    ],
    'Taille'=>[
            "id_taille"=> 0,
            "lib_taille" => "38"
         
    ]


];

include('../templates/article.phtml');