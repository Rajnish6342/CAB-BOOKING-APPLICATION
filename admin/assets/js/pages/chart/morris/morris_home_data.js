jQuery(document).ready(function() {
	'use strict';

	Morris.Line({
        element: 'line_chart',
        data: [{
            period: '2008',
            iphone: 45,
            ipad: 56,
            itouch: 13
        },{
            period: '2009',
            iphone: 134,
            ipad: 178,
            itouch: 56
        },{
            period: '2010',
            iphone: 47,
            ipad: 86,
            itouch: 31
        },{
            period: '2011',
            iphone: 178,
            ipad: 221,
            itouch: 67
        }, {
            period: '2012',
            iphone: 123,
            ipad: 100,
            itouch: 76
        }, {
            period: '2013',
            iphone: 78,
            ipad: 59,
            itouch: 89
        }, {
            period: '2014',
            iphone: 82,
            ipad: 217,
            itouch: 124
        }, {
            period: '2015',
            iphone: 192,
            ipad: 117,
            itouch: 134
        }, {
            period: '2016',
            iphone: 90,
            ipad: 110,
            itouch: 87
        },
        {
            period: '2017',
            iphone: 203,
            ipad: 178,
            itouch: 115
        }
    ],
    xkey: 'period',
    ykeys: ['iphone', 'ipad', 'itouch'],
    labels: ['iPhone', 'iPad', 'iPod Touch'],
    pointSize: 3,
    fillOpacity: 0,
    pointStrokeColors: ['#a879fd', '#00dcff', '#ef0f25'],
    behaveLikeLine: true,
    gridLineColor: '#e0e0e0',
    lineWidth: 2,
    hideHover: 'auto',
    lineColors: ['#a879fd', '#00dcff', '#ef0f25'],
    resize: true
    });
	
});

Morris.Area({
	element: "area_line_chart",
	behaveLikeLine: true,
	data: [
	       {w: '2011 Q1', x: 2, y: 0, z: 0},
	       {w: '2011 Q2', x: 50, y: 15, z: 5},
	       {w: '2011 Q3', x: 15, y: 50, z: 23},
	       {w: '2011 Q4', x: 45, y: 12, z: 7},
	       {w: '2011 Q5', x: 20, y: 32, z: 55},
	       {w: '2011 Q6', x: 39, y: 67, z: 20},
	       {w: '2011 Q7', x: 20, y: 9, z: 5}
	       ],
	       xkey: 'w',
	       ykeys: ['x', 'y', 'z'],
	       labels: ['X', 'Y', 'Z'],
	       pointSize: 0,
	       lineWidth: 0,
	       resize: true,
	       fillOpacity: 0.8,
	       behaveLikeLine: true,
	       gridLineColor: '#e0e0e0',
	       hideHover: 'auto',
	       lineColors: ['#222222', '#20B2AA', '#6C96D2']
});


