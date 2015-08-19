<?php

namespace Application\Controllers;

use Application\Models\News as NewsModel;
use Application\Classes\View as View;

class News
{
    public function actionAll()
    {
        $news = NewsModel::findAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');

    }
} 