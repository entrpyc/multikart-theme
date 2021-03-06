// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import vegetables from './routes/vegetables';
import home from './routes/home';
import aboutUs from './routes/about';
import product from './routes/product';
import cart from './routes/cart';


  
/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  vegetables,
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  product,
  cart,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
