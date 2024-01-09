<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!-- <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url('img/library4.jpg') center/cover no-repeat fixed;
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
            font-size: 30px;
            font-weight: bold;
            color: #333;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
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
        font-family: 'Arial', sans-serif;
        background: url('img/library4.jpg') center/cover no-repeat fixed;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        opacity:0.8;
    }

    fieldset {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        border: 2px solid #4caf50;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    legend {
        font-size: 30px;
        font-weight: bold;
        color: #4caf50;
        margin-bottom: 10px;
    }

    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        padding: 12px;
        border: 1px solid #e0e0e0;
    }

    input[type="text"],
    input[type="number"] {
        width: calc(100% - 16px);
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="radio"] {
        margin-right: 5px;
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

</head>
<body>
    <fieldset>
        <legend>Add Books</legend>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>Author</td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="number" name="price"></td>
                </tr>
                <tr>
                    <td><label>Available</label></td>
                    <td><input type="radio" name="ava" value="1">True</td>
                    <td><input type="radio" name="ava" value="0">False</td>
                </tr>
                <tr>
                    <td>Publisher</td>
                    <td><input type="text" name="pub"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit"></td>
                </tr>
            </table>
            <?php
            $servername = "localhost";
            error_reporting(0);
            $username = "root";
            $password = "";
            $database = "libraray_capstone";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            
            $author = $_POST['author'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $ava = $_POST['ava'];
            $pub = $_POST['pub'];
            $sql = "INSERT INTO `book` (`book_id`, `author`, `title`, `price`, `available`, `publisher`) VALUES ('', '$author', '$title', '$price', '$ava', '$pub');";
            
            if (mysqli_query($conn, $sql)) {
                echo "New record is inserted";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            $sql2= "SELECT * FROM 'book'";
            echo "mysqli_query($conn, $sql2)";
            
            mysqli_close($conn);
            ?>
        </form>
    </fieldset>
</body>
</html>
