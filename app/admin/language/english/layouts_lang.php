<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang = [
    'text_title'                  => 'Layouts',
    'text_heading'                => 'Layouts',
    'text_edit_heading'           => 'Layout: %s',
    'text_list'                   => 'Layout List',
    'text_tab_general'            => 'Layout Components',
    'text_filter_search'          => 'Search name.',
    'text_filter_status'          => 'View all status',
    'text_empty'                  => 'There are no layouts available.',
    'column_name'                 => 'Layout',
    'column_iso_code2'            => 'ISO Code 2',
    'column_iso_code3'            => 'ISO Code 3',
    'column_status'               => 'Status',
    'label_name'                  => 'Name',
    'label_flag'                  => 'Flag',
    'label_format'                => 'Format',
    'label_iso_code2'             => 'ISO Code 2',
    'label_iso_code3'             => 'ISO Code 3',
    'label_status'                => 'Status',
    'help_format'                 => 'Address 1 = {address_1}<br />Address 2 = {address_2}<br />City = {city}<br />Postcode = {postcode}<br />State = {state}<br />Country = {country}',
    'help_iso'                    => 'Learn more about <a target="_blank" href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO Alpha 2, 3, numeric</a>',
    'text_tab_history'            => 'History',
    'text_filter_type'            => 'View all types',
    'text_no_history'             => 'There are no history for this coupon.',
    'text_coupon'                 => 'Coupon',
    'text_fixed_amount'           => 'Fixed Amount',
    'text_percentage'             => 'Percentage',
    'text_24_hour'                => '24 Hours',
    'text_custom'                 => 'custom',
    'text_redeemed'               => 'Redeemed',
    'text_not_redeemed'           => 'Not Yet Redeemed',
    'text_leading_zeros'          => '.00',
    'column_code'                 => 'Code',
    'column_type'                 => 'Type',
    'column_discount'             => 'Discount',
    'column_validity'             => 'Validity',
    'column_order_id'             => 'Order ID',
    'column_customer'             => 'Customer',
    'column_amount'               => 'Total Amount',
    'column_date_used'            => 'Date Last Used',
    'column_count'                => 'Redemption Count',
    'label_code'                  => 'Language Code',
    'label_type'                  => 'Type',
    'label_discount'              => 'Discount',
    'label_min_total'             => 'Minimum Total',
    'label_redemption'            => 'Redemptions',
    'label_customer_redemption'   => 'Customer Redemptions',
    'label_description'           => 'Description',
    'label_validity'              => 'Validity',
    'label_order_restriction'     => 'Order Restriction',
    'label_date'                  => 'Date',
    'label_fixed_date'            => 'Fixed date',
    'label_fixed_time'            => 'Fixed time',
    'label_fixed_from_time'       => 'Fixed from time',
    'label_fixed_to_time'         => 'Fixed to time',
    'label_period_start_date'     => 'Period start date',
    'label_period_end_date'       => 'Period end date',
    'label_recurring_every'       => 'Recurring every',
    'label_recurring_time'        => 'Recurring time',
    'label_recurring_from_time'   => 'Recurring from time',
    'label_recurring_to_time'     => 'Recurring to time',
    'help_type'                   => 'Whether to subtract a fixed amount or percentage from order total.',
    'help_redemption'             => 'The total number of times this coupon can be redeem. Enter 0 for unlimited redemptions.',
    'help_customer_redemption'    => 'The number of times a specific customer can redeem this coupon. Enter 0 for unlimited redemptions.',
    'help_order_restriction'      => 'Whether to restrict the coupon to a specific order type.',
    'text_right'                  => 'Right',
    'text_left'                   => 'Left',
    'column_country'              => 'Country',
    'column_symbol'               => 'Symbol',
    'column_rate'                 => 'Rate',
    'button_update_rate'          => '<i class="fa fa-refresh"></i>&nbsp;&nbsp;Update Rates',
    'label_title'                 => 'Title',
    'label_country'               => 'Country',
    'label_symbol'                => 'Symbol',
    'label_symbol_position'       => 'Symbol Position',
    'label_rate'                  => 'Rate',
    'label_thousand_sign'         => 'Thousand Sign',
    'label_decimal_sign'          => 'Decimal Sign',
    'label_decimal_position'      => 'Decimal Place',
    'column_customerss'           => '# Customers',
    'column_id'                   => 'ID',
    'label_approval'              => 'Approval',
    'help_approval'               => 'New customers must be approved before they can login.',
    'text_all_heading'            => 'Customer Online: All',
    'text_online'                 => 'Online',
    'text_all'                    => 'All',
    'text_filter_access'          => 'View all access',
    'text_filter_date'            => 'View all dates',
    'text_empty_report'           => 'There are no customer online report available.',
    'text_guest'                  => 'Guest',
    'text_private'                => 'Private',
    'text_browser'                => 'Browser',
    'text_mobile'                 => 'Mobile',
    'text_robot'                  => 'Robot',
    'column_ip'                   => 'IP',
    'column_access'               => 'Access',
    'column_browser'              => 'Browser',
    'column_agent'                => 'User Agent',
    'column_request_uri'          => 'Last Request URL',
    'column_referrer_url'         => 'Last Referrer URL',
    'column_last_activity'        => 'Last Activity',
    'text_tab_address'            => 'Address',
    'text_no_match'               => 'No Matches Found',
    'text_subscribe'              => 'Subscribe',
    'text_un_subscribe'           => 'Un-subscribe',
    'text_login_as_customer'      => 'Login as Customer',
    'column_first_name'           => 'First Name',
    'column_last_name'            => 'Last Name',
    'column_email'                => 'Email',
    'column_telephone'            => 'Telephone',
    'column_date_added'           => 'Date Added',
    'label_first_name'            => 'First Name',
    'label_last_name'             => 'Last Name',
    'label_email'                 => 'Email',
    'label_password'              => 'Password',
    'label_confirm_password'      => 'Confirm Password',
    'label_telephone'             => 'Telephone',
    'label_security_question'     => 'Security Question',
    'label_security_answer'       => 'Security Answer',
    'label_newsletter'            => 'Newsletter',
    'label_customer_group'        => 'Customer Group',
    'label_address_1'             => 'Address 1',
    'label_address_2'             => 'Address 2',
    'label_city'                  => 'City',
    'label_state'                 => 'State',
    'label_postcode'              => 'Postcode',
    'help_password'               => 'Leave blank to leave password unchanged',
    'alert_login_restricted'      => 'Warning: You do not have the right permission to <b>access customer account</b>, please contact system administrator.',
    'text_zero'                   => '0',
    'text_dash_dash'              => '--',
    'text_today'                  => 'Today',
    'text_delivery'               => 'Delivery',
    'text_collection'             => 'Pick-up',
    'text_no_activity'            => 'There are no new activities available.',
    'text_total_sale'             => 'Total Sales',
    'text_total_lost_sale'        => 'Total Lost Sales',
    'text_total_cash_payment'     => 'Total Cash Payments',
    'text_total_customer'         => 'Total Customers',
    'text_total_order'            => 'Total Orders',
    'text_total_delivery_order'   => 'Total Delivery Orders',
    'text_total_collection_order' => 'Total Pick-up Orders',
    'text_total_completed_order'  => 'Total Orders Completed',
    'text_total_reservation'      => 'Total Reservations',
    'text_total_reserved_table'   => 'Total Table(s) Reserved',
    'text_complete_setup'         => 'Complete Restaurant Setup',
    'text_progress'               => 'Complete',
    'text_progress_initial'       => 'Initial Setup',
    'text_progress_setting'       => 'Your restaurant settings',
    'text_progress_menus'         => 'Add Menus',
    'text_progress_design'        => 'Design your website background',
    'text_progress_email'         => 'Send test email',
    'text_progress_count'         => '60%',
    'text_progress_summary'       => 'Follow these steps to get your restaurant up &amp; running. ',
    'text_initial_progress'       => '<b>Initial Setup</b> - Set your prefered general settings, such as restuarant name and email.',
    'text_settings_progress'      => '<b>Your restaurant settings</b> - Let your customers know your restaurant opening times, delivery hours, preparation time and where its located.',
    'text_menus_progress'         => '<b>Add Menus</b> - Add your menu using our simple editor. Display multiple menus like delivery &amp; eat-in, includes sizes and meal options',
    'text_design_progress'        => '<b>Design your website background</b> - Upload your own or choose a background image for your website from our gallery.',
    'text_email_progress'         => '<b>Send test email</b> - Ensure order confirmation emails are sent to customers successfully.',
    'text_statistic'              => 'Statistics',
    'text_range'                  => 'Range',
    'text_week'                   => 'Week',
    'text_month'                  => 'Month',
    'text_year'                   => 'Year',
    'text_news'                   => 'TastyIgniter News',
    'text_recent_activity'        => 'Recent Activity',
    'text_top_customers'          => 'Top Customers',
    'text_latest_order'           => '10 Latest Orders',
    'text_reports_chart'          => 'Reports Chart',
    'text_select_range'           => 'Select date range',
    'text_last_version_check'     => 'Your last <b>TastyIgniter core version check</b> was more than a week ago. <a href="%s"><b>Check for Updates</b></a>',
    'column_location'             => 'Location',
    'column_ready_type'           => 'Ready Time',
    'column_total_orders'         => '# Orders',
    'column_total_sale'           => 'Total Sale',
    'site_title'                  => '%s ‹ Administrator Panel — %s',
    'text_edit'                   => 'Edit',
    'text_filter'                 => 'Filter',
    'text_clear'                  => 'Clear',
    'text_search'                 => 'Search',
    'text_enabled'                => 'Enabled',
    'text_disabled'               => 'Disabled',
    'text_new'                    => 'New',
    'text_no'                     => 'NO',
    'text_yes'                    => 'YES',
    'text_none'                   => 'None',
    'text_hide'                   => 'Hide',
    'text_show'                   => 'Show',
    'text_equals'                 => ' = ',
    'text_plus'                   => '+ ',
    'text_please_select'          => ' - please select - ',
    'text_use_default'            => 'Use Default',
    'text_updated'                => 'updated',
    'text_added'                  => 'added',
    'text_deleted'                => 'deleted',
    'text_default'                => '<b>(Default)</b>',
    'text_select'                 => 'Select',
    'text_selected'               => 'Selected',
    'text_now'                    => 'Now',
    'text_remove'                 => 'Remove',
    'text_about_tastyigniter'     => 'About TastyIgniter',
    'text_documentation'          => 'Documentation',
    'text_community_support'      => 'Community Support',
    'text_help'                   => 'Click for Help',
    'button_new'                  => '<i class="fa fa-plus"></i> New',
    'button_delete'               => 'Delete',
    'button_edit'                 => 'Edit',
    'button_save'                 => '<i class="fa fa-save"></i> Save',
    'button_save_close'           => '<i class="fa fa-save"></i> Save & Close',
    'button_icon_back'            => '<i class="fa fa-angle-double-left"></i>',
    'button_icon_filter'          => '<i class="fa fa-filter"></i>',
    'button_close'                => 'Close',
    'button_option'               => 'Options',
    'alert_success'               => '%s successfully.',
    'alert_error'                 => 'An error occurred, %s.',
    'alert_error_nothing'         => 'An error occurred, nothing %s.',
    'alert_error_try_again'       => 'An error occurred, please try again.',
    'alert_warning_confirm'       => 'This cannot be undone! Are you sure you want to do this?',
    'alert_rates_updated'         => 'Currency rates has been updated automatically',
    'alert_user_not_logged_in'    => 'You must be logged in to access that page.',
    'alert_user_restricted'       => 'Warning: You do not have the right permission to <b>%s</b> [%s] context, please contact system administrator.',
    'alert_location_restricted'   => 'Warning: You do not have the right permission to <b>%s</b> [%s] context outside your location, please contact system administrator.',
    'text_locations'              => 'Locations&nbsp;&nbsp;&nbsp;<span class="badge">%s</span>',
    'text_message_count'          => 'You have %s messages',
    'text_activity_count'         => 'Recent activities',
    'text_see_all_message'        => 'See all messages',
    'text_see_all_activity'       => 'See all activities',
    'text_see_all_customers'      => 'See all customers',
    'text_see_all_orders'         => 'See all orders',
    'text_user'                   => 'User',
    'text_staff_group'            => 'Staff Group',
    'text_location'               => 'Location',
    'text_edit_details'           => 'Edit Details',
    'text_logout'                 => 'Logout',
    'menu_updates'                => 'Updates',
    'menu_storefront'             => 'Storefront',
    'menu_page'                   => 'Pages',
    'menu_banner'                 => 'Banners',
    'menu_layout'                 => 'Layouts',
    'menu_uri_route'              => 'URI Routes',
    'menu_error_log'              => 'Error Logs',
    'menu_setting'                => 'Settings',
    'menu_dashboard'              => 'Dashboard',
    'menu_kitchen'                => 'Kitchen',
    'menu_menu'                   => 'Menus',
    'menu_option'                 => 'Options',
    'menu_category'               => 'Categories',
    'menu_table'                  => 'Tables',
    'menu_sale'                   => 'Sales',
    'menu_order'                  => 'Orders',
    'menu_reservation'            => 'Reservations',
    'menu_coupon'                 => 'Coupons',
    'menu_review'                 => 'Reviews',
    'menu_user'                   => 'Users',
    'menu_customer'               => 'Customers',
    'menu_staff'                  => 'Staff',
    'menu_customer_group'         => 'Customer Groups',
    'menu_staff_group'            => 'Staff Groups',
    'menu_customer_online'        => 'Customers Online',
    'menu_activities'             => 'Activities',
    'menu_restaurant'             => 'Restaurant',
    'menu_location'               => 'Locations',
    'menu_marketing'              => 'Marketing',
    'menu_messages'               => 'Messages',
    'menu_localisation'           => 'Localisation',
    'menu_language'               => 'Languages',
    'menu_currency'               => 'Currencies',
    'menu_country'                => 'Countries',
    'menu_security_question'      => 'Security Questions',
    'menu_rating'                 => 'Ratings',
    'menu_status'                 => 'Statuses',
    'menu_mealtimes'              => 'Mealtimes',
    'menu_extension'              => 'Extensions',
    'menu_module'                 => 'Modules',
    'menu_payment'                => 'Payments',
    'menu_design'                 => 'Design',
    'menu_theme'                  => 'Themes',
    'menu_mail_template'          => 'Mail Templates',
    'menu_tool'                   => 'Tools',
    'menu_media_manager'          => 'Image Manager',
    'menu_maintenance'            => 'Maintenance',
    'menu_system'                 => 'System',
    'menu_permission'             => 'Permissions',
    'menu_collapse'               => 'Collapse Menu',
    'text_clear_logs'             => 'Clear Logs',
    'text_tab_module'             => 'Modules',
    'text_tab_payment'            => 'Payments',
    'text_add_heading'            => 'Extension: Upload',
    'text_browse_heading'         => 'Browse Extensions',
    'text_delete_heading'         => 'Extension: Delete',
    'text_author'                 => 'By: %s',
    'text_confirm_delete'         => 'Confirm Delete',
    'text_install'                => 'Install',
    'text_uninstall'              => 'Uninstall',
    'text_installed'              => 'Installed',
    'text_uninstalled'            => 'Uninstalled',
    'text_view_files'             => 'Hide/View files',
    'text_upload_title'           => 'Upload the extension .zip file and it will be installed automatically.',
    'text_browse_title'           => 'Freshly baked from the oven...coming soon  <i class="fa fa-smile-o"></i>',
    'text_files'                  => 'files',
    'text_files_data'             => 'files and data',
    'text_settings'               => 'Settings',
    'button_upload'               => 'Upload & Install',
    'button_choose'               => 'Choose',
    'button_browse'               => '<i class="fa fa-globe"></i>  Browse more extensions',
    'button_check'                => '<i class="fa fa-refresh"></i>  Updates',
    'button_change'               => 'Change',
    'button_yes_delete'           => 'Yes, delete',
    'button_return_to_list'       => 'No, return to list',
    'column_version'              => 'Version',
    'column_desc'                 => 'Description',
    'column_author'               => 'Author',
    'label_delete_data'           => 'Delete Data',
    'error_config'                => 'An error occurred, extension config file failed to load',
    'error_config_no_found'       => 'An error occurred, extension registration file could not be found',
    'error_options'               => 'An error occurred, extension admin options disabled',
    'error_failed'                => 'An error occurred, extension admin setting class failed to load: %s',
    'error_installed'             => 'An error occurred, extension is not installed properly',
    'error_upload_type'           => 'The filetype you are attempting to upload is not allowed.',
    'error_upload_name'           => 'The theme name must not contain whitespace or spacing, use hyphens(-) instead..',
    'error_extension_exists'      => 'the extension already exists',
    'error_php_upload'            => 'PHP File Uploading Error No: %s',
    'error_config_not_found'      => 'The configuration file for extension <b>%s</b> does not exist.',
    'error_config_invalid'        => 'The configuration file for extension <b>%s</b> does not appear to contain a valid configuration array.',
    'error_config_invalid_key'    => 'Check that the <b>\'%s\'</b> configuration value for extension <b>%s</b> is correctly set',
    'alert_info_layouts'          => 'After you have installed and configured a module you can display it on a layout <a href="%s" class="alert-link">here!</a>',
    'alert_warning_layouts'       => 'To display the component for this extension on a page add it to a layout <a href="%s" class="alert-link">here!</a>',
    'alert_delete_warning'        => 'You are about to delete the %s of extension <b>%s</b>',
    'alert_delete_confirm'        => 'Are you sure you wish to delete these %s? This cannot be undone!',
    'alert_is_installed'          => '. You must uninstall an extension before deleting.',
    'text_tab_files'              => 'Files',
    'text_tab_edit_file'          => 'Edit Lang File',
    'text_cloned'                 => 'cloned',
    'column_image'                => 'Icon',
    'column_variable'             => 'Language variable',
    'column_language'             => 'Language translation',
    'label_image'                 => 'Icon',
    'label_idiom'                 => 'Idiom',
    'label_clone'                 => 'Clone Language',
    'label_language'              => 'Language to Clone',
    'label_can_delete'            => 'Can Delete',
    'help_idiom'                  => 'Language idiom, must be same as the language directory name.',
    'help_language'               => 'Language url prefix',
    'alert_save_changes'          => 'Your changes will be lost if you don\'t save them before editing another language file.',
    'alert_warning_file'          => 'An error occurred, language file was not %s',
    'alert_caution_edit'          => '<b>CAUTION!</b> You may lose your modifications to this language when you update TastyIgniter.<br> Clone the default language [English] from the add new language page to make changes.',
    'error_invalid_idiom'         => 'The specified idiom name does not exist in the main or admin language folder',
    'text_partial_empty'          => 'There are no components added.',
    'text_tab_details'            => 'Details',
    'text_modules'                => 'Modules',
    'column_active_components'    => 'Active Components',
    'column_module'               => 'Module',
    'column_partial'              => 'Partial Area',
    'column_priority'             => 'Priority',
    'column_uri_route'            => 'URI Route',
    'label_route'                 => 'Route',
    'label_module_title'          => 'Title',
    'label_module_fixed'          => 'Fixed',
    'label_fixed_offset'          => 'Fixed Offset (top x bottom)',
    'label_module_code'           => 'Module Code',
    'label_module_partial'        => 'Module Partial',
    'label_module_priority'       => 'Module Priority',
    'label_module_status'         => 'Status',
];