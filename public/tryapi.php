<?php

    require_once 'api_raiderio.php';
    $progress = new API_raiderio;
    $raid = $progress -> getForecast("Bad%20Seeds");
    
    echo '<pre>';
    var_dump($raid);
    echo'</pre>';


?>

<div class="container">

    <ul>
        <li>Progress Dazar'Alor <?php echo $raid[1]; ?></li>
    </ul>

</div>

