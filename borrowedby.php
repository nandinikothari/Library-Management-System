<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowedby</title>
</head>
<style>
        /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url('img/library1.jpg') center/cover no-repeat fixed;
        }

        fieldset {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
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
    </style> */<style>
    body {
        font-family: 'Arial', sans-serif;
        background: url('img/library1.jpg') center/cover no-repeat fixed;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 70vh;
        opacity:0.8;
    }

    fieldset {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    legend {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        padding: 12px;
        text-align: left;
        border: 1px solid #e0e0e0;
    }

    input[type="text"],
    input[type="date"] {
        width: calc(100% - 16px);
        padding: 8px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        padding: 12px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<body>
    <fieldset>
        <legend>Borrow Book</legend>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>Book Id</td>
                    <td><input type="text" name="b_id"></td>
                </tr>
                <tr>
                    <td>Return date</td>
                    <td><input type="date" name="ret"></td>
                </tr>
                <tr>
                    <td>Member Id</td>
                    <td><input type="text" name="mem_id"></td>
                </tr>
                <tr>
                    <td>Due date</td>
                    <td><input type="date" name="due"></td>
                </tr>
                <tr>
                    <td>Issue date</td>
                    <td><input type="date" name="issue"></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                </tr>
            </table>
            <?php
            error_reporting(0);
            $servername="localhost";
            $username="root";
            $password="";
            $database="libraray_capstone";
            
            $conn=mysqli_connect($servername,$username,$password,$database);
            
            $author=$_POST['b_id'];
            $title=$_POST['ret'];
            $price=$_POST['mem_id'];
            $ava=$_POST['due'];
            $pub=$_POST['issue'];
            
            $sql="INSERT INTO `borrowedby` (`issue_id`, `book_id`, `memb_id`, `due_date`, `issue_date`, `returndata`) VALUES ('', '$author', '$price', '$ava', '$pub', '$title');";
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