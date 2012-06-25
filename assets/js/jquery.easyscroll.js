/**
 * jQuery Easy Scroll v1.0
 */
(function( $ ) {
	$.fn.easyScroll = function(options) {
	// Do your awesome plugin stuff here
		return this.each(function(){
			var options = $.extend($.fn.easyScroll.defaults, options);
			var count = $(options.elementToCount, this).length;
			var $this = $(this);
			console.log('Something..' + count);
			if( count < options.countMax ){
				return false;
			}
			$.fn.easyScroll.resizeContainer($this);
			$.fn.easyScroll.appendScroller($this, options);
			$.fn.easyScroll.bindScrollers($this, options);
		});
	};
	
	$.fn.easyScroll.defaults = {
		eventType    : 'click',
		scrollerContainer : 'scrollerContainer',
		scrollUpId   : 'button-scroll-up',
		scrollDownId : 'button-scroll-down',
		elementToCount : 'tr',
		countMax : 14,
	};
	
	$.fn.easyScroll.containerOptions = {
		width: 52,
		offset: 5,
	};
	
	$.fn.easyScroll.options = {};
	
	$.fn.easyScroll.resizeContainer = function(element){
		var itemsContainerWidth = parseInt(element.outerWidth());
		element.width(parseInt(itemsContainerWidth - $.fn.easyScroll.containerOptions.width));
	};
	
	$.fn.easyScroll.appendScroller = function(element, options){
		element.before($.fn.easyScroll.constructScroller(options));
	};
	
	$.fn.easyScroll.constructScroller = function(options){
		var eContainer = $('<div>');
		eContainer.attr('id', options.scrollerContainer);
		eContainer.append(
			$('<span>').attr('id',options.scrollUpId).html('&nbsp;<br/>&nbsp;')
		);
		eContainer.append(
			$('<span>').attr('id', options.scrollDownId).html('&nbsp;')
		);
		return eContainer;
	}
	
	$.fn.easyScroll.scrollDown = function(eDom){
		var eToScroll = $('div.portlet-container', eDom);
		var iDomHeight = parseInt(eDom.height());
		newTop = ((objHeight+top) > height) ? top-(speed*fast) : top;
		console.info('New down top: ' + newTop);
		eDom.css('top', newHeight + 'px');
	};
	$.fn.easyScroll.scrollUp   = function(eDom){
		console.log(eDom);
	};
	
	$.fn.easyScroll.bindScrollers = function(element, options){
		$(options.scrollDownId).bind('click', function(options){
			$.fn.easyScroll.scrollDown(element);
		});
		$(options.scrollUpId).bind('click', function(options){
			$.fn.easyScroll.scrollUp(element);
		});
	};
})( jQuery );