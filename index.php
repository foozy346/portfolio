<?php
    $tab_menu = array("My Info", "Education", "Skills", "Courses", "Exprience");
    $n=count($tab_menu);
    if (isset($_GET['tab'])){
        $page = $_GET['tab'];
    }
    else{
        $page = 0;
    }

    $my_in = file_get_contents('main_page.html');

    $tab_content=array($my_in)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Fawzy Nissem CV
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
            
            <!-- <li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                 <li class="nav-item"><a class="nav-link" href="#">Disabled</a></li> -->
        </ul>
    </div>
    <?php
    echo $my_in;
    ?>
</body>
</html>