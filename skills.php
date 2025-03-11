<div class="container" style="padding: 20px;">
    <div class="row justify-content-around align-items-center">
        <div class="col">
            <h2>• Tracks Interested In</h2>
        </div>
    </div>
</div>
<div class="container-fluid " >
    <div class="row justify-content-around" style="padding-left: 20px; padding-right: 20px;">

        <?php
        $tracks = array("Embedded Systems", "Back-End Developer", "Flutter Developer", "Networking");
        for($i=0; $i < count($tracks) ; $i++){
        echo '<div class="col-md-auto" >
                <b>'.$tracks[$i].'</b>
            </div>';
        } 
        ?>
        
    </div>
</div>
<hr/>
<div class="container" style="padding: 20px; ">
    <div class="row justify-content-around align-items-center" >
            <h2>- My acquired Skills -</h2>
    </div>
</div>

<div class="container-fluid ">
    <div class="row justify-content-around align-items-center">
        <?php
        
        function isMobile() {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        }
        
        $skilllls = array(
            "C",
            "C++",
            "Altium",
            "Python",
            "SQL",
            "MySQL",
            "Flutter",
            "Arduino",
            "Linux",
            "HTML",
            "CSS",
            "JavaScript",
            "PHP",
            "Cyber-Security",
            "Git",
            "GitHub",
            "Proteus",
            "CCNA & CCNP",
            "Matlab",
            "HCIA",
            "BootStrap",
            "Blender",
        );
        $skil_pic = array(
            "c.png",
            "c++.png",
            "altium.png",
            "python.png",
            "sql.png",
            "mysql.png",
            "flutter.png",
            "arduino.png",
            "linux.png",
            "html.png",
            "css.png",
            "js.png",
            "php.png",
            "cs.png",
            "git.png",
            "github.png",
            "proteus.png",
            "ccna.png",
            "matlab.png",
            "hcia.png",
            "bs.png",
            "blender.png",
        );
        for($i=0; $i < count($skilllls) ; $i++){
            echo '<div class="card text-center border border-info" ';
            if(isMobile()) echo 'style="width: 5rem; margin: 5px;"> </br>'; 
            else echo 'style="width: 11rem; margin: 25px;"> </br>';
            
            if ($skilllls[$i] == "Proteus" || $skilllls[$i] == "PHP" ){
                echo'<center><img class="card-img-top center"';
                if(isMobile()) echo ' style="height: 30px; width: 40px; " src="/files/'.$skil_pic[$i].'" ></center>';
                else echo ' style="height: 60px; width: 80px; " src="/files/'.$skil_pic[$i].'" ></center>';
            }else{
                echo'<center><img class="card-img-top center"  ';
                if(isMobile()) echo' style="height: 30px; width: 30px; " src="/files/'.$skil_pic[$i].'" ></center>';
                else echo' style="height: 60px; width: 60px; " src="/files/'.$skil_pic[$i].'" ></center>';
            }
            echo'<div class="card-body">';
            if(isMobile())  echo '<b class="card-text" style= "font-size:0.5em;">'.$skilllls[$i].'</b>';
            else echo '<h5 class="card-text" >'.$skilllls[$i].'</h5>';
            
            echo ' </div>
                   </div>';
        } 
        ?>
    </div>
</div>
<br>
