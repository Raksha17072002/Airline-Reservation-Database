<?php

    session_start();
    error_reporting(1);
  ?>

  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
  <?php

$con=mysqli_connect("localhost","root","","airline_reservation");
$q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers, lounge_access, priority_checkin, insurance, payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$flight_no= $n['flight_no'];
$journey_date= $n['journey_date'];
$class= $n['class'];
$booking_status= $n['booking_status'];
$no_of_passengers= $n['no_of_passengers'];
$lounge_access= $n['lounge_access'];
$priority_checkin= $n['priority_checkin'];
$insurance= $n['insurance'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];




$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>

<hr style="border: 1px solid black;border-style: dashed;">
<center><h3>Aerofly Airways</h3></center>
<center><h2>Boarding Pass - Flight Reservation Slip</h2></center><h4><?php echo $booking_status;?></h4>
<br>
<td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $id;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Flight No : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $flight_no;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Date of journey : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $journey_date;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Class : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $class;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Payment ID : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $payment_id;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Lounge Access : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $lounge_access;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Priority Checkin : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $priority_checkin;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">Insurance : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $insurance;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Booked By (Username) : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $customer_id;?> </td><br>
<td style="width:4%;"> <font style="font-family: Verdana;">Status: </font> </td>
                    <td style="width:58%;" colspan="3"> <?php echo $booking_status;?> </td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td style="width:4%;"> <font style="font-family: Verdana;">No. of Passengers: </font> </td>
                    <td style="width:58%;" colspan="3"> <?php echo $no_of_passengers;?> </td>

    <body>

                 
                
        </div>
<center><img src="data:image/png;base64,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" width="200px" height="180px" >
<img src="https://wallpaperaccess.com/full/254381.jpg" width="200px" height="180px"></center>
         
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
              
                
                <center><font style="font-family:Verdana; font-size:18px;">
                   
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
		
                   </font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='images/';
                    $result1 = mysqli_query($con,"SELECT * FROM passengers where pnr='".$_SESSION['user']."'");
                   $row1 = mysqli_fetch_array($result1)  ; 
                    
                    
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        
                   ?>
                        </td>
                 </tr>   


    
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Passenger No : </font> </td>
                    <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
                </tr>
                  
                  <tr>
                    <td > <font style="font-family: Verdana;"> Name</font>  </td>
                    <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
                    <?php echo ' Age - '.$row[3] ?></td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Gender</font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Meail Choice</font></td>
                    <td> <?php echo $row[5] ?></td>
                    <td><font style="font-family: Verdana;"> Frequent Flier No. (If any)</font></td>
                    <td> <?php echo $row[6] ?> </td>

                  </tr>
                
                
                
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
 <p> 
<center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a class="print_hide" href="pnr.php">Check other PNR</a></center>
</p>
   <style>
     @media print {
      .print_hide{
        display:none;
      }
     }
   </style> 

    </body>
</html>


                     