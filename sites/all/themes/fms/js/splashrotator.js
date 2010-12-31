(function($){

$.fn.feature = function(options) {
	// Extend our default options with those provided.
	var opts = $.extend({}, $.fn.feature.defaults, options);

	// Local Variables
	var items = $(this).find(".images img");
	var indicators = [];
	var messages = [];
	var timeoutID = null;
	var current_index = 0;
	var current_indicator = 0;
	var hoverflag = false;
	var parent = this;
	var menu = $('.master .menu');
	
	var init = function() {

		var counter = 0;
		items.each(function(){

			/*var element = $('<a class="dot"><span>' + counter + '</span></a>').appendTo(indicatorholder);
			element.index = counter;
			indicators.push(element);*/
			var element = $('.menu ul li a').eq(counter);
			var message = $('.menu div.detail').eq(counter);
			indicators.push(element);
			messages.push(message);
			element.index = counter;
			
			element.click(function(e){
				e.preventDefault();
				parent.forceshow_item(element.index);
			});

			if (counter === 0) {
				element.addClass('first');
			};

			if (counter === items.length-1) {
				element.addClass('last');
			};

			counter++;

		});

		menu.bind('mouseenter', function(){
			hoverflag = true;
		});

		menu.bind('mouseleave', function(){
			hoverflag = false;
		});

		parent.highlight_indicator();
		parent.start_rotate();
	};

	this.show_item = function(index, func) {
		this.hide_item(current_index);
		$(messages[current_index]).removeClass('selected');
		
		if(index >= items.length) {
			index = 0;
		}
		
		if(index < 0) {
			index = items.length-1;
		}
		// Set the current index to the new value.
		current_index = index;
		parent.highlight_indicator();
	
		$(items[index]).animate({ 
			opacity: 'show'
		}, opts.animation_duration);
		
		$(messages[index]).addClass('selected');
		/*$(messages[index]).animate({ 
			opacity: 'show'
		}, opts.animation_duration);*/
		
	};

	this.forceshow_item = function(index) {
		parent.forcehide_item(current_index);

		current_index = index;

		parent.highlight_indicator();
		$(items[index]).show();
		$(messages[index]).addClass('selected');
	};

	this.forcehide_item = function(index) {
		$(items[index]).hide();
		$(messages[index]).removeClass('selected');
	};

	this.hide_item = function(index) {
		// Check if the index actually exists.
		if(!items[index]) {
			index = 0;
		} 
		
		$(items[index]).animate({ 
			opacity: 'hide'
		}, opts.animation_duration);
		
		$(messages[index]).removeClass('selected');
		/*$(messages[index]).animate({ 
			opacity: 'hide'
		}, opts.animation_duration);*/
	};

	this.show_next = function() {
		this.show_item(current_index + 1);
	};

	this.show_previous = function() {
		this.show_item(current_index - 1);
	};

	this.highlight_indicator = function() {
		//indicators[current_indicator].parent().removeClass('current');
		//indicators[current_index].parent().addClass('current');
		/*messages[current_indicator].removeClass('current');
		messages[current_index].addClass('current');*/
		
		current_indicator = current_index;	
	};

	this.rotate = function() {

		if (hoverflag) { return; };

		if(opts.pause == true) {
			return;
		}

		// success
		this.show_next();

	};

	this.start_rotate = function() {
		var self = this;
		timeoutID = window.setInterval(function(){ self.rotate(); }, opts.rotate_delay);
	};

	this.stop_rotate = function() {
		window.clearInterval(timeoutID);
	};

	init();

	return(this);
};

// override these globally if you like (they are all optional)
$.fn.feature.defaults = {
	rotate_delay:			5000,
	pause:				false,
	show_controls:			false,
	animation_duration:		1500
};

})(jQuery);

$(document).ready(function(){

	$('.master').feature();

});

