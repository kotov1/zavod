function createMap(){
	var opts = {
		center: {
			lat: 59.992556,
			lng: 30.303493,
		},
		zoom: 15,
		styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#c2ebaf"}]},{"featureType":"poi.park","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#e1e1e1"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#e2e2e2"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#e1e1e1"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"},{"saturation":"0"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#e1e1e1"}]},{"featureType":"road.local","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"saturation":"0"},{"color":"#aadaff"}]}],
		maxZoom: 20,
		minZoom: 0,
		mapTypeId: 'roadmap',
	};

	
	opts.clickableIcons = true;
	opts.disableDoubleClickZoom = false;
	opts.draggable = true;
	opts.keyboardShortcuts = true;
	opts.scrollwheel = true;
	

	
	var setControlOptions = function(key, enabled, position, style, mapTypeIds){
		opts[key + 'Control'] = enabled;
		opts[key + 'ControlOptions'] = {
			position: google.maps.ControlPosition[position],
			style: google.maps.MapTypeControlStyle[style],
			mapTypeIds: mapTypeIds
		};
	};
	
		
	setControlOptions('fullscreen',false,'DEFAULT','',null);
	
		
	setControlOptions('mapType',false,'DEFAULT','DEFAULT',["roadmap","satellite","terrain"]);
	
		
	setControlOptions('rotate',false,'DEFAULT','',null);
	
		
	setControlOptions('scale',false,'','',null);
	
		
	setControlOptions('streetView',false,'DEFAULT','',null);
	
		
	setControlOptions('zoom',false,'DEFAULT','',null);
	

	var map = new google.maps.Map(document.getElementById('map'), opts);
	var map2 = new google.maps.Map(document.getElementById('map2'), opts);
	var map3 = new google.maps.Map(document.getElementById('map3'), opts);

	
	(function(){
		var markerOptions = {
			map: map,
			position: {
				lat: 59.992556,
				lng: 30.303493,
			}
		};
		
		markerOptions.icon = {
			path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
			scale: 1.6363636363636363636363636364,
			anchor: new google.maps.Point(11, 22),
			fillOpacity: 1,
			fillColor: '#f44336',
			strokeOpacity: 0
		};
		
		var marker = new google.maps.Marker(markerOptions);


	})();
	
	(function(){
		var markerOptions = {
			map: map2,
			position: {
				lat: 59.992556,
				lng: 30.303493,
			}
		};
		
		markerOptions.icon = {
			path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
			scale: 1.6363636363636363636363636364,
			anchor: new google.maps.Point(11, 22),
			fillOpacity: 1,
			fillColor: '#f44336',
			strokeOpacity: 0
		};
		
		var marker = new google.maps.Marker(markerOptions);


	})();
	
	(function(){
		var markerOptions = {
			map: map3,
			position: {
				lat: 59.992556,
				lng: 30.303493,
			}
		};
		
		markerOptions.icon = {
			path: 'M11 2c-3.9 0-7 3.1-7 7 0 5.3 7 13 7 13 0 0 7-7.7 7-13 0-3.9-3.1-7-7-7Zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5 0-1.4 1.1-2.5 2.5-2.5 1.4 0 2.5 1.1 2.5 2.5 0 1.4-1.1 2.5-2.5 2.5Z',
			scale: 1.6363636363636363636363636364,
			anchor: new google.maps.Point(11, 22),
			fillOpacity: 1,
			fillColor: '#f44336',
			strokeOpacity: 0
		};
		
		var marker = new google.maps.Marker(markerOptions);


	})();


}