<!DOCTYPE html>
<html>
<head>
<title>CSS326 Sample</title>
<link rel="stylesheet" href="admin_hotel_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		CAPP hotel booking		
		<span style="display:inline-block; width: 700px;"></span>	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="Admin_hotel.php">Hotels</a></li>
			<li><a href="Admin_booking.php">Booking </a></li>
		</ul>	
		<!--<ul id="menulog_reg">
			<li><a href="login_cus.html">Login</a></li>
			<li><a href="regis_cus.html">Register </a></li>
			
		</ul>	-->	
	</div>
	<div id="div_main">
		
		<div id="div_content" class="usergroup">
			<!--%%%%% Main block %%%%-->
			<div class="topper">
			<h1 id="Hotel_list_head">HOTEL LIST</h1> 
            <span style="display:inline-block; width: 700px;"></span>
            <input type="text" id="search_input" name="search">
            <input type="submit" id="search_button" value="Search" >
        
        </div>
            <br></br>
			<table>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="8%">
                <col width="8%">
                <col width="12%">
                <col width="15%">
                <col width="10%">
                <col width="20%">

                <tr>
                    <th>Owner ID</th> 
                    <th>Building ID</th>
                    <th>Room ID</th>
                    <th>Max Adult</th>
                    <th>Price</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

                <?php if (isset($_POST['submit']))?>

                 <tr>
                    <td><?php echo $_POST['title'];?></td> 
                    <td><?php echo $_POST['firstname']." ".$_POST['lastname'];?></td>
                    <td><?php echo$_POST['email'];?></td>
                    <td><?php echo$_POST['usergroup'];?></td>
                    <td><?php echo$_POST['Disable'];?> </td>
                    <td><?php echo "hi";?></td>
                    <td><?php echo "hello";?></td>
                    <td><?php echo "status";?></td>
                    <td>  <span style="display:inline-block; width: 16px;"></span>
                        <input type= "submit" name="EDIT" value="EDIT">
                        <span style="display:inline-block; width: 20px;"></span>
                        <label>Disable</label>
                        <input type= "checkbox" class="toggleCheckbox"></td>
                </tr>      
            </table>
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>

