<?php
    require'xml2json/xml2json.php';
    
    class Hulu_Search{

        const HULUBASE = 'http://m.hulu.com/search?';
        const IDENTIFIER = 'hulu';

        function search($items= 20, $page= 1, $query= NULL, $format= 'json'){
            $result = $this->fetch(array(
                'dp_identifier' => Hulu_Search::IDENTIFIER,
                'items_per_page' => $items,
                'page' => $page,
                'query' => $query,
                ), $format);
            
            return $result;
        }

        function fetch($args, $format){
            foreach ($args as $name => $value) {
                $pairs[] = $name . "=" . urlencode($value);
            }
            $url =  Hulu_Search::HULUBASE . join("&", $pairs);
            $results = file_get_contents($url);

            if($format=='json'){
                $results = xml2json::transformXmlStringToJson($results);
            }
            return $results;
        }
    }
?>