<?php

$installer = $this;

$installer->startSetup();


####################################################################################################
# ADD THEMEFRAMEWORK LAYOUT
####################################################################################################

$model = Mage::getModel('themeframework/area');
	
$data = array(
	'package_theme'  => 'default/em0062',
	'layout'         => '1column',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:3:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:41:"<div class="grid_area1">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:1;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:14:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area2";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area3";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"grid_messages";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:11:"breadcrumbs";i:1;s:15:"global_messages";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:7:"content";}}i:9;s:5:"clear";i:10;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area4";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:11;s:5:"clear";i:12;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area5";i:1;s:6:"footer";}}i:13;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0062',
	'layout'         => '3columns',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:3:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:41:"<div class="grid_area1">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:1;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:16:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area2";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area3";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"grid_messages";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:11:"breadcrumbs";i:1;s:15:"global_messages";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"12";s:4:"push";s:1:"6";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:7:"content";}}i:9;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:2:"12";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:9:"grid_left";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:4:"left";}}i:10;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_right";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"right";}}i:11;s:5:"clear";i:12;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area4";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:13;s:5:"clear";i:14;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area5";i:1;s:6:"footer";}}i:15;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0062',
	'layout'         => '2columns-left',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:3:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:41:"<div class="grid_area1">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:1;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:15:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area2";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area3";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"grid_messages";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:11:"breadcrumbs";i:1;s:15:"global_messages";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"18";s:4:"push";s:1:"6";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:7:"content";}}i:9;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:2:"18";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:4:"left";}}i:10;s:5:"clear";i:11;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area4";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:12;s:5:"clear";i:13;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area5";i:1;s:6:"footer";}}i:14;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0062',
	'layout'         => '2columns-right',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:3:{i:0;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:41:"<div class="grid_area1">{{content}}</div>";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:1;s:5:"clear";}}i:1;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:15:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_header";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:6:"header";}}i:1;s:5:"clear";i:2;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area2";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:3;s:5:"clear";i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area3";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:5;s:5:"clear";i:6;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:13:"grid_messages";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:11:"breadcrumbs";i:1;s:15:"global_messages";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:12:"grid_content";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:7:"content";}}i:9;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:5:"right";}}i:10;s:5:"clear";i:11;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:10:"grid_area4";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:12;s:5:"clear";i:13;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:11:"grid_footer";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area5";i:1;s:6:"footer";}}i:14;s:5:"clear";}}i:2;a:6:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################
$helper = Mage::helper('em0062settings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'em0062_';

// EM0062 - Area 1 - Links
$dataBlock = array(
	'title' => 'EM0062 - Area 1 - Links',
	'identifier' => $prefixBlock.'area1_links',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<!--
- ul.none, ol.none : margin left right = 0 , padding left right = 0, remove list-style
- ul.hoz, ol.hoz: add css for li  tag (display:inline-block (IE: display:inline; zoom:1)), padding left - right of li: 10px, li:first-child without padding left
- color of #grid_area1 font as design
- padding of  #grid_area1 ul.hoz as design.
-->
<ul class="none hoz f-left">
<li><a href="#">our store</a></li>
<li><a href="#">marketplace</a></li>
<li><a href="#">fashion news</a></li>
<li><a href="{{store direct_url='blog'}}">blog</a></li>
</ul>
<ul class="none hoz f-right">
<li>{{block type="page/switch" name="store_language" template="page/switch/languages.phtml"/}}</li>
<li>{{block type="directory/currency" name="currency" before="catalog.leftnav" template="directory/currency.phtml"}}</li>
<li><a class="icon facebook" title="facebook" href="#">Facebook</a></li>
<li><a class="icon twitter" title="twitter" href="#">Twitter</a></li>
</ul>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_area1_links'] = $block->getId();

// EM0062 - Area 2 - Banners
$dataBlock = array(
	'title' => 'EM0062 - Area 2 - Banners',
	'identifier' => $prefixBlock.'area2_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<!--
- img tag: add class fluid to set width 100% for responsive 
-->
<div class="grid_8 alpha">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/area2_banner1.png'}}" alt="" /></a></p>
</div>
<div class="grid_8">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/area2_banner2.png'}}" alt="" /></a></p>
</div>
<div class="grid_8 omega">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/area2_banner3.png'}}" alt="" /></a></p>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_area2_banners'] = $block->getId();

// EM0062 - Area 4 - Blocks
$dataBlock = array(
	'title' => 'EM0062 - Area 4 - Blocks',
	'identifier' => $prefixBlock.'area4_blocks',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<!--
- set .box2 to have border with border2_color
- set .drop-shadow to have shadow as design with border2_color
- set .small font size 92% (11px)
-->
<p>&nbsp;</p>
<!-- block newsletter -->
<div class="box2 drop-shadow">
<div style="margin: 0 auto; width: auto;"><!-- set auto center for this div --> {{block type="newsletter/subscribe" name="area4.newsletter" template="newsletter/subscribe.phtml"}}</div>
</div>
<!-- links on column 1 -->
<div class="grid_4 alpha small">
<p class="primary"><strong>BUYING GUIDE</strong></p>
<ul class="none">
<li><a href="#">Pellentesque habitant</a></li>
<li><a href="#">Egestas iaculis</a></li>
<li><a href="#">Massa erosus eros</a></li>
<li><a href="#">Ultricies lacinia</a></li>
<li><a href="#">Rutrum faucibus</a></li>
</ul>
</div>
<!-- links on column 2 -->
<div class="grid_4 prefix_1 small">
<p class="primary"><strong>WHAT'S IN STORE</strong></p>
<ul class="none">
<li><a href="#">Pellentesque habitant</a></li>
<li><a href="#">Egestas iaculis</a></li>
<li><a href="#">Massa erosus eros</a></li>
<li><a href="#">Ultricies lacinia</a></li>
<li><a href="#">Rutrum faucibus</a></li>
</ul>
</div>
<!-- links on column 3 -->
<div class="grid_4 prefix_1 small">
<p class="primary"><strong>POLICES</strong></p>
<ul class="none">
<li><a href="#">Pellentesque habitant</a></li>
<li><a href="#">Egestas iaculis</a></li>
<li><a href="#">Massa erosus eros</a></li>
<li><a href="#">Ultricies lacinia</a></li>
<li><a href="#">Rutrum faucibus</a></li>
</ul>
</div>
<!-- links on column 4 -->
<div class="grid_4 prefix_1 small">
<p class="primary"><strong>SHIPPING &amp; PAYMENT</strong></p>
<ul class="none">
<li><a href="#">Pellentesque habitant</a></li>
<li><a href="#">Egestas iaculis</a></li>
<li><a href="#">Massa erosus eros</a></li>
<li><a href="#">Ultricies lacinia</a></li>
<li><a href="#">Rutrum faucibus</a></li>
</ul>
</div>
<!-- links on column 5 -->
<div class="grid_4 omega prefix_1 small">
<p class="primary"><strong>STORE LOCATION</strong></p>
<p>{{config path="general/store_information/name"}}</p>
<p>{{config path="general/store_information/address"}}</p>
<p>{{config path="general/store_information/phone"}}<br />{{config path="trans_email/ident_general/email"}}</p>
</div>
<!-- payment icons -->
<div class="f-left">
<p><span class="custom-logo paymentmethods">Payment</span></p>
</div>
<hr />
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_area4_blocks'] = $block->getId();

// EM0062-Left-Callout
$dataBlock = array(
	'title' => 'EM0062-Left-Callout',
	'identifier' => $prefixBlock.'left_callout',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a title="" href="#"><img class="fluid" src="{{skin url='images/media/col_left_callout.jpg'}}" alt="col-left-callout" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_left_callout'] = $block->getId();

// EM0062-Left-Callout-Checkout
$dataBlock = array(
	'title' => 'EM0062-Left-Callout-Checkout',
	'identifier' => $prefixBlock.'left_callout_checkout',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a title="" href="#"><img class="fluid" src="{{skin url='images/media/col_left_callout_checkout.jpg'}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_left_callout_checkout'] = $block->getId();

// Em0062 - Footer - Banner
$dataBlock = array(
	'title' => 'Em0062 - Footer - Banner',
	'identifier' => $prefixBlock.'footer_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="grid_5 alpha small">
<ul class="hide-lte0">
<li><a title="trusted" href="#"><span class="icon trusted">Trust</span></a></li>
<li><a title="comodo" href="#"><span class="icon comodo">Comodo</span></a></li>
</ul>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['em0062_footer_banner'] = $block->getId();
####################################################################################################
# INSERT PAGE
####################################################################################################
 
$prefixPage = 'em0062_';
$page = Mage::getModel('cms/page');

// Home
$dataPage = array(
	'title'				=> 'Home',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<p class="h3 line-bc" style="text-align: center;">&nbsp;NEW PROMOTION IN THIS MONTH</p>
<p class="small" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <strong class="more">More info</strong></p>
<!-- col 1 -->
<div class="grid_8 alpha">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/home_banner_01.png'}}" alt="" /></a></p>
<div class="box1">
<p class="h1">euismod neque augue</p>
<p>Pellentesque habitant morbi tristique malesuada fames ac turpis egestas iaculis massa amet erosus ultricies lacinia, enim ipsum rutrum faucibus velit</p>
<p><a class="button" style="background-color: #e20625; border: 1px solid #e20625;">discover the lastest trends</a></p>
</div>
</div>
<!-- col 2 -->
<div class="grid_8">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/home_banner_02.png'}}" alt="" /></a></p>
<div class="box1">
<p class="h1">hendreirit dignissim eros</p>
<p>Pellentesque habitant morbi tristique malesuada fames ac turpis egestas iaculis massa amet erosus ultricies lacinia, enim ipsum rutrum faucibus velit</p>
<p><a class="button" style="background-color: #89a57c; border: 1px solid  #89a57c;">autumn / winter collection</a></p>
</div>
</div>
<!-- col 3 -->
<div class="grid_8 omega">
<p><a href="#"><img class="fluid" src="{{skin url='images/media/home_banner_03.png'}}" alt="" /></a></p>
<div class="box1">
<p class="h1">consectet hendrerit eros</p>
<p>Pellentesque habitant morbi tristique malesuada fames ac turpis egestas iaculis massa amet erosus ultricies lacinia, enim ipsum rutrum faucibus velit</p>
<p><a class="button" style="background-color: #a3a396; border: 1px solid #a3a396;">discover now</a></p>
</div>
</div>
<p class="primary" style="text-align: center;"><small>ABOUT OUR STORE</small></p>
<p style="text-align: center;"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></p>
EOB
);
$helper->insertPage($dataPage);

// Typography
$dataPage = array(
	'title'				=> 'Typography',
	'identifier' 		=> 'typography',
	'stores'			=> $stores,
	'content_heading'	=> 'Typography',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>General Elements</h2>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<ul>
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<ol>
<li>Number List 1</li>
<ol>
<li>Number List 1.1</li>
<li>Number List 1.2</li>
<li>Number List 1.3</li>
<li>Number List 1.4</li>
</ol>
<li>Number List 2</li>
<li>Number List 3</li>
<li>Number List 4</li>
</ol><dl><dt>Definition title dt</dt><dd>Defination description dd</dd><dt>Definition title dt</dt><dd>Defination description dd</dd></dl>
<p><code>Code tag:&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>
<p>block quote&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</blockquote>
<div class="box f-left">element with class <strong>.f-left</strong></div>
<div class="box f-right">element with class <strong>.f-right</strong></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2>Tables</h2>
<p>Table with class <strong>.data-table</strong></p>
<table class="data-table" style="width: 100%;" border="0">
<thead>
<tr><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th></tr>
</thead>
<tbody>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
</tbody>
</table>
<h2>Custom CSS Classes</h2>
<p class="normal">this is a paragraph with class <strong>.normal</strong></p>
<p class="primary">this is a paragraph with class <strong>.primary</strong></p>
<p class="secondary">this is a paragraph with class <strong>.secondary</strong></p>
<p class="secondary2">this is a paragraph with class <strong>.secondary2</strong></p>
<p class="small">tag <strong>small</strong> and class <strong>.small</strong></p>
<p class="underline">element with class <strong>.underline</strong></p>
<p><strong>ul.none</strong> and <strong>ol.none</strong>:</p>
<ul class="none">
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<p><strong>ul.hoz</strong> and <strong>ol.hoz</strong>:</p>
<ul class="hoz">
<li>Bullet List 1</li>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<div class="box">
<p>paragraph with class <strong>.box</strong>:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<p class="bottom">Paragraph with class <strong>.bottom</strong> always has margin-bottom = 0.</p>
<p>Add class <strong>.hide-lte2</strong> to hide element when screen's width less than 1280px.</p>
<p class="box hide-lte2">This block will disappear when resize window less than 1280px</p>
<p>Add class <strong>.hide-lte1</strong> to hide element when screen's width less than 980px.</p>
<p class="box hide-lte1">This block will disappear when resize window less than 980px</p>
<p>Add class <strong>.hide-lte0</strong> to hide element when screen's width less than 760px.</p>
<p class="box hide-lte0">This block will disappear when resize window less than 760px</p>
<h2>Icon</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.icon.facebook</p>
<p><span class="icon facebook" style="background-color: #000000;">.icon.facebook</span></p>
</td>
<td align="center" valign="top">
<p>.icon.twitter</p>
<p><span class="icon twitter" style="background-color: #000000;">.icon.twitter</span></p>
</td>
<td align="center" valign="top">
<p>.icon.trusted</p>
<p><span class="icon trusted">.icon.trusted</span></p>
</td>
<td align="center" valign="top">
<p>.icon.comodo</p>
<p><span class="icon comodo">.icon.comodo</span></p>
</td>
</tr>
</tbody>
</table>
<h2>Logo</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.custom-logo.paymentmethods</p>
<p><span class="custom-logo paymentmethods">span.custom-logo.paymentmethods</span></p>
</td>
</tr>
</tbody>
</table>
<p>image with class <strong>.fluid</strong>:</p>
<p><img class="fluid" title="image with class .fluid" src="{{media url="wysiwyg/left_callout.jpg"}}" alt="image with class .fluid" /></p>
EOB
);
$helper->insertPage($dataPage);

// Widgets
$dataPage = array(
	'title'				=> 'Widgets',
	'identifier' 		=> 'widgets',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>Demo EM Slideshow Widget</h2>
<div style="width: 500px;">{{widget type="slideshowwidget/create" text1="<span>Slide 1</span>" url1="#" image1="slide1.jpg" text2="<span>Slide 2</span>" url2="#" image2="slide2.jpg" text3="<span>Slide 3</span>" url3="#" image3="slide3.jpg" effect="random" slices="15" boxcols="8" boxrows="4" animspeed="500" pausetime="5000" directionnav="true" controlnav="true" controlnavthumbs="false" pauseonhover="true" prevtext="Prev" nexttext="Next" randomstart="true"}}</div>
<hr />
<h2>Demo EM Featured Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="Featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>Grid View with column count = 3</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="Featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml" column_count="3"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="Featured" limit_count="10" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View with column count = 2</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" order_by="name asc" featured_choose="Featured" limit_count="10" column_count="2" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<hr />
<h2>Demo EM Bestseller Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM New Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="newproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="newproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Sale Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_grid.phtml" column_count="4"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" frontend_title="Bestseller Products" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_list.phtml" column_count="4"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Slider Widget</h2>
<div class="grid_12">
<h3>Vertical Sliding</h3>
<p>{{widget type="sliderwidget/slide" instance="9" direction="1" container=".products-grid" slider_height="500" items_per_slide="2"}}</p>
</div>
<div class="grid_12">
<h3>Horizontal Sliding</h3>
<p>{{widget type="sliderwidget/slide" instance="9" container=".products-grid" items_per_slide="3"}}</p>
</div>
<p>&nbsp;</p>
<hr />
<h2>&nbsp;Demo EM Tabs Widget</h2>
<p>{{widget type="tabs/group" title_1="YTo0OntpOjA7czo1OiJUYWIgMSI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_1="6" title_2="YTo0OntpOjA7czo1OiJUYWIgMiI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_2="5" title_3="YTo0OntpOjA7czo1OiJUYWIgMyI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_3="15" template="emtabs/group.phtml"}}</p>
<p>&nbsp;</p>
EOB
);
$helper->insertPage($dataPage);

####################################################################################################
# INSERT WIDGET INSTANCE
####################################################################################################

$widgetInstance = Mage::getModel('widget/widget_instance');
$package_theme  = 'default/em0062';

// EM0062 - Area 1 - Links
$widget = array(
	'type' => 'cmswidget/widget_block',
	'title' => 'EM0062 - Area 1 - Links',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"28";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"29";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area1";}s:5:"pages";a:3:{s:7:"page_id";s:2:"29";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0062_install_fix_widget_block_id($widget, $block_id['em0062_area1_links']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0062 - Area 2 - Banners
$widget = array(
	'type' => 'cmswidget/widget_block',
	'title' => 'EM0062 - Area 2 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"29";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area2";}s:5:"pages";a:3:{s:7:"page_id";s:2:"30";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0062_install_fix_widget_block_id($widget, $block_id['em0062_area2_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0062 - Area 4 - Blocks
$widget = array(
	'title' => 'EM0062 - Area 4 - Blocks',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"30";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area4";}s:5:"pages";a:3:{s:7:"page_id";s:2:"32";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0062_install_fix_widget_block_id($widget, $block_id['em0062_area4_blocks']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0062-Left-Callout
$widget = array(
	'title' => 'EM0062-Left-Callout',
	'store_ids' => $stores,
	'sort_order' => 1,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"31";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:3:{i:2;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"36";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:1;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:7:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"35";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:20:"notanchor_categories";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:7:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"34";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0062_install_fix_widget_block_id($widget, $block_id['em0062_left_callout']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0062-Left-Callout-Checkout
$widget = array(
	'title' => 'EM0062-Left-Callout-Checkout',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"10";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:4:{i:3;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"40";s:3:"for";s:3:"all";s:13:"layout_handle";s:22:"checkout_onepage_index";s:5:"block";s:4:"left";}}i:2;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"39";s:3:"for";s:3:"all";s:13:"layout_handle";s:24:"checkout_onepage_failure";s:5:"block";s:4:"left";}}i:1;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"38";s:3:"for";s:3:"all";s:13:"layout_handle";s:23:"checkout_onepage_review";s:5:"block";s:4:"left";}}i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"37";s:3:"for";s:3:"all";s:13:"layout_handle";s:24:"checkout_onepage_success";s:5:"block";s:4:"left";}}}
EOB
	)
);
em0062_install_fix_widget_block_id($widget, $block_id['em0062_left_callout_checkout']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();


// EM0062 - Area 3 - Slideshow
$widget = array(
	'title' => 'EM0062 - Area 3 - Slideshow',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:50:{s:5:"text1";s:538:"<h3>autumn/winter collection/new look book</h3><div class="nivo_shop"><div class='shop-woman'> <h3 class='shop-woman-title'>women</h3> <p class='shop-woman-content'>malesuada justo tellus</p> <p class='button'><a href='{{store direct_url="apparel/shoes/womens.html"}}'><span>shop women</span></a></p> </div> <div class='shop-man'> <h3 class='shop-man-title'>men</h3> <p class='shop-man-content'>habitant sene nullaeu</p> <p class='button'><a href='{{store direct_url="apparel/shoes/mens.html"}}'><span>shop men</span></a></p> </div></div>";s:12:"thumbsimage1";s:0:"";s:4:"url1";s:18:"apparel/shoes.html";s:6:"image1";s:10:"slide1.jpg";s:5:"text2";s:530:"<h3>denim collection/new look book</h3><div class="nivo_shop"><div class='shop-woman'> <h3 class='shop-woman-title'>women</h3> <p class='shop-woman-content'>malesuada justo tellus</p> <p class='button'><a href='{{store direct_url="apparel/shoes/womens.html"}}'><span>shop women</span></a></p> </div> <div class='shop-man'> <h3 class='shop-man-title'>men</h3> <p class='shop-man-content'>habitant sene nullaeu</p> <p class='button'><a href='{{store direct_url="apparel/shoes/mens.html"}}'><span>shop men</span></a></p> </div></div>";s:12:"thumbsimage2";s:0:"";s:4:"url2";s:14:"furniture.html";s:6:"image2";s:10:"slide2.jpg";s:5:"text3";s:533:"<h3>cardigan collection/new look book</h3><div class="nivo_shop"><div class='shop-woman'> <h3 class='shop-woman-title'>women</h3> <p class='shop-woman-content'>malesuada justo tellus</p> <p class='button'><a href='{{store direct_url="apparel/shoes/womens.html"}}'><span>shop women</span></a></p> </div> <div class='shop-man'> <h3 class='shop-man-title'>men</h3> <p class='shop-man-content'>habitant sene nullaeu</p> <p class='button'><a href='{{store direct_url="apparel/shoes/mens.html"}}'><span>shop men</span></a></p> </div></div>";s:12:"thumbsimage3";s:0:"";s:4:"url3";s:12:"apparel.html";s:6:"image3";s:10:"slide3.jpg";s:5:"text4";s:0:"";s:12:"thumbsimage4";s:0:"";s:4:"url4";s:0:"";s:6:"image4";s:0:"";s:5:"text5";s:0:"";s:12:"thumbsimage5";s:0:"";s:4:"url5";s:0:"";s:6:"image5";s:0:"";s:5:"text6";s:0:"";s:12:"thumbsimage6";s:0:"";s:4:"url6";s:0:"";s:6:"image6";s:0:"";s:5:"text7";s:0:"";s:12:"thumbsimage7";s:0:"";s:4:"url7";s:0:"";s:6:"image7";s:0:"";s:5:"text8";s:0:"";s:12:"thumbsimage8";s:0:"";s:4:"url8";s:0:"";s:6:"image8";s:0:"";s:5:"text9";s:0:"";s:12:"thumbsimage9";s:0:"";s:4:"url9";s:0:"";s:6:"image9";s:0:"";s:6:"effect";s:6:"random";s:6:"slices";s:2:"15";s:7:"boxcols";s:1:"8";s:7:"boxrows";s:1:"4";s:9:"animspeed";s:3:"500";s:9:"pausetime";s:4:"5000";s:10:"startslide";s:1:"0";s:12:"directionnav";s:4:"true";s:10:"controlnav";s:4:"true";s:16:"controlnavthumbs";s:4:"true";s:12:"pauseonhover";s:4:"true";s:8:"prevtext";s:4:"Prev";s:8:"nexttext";s:4:"Next";s:11:"randomstart";s:4:"true";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"31";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area3";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('slideshowwidget/create')->setPackageTheme($package_theme)->save();

// EM0062-Latest-Review
$widget = array(
	'title' => 'EM0062-Latest-Review',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:18:{s:11:"limit_count";s:1:"3";s:12:"column_count";s:1:"1";s:8:"order_by";s:8:"name asc";s:12:"custom_class";s:0:"";s:14:"frontend_title";s:13:"Latest Review";s:10:"item_width";s:0:"";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:2:"85";s:16:"thumbnail_height";s:3:"110";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:10:"show_price";s:4:"true";s:14:"show_addtocart";s:5:"false";s:10:"show_addto";s:5:"false";s:10:"show_label";s:5:"false";s:15:"choose_template";s:48:"em_recentviewproducts/list_products_simple.phtml";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:3:{i:2;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:7:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"43";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:1;a:12:{s:10:"page_group";s:20:"notanchor_categories";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:7:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"42";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"42";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"41";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"41";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('slideshowwidget/create')->setPackageTheme($package_theme)->save();

function em0062_install_fix_widget_block_id(&$widget, $block_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['block_id'] = $block_id;
	$widget['widget_parameters'] = serialize($params);
}

function em0062_install_fix_widget_instance_id(&$widget, $instance_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['instance'] = $instance_id;
	$widget['widget_parameters'] = serialize($params);
}