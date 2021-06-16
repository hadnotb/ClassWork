<?php
namespace App\Controller\Admin;
use App\Framework\AbstractController;
use App\Model\ArticleModel;

class AdminController extends AbstractController{

    public function index()
    {
        return $this-> render('Admin/Admin', [
            'articles' => (new ArticleModel())->getAllArticles()
        ]);
    }    
} 
