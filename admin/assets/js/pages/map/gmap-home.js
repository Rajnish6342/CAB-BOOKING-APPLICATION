/**
 *  Document   : google-maps-data.js
 *  Author     : Redstartheme
 *  Description: Google map data script
 *
 **/

var map,
desktopScreen = Modernizr.mq( "only screen and (min-width:1024px)" ),
zoom = desktopScreen ? 14 : 15,
		scrollable = draggable = !Modernizr.hiddenscroll || desktopScreen,
		isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));

function initMap() {
	var myLatLng = {lat: 23.0196181, lng: 72.5287620};
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: zoom,
		center: myLatLng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: scrollable,
		draggable: draggable,
		styles: [{"stylers": [{ "saturation": -100 }]}],
	});

	var locations = [
         {
        	 title: 'Shyamal Cross Road',
        	 position: {lat: 23.01475157, lng: 72.53095753},
        	 icon: {
        		 url: "../../assets/img/vehicle/car2.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Karnavati Club',
        	 position: {lat: 23.020938, lng: 72.505155},
        	 icon: {
        		 url: "../../assets/img/vehicle/car2.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Conti Castle',
        	 position: {lat: 23.0247181, lng: 72.5558707},
        	 icon: {
        		 url: "../../assets/img/vehicle/car1.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Prahaladnagar Garden',
        	 position: {lat: 23.01191172, lng: 72.50659605},
        	 icon: {
        		 url: "../../assets/img/vehicle/car1.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Manekbag Post Office',
        	 position: {lat: 23.0155796, lng: 72.5430585},
        	 icon: {
        		 url: "../../assets/img/vehicle/car1.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Preranatirth Derasar',
        	 position: {lat: 23.02539129, lng: 72.52130726},
        	 icon: {
        		 url: "../../assets/img/vehicle/car1.png",
        		 size: new google.maps.Size(30, 30),

        	 }

         },
         {
        	 title: 'Sivranjani',
        	 position: {lat: 23.02436351, lng: 72.52976582},
        	 icon: {
        		 url: "../../assets/img/vehicle/car2.png",
        		 size: new google.maps.Size(30, 30),

        	 }
         }					
         ];

	locations.forEach( function( element, index ){	
		var marker = new google.maps.Marker({
			position: element.position,
			map: map,
			title: element.title,
			icon: element.icon,
		});
	});
}