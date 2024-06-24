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
        $rules = [
            'title' => 'required',
            'image' => 'required|valid_url',
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost(['title', 'image', 'description']);

        $promotionsModel = new PromotionsModel();
        $promotionsModel->insert([
            'title' => $post['title'],
            'image' => $post['image'],
            'description' => $post['description']
        ]);

        return redirect()->to('/promos');
    }

    public function edit($id = null)
    {
        if($id == null){
            return redirect()->route('promos');
        }

        $promotionsModel = new PromotionsModel();
        $result = $promotionsModel->find($id);

        $data = ['promotion'=>$result];

        return view('edit_promotion_form', $data);
    }

    public function update($id = null)
    {
        $rules = [
            'title' => 'required',
            'image' => 'required|valid_url',
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost(['title', 'image', 'description']);

        $promotionsModel = new PromotionsModel();
        $promotionsModel->update($id, [
            'title' => $post['title'],
            'image' => $post['image'],
            'description' => $post['description']
        ]);

        return redirect()->to('/promos');

    }

    public function delete($id = null) 
    {
        if($id == null){
            return redirect()->route('promos');
        }

        $promotionsModel = new PromotionsModel();
        $promotionsModel->delete($id);

        return redirect()->to('/promos');
        
    }
}