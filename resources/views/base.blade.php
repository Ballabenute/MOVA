@extends('layout')

@section('title', 'Basic')


@section('content')
	<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChartGender);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChartGender() {

        // Create the data table.
        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Male', {{$genderCount["male"]}}],
          ['Female', {{$genderCount["female"]}}]
        ]);

        // Set chart options
        var options = {'title':'Gender Chart',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_gender'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartAge);

      function drawChartAge() {

        // Create the data table.
        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
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

        // Set chart options
        var options = {'title':'Age Chart',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_age'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartEducation);

      function drawChartEducation() {

        // Create the data table.
        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['High School or Below', {{$educationCount["HighSchoolOrBelow"]}}],
          ['College', {{$educationCount["College"]}}],
          ['Bachelor', {{$educationCount["Bachelor"]}}],
          ['Master or Above', {{$educationCount["MasterOrAbove"]}}]
        ]);

        // Set chart options
        var options = {'title':'Education Chart',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_education'));
        chart.draw(data, options);
      }

      google.charts.setOnLoadCallback(drawChartStatus);

      function drawChartStatus() {

        // Create the data table.
        var data = new google.visualization.DataTable();``
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Paid Off', {{$statusCount["paidoff"]}}],
          ['Collection', {{$statusCount["collection"]}}],
          ['Collection Paid Off', {{$statusCount["collectionPaidoff"]}}]
        ]);

        // Set chart options
        var options = {'title':'Status Chart',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_status'));
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