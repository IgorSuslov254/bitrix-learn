<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

$pathJS = '/bitrix/js/landing';
$pathCSS = '/bitrix/js/landing/css';
$pathLang = BX_ROOT . '/modules/landing/lang/' . LANGUAGE_ID;

return [
	'js' => [
		$pathJS . '/bxdom.js',
		$pathJS . '/typedef.js',
		$pathJS . '/ui/editor_config.js',
		$pathJS . '/ui/style_factory.js',
		$pathJS . '/ui/field_factory.js',
		$pathJS . '/ui/card/block_preview_card.js',
		$pathJS . '/ui/card/field_group.js',
		$pathJS . '/ui/card/image_preview_card.js',
		$pathJS . '/ui/card/add_your_first_block.js',
		$pathJS . '/ui/card/base_image_library_card.js',
		$pathJS . '/ui/card/unsplash_card.js',
		$pathJS . '/ui/card/google_images_card.js',
		$pathJS . '/ui/card/uploader_card.js',
		$pathJS . '/ui/card/loader.js',
		$pathJS . '/ui/card/link_card.js',
		$pathJS . '/ui/card/landing_preview.js',
		$pathJS . '/ui/card/block_html_preview.js',
		$pathJS . '/ui/card/tab_card.js',
		$pathJS . '/ui/card/dynamic_fields_group.js',
		$pathJS . '/ui/card/add_page_card.js',
		$pathJS . '/ui/tool/color_picker.js',
		$pathJS . '/ui/tool/auto-font-scale.js',
		$pathJS . '/ui/tool/auto-font-scale-entry.js',
		$pathJS . '/ui/tool/suggests.js',
		$pathJS . '/ui/tool/font-manager.js',
		$pathJS . '/ui/adapter/css-property.js',
		$pathJS . '/ui/button/plus_button.js',
		$pathJS . '/ui/button/editor_action_button.js',
		$pathJS . '/ui/button/design_button.js',
		$pathJS . '/ui/button/color_button.js',
		$pathJS . '/ui/button/block_card_action.js',
		$pathJS . '/ui/button/create_link.js',
		$pathJS . '/ui/button/create_table.js',
		$pathJS . '/ui/button/paste_table.js',
		$pathJS . '/ui/button/delete_element_table.js',
		$pathJS . '/ui/button/align_table.js',
		$pathJS . '/ui/button/style_table.js',
		$pathJS . '/ui/button/copy_table.js',
		$pathJS . '/ui/button/delete_table.js',
		$pathJS . '/ui/button/font_action.js',
		$pathJS . '/ui/button/change_tag.js',
		$pathJS . '/ui/button/text_background_color.js',
		$pathJS . '/ui/button/create_page.js',
		$pathJS . '/ui/panel/base_button_panel.js',
		$pathJS . '/ui/panel/editor_panel.js',
		$pathJS . '/ui/panel/small_editor_panel.js',
		$pathJS . '/ui/panel/edit_content_panel.js',
		$pathJS . '/ui/panel/preview_panel.js',
		$pathJS . '/ui/panel/unsplash_panel.js',
		$pathJS . '/ui/panel/image_panel.js',
		$pathJS . '/ui/panel/url_list.js',
		$pathJS . '/ui/panel/top_panel.js',
		$pathJS . '/ui/panel/card_action.js',
		$pathJS . '/ui/panel/link_panel.js',
		$pathJS . '/ui/panel/google_fonts_panel.js',
		$pathJS . '/ui/panel/google_images_settings_panel.js',
		$pathJS . '/ui/panel/catalog_panel.js',
		$pathJS . '/ui/panel/status_panel.js',
		$pathJS . '/ui/panel/detail_page_panel.js',
		$pathJS . '/ui/field/link_field.js',
		$pathJS . '/ui/field/dropdown_field.js',
		$pathJS . '/ui/field/dropdown_preview_field.js',
		$pathJS . '/ui/field/unit_field.js',
		$pathJS . '/ui/field/range_field.js',
		$pathJS . '/ui/field/button_group_field.js',
		$pathJS . '/ui/field/link_url_field.js',
		$pathJS . '/ui/field/dropdown_inline.js',
		$pathJS . '/ui/field/dnd_list.js',
		$pathJS . '/ui/field/sortable_list.js',
		$pathJS . '/ui/field/position_field.js',
		$pathJS . '/ui/field/checkbox_field.js',
		$pathJS . '/ui/field/radio_field.js',
		$pathJS . '/ui/field/multiselect_field.js',
		$pathJS . '/ui/field/filter_field.js',
		$pathJS . '/ui/field/font_field.js',
		$pathJS . '/ui/field/html_field.js',
		$pathJS . '/ui/field/embed_field.js',
		$pathJS . '/ui/field/embed_bg_field.js',
		$pathJS . '/ui/field/date_field.js',
		$pathJS . '/ui/field/block_source_field.js',
		$pathJS . '/ui/field/dynamic_image_field.js',
		$pathJS . '/ui/field/dynamic_dropdown_field.js',
		$pathJS . '/ui/field/pages_field.js',
		$pathJS . '/ui/field/click_action_field.js',
		$pathJS . '/ui/field/color_field.js',	// old for compatibility
		$pathJS . '/ui/style_node.js',
		$pathJS . '/events/block_event.js',
		$pathJS . '/group.js',
		$pathJS . '/block.js',
		$pathJS . '/card.js',
		$pathJS . '/node.js',
		$pathJS . '/node/text.js',
		$pathJS . '/node/link.js',
		$pathJS . '/node/img.js',
		$pathJS . '/node/ul.js',
		$pathJS . '/node/map.js',
		$pathJS . '/node/component.js',
		$pathJS . '/node/icon.js',
		$pathJS . '/node/embed.js',
		$pathJS . '/client/unsplash.js',
		$pathJS . '/client/google_images.js',
		$pathJS . '/client/google_fonts.js',
		$pathJS . '/mediaservice/base_mediaservice.js',
		$pathJS . '/mediaservice/youtube_mediaservice.js',
		$pathJS . '/mediaservice/rutube_mediaservice.js',
		$pathJS . '/mediaservice/vk_mediaservice.js',
		$pathJS . '/mediaservice/vimeo_mediaservice.js',
		$pathJS . '/mediaservice/vine_mediaservice.js',
		$pathJS . '/mediaservice/instagram_mediaservice.js',
		$pathJS . '/mediaservice/google_maps_search_mediaservice.js',
		$pathJS . '/mediaservice/google_maps_place_mediaservice.js',
		$pathJS . '/mediaservice/facebook_page_plugin_service.js',
		$pathJS . '/mediaservice/facebook_post_embed_service.js',
		$pathJS . '/mediaservice/facebook_video_embed_service.js',
		$pathJS . '/mediaservice/service_factory.js',
		$pathJS . '/error_manager.js',
		$pathJS . '/external/webfontloader/webfontloader.js',
	],
	'css' => [
		$pathCSS . '/landing_master.css',
		$pathCSS . '/ui/button/action_button.css',
		$pathCSS . '/ui/button/plus_button.css',
		$pathCSS . '/ui/button/color_button.css',
		$pathCSS . '/ui/button/editor_action_button.css',
		$pathCSS . '/ui/button/block_card_action.css',
		$pathCSS . '/ui/button/font_action.css',
		$pathCSS . '/ui/panel/editor_panel.css',
		$pathCSS . '/ui/panel/small_editor_panel.css',
		$pathCSS . '/ui/panel/block_card_action.css',
		$pathCSS . '/ui/panel/edit_content_panel.css',
		$pathCSS . '/ui/panel/preview_panel.css',
		$pathCSS . '/ui/panel/block_list_panel.css',
		$pathCSS . '/ui/panel/unsplash_panel.css',
		$pathCSS . '/ui/panel/image_panel.css',
		$pathCSS . '/ui/panel/url_list.css',
		$pathCSS . '/ui/panel/card_action.css',
		$pathCSS . '/ui/panel/google_fonts_panel.css',
		$pathCSS . '/ui/panel/catalog_panel.css',
		$pathCSS . '/ui/panel/status_panel.css',
		$pathCSS . '/ui/panel/detail_page_panel.css',
		$pathCSS . '/ui/panel/sidebar_actions.css',
		$pathCSS . '/ui/field/link_field.css',
		$pathCSS . '/ui/field/dropdown_field.css',
		$pathCSS . '/ui/field/dropdown_preview_field.css',
		$pathCSS . '/ui/field/unit_field.css',
		$pathCSS . '/ui/field/range_field.css',
		$pathCSS . '/ui/field/button_group_field.css',
		$pathCSS . '/ui/field/link_url_field.css',
		$pathCSS . '/ui/field/dropdown_inline.css',
		$pathCSS . '/ui/field/dnd_list.css',
		$pathCSS . '/ui/field/sortable_list.css',
		$pathCSS . '/ui/field/position_field.css',
		$pathCSS . '/ui/field/checkbox_field.css',
		$pathCSS . '/ui/field/multiselect_field.css',
		$pathCSS . '/ui/field/filter_field.css',
		$pathCSS . '/ui/field/font_field.css',
		$pathCSS . '/ui/field/html_field.css',
		$pathCSS . '/ui/field/block_source_field.css',
		$pathCSS . '/ui/field/pages_field.css',
		$pathCSS . '/ui/card/block_preview_card.css',
		$pathCSS . '/ui/card/field_group.css',
		$pathCSS . '/ui/card/add_your_first_block.css',
		$pathCSS . '/ui/card/unsplash_card.css',
		$pathCSS . '/ui/card/base_image_library_card.css',
		$pathCSS . '/ui/card/uploader_card.css',
		$pathCSS . '/ui/card/loader.css',
		$pathCSS . '/ui/card/link_card.css',
		$pathCSS . '/ui/card/landing_preview.css',
		$pathCSS . '/ui/card/block_html_preview.css',
		$pathCSS . '/ui/card/tab_card.css',
		$pathCSS . '/ui/card/dynamic_fields_group.css',
		$pathCSS . '/ui/card/add_page_card.css',
		$pathCSS . '/mediaservice/base_mediaservice.css',
		$pathCSS . '/ui/tool/suggests.css',
	],
	'rel' => [
		'main.core',
		'ui.fonts.opensans',
		'ui.design-tokens',
		'main.polyfill.intersectionobserver',
		'main.polyfill.customevent',
		'ui.buttons',
		'ui.common',
		'ui.hint',
		'ui.label',
		'popup',
		'color_picker',
		'dnd',
		'fx',
		'ajax',
		'action_dialog',
		'loader',
		'mediaplayer',
		'date',
		'main.imageeditor',
		'landing.main',
		'landing.backend',
		'ui.alerts',
		'landing.pageobject',
		'landing.designerblock',
		'landing.imagecompressor',
		'landing.imageeditor',
		'landing.imageuploader',
		'landing.loc',
		'landing.env',
		'landing.utils',
		'landing.ui.button.basebutton',
		'landing.ui.button.sidebarbutton',
		'landing.ui.button.actionbutton',
		'landing.ui.card.basecard',
		'landing.ui.field.basefield',
		'landing.ui.field.textfield',
		'landing.ui.field.sourcefield',
		'landing.ui.field.switch',
		'landing.ui.field.smallswitch',
		'landing.ui.field.color',
		'landing.ui.field.image',
		'landing.ui.field.icon',
		'landing.ui.panel.base',
		'landing.ui.panel.content',
		'landing.ui.panel.createpage',
		'landing.ui.panel.stylepanel',
		'landing.ui.panel.iconpanel',
		'landing.ui.panel.alert',
		'landing.menu.menu',
		'landing.menu.item',
		'landing.ui.form.baseform',
		'landing.ui.form.menuform',
		'landing.ui.form.menuitemform',
		'landing.ui.form.balloonform',
		'landing.ui.form.cardform',
		'landing.ui.form.dynamicblockform',
		'landing.ui.form.dynamiccardsform',
		'landing.ui.form.styleform',
		'landing.ui.form.cardsform',
		'landing.ui.highlight',
		'landing.history',
		'ui.draganddrop.draggable',
		'landing.collection.basecollection',
		'landing.collection.nodecollection',
		'landing.collection.blockcollection',
		'landing.collection.cardcollection',
		'landing.ui.collection.buttoncollection',
		'landing.ui.collection.formcollection',
		'landing.ui.collection.panelcollection',
		'landing.screenshoter',
	],
	'lang' => $pathLang . '/js/landing_master.php',
	'bundle_js' => 'landing_master',
];