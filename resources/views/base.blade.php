@extends('layout')

@section('title', 'Basic')


@section('content')
	<script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChartGender);

      function drawChartGender() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gender');
        data.addColumn('number', 'Sum Gender');
        data.addRows([
          ['Male', {{$genderCount["male"]}}],
          ['Female', {{$genderCount["female"]}}]
        ]);

        var options = {'title':'Gender Chart',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_gender'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartAge);

      function drawChartAge() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Age Range');
        data.addColumn('number', 'Age Count');
        data.addRows([
          ['18-19', {{$ageCount["18-19"]}}],
          ['20-24', {{$ageCount["20-24"]}}],
          ['25-29', {{$ageCount["25-29"]}}],
          ['30-34', {{$ageCount["30-34"]}}],
          ['35-39', {{$ageCount["35-39"]}}],
          ['40-44', {{$ageCount["40-44"]}}],
          ['45-49', {{$ageCount["45-49"]}}],
          ['50 and Above', {{$ageCount["50AndAbove"]}}]
        ]);

        var options = {'title':'Age Chart',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_age'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartEducation);

      function drawChartEducation() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Education Level');
        data.addColumn('number', 'Total per Education Level');
        data.addRows([
          ['High School or Below', {{$educationCount["HighSchoolOrBelow"]}}],
          ['College', {{$educationCount["College"]}}],
          ['Bachelor', {{$educationCount["Bachelor"]}}],
          ['Master or Above', {{$educationCount["MasterOrAbove"]}}]
        ]);

        var options = {'title':'Education Chart',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.PieChart(document.getElementById('chart_education'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartStatus);

      function drawChartStatus() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Status of Loan');
        data.addColumn('number', 'Total per Status of Loan');
        data.addRows([
          ['Paid Off', {{$statusCount["paidoff"]}}],
          ['Collection', {{$statusCount["collection"]}}],
          ['Collection Paid Off', {{$statusCount["collectionPaidoff"]}}]
        ]);

        var options = {'title':'Status Chart',
                       'width':800,
                       'height':600};

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_status'));
        chart.draw(data, options);
      }


    </script>

    <div style="display: inline-flex;">

      <div id="chart_gender"></div>
      <div id="chart_age"></div>

    </div>
    <div style="display: inline-flex;">

      <div id="chart_education"></div>
      <div id="chart_status"></div>

    </div>
@stop