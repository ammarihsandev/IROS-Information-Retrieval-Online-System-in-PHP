<?php
/*----------------------------------
//  Ammar Ihsan (November, 2014)  //
//     TOKENIZATION FUNCTION      //
--------------------------------- */

    function tokenization($text){
       
	   // Removing punctuation in the text.
		$text = preg_replace("/[?!.,()*]|[-]|\'/","", $text);
		$text = str_replace(".", "", $text);
		$text = str_replace(":", "", $text);  
		$text = str_replace(";", "", $text);
	
        // Convert text to lower case
        $text = strtolower(trim($text));
 
        // Tokenization
        $word = explode(" ",$text);
        $tok = $word;
 
        for($i=0;$i<=(count($tok)-1);$i++){
            for($j=0;$j<=(count($tok)-1);$j++){
                if ($word[$i] == $tok[$j]){
                    $freq[$word[$i]]+=1;
                    array_splice($word,$i,1);
                }
            }
        }
 
	// Returns the result of Tokenization
        return $freq;	 
    }
	
    $result = tokenization($doc);
	foreach($result as $key => $val) {
        echo "<li>$key</li>";
    }
	
?>