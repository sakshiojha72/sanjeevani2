<html>             

    <body>
    <body style="background-color: #FFFFE0;">
</body>
    <?php
			 			
	  $conn = mysqli_connect("127.0.0.1", "root", "", "eclinic");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }
        
                    $sql = "select Hos_ID,Hospital_Name,specialisations,doc_name,assi_name from hospital ";
                
                   
                    $result = $conn->query($sql);
                   
                    if ( $result->num_rows > 0) 
                    {
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>complaint</title>
    <link rel="stylesheet" href="clinic2.css">
</head>
<body>

           <table align="left" border="lpx" style="width:200px; line-height:10px;">
                    <tr> <th colspan="6"></th></tr>
                    <t>
                        <th>Hospital ID</th>
                        <th>Hospital Name</th>
                        <th>Specialisations</th>
                        <th>Doctor Name</th>
                        <th>Assisstant Name</th>
                        <!-- <th> votes for yes</th>
                        <th> votes for no</th> -->
          
                        
                    </t>

    <?php
            while($row = $result->fetch_assoc()) 
            {   
    ?>
                    <tr>
                        
                        <td><?php echo $row["Hos_ID"]; ?></td>
                        <td><?php echo $row["Hospital_Name"]; ?></td>
                        <td><?php echo $row["specialisations"]; ?></td>
                        <td><?php echo $row["doc_name"]; ?></td>
                        <td><?php echo $row["assi_name"]; ?></td>
                
                        
                      
                                </td>
                    </tr>

                 <? php echo $row["yes"]; ?> 
                <!-- >/td> -->
                    
    <?php
            }}
    ?>
        </table>

      <!-- leave your vote buttons here YES/NO   -->
      

      
</body>
</html>
<?php

        // Close connection
        mysqli_close($conn);

?> 

 </body>
</html>