<?php



add_action('init', 'cloneUserRole');
function cloneUserRole()
{
 global $wp_roles;
 if (!isset($wp_roles))
 $wp_roles = new WP_Roles();
 $adm = $wp_roles->get_role('administrator');
 // Adding a new role with all admin caps.
 $wp_roles->add_role('client', 'Client', $adm->capabilities);
}



//add_action( 'init', 'wpsites_remove_editor_capabilities' );

function wpsites_remove_editor_capabilities() {

  $editor = get_role( 'client' );

  $caps = array(
  'edit_plugins',
  );

  foreach ( $caps as $cap ) { $editor->remove_cap( $cap );  }
}





//remove role
//remove_role( 'client' );





//Capabilities
/*

'read' ,
'switch_themes',
'edit_themes',
'activate_plugins',
'edit_plugins',
'edit_users',
'edit_files',
'manage_options',
'moderate_comments',
'manage_categories',
'manage_links',
'upload_files',
'import',
'unfiltered_html',
'edit_posts',
'edit_others_posts',
'edit_published_posts',
'publish_posts',
'edit_pages',
'read',
'edit_others_pages',
'edit_published_pages',
'publish_pages',
'delete_pages',
'delete_others_pages',
'delete_published_pages',
'delete_posts',
'delete_others_posts',
'delete_published_posts',
'delete_private_posts',
'edit_private_posts',
'read_private_posts',
'delete_private_pages',
'edit_private_pages',
'read_private_pages',
'delete_users',
'create_users',
'unfiltered_upload',
'edit_dashboard',
'update_plugins',
'delete_plugins' ,
'install_plugins' ,
'update_themes' ,
'install_themes' ,
'update_core' ,
'list_users',
'remove_users',
'promote_users',
'edit_theme_options',
'delete_themes',
'export',
'manage_woocommerce',
'view_woocommerce_reports',
'edit_product',
'read_product',
'delete_product',
'edit_products',
'edit_others_products',
'publish_products',
'read_private_products',
'delete_products',
'delete_private_products',
'delete_published_products',
'delete_others_products',
'edit_private_products',
'edit_published_products',
'manage_product_terms',
'edit_product_terms',
'delete_product_terms',
'assign_product_terms',
'edit_shop_order',
'read_shop_order',
'delete_shop_order',
'edit_shop_orders',
'edit_others_shop_orders',
'publish_shop_orders',
'read_private_shop_orders',
'delete_shop_orders',
'delete_private_shop_orders',
'delete_published_shop_orders',
'delete_others_shop_orders',
'edit_private_shop_orders',
'edit_published_shop_orders',
'manage_shop_order_terms',
'edit_shop_order_terms',
'delete_shop_order_terms',
'assign_shop_order_terms',
'edit_shop_coupon',
'read_shop_coupon',
'delete_shop_coupon',
'edit_shop_coupons',
'edit_others_shop_coupons',
'publish_shop_coupons',
'read_private_shop_coupons',
'delete_shop_coupons',
'delete_private_shop_coupons',
'delete_published_shop_coupons',
'delete_others_shop_coupons',
'edit_private_shop_coupons',
'edit_published_shop_coupons',
'manage_shop_coupon_terms',
'edit_shop_coupon_terms',
'delete_shop_coupon_terms',
'assign_shop_coupon_terms',
'edit_shop_webhook',
'read_shop_webhook',
'delete_shop_webhook',
'edit_shop_webhooks',
'edit_others_shop_webhooks',
'publish_shop_webhooks',
'read_private_shop_webhooks',
'delete_shop_webhooks',
'delete_private_shop_webhooks',
'delete_published_shop_webhooks',
'delete_others_shop_webhooks',
'edit_private_shop_webhooks',
'edit_published_shop_webhooks',
'manage_shop_webhook_terms',
'edit_shop_webhook_terms',
'delete_shop_webhook_terms',
'assign_shop_webhook_terms',
'edit_blocks',
'edit_others_blocks',
'publish_blocks',
'read_private_blocks',
'read_blocks',
'delete_blocks',
'delete_private_blocks',
'delete_published_blocks',
'delete_others_blocks',
'edit_private_blocks',
'edit_published_blocks',
'create_blocks',
'read_flexible_invoice',
'read_private_flexible_invoices',
'edit_flexible_invoice',
'edit_flexible_invoices',
'edit_others_flexible_invoices',
'edit_private_flexible_invoices',
'edit_published_flexible_invoices',
'delete_flexible_invoice',
'delete_flexible_invoices',
'delete_others_flexible_invoices',
'delete_private_flexible_invoices',
'delete_published_flexible_invoices',
'publish_flexible_invoices',
'schedule_broadcasts',
'cancel_broadcasts',
'view_broadcasts',
'add_contacts',
'delete_contacts',
'edit_contacts',
'view_contacts',
'import_contacts',
'export_contacts',
'add_emails',
'delete_emails',
'edit_emails',
'send_emails',
'execute_events',
'cancel_events',
'schedule_events',
'view_events',
'add_funnels',
'delete_funnels',
'edit_funnels',
'export_funnels',
'import_funnels',
'add_tags',
'delete_tags',
'edit_tags',
'manage_tags',
'view_reports',
'export_reports',
'perform_bulk_actions',
'download_files',
'download_contact_files',
'administrator',

*/
