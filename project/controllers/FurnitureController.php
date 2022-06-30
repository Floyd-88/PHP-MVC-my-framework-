<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

class FurnitureController extends Controller
{
    public function one($params) {
        $page = (new Page) -> getById($params['id']);

        $this->title = $page['type'];
        // echo '<pre>';
        // print_r($page['count']);
        // echo '</pre>';
        return $this->render('furniture/one', [
            'type' => $this->title,
            'count' => $page['count'],
            'price' => $page['price'],
            'all_price' =>  $page['count'] * $page['price'],
        ]);
    }

    public function all() {
        $this->title = 'Все товары';

        $pages = (new Page)->getAll();
        return $this->render('furniture/all', [
            'pages' => $pages,
            'header' => $this->title,
        ]);
    }
}