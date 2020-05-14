<?php
/*----------------------------------
//  Ammar Ihsan (November, 2014)  //
//       RANKING FUNCTION         //
--------------------------------- */

    function ranking($text){
     
	 // Removing punctuation in the text.
		$text = preg_replace("/[?!.,()*]|[-]|\'/","", $text);
		$text = str_replace(".", "", $text);
		$text = str_replace(":", "", $text);  
		$text = str_replace(";", "", $text);
	
        // Convert text to lower case
        $text = strtolower(trim($text));
 
          $astoplist = array (" the ", " of ", " was ", " by ", " on ", " held ", " in ", " this ", " is ", " to ", " and ", " who ", " a ", " he ", " that ", " not ", " shall ", " be ", " which ", " as ", " will ", " his ", " an ", " hence ", " from ", " for ", " about ", " with ", " within ", " there ", " but ", " has ", " each ",  " also ", " own ", " well ", " its ");                          
    foreach ($astoplist as $i => $value) {
        $text = str_replace($astoplist[$i], " ", $text);	
    }
	
	// steeming
	//include("porterstemmer.php");
	//$stem = PorterStemmer::Stem($text);
	//$text = str_replace($astoplist[$i], " ", $text);	
	
	//alternatie
	$text = str_replace("documents", "document", $text);
	$text = str_replace("concerned", "concern", $text);
	$text = str_replace("databases", "database", $text);
	$text = str_replace("searching", "search", $text);
	$text = str_replace("technologies", "technology", $text);
	$text = str_replace("linguistics", "linguistic", $text);
	$text = str_replace("statistics", "statistic", $text);
 trim($text);		
	// include("porterstemmer.php");
	// $stem = PorterStemmer::Stem($text);		
	
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
	
	//Sorting them based on their frequency
	arsort($freq);
    return $freq;
	
    }

    $result = ranking($doc);
          foreach($result as $key => $val) {
		  echo "<li>$key = $val</li>";
    }
		
?>

