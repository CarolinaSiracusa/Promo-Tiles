<?php

namespace App\Controllers;

use App\Models\PromotionsModel;

class PromotionsController extends BaseController
{
    public function index()
    {
        $promotionsModel = new PromotionsModel();
        $result = $promotionsModel->findAll();

        $data = ['header'=>'Promotions', 'list'=>$result];
        return view('promotions_list', $data);
    }

    public function add()
    {
        helper('form');
        return view('add_promotion_form');
    }

    public function submit()
    {
        $reglas = [
            'title' => 'required',
            'image_url' => 'required|valid_url',
        ];

        /*if(!$this->validate($reglas)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }*/

        $post = $this->request->getPost(['title', 'image', 'description']);

        $promotionsModel = new PromotionsModel();
        $promotionsModel->insert([
            'title' => $post['title'],
            'image' => $post['image'],
            'description' => $post['description']
        ]);

        $promotionsModel = new PromotionsModel();
        $result = $promotionsModel->findAll();

        $data = ['header'=>'Promotions', 'list'=>$result];

        return view('promotions_list', $data);
    }
}