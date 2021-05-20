@extends('layout')

@section('title', 'Age/Status Analisis')


@section('content')
	<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});

    google.charts.setOnLoadCallback(drawChart25_29);

    function drawChart25_29() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusData["25-29"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["25-29"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["25-29"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at 25-29 Years Old',
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
          ['Paid Off', {{$statusData["30-34"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["30-34"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["30-34"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at 30-34 Years Old',
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
          ['Paid Off', {{$statusData["35-39"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["35-39"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["35-39"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at 35-39 Years Old',
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