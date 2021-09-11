<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
<style> 
.nav-bar {
margin-top:100px;
width:90%;
background-color:grey;
height:40px;
border-radius:10%;
margin-left:40px;
}
 .nav-bar-content {
    padding-top:6px;
    display:flex;
    justify-content: space-around;
} 
.title-header{
    display:flex;
    justify-content: center;

}
a{
    color:black;
    background-color:white;
    border-radius:20px;
    font-size:20px
}
</style>
</head>
<body>
<header>
        <h1 class="title-header" >LOGOTIPO</h1>
</header>
<?php
include "modules/navbar.php"
?>
<section>
<?php
    $mvc = new MvcController();
    $mvc -> enlacesPaginasController();
?>
</section>
</body>
</html>