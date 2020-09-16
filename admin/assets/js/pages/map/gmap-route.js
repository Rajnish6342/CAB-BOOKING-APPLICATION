/**
 *  Document   : google-maps-data.js
 *  Author     : Redstartheme
 *  Description: Google map data script
 *
 **/

var MapsGoogle = function() {
    var l = function() {
            var o = new GMaps({
                div: "#gmap_routes",
                lat: 23.0128440,
                lng: 72.5289980
            });
            $(document).on("click","#routes_start",function(t) { 
                t.preventDefault(), App.scrollTo($(this), 400), o.travelRoute({
                    origin: [23.0128440, 72.5289980],
                    destination: [23.0048648, 72.5013820],
                    travelMode: "driving",
                    step: function(t) {
                        $("#routes_instructions").append("<li>" + t.instructions + "</li>"), $("#routes_instructions li:eq(" + t.step_number + ")").delay(800 * t.step_number).fadeIn(500, function() {
                            o.setCenter(t.end_location.lat(), t.end_location.lng()), o.drawPolyline({
                                path: t.path,
                                strokeColor: "#131540",
                                strokeOpacity: .6,
                                strokeWeight: 6
                            })
                        })
                    }
                })
            })
        };
    return {
        init: function() {
           l()
        }
    }
}();
jQuery(document).ready(function() {
	'use strict';
    MapsGoogle.init()
});