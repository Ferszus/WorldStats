<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="style.css">
    <title>Statistics</title>
</head>
<body>
    <div class="line-v"></div>
    <?php
    for($i=20; $i<2500; $i= $i+40){
        echo "<div class='scale' style='position: absolute; left: ". $i."px;'><p>$i</p></div>";
    }
    ?>

    <div class="container">
        <h1>Average annual hours actually worked per worker yearly   . </h1>
        <p class='point' style="background-color: #1e26fa;"> 2010</p>
        <p class='point' style="background-color: #9518D9;"> 2011</p>
        <p class='point' style="background-color: #F02673;"> 2012</p>
        <p class='point' style="background-color: #D94918;"> 2013</p>
        <p class='point' style="background-color: #FCA51C;"> 2014</p>
        <p class='point' style="background-color: #FFDC0F;"> 2015</p>
        <p class='point' style="background-color: #90DE0B;"> 2016</p>
        <p class='point' style="background-color: #7AB8FF;"> 2017</p>
        <p class='point' style="background-color: #0BDECB;"> 2018</p>
        <p class='point' style="background-color: #0D73FF;"> 2019</p>
        <p class='point' style="background-color: #82F594;"> 2020</p>
    </div>
<?php
$link = mysqli_connect('localhost','root','','statistics');
$query = mysqli_query($link, "SELECT Country, year, yearone, yeartwo, yearthree, yearfour, yearfive, yearsix, yearseven, yeareight, yearnine, yearten, (year+ yearone+ yeartwo+ yearthree+ yearfour+ yearfive+ yearsix+ yearseven+ yeareight+ yearnine+ yearten)/11 as 'average'FROM `data` GROUP BY Country ORDER BY Average DESC; ");

    while($row = mysqli_fetch_assoc($query)){
        echo "<div>";
        echo '<p>'.$row['Country'].'</p>';
        if(!is_null($row['year'])){
        echo '<section style="width: '.$row['year'].'px; background-color: #1E26FA;">'.$row['year'].'</section>';
        }
        if(!is_null($row['yearone'])){
        echo '<section style="width: '.$row['yearone'].'px; background-color: #9518D9;">'.$row['yearone'].'</section>';
        }
        if(!is_null($row['yeartwo'])){
        echo '<section style="width: '.$row['yeartwo'].'px; background-color: #F02673;">'.$row['yeartwo'].'</section>';
        }
        if(!is_null($row['yearthree'])){
        echo '<section style="width: '.$row['yearthree'].'px; background-color: #D94918;">'.$row['yearthree'].'</section>';
        }
        if(!is_null($row['yearfour'])){
        echo '<section style="width: '.$row['yearfour'].'px; background-color: #FCA51C;">'.$row['yearfour'].'</section>';
    }
        //------------------------
        echo '<section style="width: '.$row['yearfive'].'px; background-color: #FFDC0F;">'.$row['yearfive'].'</section>';
        echo '<section style="width: '.$row['yearsix'].'px; background-color: #90DE0B;">'.$row['yearsix'].'</section>';
        echo '<section style="width: '.$row['yearseven'].'px; background-color: #7AB8FF;">'.$row['yearseven'].'</section>';
        echo '<section style="width: '.$row['yeareight'].'px; background-color: #0BDECB;">'.$row['yeareight'].'</section>';
        echo '<section style="width: '.$row['yearnine'].'px; background-color: #0D73FF;">'.$row['yearnine'].'</section>';
        if(!is_null($row['yearten'])){
        echo '<section style="width: '.$row['yearten'].'px; background-color: #82F594;">'.$row['yearten'].'</section>';
    }
        echo "</div>";
    }

?>



</body>
</html>