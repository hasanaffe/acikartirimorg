<?php
    $url = "https://sfbay.craigslist.org/";
 
    print_r(find_all_links($url));
 
    function find_all_links($url)
    {
        $htmlData = file_get_contents($url);
        if(preg_match_all('/<a\s+href=["\']([^"\']+)["\']/i', $htmlData, $links, PREG_PATTERN_ORDER))
        {
			echo '<pre>';
            return array_unique($links[1]);
			echo '</pre>';
        }
        return array();
    }
?>