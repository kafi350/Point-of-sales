 function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: "Sales - per month"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "line",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2016, 00, 1), y: 450 },
        { x: new Date(2016, 01, 1), y: 414},
        { x: new Date(2016, 02, 1), y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2016, 03, 1), y: 460 },
        { x: new Date(2016, 04, 1), y: 450 },
        { x: new Date(2016, 05, 1), y: 500 },
        { x: new Date(2016, 06, 1), y: 480 },
        { x: new Date(2016, 07, 1), y: 480 },
        { x: new Date(2016, 08, 1), y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
        { x: new Date(2016, 09, 1), y: 500 },
        { x: new Date(2016, 10, 1), y: 480 },
        { x: new Date(2016, 11, 1), y: 510 }
        
        ]
      }
      
      
      ]
    });

chart.render();
}

 $(function() {
     $("#lets_search").bind('submit',function() {
         var value = $('#str').val();
         $.post('db_query.php',{value:value}, function(data){
             $("#search_results").html(data);
         });
         return false;
     });
 });






