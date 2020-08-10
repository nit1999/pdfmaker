<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$name=$_POST['user'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$Pname=$_POST['Pname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$title=$_POST['title'];
$Idate=$_POST['Idate'];
$Odate=$_POST['Odate'];
$total=$quantity*$price;
$stylesheet = file_get_contents('stylesheet.css');
$mpdf->WriteHTML($stylesheet,1);
$html='<div style="text-align:center;"><h1>Invoice Details</h1></div><br><br><br>';
$htmlHeader='<br><br><br><br><table style="background-color:ff2234;">
<tr><td><img src="logo.png" style="height: 50px;width:50px; text-align: center;"/></td></tr>
<td><p>Contact Us : +91-'.$contact.'</p><h4>'.$address.'</h4></td>
<td><p style="border:1px dotted black;"><strong>Tax Invoice :</strong> #nitesh4203</p></td>
</table><hr width="50%">';
// $htmlHeader = '<div><img src="logo.png" style="height: 50px;width:50px; text-align: center;"/></div><br/><br/>
// <span><p>Contact Us: </p></span><hr>';
$mpdf->SetHTMLHeader($htmlHeader);
$html.='<br><br><table>
<tr>
<td><h3>Order Id :</h3> <span> ORDID12</span></td>
<td><h3>Order Date :</h3> <span>'.$Odate.'</span></td>
<td><h3>Invoice Date :</h3> <span>'.$Idate.'</span></td>
<td><h3>Service Tax :</h3> <span> st23424</span></td>
</tr>
<tr>
<td>
<h3>Billing Address : </h3>
<strong>'.$name.'</strong>
<p>'.$address.'</p>
<p>Phone : +91-'.$contact.'</p>
</td>
<td>
<h3>Billing Address : </h3>
<strong>'.$name.'</strong>
<p>'.$address.'</p>
<p>Phone : +91-'.$contact.'</p>
</td>
</tr>
</table><hr>';
$html.='<table>
<tr>
  <th>Product Items</th>
  <th>Title</th>
  <th>Quant</th>
  <th>Price</th>
  <th>Total</th>
</tr>
<tr>
  <td>'.$Pname.'</td>
  <td>'.$title.'</td>
  <td>'.$quantity.'</td>
  <td>₹ '.$price.'</td>
  <td>₹ '.$quantity*$price.'</td>
</tr>
</table>';
$html.='<hr>';
$html.='<div><h3 style="text-align:right;">Total Price = ₹ '.$quantity*$price.'<div></h3>';
$html.='<hr><p>This is digital sign</p>';
$html.='<br><br>';
$mpdf->WriteHTML($html);
$mpdf->Output(''.$name.'.pdf','D');




 ?>
