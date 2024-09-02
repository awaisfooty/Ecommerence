<?php

// ADD METABOXES FOR PRODUCT
add_filter( 'rwmb_meta_boxes', 'generate_custom_meta_boxes_for_product' );
function generate_custom_meta_boxes_for_product( $meta_boxes ) {

    $meta_boxes[] = [
        'title'      => esc_html__( 'Product Metaboxes', 'online-generator' ),
        'id'         => 'product_metaboxes',
        'post_types' => ['product'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Add Product Price', 'online-generator' ),
                'id'          => 'product_price',
                'desc'        => esc_html__( 'Add price for this product', 'online-generator' ),
                'placeholder' => esc_html__( 'Add Price', 'online-generator' ),
            ],
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Add Product Currency', 'online-generator' ),
                'id'          => 'product_currency',
                'desc'        => esc_html__( 'Add currency for this product', 'online-generator' ),
                'placeholder' => esc_html__( 'Add currency', 'online-generator' ),
            ],
            [
                'type'        => 'text',
                'name'        => esc_html__( 'Add Product Quantity', 'online-generator' ),
                'id'          => 'product_quantity',
                'desc'        => esc_html__( 'Add quantity for this product', 'online-generator' ),
                'placeholder' => esc_html__( 'Add quantity', 'online-generator' ),
            ],
            [
                'type'             => 'image',
                'name'             => esc_html__( 'Product Images', 'online-generator' ),
                'id'               =>'product_images',
                'max_file_uploads' => 4,
                'force_delete'     => true,
                'clone'            => true,
            ],

        ],
    ];

    return $meta_boxes;
}

?>