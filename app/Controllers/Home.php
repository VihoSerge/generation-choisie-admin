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
        $data['updateCover'] = array(
            'title' => ""
        );
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

    public function item($id = null)
    {

        $item = new ItemModel();
        $category = new CategoryModel();
        $data['categories'] = $category->findAll();
        $array = array();

        foreach ($data['categories'] as $value) {
            $array[$value['id']] = $value['name'];
        }
        $data['item'] =  $item->findAll();

        if ($id != null) {
            $data['singleItem'] = $item->find($id);
            $data['category'] = $array;
            return view('item/item', $data);
        } else {
            $data['singleItem'] = array("categoryid" => 0);
            $data['category'] = $array;
            return view('item/item', $data);
        }
    }
}
