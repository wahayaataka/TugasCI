<style>
            body {
        background-image: url('../assets/bg.jpg');
        background-size: cover;
        text-align:center;
    }
    h1 {
    font-size: 30px;
    text-decoration: none;
    color: #9ddbf2;
    border: #9ddbf2 2px solid; /*GELAP*/
    padding: 20px 20px;
    border-radius: 10px;
    margin-top: 20px;

    }
</style>
<body>
<h1><a href="<?= base_url('index.php/welcome/dashboard/Lintang/Cewek')?>">Welcome</a></h1>
<?= $this->uri->segment(1) ?> <br>
<?= $this->uri->segment(2) ?> <br>
<?= $this->uri->segment(3) ?>
</body>