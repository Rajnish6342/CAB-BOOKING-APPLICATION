<?php
//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["ref"]))
{
 require_once 'pdf.php';
 $ref=$_REQUEST['ref'];
 include('conn.php');
 $output = '';
 $sql = "SELECT vehicle.v_no as Vno,vehicle.v_type,drivers.d_fname,drivers.d_sname,bookings.start_loc,bookings.end_loc,bookings.book_ref,bookings.email_id,bookings.username,bookings.bk_date,bookings.fare,bookings.dist,bookings.price  from bookings join vehicle on bookings.v_id=vehicle.v_id  join drivers on bookings.drvr=drivers.d_mail WHERE bookings.book_ref='$ref' LIMIT 1";
$result=mysqli_query($con,$sql);
 foreach($result as $row)
 {
  $output .= '
 
   
    
   <table width="100%" border="1" cellpadding="5" cellspacing="0">
   
  
    <tr>
     <td colspan="2" align="center" style="font-size:18px"><b>Invoice</b></td>
    </tr>
    <tr>
     <td colspan="2">
      <table width="100%" cellpadding="5">
       <tr>
        <td width="65%">
         To,<br />
         <b>RECEIVER (BILL TO)</b><br />
         Name : '.$row["username"].'<br /> 
         Email Address : '.$row["email_id"].'<br />
        </td>
        <td width="35%">
         Vehcile Type:'.$row["v_type"].' <br />
         Invoice No. : '.$row["book_ref"].'<br />
         Booking Date : '.$row["bk_date"].'<br />
        </td>
       </tr>
      </table>
      <br />
        <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <tr>
          <th>Vehicle No.</th>
          <th>Driver Name</th>
          <th>Pickup</th>
          <th>Drop</th>
          <th>Price/Km</th>
          <th >Distance</th>
          
          <th >Total</th>
        </tr>
        <tr>
          <th>'.$row['Vno'].'</th>
          <th>'.$row['d_fname'].' '.$row['d_sname'].'</th>
          <th>'.$row['start_loc'].'</th>
          <th>'.$row['end_loc'].'</th>
          <th>'.$row['price']. '</th>
          <th>'.$row['dist'].'</th>
          <th>'.$row['fare']. ' </th>
          
          
        </tr>';
    
          $output .= '
        </table>
     </td>
    </tr>
   </table>
  ';
 }
 $pdf = new Pdf();
 $file_name = 'Invoice-'.$row["book_ref"].'.pdf';
 $pdf->loadHtml($output);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}
?>