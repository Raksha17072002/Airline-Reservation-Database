<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Payment Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 357px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="data:image/png;base64,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""/> 
		<h1 id="title">
		Aerofly Airways
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		
			<form action="payment_details_form_handler.php" method="post">
			<h2>ENTER THE PAYMENT DETAILS</h2>
			<h3 style="margin-left: 30px"><u>Payment Summary</u></h3>
			<?php
				$flight_no=$_SESSION['flight_no'];
				$journey_date=$_SESSION['journey_date'];
				$no_of_pass=$_SESSION['no_of_pass'];
				$total_no_of_meals=$_SESSION['total_no_of_meals'];
				$payment_id=rand(100000000,999999999);
				$pnr=$_SESSION['pnr'];
				$_SESSION['payment_id']=$payment_id;
				$payment_date=date('Y-m-d'); 
				$_SESSION['payment_date']=$payment_date;


				require_once('Database Connection file/mysqli_connect.php');
				if($_SESSION['class']=='economy')
				{	
					$query="SELECT price_economy FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				else if($_SESSION['class']=='business')
				{
					$query="SELECT price_business FROM Flight_Details where flight_no=? and departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$ticket_price);
					mysqli_stmt_fetch($stmt);
				}
				mysqli_stmt_close($stmt);
				mysqli_close($dbc);
				$total_ticket_price=$no_of_pass*$ticket_price;
				$total_meal_price=250*$total_no_of_meals;
				if($_SESSION['insurance']=='yes')
				{
					$total_insurance_fee=100*$no_of_pass;
				}
				else
				{
					$total_insurance_fee=0;
				}
				if($_SESSION['priority_checkin']=='yes')
				{
					$total_priority_checkin_fee=200*$no_of_pass;
				}
				else
				{
					$total_priority_checkin_fee=0;
				}
				if($_SESSION['lounge_access']=='yes')
				{
					$total_lounge_access_fee=300*$no_of_pass;
				}
				else
				{
					$total_lounge_access_fee=0;
				}
				$total_discount=0;
				$total_amount=$total_ticket_price+$total_meal_price+$total_insurance_fee+$total_priority_checkin_fee+$total_lounge_access_fee+$total_discount;
				$_SESSION['total_amount']=$total_amount;

				echo "<table cellpadding=\"5\"	style='margin-left: 50px'>";
				echo "<tr>";
				echo "<td class=\"fix_table\">Base Fare, Fuel and Transaction Charges (Fees & Taxes included):</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_ticket_price."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Meal Combo Charges:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_meal_price."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Priority Checkin Fees:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_priority_checkin_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Lounge Access Fees:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_lounge_access_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Insurance Fees:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_insurance_fee."</td>";
				echo "</tr>";

				echo "<tr>";
				echo "<td class=\"fix_table\">Discount:</td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_discount."</td>";
				echo "</tr>";

				echo "</table>";

				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<table cellpadding=\"5\" style='margin-left: 50px'>";
				echo "<tr>";
				echo "<td class=\"fix_table\"><strong>Total:</strong></td>";
				echo "<td class=\"fix_table\">&#x20b9; ".$total_amount."</td>";
				echo "</tr>";
				echo "</table>";
				echo "<hr style='margin-right:900px; margin-left: 50px'>";
				echo "<br>";
				echo "<p style=\"margin-left:50px\">Your Payment/Transaction ID is <strong>".$payment_id.".</strong> Please note it down for future reference.</p>";
				echo "<br>";
			?>
			<table cellpadding="5" style='margin-left: 50px'>
				<tr>
					<td class="fix_table"><strong>Enter the Payment Mode:-</strong></td>
				</tr>
				<tr>
					<td class="fix_table"><i class="fa fa-credit-card" aria-hidden="true"></i> Credit Card <input type="radio" name="payment_mode" value="credit card" checked></td>
					<td class="fix_table"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Debit Card <input type="radio" name="payment_mode" value="debit card"></td>
					<td class="fix_table"><i class="fa fa-desktop" aria-hidden="true"></i> Net Banking <input type="radio" name="payment_mode" value="net banking"></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Pay Now" name="Pay_Now">
		</form>

		<!-- 
•	Booking_Status
•	Payment_ID -->

		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
	</body>
</html>