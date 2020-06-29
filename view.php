
<?php
//print the last record in table REMOTE 
// Create connection
  $conn1 = new mysqli("localhost","root","","control");

  $sql1 = mysqli_query($conn1, "select * from remote order by ID desc limit 1");
  $print_data= mysqli_fetch_row($sql1);

  if($print_data[1]=="Stop"){
     echo $print_data[1];
  }
  if($print_data[2]=="Backwards"){
     echo $print_data[2];
  }
  if($print_data[3]=="Forwards"){
     echo $print_data[3];
  }
  if($print_data[4]=="Right"){
     echo $print_data[4];
  }
  if($print_data[5]=="Left"){
     echo $print_data[5];
  }


  $conn1->close();
 ?>
