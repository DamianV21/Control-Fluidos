@extends('adminlte::page')

@section('title', 'Inicio')

@section('content')



    <x-app-layout>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-lg font-bold">Bienvenido <strong>{{ auth()->user()->name }}</strong></h3>

                <div class="card-tools">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span> <img width="200px" src="{{ asset('img/logo9.png') }}" alt=""></span>
                </div>
            </div>
        </div>


        <div>
            <div class="card">
                <div class="card-body">
                    @livewire('index')
                </div>
            </div>
        </div>

        <!--

                <div class="row">
                    <div class="col-md-6">
                        <figure class="highcharts-figure">
                            <div id="grafica_barras"></div>
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <figure class="highcharts-figure">
                            <div id="grafica_general"></div>
                        </figure>
                    </div>
                </div>

            -->



    </x-app-layout>

@stop

@section('css')
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
@stop

@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        Highcharts.chart('grafica_barras', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Average Rainfall'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tokyo',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'New York',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }, {
                name: 'London',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }, {
                name: 'Berlin',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

            }]
        });

        var colors = Highcharts.getOptions().colors;

        Highcharts.chart('grafica_general', {
            chart: {
                type: 'spline'
            },

            legend: {
                symbolWidth: 40
            },

            title: {
                text: 'Most common desktop screen readers'
            },

            subtitle: {
                text: 'Source: WebAIM. Click on points to visit official screen reader website'
            },

            yAxis: {
                title: {
                    text: 'Percentage usage'
                },
                accessibility: {
                    description: 'Percentage usage'
                }
            },

            xAxis: {
                title: {
                    text: 'Time'
                },
                accessibility: {
                    description: 'Time from December 2010 to September 2019'
                },
                categories: ['December 2010', 'May 2012', 'January 2014', 'July 2015', 'October 2017',
                    'September 2019'
                ]
            },

            tooltip: {
                valueSuffix: '%'
            },

            plotOptions: {
                series: {
                    point: {
                        events: {
                            click: function() {
                                window.location.href = this.series.options.website;
                            }
                        }
                    },
                    cursor: 'pointer'
                }
            },

            series: [{
                name: 'NVDA',
                data: [34.8, 43.0, 51.2, 41.4, 64.9, 72.4],
                website: 'https://www.nvaccess.org',
                color: colors[2],
                accessibility: {
                    description: 'This is the most used screen reader in 2019.'
                }
            }, {
                name: 'JAWS',
                data: [69.6, 63.7, 63.9, 43.7, 66.0, 61.7],
                website: 'https://www.freedomscientific.com/Products/Blindness/JAWS',
                dashStyle: 'ShortDashDot',
                color: colors[0]
            }, {
                name: 'VoiceOver',
                data: [20.2, 30.7, 36.8, 30.9, 39.6, 47.1],
                website: 'http://www.apple.com/accessibility/osx/voiceover',
                dashStyle: 'ShortDot',
                color: colors[1]
            }, {
                name: 'Narrator',
                data: [null, null, null, null, 21.4, 30.3],
                website: 'https://support.microsoft.com/en-us/help/22798/windows-10-complete-guide-to-narrator',
                dashStyle: 'Dash',
                color: colors[9]
            }, {
                name: 'ZoomText/Fusion',
                data: [6.1, 6.8, 5.3, 27.5, 6.0, 5.5],
                website: 'http://www.zoomtext.com/products/zoomtext-magnifierreader',
                dashStyle: 'ShortDot',
                color: colors[5]
            }, {
                name: 'Other',
                data: [42.6, 51.5, 54.2, 45.8, 20.2, 15.4],
                website: 'http://www.disabled-world.com/assistivedevices/computer/screen-readers.php',
                dashStyle: 'ShortDash',
                color: colors[3]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 550
                    },
                    chartOptions: {
                        chart: {
                            spacingLeft: 3,
                            spacingRight: 3
                        },
                        legend: {
                            itemWidth: 150
                        },
                        xAxis: {
                            categories: ['Dec. 2010', 'May 2012', 'Jan. 2014', 'July 2015', 'Oct. 2017',
                                'Sep. 2019'
                            ],
                            title: ''
                        },
                        yAxis: {
                            visible: false
                        }
                    }
                }]
            }
        });
    </script>


@stop
