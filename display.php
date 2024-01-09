<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data-Project</title>
    <link rel="stylesheet" href="Style.CSS">
    <style>
        th,td{
    border: 1px double ;
    padding: 5px;
}
   </style>
</head>
<body>
    <h1>Display Data</h1>
    <a href="index.php">Back</a>
  
    <?php
$display_data=mysqli_query($conn,"select * from `phpcrud`");
$num=1;
if(mysqli_num_rows($display_data)>0){
    echo "  <table>
    <thead>
        <th>SL No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Operation</th>
    </thead>
    <tbody> ";
   while($row=mysqli_fetch_assoc($display_data)){
    ?>
    <tr>
        <td><?php echo $num;?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['number']?></td>
            <td><?php echo $row['address']?></td>
            <td><a href="delete.php?delete=<?php echo $row ['id']?>" onclick="return confirm('Are You Sure?');">Delete</a>
            <a href="update.php?edit=<?php echo $row['id']?>">Edit</a>

            </td>
        </tr>
    <?php
    $num++;
   }
    

}else{
    echo "<div>No Data Available</div>";
   }


    ?>
    
   
        
    </tbody>
    </table>
</body>
</html>