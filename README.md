# WooCommerce integration for Sage 9

##1. Install WordPress 5
 * https://wordpress.org/download/
##2. Install latest WooCommerce Plugin
 * https://wordpress.org/plugins/woocommerce/
##3. Install Sage
 - go to wp-content/themes <br/>
 
 - **composer create-project roots/sage your-theme-name dev-master**
 
 - (dev-master) to install latest 9.0.7 version of Sage
 
 - git of sage - https://github.com/roots/sage
 
 - Sage documentation - https://roots.io/sage/docs/theme-installation/
 
 - from wp-content/themes/your-theme-name run **npm install**
##4. Install WooCommerce integration for Sage 9

 - cd wp-content/themes/your-sage-theme-folder
 
 - **composer require roots/sage-woocommerce**
 
 - Documentation here - https://github.com/roots/sage-woocommerce
 
 - Create /resources/views/woocommerce folder in your theme
 
 - Create single-product.blade.php in that folder (https://github.com/roots/sage-woocommerce/blob/master/examples/resources/views/woocommerce/single-product.blade.php)

 - Create archive-product.blade.php in that folder (https://github.com/roots/sage-woocommerce/blob/master/examples/resources/views/woocommerce/archive-product.blade.php)
##5. Add Woocommerce Theme Support

 - Open app/setup.php
 
 - **add_theme_support('woocommerce');**
##6. Controller

- If you need to pass data to woocommerce/single-product.blade.php create app/Controllers/**SingleProduct.php** class

- If you need to pass data to woocommerce/archive-product.blade.php (Shop/ProductListing Page) create app/Controllers/**ArchiveProduct.php** class
##7. Extending WooCommerce

- If you want to replace particular template, please have a look into plugin folder woocommerce/templates and use same folder structure and file name (and change the extension to .blade.php) as the original template

- Keep actions and filters!