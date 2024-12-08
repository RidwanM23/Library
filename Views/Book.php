<?php
$number = 1;
if(!defined('SECURE_ACCESS')){
    die('Direct Access not permitted');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Beau Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f6f1e6;
        }

        /* Sidebar */
        .sidebar {
            width: 20%;
            background-color: #f9e7d8;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-top-right-radius: 30px;
        }

        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .sidebar .menu {
            list-style: none;
        }

        .sidebar .menu li {
            margin: 15px 0;
        }

        .sidebar .menu li a {
            text-decoration: none;
            color: black;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .sidebar .menu li a i {
            margin-right: 10px;
        }

        .sidebar .contact {
            font-size: 14px;
            margin-top: 50px;
            color: #333;
        }

        /* Main Content */
        .main-content {
            width: 80%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }

        .main-header {
            background: url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center/cover;
            height: 400px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 50px;
        }

        .main-header h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            margin-top: 20px;
            width: 50%;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border: none;
            font-size: 16px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #ff6347;
            color: white;
            border: none;
            cursor: pointer;
        }

        .statistics {
            display: flex;
            justify-content: space-around;
            background-color: #fdf6ef;
            padding: 50px 0;
        }

        .statistics div {
            text-align: center;
        }

        .statistics div h2 {
            font-size: 40px;
            color: black;
        }

        .statistics div p {
            font-size: 18px;
            color: red;
        }

        .discover {
            padding: 50px;
        }

        .discover h2 {
            font-size: 30px;
            color: red;
            margin-bottom: 20px;
        }

        .discover p {
            font-size: 16px;
            color: #555;
            max-width: 700px;
            line-height: 1.6;
        }

        .discover .cta-button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <div class="logo">BEAU <span style="color: red;">LIBRARY</span></div>
            <ul class="menu">
                <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                <li><a href="Home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fas fa-book"></i>Books</a></li>
                <li><a href="#"><i class="fas fa-save"></i>Shop Chart</a></li>
            </ul>
        </div>
        <div class="contact">Contact us</div>
    </div>

    
    
    <!-- Main Content -->
    <div class="main-content text-center">
        <div class="main-header">
            <h1>EXPLORE THE VAST WORLD OF BOOKS</h1>
            <form method="GET" class="d-flex justify-content-between align-items-center">
            <div class="search-bar">
                <input type="text"
                placeholder="Search"
                name="find"
                required
                />
                <button class="btn btn-sm">Search</button>
            </div>
            </form>
        </div>


        
        <div class="table-light container mx-auto table-striped">
            <table class="table-hover">
                <thead>
                    <tr>
                        <th scope="row">NO</th>
                        <th>Tittle</th>
                        <th>Author</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $book):?>
                    <tr>
                        <th><?=$number++?></th>
                        <th><?=$book->getTittle()?></th>
                        <th><?=$book->getAuthor()?></th>
                        <th><?=$book->getYear()?></th>
                    </tr>
                </tbody>
                <?php endforeach?>
            </table>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
