jQuery(document).ready(function(){

var 
  fullWidth = $('.full_width')
, direction = $('body').css("direction")
, _window = $(window)
;


jQuery('.full_width').css('display', 'block');

jQuery(window).resize(
   function(){
      mainResizer();
   }
).trigger('resize');


function mainResizer(){
  if(direction == "ltr"){
    fullWidth.css({width: _window.width(), "margin-left": (_window.width()/-2),"left":"50%"});
  }else{
    fullWidth.css({width: _window.width(), "margin-right": (_window.width()/-2),"right":"50%"});
  }
}

/*!Header show search field*/
	$(".mini-search .field").fadeOut(100, function(){
		$(".mini-search .field").css("visibility", "visible")
	});
	$('body').on("click", function(e){
		var target = $(e.target);
		if(!target.is(".mini-search .field")) {
			$(".searchform .submit").removeClass("act");
			$(".mini-search .field").fadeOut(100);
		}
	});
	$(".searchform .submit").on("click", function(e){
		e.preventDefault();
		e.stopPropagation();
		var $_this = $(this);
		if($_this.hasClass("act")){
			$_this.removeClass("act");
			$_this.siblings(".searchform-s").fadeOut(200);
		}else{
			$_this.addClass("act");
			$_this.siblings(".searchform-s").fadeIn(250);
		}
	});
	/*Header show search field:end*/
	
	/**
	 * This function will handle the on-click events to mark the selected address and trigger the google map location.
	 */
	$(".address").on("click",function(){
		
		//Iterate all the address to remove the selected class.
		$.each($(".address"),function(index, addressItem){
			$(addressItem).removeClass("selectedItem");
			/*
			var arrowIcon = $(addressItem).find("span.inlineText");
			if(arrowIcon !=null){
				//fa-arrow-circle-right
				//arrowIcon.hide();
				arrowIcon.addClass("fa-arrow-circle-right");
			}*/
		});
		//Add the "selectedItem" class to the current address.
		$(this).addClass("selectedItem");
		//$(this).find("span.inlineText").css("display", "table-cell");
		
		var newAddress = $(this).text();
		searchNewAddress(newAddress);
	});
	
	function searchNewAddress(address){
		if(currentGeocoder){
			var latlng= {lat: 40.731, lng: -73.997};
			currentGeocoder.geocode({'location': latlng}, function(results, status) {
			      if (status == google.maps.GeocoderStatus.OK) {
			    	  if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
			    		  currentMapInPage.setCenter(results[0].geometry.location);

			    		  var infowindow = new google.maps.InfoWindow({
			    			  content: '<b>' + address + '</b>',
			    			  size: new google.maps.Size(150, 50)
			    		  });

			    		  var marker = new google.maps.Marker({
			    			  position: results[0].geometry.location,
			    			  map: currentMapInPage,
			    			  title: address
			    		  });
			    		  google.maps.event.addListener(marker, 'click', function() {
			    			  infowindow.open(currentMapInPage, marker);
			    		  });
			    	  } else {
			    		  alert("No results found");
			    	  }
			      } else {
			    	  alert("Geocode was not successful for the following reason: " + status);
			      }
		    });
		}
	}
	
	
	
	var currentGeocoder = null;
	
	//GOOGLE MAPS
	function getMapObject(){
		var divMap = $(".gmap");
		if(divMap==null || divMap.attr("id")==null){
			return;
		}
		var coordData = new google.maps.LatLng(parseFloat(40.649974), parseFloat(-73.949919));
		var idMap = divMap.attr("id");
		var mapOptions = {
			zoom: 16,
			center: coordData,
			draggable: false,
			scrollwheel: false
		};
		var map = new google.maps.Map(idMap, mapOptions);
		marker = new google.maps.Marker({
			map: map,
			draggable: false,
			position: coordData
		});
		currentGeocoder = new google.maps.Geocoder();
		
		return map;
	}
	
	//Patch, this needs to be an image.
	function prepareStyleForIcon24_7(){
		$.each($(".icon24-7"),function(i,element){
			$(element).find("br").remove();
		});
		
	}
	
//	prepareStyleForIcon24_7();
//	var currentMapInPage = getMapObject();
});

