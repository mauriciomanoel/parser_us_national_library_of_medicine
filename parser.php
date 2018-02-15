<?php
    $file = file_get_contents("healthcare_IoT_OR_health_IoT_OR_healthIoT.xml");


    // $xml = simplexml_load_string($file, "SimpleXMLElement", LIBXML_NOCDATA);
    $xml = simplexml_load_string($file);
    var_dump($xml); exit;
    $json = json_encode($xml);
    $articles = json_decode($json,TRUE);
    $articles   = $articles["article"];
    
    foreach($articles as $article) {
        $title = $article["front"]["article-meta"]["title-group"]["article-title"];
        $abstract = $article["front"]["article-meta"]["abstract"];
        echo "<pre>"; var_dump($article["front"]["article-meta"]); exit;
    }

?>