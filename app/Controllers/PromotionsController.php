<?php

namespace App\Controllers;

class PromotionsController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query(
            "SELECT title, image, description 
            FROM promotions");
        $result = $query->getResult();
        $data = ['header'=>'Promotions', 'list'=>$result];
        return view('promotions_list', $data);
    }
}