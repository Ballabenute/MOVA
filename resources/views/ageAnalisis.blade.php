@extends('layout')

@section('title', 'Age/Education Analisis')


@section('content')
	<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});

    google.charts.setOnLoadCallback(drawChart25_29);

    function drawChart25_29() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['High School or Below', {{$educationData["25-29"]["HighSchoolOrBelow"]["count"]}}],
          ['College', {{$educationData["25-29"]["college"]["count"]}}],
          ['Bechalor', {{$educationData["25-29"]["Bechalor"]["count"]}}],
          ['Master or Above', {{$educationData["25-29"]["MasterOrAbove"]["count"]}}]
        ]);

        var options = {'title':'Education at 25-29 Years Old',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_25-29'));
        chart.draw(data, options);
      }

    google.charts.setOnLoadCallback(drawChart30_34);

    function drawChart30_34() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['High School or Below', {{$educationData["30-34"]["HighSchoolOrBelow"]["count"]}}],
          ['College', {{$educationData["30-34"]["college"]["count"]}}],
          ['Bechalor', {{$educationData["30-34"]["Bechalor"]["count"]}}],
          ['Master or Above', {{$educationData["30-34"]["MasterOrAbove"]["count"]}}]
        ]);

        var options = {'title':'Education at 30-34 Years Old',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_30-34'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChart35_39);

	function drawChart35_39() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['High School or Below', {{$educationData["35-39"]["HighSchoolOrBelow"]["count"]}}],
          ['College', {{$educationData["35-39"]["college"]["count"]}}],
          ['Bechalor', {{$educationData["35-39"]["Bechalor"]["count"]}}],
          ['Master or Above', {{$educationData["35-39"]["MasterOrAbove"]["count"]}}]
        ]);

        var options = {'title':'Education at 35-39 Years Old',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_35-39'));
        chart.draw(data, options);
    }

    </script>

    <div style="display: inline-flex;">

      <div id="chart_25-29"></div>
      <div id="chart_30-34"></div>

    </div>
    <div style="display: inline-flex;">

      <div id="chart_35-39"></div>

    </div>
    
@stop
