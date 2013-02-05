/**
 * EMThemes
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */

(function($) {

EM_Theme = {
	PRODUCTSGRID_ITEM_WIDTH: 250,
	PRODUCTSGRID_ITEM_SPACING: 90,
	CROSSSELL_ITEM_WIDTH: 250,
	CROSSSELL_ITEM_SPACING: 90,
	UPSELL_ITEM_WIDTH: 250,
	UPSELL_ITEM_SPACING: 90
};



if (typeof EM == 'undefined') EM = {};
if (typeof EM.tools == 'undefined') EM.tools = {};


var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);


var domLoaded = false, 
	windowLoaded = false, 
	last_adapt_i, 
	last_adapt_width;


/**
 * Auto positioning product items in products-grid
 *
 * @param (selector/element) productsGridEl products grid element
 * @param (object) options
 * - (integer) width: width of product item
 * - (integer) spacing: spacing between 2 product items
 */
EM.tools.decorateProductsGrid = function (productsGridEl, options) {
	var $productsGridEl = $(productsGridEl);
	if ($productsGridEl.length == 0) return;
	
	var columnCount = Math.floor(($productsGridEl.outerWidth() + options.spacing) / (options.width + options.spacing));
	
	$productsGridEl.css({'position':'relative'});
	
	for (var i = 0; i < 20; i++) $('.item', $productsGridEl).removeClass('item-col-'+i);
		
	var maxHeight = 0;
	var i = 0;
	$('.item', $productsGridEl).each(function() {
		var prev = $(this).prevAll('.item-col-' + i).first();
		var top = prev.length > 0 ? prev.position().top + prev.outerHeight(true) + 15 /* + options.spacing*/: 0;
		
		$(this).addClass('item-col-'+i)
			.css({
				'position': 'absolute',
				'width': options.width + 'px',
				'left': i * (options.spacing + options.width) + 'px',
				'top': top + 'px'
			});
			
		maxHeight = Math.max(maxHeight, $(this).position().top + $(this).outerHeight(true));

		if (++i >= columnCount) i = 0;
	});
	
	$productsGridEl.css({
		'height': maxHeight + options.spacing + 'px'
	});
};

EM.tools.decorateProductCollateralTabs = function() {
	$(document).ready(function() {
		$('.product-collateral').addClass('tab_content').each(function(i) {
			$(this).wrap('<div class="tabs_wrapper collateral_wrapper" />');
			var tabs_wrapper = $(this).parent();
			var tabs_control = $(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
			
			$('.box-collateral', this).addClass('tab-item').each(function(j) {
				var id = 'box_collateral_'+i+'_'+j;
				$(this).addClass('content_'+id);
				tabs_control.append('<li><h2><a href="#'+id+'">'+$('h2', this).html()+'</a></h2></li>');
			});
			
			initToggleTabs(tabs_wrapper);
		});
		
		// update products position after tab showed
		/*
		$('.box-collateral.box-up-sell.tab-item').bind('emtabshow', function() {
			EM.tools.decorateProductsGrid('#upsell-product-table .products-grid', {
				width: EM_Theme.UPSELL_ITEM_WIDTH,
				spacing: EM_Theme.UPSELL_ITEM_SPACING
			});
		});
		*/
	});
};


/**
 * Fix iPhone/iPod auto zoom-in when text fields, select boxes are focus
 */
function fixIPhoneAutoZoomWhenFocus() {
	var viewport = $('head meta[name=viewport]');
	if (viewport.length == 0) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
		viewport = $('head meta[name=viewport]');
	}
	
	var old_content = viewport.attr('content');
	
	function zoomDisable(){
		viewport.attr('content', old_content + ', user-scalable=0');
	}
	function zoomEnable(){
		viewport.attr('content', old_content);
	}
	
	$("input[type=text], textarea, select").mouseover(zoomDisable).mousedown(zoomEnable);
}


/**
 * Change the alternative product image when hover
 */
function alternativeProductImage() {
	
	var tm;
	function swap() {
		clearTimeout(tm);
		setTimeout(function() {
			el = $(this).find('img[data-alt-src]');
			var newImg = $(el).data('alt-src');
			var oldImg = $(el).attr('src');
			$(el).attr('src', newImg).data('alt-src', oldImg);
		}.bind(this), 200);
	}
	
	$('.item .product-image img[data-alt-src]').parents('.item').bind('mouseenter', swap).bind('mouseleave', swap);
}


/**
 * Adjust elements to make it responsive
 *
 * Adjusted elements:
 * - Image of product items in products-grid scale to 100% width
 */
function responsive() {
	
	// resize products-grid's product image to full width 100% {{{
	var position = $('.products-grid .item').css('position');
	if (position != 'absolute' && position != 'fixed' && position != 'relative')
		$('.products-grid .item').css('position', 'relative');
		
	var img = $('.products-grid .item .product-image img');
	img.each(function() {
		img.data({
			'width': $(this).width(),
			'height': $(this).height()
		})
	});
	//img.removeAttr('width').removeAttr('height').css('width', '100%');
	// }}}
	
	// responsive:
	// - image 
	// - custom logo on sidebar
	// - category image
	$('.sidebar img, .custom-logo, .category-image img').each(function() {
		if (!$(this).hasClass('fluid')) {
			$(this).css({
				'max-width': $(this).width(),
				'max-height': $(this).height(),
				'width': '100%'
			});
		}
	});
}


/**
 * Function called when layout size changed by adapt.js
 */
function whenAdapt(i, width) {
	
	$('body').removeClass('adapt-0 adapt-1 adapt-2 adapt-3 adapt-4 adapt-5 adapt-6')
		.addClass('adapt-'+i);
		
	EM.tools.decorateProductsGrid('.category-products .products-grid', {
		width: EM_Theme.PRODUCTSGRID_ITEM_WIDTH,
		spacing: EM_Theme.PRODUCTSGRID_ITEM_SPACING
	});
	/*
	EM.tools.decorateProductsGrid('#upsell-product-table .products-grid', {
		width: EM_Theme.UPSELL_ITEM_WIDTH,
		spacing: EM_Theme.UPSELL_ITEM_SPACING
	});
	EM.tools.decorateProductsGrid('#crosssell-products-list', {
		width: EM_Theme.CROSSSELL_ITEM_WIDTH,
		spacing: EM_Theme.CROSSSELL_ITEM_SPACING
	});
	*/
}



/**
 * Callback function called when stylesheet is changed by adapt.js
 */
ADAPT_CONFIG.callback = function(i, width) {
	last_adapt_i = i;
	last_adapt_width = width;
	
	whenAdapt(last_adapt_i, last_adapt_width);
};




$(document).ready(function() {
	domLoaded = true;

	isMobile && fixIPhoneAutoZoomWhenFocus();
	
	alternativeProductImage();
	
	initTopButton();
	
	setupReviewLink();
});

$(window).bind('load', function() {
	windowLoaded = true;
	responsive();
	whenAdapt(last_adapt_i, last_adapt_width);
});


})(jQuery);
function showAgreementPopup(e) {
	
	//jQuery('#checkout-agreements .agreement-content').show();
	//$('agreement-content-popup').show();
		
	jQuery('#checkout-agreements label.a-click').parent().parent().children('.agreement-content').show()
		.css({
			'left': (parseInt(document.viewport.getWidth()) - jQuery('#checkout-agreements label.a-click').parent().parent().children('.agreement-content').width())/2 +'px',
			'top': (parseInt(document.viewport.getHeight()) - jQuery('#checkout-agreements label.a-click').parent().parent().children('.agreement-content').height())/2 + 'px'
		});
	
};

function hideAgreementPopup(e) {
	//$('opc-agreement-popup-overlay').hide();
	jQuery('#checkout-agreements .agreement-content').hide();
	
};

function initSlider(e) {
	var $ = jQuery;
	$(e).addClass('jcarousel-skin-tango');
	$(e).jcarousel({
		buttonNextHTML:'<a class="next" href="javascript:void(0);" title="Next"></a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);" title="Previous"></a>',
		scroll: 1,
		animation:'slow',
		initCallback: function (carousel) {
			var context = carousel.container.context;
			$(context).touchwipe({
				wipeLeft: function() { 
					carousel.next();
				},
				wipeRight: function() { 
					carousel.prev();
				},
				preventDefaultEvents: false
			});
		}
	});
};

function initTopButton() {
	var $ = jQuery;
	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
};

function showReviewTab() {
	var $ = jQuery;
	
	var reviewTab = $('.tabs_control li:contains(Review)');
	if (reviewTab.size()) {
		// scroll to review tab
		$('html, body').animate({
			 scrollTop: reviewTab.offset().top
		}, 500);
		 
		 // show review tab
		reviewTab.click();
	} else if ($('#customer-reviews').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#customer-reviews').offset().top }, 500);
	} else {
		return false;
	}
	return true;
};

function setupReviewLink() {
	jQuery('.r-lnk').click(function (e) {
		if (showReviewTab())
			e.preventDefault();
	});
};

