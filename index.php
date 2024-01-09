<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center><title>Library Management System</title></center>
    <link rel="stylesheet" type="text/css" href="styles_index.css">
</head>
<body>
 
<style>

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background: url('img/library2.jpg') center/cover no-repeat fixed;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    text-align: center;
    color: #fff;
}

h1 {
    color: #fff;
    margin-bottom: 20px; 
}

.buttons {
    margin-top: 30px;
}

.button {
    appearance: none;
    background-color: #4CAF50; 
    border-radius: 5px; 
    border: none; /* Changed from border-style to border */
    box-shadow: #ADCFFF 0 -12px 6px inset;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: block;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1.2rem;
    font-weight: 700;
    letter-spacing: -.24px;
    margin: 0 10px 10px 0; /* Adjusted margin */
    outline: none;
    padding: 1rem 1.3rem;
    text-align: center;
    text-decoration: none;
    transition: all .15s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
}

.button:hover {
    background-color: #45a049; 
    box-shadow: #FF6314 0 -6px 8px inset;
    transform: scale(1.125);
}

.button:active {
    transform: scale(1.025);
}

@media (min-width: 768px) {
    .button {
        font-size: 1.5rem;
        padding: .75rem 2rem;
    }
}

</style>
    <div class="container">
        <h1>Library Management System</h1>

        <div class="buttons">
            <a href="registermember.php" class="button">Add Member</a>
            <a href="book.php" class="button">Add Book</a>
            <a href="borrowedby.php" class="button">Borrowed Books</a>
            <a href="getcate.php" class="button">Catalog</a>
            <a href="cat.php" class="button">Search Books</a>
        </div>
    </div>
</body>
</html>
