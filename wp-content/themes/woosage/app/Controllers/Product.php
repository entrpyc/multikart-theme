<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Product extends Controller
{

    function __construct()
    {
        
    }

    public function data()
    {
        $data['id'] = get_the_ID();

        $data['page_type'] = get_field('page_type', $data['id']);

        $data['product_title'] = get_field('product_title', $data['id']);

        $data['name'] = $data['product_title']['name'];
        $data['publisher'] = $data['product_title']['publisher'];

        $data['product_gallery'] = get_field('product_gallery', $data['id']);
        $data['product_price'] = get_field('product_price', $data['id']);
        $data['product_sizes'] = get_field('product_sizes', $data['id']);
        $data['product_details'] = get_field('product_details', $data['id']);

        $data['product_tabs'] = get_field('product_tabs', $data['id']);

        $data['related_products'] = get_field('related_products', $data['id']);

        $data['description_gallery'] = [];

        foreach ($data['product_gallery'] as $image) {
            array_push($data['description_gallery'], $image['url']);
        }

        return $data;
    }
}
