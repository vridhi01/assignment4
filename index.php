<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Assignment4</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css?ver=<?php echo rand(2,3);?>">
      <style>
          table {
  font-family: arial, sans-serif;
border-collapse: collapse;
width: 60%;
}

td, th {
border: 1px solid black;
text-align: center;
}

tr:nth-child(odd) {
background-color: #dddddd;
border: 1px solid black;
}
.td1{
padding: 4px 45px;
}
.td2{
padding: 0 8px;
}
.td3{
padding: 0 25px;
}
.td4{
padding: 3px 8px;
}
          </style>
   </head>
 <body>
<h2>Assignment-4</h2>

<table>
<tr>
    <th colspan="2">SL No/Date</th>
    <th>Item</th>
    <th>Quantity</th>
    <th>Color</th>
    <th>Total Price</th>
</tr> 
<tr>
    <td class="td1">1
    <td class="td2">2011-05-05</td>
    <td class="td3">Item A</td>
    <td class="td2">15</td>
    <td class="td3">Blue</td>
    <td class="td2">1500</td>
  </tr>
  <tr>
    <td class="td1">2</td>
    <td class="td2">2011-05-05</td>
    <td class="td3">Item B</td>
    <td class="td2">25</td>
    <td class="td3">Red</td>
    <td class="td2">2500</td>
  </tr>
  <tr>
    <td class="td1">3</td>
    <td class="td2">2011-05-05</td>
    <td rowspan="2" class="td3">Item C</td>
    <td class="td2">12</td>
    <td class="td3">Red</td>
    <td class="td2">1200</td>
  </tr>
  <tr>
    <td class="td4"></td>
    <td class="td4">2011-05-06</td>
    <td class="td4">12</td>
    <td class="td4">Red</td>
    <td class="td4">1500</td>
  </tr> 
</table>



</body>
</html>