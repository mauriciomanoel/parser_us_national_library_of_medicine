<?php
    $file = file_get_contents("healthcare_IoT_OR_health_IoT_OR_healthIoT.xml");


    $objXML = new SimpleXMLElement($file);
    // echo "<pre>"; var_dump($objXML->article[0]->front->{'article-meta'}->{'article-id'}[2]); exit;

    foreach($objXML->article as $article) {
        
        $title = (string) $article->front->{'article-meta'}->{'title-group'}->{'article-title'};
        $abstract = $article->front->{'article-meta'}->{'abstract'}; 
        $articles_id = $objXML->article[0]->front->{'article-meta'}->{'article-id'};
        foreach($articles_id as $article_id) {
            $id = (string) $article_id->attributes()->{'pub-id-type'};
            $value = (string) $article_id;
            var_dump($id, $value);
        }
        exit;
        // echo "<pre>"; var_dump($article["front"]["article-meta"]["article-id"]); exit;

    }





     $xml = simplexml_load_string($file, "SimpleXMLElement", LIBXML_DTDATTR);

      var_dump($xml); exit;
    //$xml = simplexml_load_string($file);
    
    $json = json_encode($xml);
    $articles = json_decode($json,TRUE);
    $articles   = $articles["article"];
    
    foreach($articles as $article) {
        $title = $article["front"]["article-meta"]["title-group"]["article-title"];
        $abstract = $article["front"]["article-meta"]["abstract"];
        echo "<pre>"; var_dump($article["front"]["article-meta"]["article-id"]); exit;
    }

?>