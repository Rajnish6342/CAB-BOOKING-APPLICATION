<?php
//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["ref"]))
{
 require_once 'pdf.php';
 $ref=$_REQUEST['ref'];
 include('conn.php');
 $output = '';
 $sql = "SELECT * FROM bookings WHERE book_ref= '$ref' LIMIT 1";
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
         Reverse Charge<br />
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
        
        <th rowspan="2">Total</th>
       </tr>
       <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        
        
       </tr>';
  //$statement = $connect->prepare(
   //"SELECT * FROM tbl_order_item 
  // WHERE order_id = :order_id"
 // );
 // $statement->execute(
  // array(
  //  ':order_id'       =>  $_GET["id"]
  // )
 // );
 // $item_result = $statement->fetchAll();
 // $count = 0;
 // foreach($item_result as $sub_row)
 // {
 // $count++;
  // $output .= '
  // <tr>
    
  // </tr>
   //';
 // }
  //$output .= '
 // <tr>
   
  //</tr>
  
 // ';
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