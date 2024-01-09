<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<!-- <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url('img/library3.jpg') center/cover no-repeat fixed;
        }

        fieldset {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            opacity:0.8;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style> -->

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #2c3e50;
        margin: 0;
        padding: 0;
        color: #ecf0f1; 
        background: url('img/library3.jpg') center/cover no-repeat fixed;
    }

    fieldset {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #3498db;
        border-radius: 10px;
        background-color: rgba(44, 62, 80, 0.9); 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    }

    legend {
        font-size: 28px;
        font-weight: bold;
        color: #3498db;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #4b6584; 
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 12px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #576574; 
        border-radius: 5px;
        background-color: #34495e; 
        color: #ecf0f1; 
    }

    input[type="submit"] {
        padding: 15px;
        background-color: #3498db;
        color: #ecf0f1;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #2980b9; 
    }
</style>

<body>
  <fieldset>
    <form actiom="#" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address"></td>
        </tr>
        <tr>
          <td>Register Date</td>
          <td><input type="date" name="date"></td>
        </tr>
        <tr>
          <td><input type="submit" value="register"></td>
        </tr>
      </table>
      <?php
      error_reporting(0);
      $servername="localhost";
      $username="root";
      $password="";
      $database="libraray_capstone";
      $conn=mysqli_connect($servername,$username,$password,$database);
      
      $name=$_POST['name'];
      $add=$_POST['address'];
      $date=$_POST['date'];
      $sql = "INSERT INTO `member` (`memb_id`, `name`, `address`, `member_date`) VALUES ('', '$name', '$add', '$date');";

      if(mysqli_query($conn,$sql)){
        echo"New record is inserted";
      }else{
        echo "Error: ".mysqli_error($conn);
      }
      
      mysqli_close($conn);
      
      ?>
    </form>
  </fieldset>
</body>
</html>