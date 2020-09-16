/**
 *  Document   : echart-data.js
 *  Author     : Redstartheme
 *  Description: Script for echart data.
 *
 **/

jQuery(document).ready(function() {
    'use strict';
    require.config({
        paths: {
            echarts: "../../assets/plugins/echarts"
        }
    }), require(["echarts", "echarts/chart/bar", "echarts/chart/chord", "echarts/chart/eventRiver", "echarts/chart/force", "echarts/chart/funnel", "echarts/chart/gauge", "echarts/chart/heatmap", "echarts/chart/k", "echarts/chart/line", "echarts/chart/map", "echarts/chart/pie", "echarts/chart/radar", "echarts/chart/scatter", "echarts/chart/tree", "echarts/chart/treemap", "echarts/chart/venn", "echarts/chart/wordCloud"], function(a) {
        var b = a.init(document.getElementById("echarts_bar"));
        b.setOption({
            tooltip: {
                trigger: "axis"
            },
            legend: {
                data: ["Cost", "Expenses"]
            },
            toolbox: {
                show: !0,
                orient: "vertical",
                feature: {
                    mark: {
                        show: !0
                    },
                    dataView: {
                        show: !0,
                        readOnly: !1
                    },
                    magicType: {
                        show: !0,
                        type: ["line", "bar"]
                    },
                    restore: {
                        show: !0
                    },
                    saveAsImage: {
                        show: !0
                    }
                }
            },
            calculable: !0,
            xAxis: [{
                type: "category",
                data: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            }],
            yAxis: [{
                type: "value",
                splitArea: {
                    show: !0
                }
            }],
            series: [{
                name: "Cost",
                type: "bar",
                data: [56, 14.9, 57, 2.69, 95, 26.7, 25.6, 102.2, 32.6, 20, 6.4, 3.3]
            }, {
                name: "Expenses",
                type: "bar",
                data: [45.6, 10.9, 59, 2.4, 78.7, 30.7, 35.6, 92.2, 48.7, 18.8, 6, 2.3]
            }]
        });
    })
});