<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleProduct extends Controller
{
  function __construct()
  {

  }

  public function data()
  {
    $data['id'] = get_the_ID();

    $data['tabs'] = get_field('multikart_product_single_tabs', $data['id']);
    $data['product_gallery'] = get_field('multikart_product_gallery', $data['id']);

    $data['description_gallery'] = [];

    if($data['product_gallery']) {
  
      foreach ($data['product_gallery'] as $image) {
        array_push($data['description_gallery'], $image['url']);
      }
    }
    
    return $data;
  }
  
  // Tabs Section
  public function theme_settings()
  {
    $data['id'] = get_the_ID();
    
    $theme_settings['page_type'] = get_field('multikart_product_single_page_type', $data['id']);

    return $theme_settings;
  }
}
