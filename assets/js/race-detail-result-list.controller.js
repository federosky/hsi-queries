/**
 * 
 */
var Content = new Object();

Content.sToggler  = '#visibility-toggler';
Content.sToToggle = 'div.portlet-container';
Content.viewing   = 'details';
/**
 * 
 */
Content.selectorContext = '';

Content.init = function(id){
	var aCollection = $(Content.sToToggle);
	var sTogglerClass = '';
	var sTogglerValue = '';
	//determine action or label
	if( aCollection.length > 1){
		// action
		Content.viewing = 'details';
		sTogglerClass = 'toggler-button show-results';
		Content.toggleButtonClass(Content.sToggler);
		Content.doBind();
	}
	else{
		sTogglerClass = 'toggler-label not-raced';
	}
	$(Content.sToggler).addClass(sTogglerClass);
	Content.scheduleRefresh();
	//$('.list-view .items').easyScroll();
}

Content.doBind = function(){
	$(Content.sToggler).bind('click', function(event){
		Content.toggleView(this);
	});
}

Content.toggleView = function(eButton){
	$(Content.sToToggle).toggleClass('hide');
	if( Content.viewing == 'details' ){
		Content.viewing = 'results';
	}
	else if(Content.viewing == 'results'){
		Content.viewing = 'details';
	}
	Content.toggleButtonClass();
}

Content.toggleButtonClass = function(){
	if( Content.viewing == 'details' ){
		$(Content.sToggler).removeClass('show-details');
		$(Content.sToggler).addClass('show-results');
	}
	else if( Content.viewing == 'results' ){
		$(Content.sToggler).removeClass('show-results');
		$(Content.sToggler).addClass('show-details');
	}
}

Content.scheduleRefresh = function(){
	$.doTimeout('refresh-list', 60 * 1000, function(){
		Content.doRefresh('listContainer');
	});
}

Content.doRefresh = function(containerId){
	$.fn.yiiListView.update(containerId);
	Content.scheduleRefresh();
}

$(document).ready(function(){
	Content.init();
});