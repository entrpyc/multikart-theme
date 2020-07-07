@php
// example data
$tabs = [
  [
    'title' => 'Description',
    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
  ],
  [
    'title' => 'Details',
    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
  ],
  [
    'title' => '3rd Tab',
    'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
  ],
]

// 'title_array' => App::composeNestedData($tabs, 'title'), // returns a new array of all values from the given key
// 'text_array' => App::composeNestedData($tabs, 'text'), // $param1 (target array), $param2 (target key)
@endphp
	@php do_action( 'woocommerce_checkout_before_order_review' ) @endphp
@include('boiler-loader.product-single.page-router', [
  'settings' => [
    'page_type' => 'no-sidebar',

    'description' => [
      'gallery' => $images, // pass images for gallery
      'layout' => [ // configure custom section with list of components
        'component' => $comp // rout to component
        'component' => $comp // rout to component
        'component' => $comp // rout to component
      ]
    ],

    'tab' => [
      'layout' => [ // array with content for all tabs.
        [
          'title' => $tabs,
          'text' => $tabs,
        ],
        [
          'text' => $tabs,
          'component' => $tabs, //pass component route
        ],
        [
          'text' => $tabs[0][0],
          'video' => $tabs[0][1],
        ],
        [
          'component' => $tab //pass component route
        ],
        [
          'title' => $tabs,
          'text' => $tabs,
          'video' => $tabs,
          'component' => $tab //pass component route
          'component' => $tab //pass component route
        ],
      ]
    ],

    'related_products' => 1,
  ],
])