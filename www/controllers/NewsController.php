<?php

//require_once __DIR__ . '/../models/News.php';

class NewsController
{
    public function actionAll()
    {
        $db = new DB;
        $res = $db->query('SELECT * FROM news');

       //$news = News::getAll();

        $view = new View();
        $view->items = $res;
        $view->display('news/all.php');

    }

    public function actionOne()
    {
        $id = $_GET['id'];

        $db = new DB;
        $res = $db->query(
                'SELECT * FROM news WHERE id=:id',
                [':id' => $id]
            );


        //$item = News::getOne($id);

        $view = new View();
        $view->items = $res;
        $view->display('news/one.php');

    }
} 