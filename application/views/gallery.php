<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Admin</title> 
    <style>
    body {
        background-image: url('../../assets/bg.jpg');
        background-size: cover;
        text-align: center;
        color: white;
    }
    .box {
      width: 930px;
      margin: 0 auto;
      padding: 10px;
    }
    
    p {
        font-size: 20px;
    }
    </style>
</head>
<body>
<div class="box">
    <img src="<?= base_url()?>assets/nama.jpg" alt="">
    <h1>Lintang</h1>
    <h5>Web Develomper</h5>
    <p>A Potterhead</p>
    <p>Hubungi Kontak : 081111111111</p>
</div>
<div>
    <h3 class="judul">Harry Potter Gallery</h3>
    <img class="foto" width="500" height="300" src="<?= base_url()?>assets/lestrange.jpg" alt="">
    <div>
    <a href="https://www.google.com/search?safe=active&biw=1304&bih=697&tbm=isch&sa=1&ei=erFGXJS_AYnmvATfl46gCw&q=bellatrix+lestrange&oq=bellatrix&gs_l=img.3.0.0i19l10.33660.34922..36082...0.0..0.315.2179.0j2j6j1......1....1..gws-wiz-img.......35i39.mAw5FFWMOdk"> Click for more </a></div>
    <p>Bellatrix Lestrange</p>
    <img class="foto" src="<?= base_url()?>assets/malfoy.jpg" alt="">
    <div><a href="https://www.google.com/search?safe=active&biw=1304&bih=697&tbm=isch&sa=1&ei=VbFGXLa5LofmvATe3434Aw&q=draco+malfoy&oq=draco+malfoy&gs_l=img.3..0i19l10.20933.22836..23177...0.0..0.210.2103.0j9j3......1....1..gws-wiz-img.......35i39.jJjmifTko1w"> Click for more </a></div>
    <p>Draco Malfoy</p>
    <img class="foto" src="<?= base_url()?>assets/lovegood.jpg" alt="">
    <div><a href="https://www.google.com/search?q=luna+lovegood&safe=active&source=lnms&tbm=isch&sa=X&sqi=2&ved=0ahUKEwiW6I_h2oDgAhUyIbkGHZWfBEgQ_AUIDigB&biw=1304&bih=697"> Click for more </a></div>
    <p>Luna Lovegood</p>
    </div>
</body>
</html>