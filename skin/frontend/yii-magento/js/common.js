(function($){
	var AutoComplete = function(element){
		var input = element.find('#search:input');
		var bind = function(){
			input.keyup(function(event){
				var input_value = input.val();
				if(input_value.length>0){
					
				}
			});
		};
		
		bind();
	};
	
	var MenuNav = function(element){

	};
	
	var MenuDropdown = function(){
		
	};

	var Scroll = function(element,options){
		
	};
	
	var Popup = function(){
		
	};
	
	var MiniCart = function(element){
		var listContain = element.find('.topCartNav');
		var bind = function(){
			element.mouseover(function(event){
				getList();
				listContain.show();
			});
			element.mouseout(function(event){
				listContain.hide();
			});
		};
		
		var getList = function(){
			listContain.html('<p>test test</p>');
		};	
		
		bind();
	};
	
	$.fn.autoComplete = function(){
		var autoComplete = new AutoComplete(this);
	};
	
	$.fn.menuNav = function(){
		var menu = new MenuNav(this);
	};
	
	$.fn.miniCart = function(){
		var miniCart = new MiniCart(this);
	}
	
})(jQuery);


$(function(){
	$('.search').autoComplete();
	//$('.sliderNavigator').menu();
	$('.cartContain').miniCart();
});