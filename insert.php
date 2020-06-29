<!DOCTYPE html>
<html>

<head>
    <title> control panel </title>

    <style>
    body
    {background-color: #ccb3ff ;
    background-image: url(robot2.png);
    background-repeat: no-repeat;
    background-size: 40% 100%;
    background-size: auto;
    background-position: left top;
    text-align: center;
    }

    h1 {
    color: white;
    font-size: 58px;
    font-weight: 800;
    position: relative;
    margin-top: 1.2em;
    margin-left: 0;
    margin-right: 0;
    font-weight: bold;
    text-align: center;
    font-family: "montserrat";
    }

    table {
     width: 500px;
     height: 100%;
     padding: 5px;
     text-align: center;
     margin-left: auto;
     margin-right: auto;
     text-align: center;
    }

      input {
      background-color: #ffffff;
      border: 1px ;
      font-size: 25px;
      border-radius: 100px;
      font-family: "montserrat";
      padding: 15px ;
      margin: 1px ;
      padding-left: 40px;
    padding-right: 40px;

    }


     input:hover {
     background: #9966ff;
     cursor: pointer;
     text-transform: uppercase;
    }

    </style>
    </head>

<body >

    <?php
    // Create connection
    $conn = new mysqli("localhost","root","","control");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

        if(isset($_POST['Forwards'])) {
          $sql = "INSERT INTO remote (ID,stop,back,forward,R,L)
          VALUES ('', '', '','Forwards', '','')";
        }
        if(isset($_POST['Left'])) {
          $sql = "INSERT INTO remote (ID,stop,back,forward,R,L)
          VALUES ('', '', '','', '','Left')";
       }
        if(isset($_POST['Stop'])) {
          $sql = "INSERT INTO remote (ID,stop,back,forward,R,L)
          VALUES ('', 'Stop', '','', '','')";

        }
        if(isset($_POST['Right'])) {
          $sql = "INSERT INTO remote (ID,stop,back,forward,R,L)
          VALUES ('', '', '','', 'Right','')";
        }
        if(isset($_POST['Backwards'])) {
          $sql = "INSERT INTO remote (ID,stop,back,forward,R,L)
          VALUES ('', '', 'Backwards','', '','')";
        }


      /*  if ($conn->query($sql) === TRUE) {
          //echo "New record created successfully";
        } else {
          //echo "Error: " . $sql . "<br>" . $conn->error;
        }*/

        $conn->close();
    ?>

    <form method="post"> <table ><tr><td> <h1> Control Panel </h1></td> </tr>
    <tr><td >
    <input name="Forwards" type="submit" value="Forwards" ></td></tr>
    <tr><td><input name="Left" type="submit" value="left">
    <input name="Stop" type="submit" value="Stop">
    <input name="Right" type="submit" value="Right"> </td></tr>
    <tr><td><input name="Backwards" type="submit" value="Backwards"> </td> </tr>
    </th> </tr></table></form>

</head>

</html>
