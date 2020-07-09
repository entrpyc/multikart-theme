<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Vegetables extends Controller
{
    public function __construct()
    {
    }

    public function data()
    {
        $data['id'] = get_the_ID();

        $data['hero-slider'] = get_field('vegetables_hero_slider', $data['id']);
        $data['parallax'] = get_field('vegetables_parallax', $data['id']);
        $data['product-symbol'] = get_woocommerce_currency_symbol();

        return $data;
    }

    public function news()
    {
        $query = new WP_Query($this->getQueryArgs());

        foreach($query->posts as $post)
        {
            $post->title = get_the_title($post->ID);
            $post->url = get_permalink($post->ID);
            $post->date = get_the_date('d/m/Y', $post->ID);
            // $post->image = get_the_post_thumbnail_url($post->ID, 'full');
            $post->image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

            // $post->image = get_field('image', $post->ID);

            $author_id = $post->post_author;

            $post->author = get_the_author_meta('user_nicename', $author_id);;
        }

        return $query;
    }

    /**
     * Query args based on search and paged GET variables
     * @return array
     */
    protected function getQueryArgs()
    {
        $args = array(
            'post_type' => 'post',
            'orderby' => 'date', // meta_value
            //'meta_key' => 'featured',
            'order' => 'DESC',
            'posts_per_page' => 3,
            "suppress_filters" => 0,
            //'paged' => $this->paged,
            'meta_query' => [
                'relation' => 'AND',
            ]
        );

        return $args;
    }

    /**
     * All Post Categories Query
     * @return WP_Query
     */

    public function products()
    {
        $query = new WP_Query($this->getQueryArgsProducts());
        $products = [];

        while ( $query->have_posts() ) : $query->the_post();
            global $product;

            $cats = [];
            foreach (get_the_terms($product->ID, 'product_cat') as $cat) {
                array_push($cats,  $cat->slug);
            }

            array_push($products, [
                'href' => get_permalink(),
                'image' => wp_get_attachment_url( $product->get_image_id() ),
                'title' => get_the_title(),
                'price' => $product->get_regular_price(),
                'discount' => $product->get_sale_price(),
                'cat' => $cats
            ]);
        endwhile;

        wp_reset_query();

        return $products;
    }

    /**
     * Query args based on search and paged GET variables
     * @return array
     */
    protected function getQueryArgsProducts()
    {
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
        );

        return $args;
    }

    public function product_cat()
    {
        $product_cat['new_product'] = 'new-product';
        $product_cat['trending'] = 'trending';
        $product_cat['special'] = 'special';

        return $product_cat;
    }
}
