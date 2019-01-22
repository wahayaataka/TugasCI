<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
    body {
        background-image: url('../../assets/bg.jpg');
        background-size: cover;
    }
    p {
        font-family: sans-serif;
        font-size: 50px;
        color: White;
        text-align: center;
    }
    #showcase {
    font-size: 20px;
    text-decoration: none;
    color: #9ddbf2;
    border: #9ddbf2 2px solid; /*GELAP*/
    padding: 30px 20px;
    border-radius: 10px;
    margin-top: 20px;
    
    }
    #showcase:hover{
    transition: 0.5s;
    background-color: #9ddbf2;
    color: black;
    }
    .btn {
    background-color: transparent; /* Green */
    border: none;
    color: white;
    padding: 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    cursor: pointer;
    float: left;
    margin: 0 85px;
    border-bottom: 4px solid #9ddbf2;
    }
    .btn:hover {
        transition: 0.5s;
        background-color: black;
        color: #9ddbf2;
        border: #9ddbf2;
    }
    </style>
</head>
<body>

<header id="showcase">
      <div class="center">
        <p>Welcome!</p>
      </div>
    </header> 
    <div class="atas">
    <nav>
    <ul>
    <a type="button" href="<?= base_url('index.php/Welcome/event')?>" class="btn">Event</a>
    <a type="button" href="<?= base_url('index.php/Welcome/gallery')?>" class="btn">Gallery</a>
    <a type="button" href="<?= base_url('index.php/Welcome/contact')?>" class="btn">Contact</a>
    <a type="button" href="<?= base_url('index.php/Welcome/profil')?>" class="btn">My Profile</a>
    </ul>
    </nav>
    </div>
</body>
</html>