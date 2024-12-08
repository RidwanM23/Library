<?php
if(!defined('SECURE_ACCESS')){
    die('Direct Access not permitted');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beau Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    height: 10000rem; /* Tinggi yang sangat besar untuk demonstrasi */
}



/* Header */
.navbar {
    background-color: #f9e7d8; /* Warna latar belakang navbar */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 50px;
    position: sticky; /* Membuat navbar tetap terlihat saat scroll */
    top: 0; /* Menempatkan navbar di atas */
    z-index: 1000; /* Pastikan navbar di atas elemen lain */
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
    display: flex;
    align-items: center;
}

.navbar .logo img {
    width: 40px;
    margin-right: 10px;
}

.navbar ul {
    list-style: none;
    display: flex;
}

.navbar ul li {
    margin: 0 15px;
}

.navbar ul li a {
    text-decoration: none;
    color: black;
    font-size: 16px;
}

.navbar .search-icon {
    font-size: 20px;
}

/* Main Section */
.main-section {
    background: url("https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D") no-repeat center center/cover;
    height: 100vh; /* Tinggi penuh layar */
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    color: white;
}

.main-section h1 {
    font-size: 50px;
    margin-bottom: 20px;
}

.main-section p {
    font-size: 18px;
    max-width: 600px;
    margin-bottom: 30px;
}

.main-section .btn {
    border-radius: 8px;
    background-color: white;
    color: black;
    font-family: 'Times New Roman', Times, serif;
    padding: 10px 20px;
    border: none;
    font-size: 18px;
    cursor: pointer;
}

.main-section .btn:hover {
    background-color: #342828; /* Efek hover pada tombol */
}
        
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <header class="navbar">
        <div class="logo">
            <img src="https://png.pngtree.com/png-clipart/20210815/original/pngtree-beauty-logo-png-image_6628447.jpg" alt="Library Logo">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#About">About Us</a></li>
            <li><a href="/Book">Book</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="search-icon"></div>
    </header>

    <!-- Main Section -->
    <section class="main-section">
        <h1>WELCOME TO BEAU <span style="color: red;">LIBRARY</span></h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <button class="btn">GET STARTED</button>
    </section>

    <div class="About" id="About">
        <h1 align="center">ABOUT US</h1>
        <div class="card mb-3 container-xl" style="height:600px; border: none;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1508107536691-b1449928187d?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">About</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, itaque quia magni, eligendi ipsa fugit repellat unde sunt dignissimos eum rem, illo repudiandae? Eum error ad rerum corporis, aut minus nesciunt placeat possimus voluptatibus adipisci vitae, vero doloremque autem nostrum nemo totam dicta amet asperiores, omnis voluptates quidem unde eaque quae reiciendis. Inventore mollitia quis dignissimos debitis optio sed, laboriosam expedita, ex beatae at aliquam, hic vel. Veritatis quam, quibusdam illum, sed aliquid ea perspiciatis rerum adipisci natus voluptate debitis incidunt quasi blanditiis fuga animi asperiores iste porro officia? Quos, ad ipsum. Libero ducimus debitis placeat optio? Accusantium, aut eaque?</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
