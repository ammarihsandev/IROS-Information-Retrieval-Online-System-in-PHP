<html>
    <head>
        <title>Information Retrieval System in PHP</title>
		<link rel="author" href="Ammar Ihsan Nasution"/>
        <link rel="shortcut icon" href="include/sc.gif" type="image/x-icon">
		<link href="css/info.css" rel="stylesheet">	
		<meta content="This system developed for information retrieval technology that can retrieve the information. THe features that included are counting, stemming, stopping, and ranking." name="description">
		<meta content="information, retrieval, technology, parsing, sceeming, stopping, project, iium, indexing, ranking, system" name="keyword">
	</head>

<body>

<center><hr/><h1>-=( Information Retrieval System  )=-</h1><table><tr><td>
<?php
/*----------------------------------
//  Ammar Ihsan (November, 2014)  //
--------------------------------- */
//$doc = 
 $doc=$_REQUEST['document']; 
/*
$doc = "Information retrieval (IR) is the area of study concerned with searching for documents, for information within documents, and for metadata about documents, as well as that of searching relational databases and the World Wide Web. There is overlap in the usage of the terms data retrieval, document retrieval, information retrieval, and text retrieval, but each also has its own body of literature, theory, praxis, and technologies. IR is interdisciplinary, based on computer science, mathematics, library science, information science, information architecture, cognitive psychology, linguistics, and statistics.";
/*$doc = file_get_contents('http://ammarihsan.my.id/');
*/ 

echo "<center><table border=\"2\" width=\"50%\"><tr><td><b>Original Document:</b><br/>$doc</td></tr><tr><td><center>";
echo "Text Lenght = ";
echo strlen($doc);
echo "<br/>Total Word = ";
echo str_word_count($doc); 
echo"</center></td></table><br/>";
    
	echo "<table border=\"1\" width=\"60%\" box-shadow: 10px 10px 5px #000000;><tr><th width=\"25%\">Tokenizer</th><th width=\"25%\">Stopping</th><th width=\"25%\">Steeming</th><th width=\"25%\">Ranking</th></tr>";
	echo "<tr><td><ol>";
	include("include/token.php");
	echo"</ol></td>";
	
	echo "<td><ol>";
	include("include/stop.php");
	echo "</ol></td>";
	
	echo "<td><ol>";
	include("include/steem.php");
	echo "</ol></td>";
	
	echo "<td><ol>";
	include("include/rank.php");
	echo "</ol></td>";

	
		echo "</tr></table></center>";
	
	?>
	</body>
	</html>