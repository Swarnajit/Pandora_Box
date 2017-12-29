<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //header('Content-type: image/jpeg');
            $im =   imagegrabscreen();
           
            $newim=imagecolortransparent($im);            
            imagejpeg($im, "screenshot.jpeg");
            imagedestroy($im);
            echo "Success";
        ?>
    </body>
</html>
