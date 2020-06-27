<html>  
<head lang="en">  
    <meta charset="UTF-8">  
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>
    <div class="collapse navbar-collapse" id="collapse">
    <ul class="nav navbar-nav">
        <li><a href="logout.php"><span class="glyphicon glyphicon-home"></span>Logout</a></li>
        <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>Add new Users</a></li>
        
    </ul>
    </div>
  
<div class="table-scrol">  
    <h1 align="center">Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: auto">  
        <thead>  
  
        <tr>  
  
            <th>id</th>  
            <th>First name</th>  
            <th>Last name</th>  
            <th>Email</th>  
            <th>Password</th>  
            <th>MObile number</th>
            <th>Address1</th>
            <th>Address2</th>
        </tr>  
        </thead>  
  
        <?php  
        include("db.php");  
        $view_users_query="select * from user_info";//select query for viewing users.  
        $run=mysqli_query($con,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $first_name=$row[1];  
            $last_name=$row[2];  
            $email=$row[3];  
            $password=$row[4];
            $mobile = $row[5];
            $address1=$row[6];
            $address2=$row[7];  
  
  
        ?> 
       
     <tr height="50"> 
   
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $first_name;  ?></td>  
            <td><?php echo $last_name;  ?></td> 
            <td width="5%"><?php echo $email;  ?></td>  
            <td><?php echo $password;  ?></td>
            <td><?php echo $mobile;  ?></td> 
            <td><?php echo $address1;  ?></td> 
            <td><?php echo $address2;  ?></td> 
            <td><a href="delete.php?delid=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
     
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>