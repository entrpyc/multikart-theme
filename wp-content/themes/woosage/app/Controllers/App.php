<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public static function setIconList($exclude, $include) {
        $icons = ['facebook', 'google-plus', 'twitter', 'instagram', 'rss'];
        if($include) {
          $icons = $include;
        }
        if($exclude) {
          $icons = array_diff($icons, $exclude);
        }
          
        return $icons;
    }
    public static function composeSlickSlides($images) {
        $counter = 0;
        $slick = '';
        $nav = '';
        foreach ($images as $image_url) {
            $slick .= '<div><img src="'.$image_url.'" class="img-fluid blur-up lazyload image_zoom_cls-'.$counter++.'"></div>';
            $nav .= '<div><img src="'.$image_url.'" class="img-fluid blur-up lazyload"></div>';
        }

        return array($slick, $nav);
    }
    public static function loadAdvancedOptions($sections, $section, $data, $settings) {
        $options = [];

        if($section == 'related-products') {
            if($data['products'] == 'woocommerce') {
                $options['section'] = 'boiler-loader.product-single.sections.related-products-woocommerce';
                $options['data'] = [];
            }
        }

        if($settings['page_type'] == 'left-sidebar') {
            if($section == 'tab') {
                $options['no-load'] = 1;
            }
            elseif($section == 'description') {
                $options['section'] = 'boiler-loader.product-single.sections.description-left-sidebar';
                $options['data'] = $data;
                
                if($sections['tab']) {
                    $options['data']['tab'] = $sections['tab'];
                }
            }
        }

        return $options;
    }
    public static function setSeoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }

    // public static function composeNestedData($dataArray, $dataItem) {
    //     $filteredArray;
    //     foreach($dataArray as $item) {
    //         array_push($filteredArray, $item[$dataItem]);
    //     }

    //     return $filteredArray;
    // }
}
