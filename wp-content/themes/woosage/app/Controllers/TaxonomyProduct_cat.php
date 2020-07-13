<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomyProduct_cat extends Controller
{

    function __construct()
    {
    }

    public function data()
    {

        $category= get_queried_object();

        $data['image_top'] = get_field('category_top_image', $category);
        $data['image_sidebar'] = get_field('category_sidebar_image', $category);

        return $data;
    }
}
