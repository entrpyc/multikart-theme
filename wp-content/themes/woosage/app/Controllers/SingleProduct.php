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

    $data['page_type'] = get_field('multikart_product_single_page_type', $data['id']);

    return $data;
  }

  // Tabs Section
  public function tabs()
  {
    $data['id'] = get_the_ID();

    $tabs = get_field('multikart_product_single_tabs', $data['id']);

    return $tabs;
  }
}
