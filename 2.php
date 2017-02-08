<!DOCTYPE html>
  <html>
  <head>
  <meta charset=utf-8 />
  <title>Draw a circle</title>
  </head>
  <body onload="draw();">
  <canvas id="circle" width="150" height="150"></canvas>
  </body>
  </html>
JavaScript Code :

function draw()
  {
var canvas = document.getElementById('circle');
if (canvas.getContext)
{
var ctx = canvas.getContext('2d'); 
var X = canvas.width / 2;
var Y = canvas.height / 2;
var R = 45;
ctx.beginPath();
ctx.arc(X, Y, R, 0, 2 * Math.PI, false);
ctx.lineWidth = 3;
ctx.strokeStyle = '#FF0000';
ctx.stroke();
}
}