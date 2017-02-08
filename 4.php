<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Draw a right-angled triangle</title>
</head>
<body onload="draw();">
<canvas id="canvas" width="150" height="150"></canvas>
</body>
</html>
JavaScript Code :

function draw() 
{
  var canvas = document.getElementById('canvas');
  if (canvas.getContext)
  {
    var context = canvas.getContext('2d');

    context.beginPath();
    context.moveTo(75,75);
    context.lineTo(10,75);
    context.lineTo(10,25);
    context.fill();
  }
}