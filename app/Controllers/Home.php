<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\CoverModel;
use App\Models\ItemModel;
use App\Models\PodcastModel;

class Home extends BaseController
{
    public function index()
    {
        $cover = new CoverModel();
        $data['covers'] =  $cover->findAll();
        return view('cover/cover', $data);
    }

    public function podcast()
    {
        $podcast = new PodcastModel();

        $data['podcast'] = $podcast->findAll();
        //return $this->respond($data);
        return view('podcast/podcast', $data);
    }

    public function category()
    {
        $category = new CategoryModel();
        $data['category'] =  $category->findAll();
        return view('category/category', $data);
    }

    public function item()
    {
        $item = new ItemModel();
        $category = new CategoryModel();
        $categories =  $category->findAll();
        $array = array();

        foreach ($categories as $value){
            $array[$value['id']] = $value['name'];
        }
        $data['item'] =  $item->findAll(); //$item->findAll();
        $data['category'] = $array;
        return view('item/item', $data);
    }
}
