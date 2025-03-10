<?php
    $tab_menu = array("My Info", "Education", "Skills", "Courses", "Exprience", "Contact Me");
    $n=count($tab_menu);
    if (isset($_GET['tab'])){
        $page = $_GET['tab'];
    }
    else{
        $page = 0;
    }
    // function isMobile() {
    //     return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    // }
    // echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
    $my_in = file_get_contents('main_page.html');
    $Edu = file_get_contents('Education.html');
    $crs = file_get_contents('courses.html');
    $ex = file_get_contents('experience.html');


    // https redirect --- doesn't work in local host
    // if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off"){
    //     echo  $_SERVER['HTTP_HOST'];
    //     header('Location: https://fawzy.great-site.net');
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Fawzy Nissem CV
    </title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fcf03d2ece.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css" title="external style sheet">
</head>
<body>
    <div class="sticky-top shadow">
        <ul class="nav nav-pills nav-fill ">
            <?php
                for($i=0; $i < $n ; $i++){
                    if ($page==$i){
                        echo '<li class="nav-item"><a class="nav-link active " href="index.php?tab='.$i.'">'.$tab_menu[$i].'</a></li>';    
                    }
                    else{
                        echo '<li class="nav-item"><a class="nav-link " href="index.php?tab='.$i.'">'.$tab_menu[$i].'</a></li>';
                    }
                }
            ?>
            
        </ul>
    </div>
    <?php 
    switch($page){
        case 0:
            echo $my_in;
            break;
        case 1:
            echo $Edu;
            break;
        case 2:
            include "skills.php";
            break;
        case 3:
            echo $crs;
            break;
        case 4:
            echo $ex;
            break;
        case 5:
            include "contact.php";
            break;
    }
    ?>
    <!-- the footer of all pages -->
    <footer class="text-center text-white" style="background-color: #E9ECEF ;">
        <div class="container pt-4">
        <section>
            <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://www.linkedin.com/in/fawzy-nissem-719082195/"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
            ></a>
            <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://github.com/foozy346"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
            ></a>
            <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="index.php?tab=5"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fa-sharp fa-solid fa-envelope"></i>
            </a>
            <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://wa.me/201018174206"
            role="button"
            data-mdb-ripple-color="dark">
            <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="https://t.me/+201018174206"
            role="button"
            data-mdb-ripple-color="dark">
            <i class="fa-brands fa-telegram"></i>
            </a>
    
        </section>
        
        </div>
        <div class="text-right text-dark " style="background-color:#E9ECEF; font-family: Arial, sans-serif; font-size: 0.875em " >
            <strong>
            Last Edited : MAR 2025
            </strong>
        </div>
        <div class="text-center text-dark p-3" style="background-color:#bec1c5 ;">
            © 2023 Copyright:
            <a class="text-dark" href="https://fawzy.great-site.net/">fawzy.great-site.net</a>
        </div>
    </footer>
</body>
</html>