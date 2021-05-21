@extends('layout')

@section('title', 'Menu')


@section('content')
	<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});

    google.charts.setOnLoadCallback(drawChartHighSchoolOrBelow);

    function drawChartHighSchoolOrBelow() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusData["HighSchoolOrBelow"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["HighSchoolOrBelow"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["HighSchoolOrBelow"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at High School or Below',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_HighSchoolOrBelow'));
        chart.draw(data, options);
      }

    google.charts.setOnLoadCallback(drawChartCollege);

    function drawChartCollege() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusData["college"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["college"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["college"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at College',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_college'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChartBechalor);

	function drawChartBechalor() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusData["bechalor"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["bechalor"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["bechalor"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at Bechalor',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_bechalor'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChartMasterOrAbove);

	function drawChartMasterOrAbove() {

        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusData["masterOrAbove"]["paidoff"]["count"]}}],
          ['Collection', {{$statusData["masterOrAbove"]["collection"]["count"]}}],
          ['Collection Paid Off', {{$statusData["masterOrAbove"]["collectionPaidoff"]["count"]}}]
        ]);

        var options = {'title':'Loan Status at Master or Above',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_MasterOrAbove'));
        chart.draw(data, options);
    }

    </script>

    <div style="display: inline-flex;">

      <div id="chart_HighSchoolOrBelow"></div>
      <div id="chart_college"></div>

    </div>
    <div style="display: inline-flex;">

      <div id="chart_bechalor"></div>
      <div id="chart_MasterOrAbove"></div>

    </div>
@stop