<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers/customers', 'CustomersController@list');

Route::get('/landingsite', 'LandingSiteController@index')->name('landingsite');

//Route::get('/sales/sales', 'SalesController@indexDataTables')->name('sales:dt');
Route::get('sales', ['uses'=>'SalesController@index', 'as'=>'sales.index']);

//Route::get('/sales/sales', 'SalesController@index')->name('sales.index');


Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);

//Route::get('sales', 'SalesController@index')->name('sales.index');
//Route::get('/sales', 'SalesController@getSales')->name('get.sales');
//Route::get('sales', ['uses'=>'SalesController@getIndex', 'as'=>'get.sales']);

//Route::get('sales', ['uses'=>'SalesController@getSales', 'as'=>'sales.get']);


//Route::get ( '/', function () {
//    $data = Data::all ();
//    return view ( 'data' )->withData ( $data );
//} );

//Route::view('/sales/data', 'sales.data');

//Route::get('/sales/sales', 'SalesController@list');

//Route::get('sales', ['uses'=>'SalesController@list', 'as'=>'datatables.data']);

//Route::get('/datatables/orders', array('middleware' => 'auth', 'uses' => 'ProfileController@anyOrders'))->name('datatables.dataOrders');
//Route::get('/datatables/properties', array('middleware' => 'auth', 'uses' => 'ProfileController@anyProperties'))->name('datatables.dataProperties');


//

Route::view('bd_dashboard', 'bd_dashboard');
Route::view('bd_search', 'bd_search');
Route::view('op_auth_signin2', 'op_auth_signin2');

Route::view('bd_dashboard', 'bd_dashboard');

Route::view('bd_search', 'bd_search');

Route::view('bd_variations_hero_image_1', 'bd_variations_hero_image_1');

Route::view('bd_variations_hero_image_2', 'bd_variations_hero_image_2');

Route::view('bd_variations_hero_image_3', 'bd_variations_hero_image_3');

Route::view('bd_variations_hero_image_4', 'bd_variations_hero_image_4');

Route::view('bd_variations_hero_simple_1', 'bd_variations_hero_simple_1');

Route::view('bd_variations_hero_simple_2', 'bd_variations_hero_simple_2');

Route::view('bd_variations_hero_simple_3', 'bd_variations_hero_simple_3');

Route::view('bd_variations_hero_simple_4', 'bd_variations_hero_simple_4');

Route::view('bd_variations_hero_video_1', 'bd_variations_hero_video_1');

Route::view('bd_variations_hero_video_2', 'bd_variations_hero_video_2');

Route::view('be_blocks', 'be_blocks');

Route::view('be_blocks_api', 'be_blocks_api');

Route::view('be_blocks_draggable', 'be_blocks_draggable');

Route::view('be_blocks_tiles', 'be_blocks_tiles');

Route::view('be_blocks_widgets_media', 'be_blocks_widgets_media');

Route::view('be_blocks_widgets_stats', 'be_blocks_widgets_stats');

Route::view('be_blocks_widgets_users', 'be_blocks_widgets_users');

Route::view('be_comp_appear', 'be_comp_appear');

Route::view('be_comp_calendar', 'be_comp_calendar');

Route::view('be_comp_charts', 'be_comp_charts');

Route::view('be_comp_chat_multiple', 'be_comp_chat_multiple');

Route::view('be_comp_chat_single', 'be_comp_chat_single');


Route::view('be_comp_countto', 'be_comp_countto');

Route::view('be_comp_filtering', 'be_comp_filtering');

Route::view('be_comp_gallery', 'be_comp_gallery');

Route::view('be_comp_image_cropper', 'be_comp_image_cropper');

Route::view('be_comp_maps_google', 'be_comp_maps_google');

Route::view('be_comp_maps_vector', 'be_comp_maps_vector');

Route::view('be_comp_nestable', 'be_comp_nestable');

Route::view('be_comp_rating', 'be_comp_rating');

Route::view('be_comp_scrolling', 'be_comp_scrolling');

Route::view('be_comp_sliders', 'be_comp_sliders');

Route::view('be_comp_syntax_highlighting', 'be_comp_syntax_highlighting');

Route::view('be_forms_css_inputs', 'be_forms_css_inputs');

Route::view('be_forms_editors', 'be_forms_editors');

Route::view('be_forms_elements_bootstrap', 'be_forms_elements_bootstrap');

Route::view('be_forms_elements_material', 'be_forms_elements_material');

Route::view('be_forms_plugins', 'be_forms_plugins');

Route::view('be_forms_plugins_date_range', 'be_forms_plugins_date_range');

Route::view('be_forms_premade', 'be_forms_premade');

Route::view('be_forms_validation', 'be_forms_validation');

Route::view('be_forms_wizard', 'be_forms_wizard');

Route::view('be_layout_api', 'be_layout_api');

Route::view('be_layout_content_boxed', 'be_layout_content_boxed');

Route::view('be_layout_content_full_width', 'be_layout_content_full_width');

Route::view('be_layout_content_narrow', 'be_layout_content_narrow');

Route::view('be_layout_default', 'be_layout_default');

Route::view('be_layout_flipped', 'be_layout_flipped');

Route::view('be_layout_header_classic', 'be_layout_header_classic');

Route::view('be_layout_header_classic_inverse', 'be_layout_header_classic_inverse');

Route::view('be_layout_header_fixed_classic', 'be_layout_header_fixed_classic');

Route::view('be_layout_header_fixed_classic_inverse', 'be_layout_header_fixed_classic_inverse');

Route::view('be_layout_header_fixed_glass', 'be_layout_header_fixed_glass');

Route::view('be_layout_header_fixed_glass_inverse', 'be_layout_header_fixed_glass_inverse');

Route::view('be_layout_header_fixed_modern', 'be_layout_header_fixed_modern');

Route::view('be_layout_header_glass', 'be_layout_header_glass');

Route::view('be_layout_header_glass_inverse', 'be_layout_header_glass_inverse');

Route::view('be_layout_header_modern', 'be_layout_header_modern');

Route::view('be_layout_hero_bubbles', 'be_layout_hero_bubbles');

Route::view('be_layout_hero_color', 'be_layout_hero_color');

Route::view('be_layout_hero_image', 'be_layout_hero_image');

Route::view('be_layout_hero_video', 'be_layout_hero_video');

Route::view('be_layout_native_scrolling', 'be_layout_native_scrolling');

Route::view('be_layout_side_overlay_hoverable', 'be_layout_side_overlay_hoverable');

Route::view('be_layout_side_overlay_no_page_overlay', 'be_layout_side_overlay_no_page_overlay');

Route::view('be_layout_side_overlay_visible', 'be_layout_side_overlay_visible');

Route::view('be_layout_sidebar_hidden', 'be_layout_sidebar_hidden');

Route::view('be_layout_sidebar_inverse', 'be_layout_sidebar_inverse');

Route::view('be_layout_sidebar_mini', 'be_layout_sidebar_mini');

Route::view('be_pages_auth_all', 'be_pages_auth_all');

Route::view('be_pages_crypto_buy_sell', 'be_pages_crypto_buy_sell');

Route::view('be_pages_crypto_dashboard', 'be_pages_crypto_dashboard');

Route::view('be_pages_crypto_settings', 'be_pages_crypto_settings');

Route::view('be_pages_crypto_wallets', 'be_pages_crypto_wallets');

Route::view('be_pages_dashboard', 'be_pages_dashboard');

Route::view('be_pages_dashboard2', 'be_pages_dashboard2');

Route::view('be_pages_dashboard3', 'be_pages_dashboard3');

Route::view('be_pages_dashboard4', 'be_pages_dashboard4');

Route::view('be_pages_ecom_customer', 'be_pages_ecom_customer');

Route::view('be_pages_ecom_dashboard', 'be_pages_ecom_dashboard');

Route::view('be_pages_ecom_order', 'be_pages_ecom_order');

Route::view('be_pages_ecom_orders', 'be_pages_ecom_orders');

Route::view('be_pages_ecom_product_edit', 'be_pages_ecom_product_edit');

Route::view('be_pages_ecom_products', 'be_pages_ecom_products');

Route::view('be_pages_elearning_course', 'be_pages_elearning_course');

Route::view('be_pages_elearning_courses', 'be_pages_elearning_courses');

Route::view('be_pages_elearning_lesson', 'be_pages_elearning_lesson');

Route::view('be_pages_error_all', 'be_pages_error_all');

Route::view('be_pages_forum_categories', 'be_pages_forum_categories');

Route::view('be_pages_forum_discussion', 'be_pages_forum_discussion');

Route::view('be_pages_forum_topics', 'be_pages_forum_topics');

Route::view('be_pages_generic_blank', 'be_pages_generic_blank');

Route::view('be_pages_generic_blank_block', 'be_pages_generic_blank_block');

Route::view('be_pages_generic_blank_breadcrumb', 'be_pages_generic_blank_breadcrumb');

Route::view('be_pages_generic_blog', 'be_pages_generic_blog');

Route::view('be_pages_generic_contact', 'be_pages_generic_contact');

Route::view('be_pages_generic_faq', 'be_pages_generic_faq');

Route::view('be_pages_generic_inbox', 'be_pages_generic_inbox');

Route::view('be_pages_generic_invoice', 'be_pages_generic_invoice');

Route::view('be_pages_generic_profile', 'be_pages_generic_profile');

Route::view('be_pages_generic_project', 'be_pages_generic_project');

Route::view('be_pages_generic_project_list', 'be_pages_generic_project_list');

Route::view('be_pages_generic_scrumboard', 'be_pages_generic_scrumboard');

Route::view('be_pages_generic_search', 'be_pages_generic_search');

Route::view('be_pages_generic_story', 'be_pages_generic_story');

Route::view('be_pages_generic_team', 'be_pages_generic_team');

Route::view('be_pages_generic_todo', 'be_pages_generic_todo');

Route::view('be_pages_generic_upgrade_plan', 'be_pages_generic_upgrade_plan');

Route::view('be_pages_real_estate_dashboard', 'be_pages_real_estate_dashboard');

Route::view('be_pages_real_estate_listing', 'be_pages_real_estate_listing');

Route::view('be_pages_real_estate_listing_new', 'be_pages_real_estate_listing_new');

Route::view('be_tables_datatables', 'be_tables_datatables');

Route::view('be_tables_helpers', 'be_tables_helpers');

Route::view('be_tables_pricing', 'be_tables_pricing');

Route::view('be_tables_responsive', 'be_tables_responsive');

Route::view('be_tables_styles', 'be_tables_styles');

Route::view('be_ui_accordion', 'be_ui_accordion');

Route::view('be_ui_activity', 'be_ui_activity');

Route::view('be_ui_animations', 'be_ui_animations');

Route::view('be_ui_buttons', 'be_ui_buttons');

Route::view('be_ui_color_themes', 'be_ui_color_themes');

Route::view('be_ui_grid', 'be_ui_grid');

Route::view('be_ui_icons', 'be_ui_icons');

Route::view('be_ui_images', 'be_ui_images');

Route::view('be_ui_modals_tooltips', 'be_ui_modals_tooltips');

Route::view('be_ui_navigation', 'be_ui_navigation');

Route::view('be_ui_ribbons', 'be_ui_ribbons');

Route::view('be_ui_tabs', 'be_ui_tabs');

Route::view('be_ui_timeline', 'be_ui_timeline');

Route::view('be_ui_typography', 'be_ui_typography');

Route::view('db_classic', 'db_classic');

Route::view('db_clean', 'db_clean');

Route::view('db_corporate', 'db_corporate');

Route::view('db_dark', 'db_dark');

Route::view('db_medical', 'db_medical');

Route::view('db_minimal', 'db_minimal');

Route::view('db_pop', 'db_pop');

Route::view('db_social', 'db_social');

Route::view('index', 'index');

Route::view('op_auth_lock', 'op_auth_lock');

Route::view('op_auth_lock2', 'op_auth_lock2');

Route::view('op_auth_lock3', 'op_auth_lock3');

Route::view('op_auth_reminder', 'op_auth_reminder');

Route::view('op_auth_reminder2', 'op_auth_reminder2');

Route::view('op_auth_reminder3', 'op_auth_reminder3');

Route::view('op_auth_signin', 'op_auth_signin');

Route::view('op_auth_signin2', 'op_auth_signin2');

Route::view('op_auth_signin3', 'op_auth_signin3');

Route::view('op_auth_signup', 'op_auth_signup');

Route::view('op_auth_signup2', 'op_auth_signup2');

Route::view('op_auth_signup3', 'op_auth_signup3');

Route::view('op_coming_soon', 'op_coming_soon');

Route::view('op_error_400', 'op_error_400');

Route::view('op_error_401', 'op_error_401');

Route::view('op_error_403', 'op_error_403');

Route::view('op_error_404', 'op_error_404');

Route::view('op_error_500', 'op_error_500');

Route::view('op_error_503', 'op_error_503');

Route::view('op_installation', 'op_installation');

Route::view('op_maintenance', 'op_maintenance');

Route::view('op_status', 'op_status');

