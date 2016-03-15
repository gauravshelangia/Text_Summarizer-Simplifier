
<?php

error_reporting(E_ALL);

require_once 'includes/summarizer.php';
require_once 'includes/html_functions.php';

$summarizer = new Summarizer();
session_start();
$_POST['text'] = $_SESSION['text'];
if (!empty($_POST['text'])){
	//echo '<pre>';
	$text = $_POST['text'];
	
	//replace some Unicode characters with ASCII
	$text = normalizeHtml($text);
	//generate the summary with default parameters
	$rez = $summarizer->summary($text);
	//print_r($rez);
	
	//$rez is an array of sentences. Turn it into contiguous text by using implode().
	$summary = implode(' ',$rez);
	//echo '</pre>';
}

?>




<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Text Summarizer</title>
        

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
    </head>
    <body style="zoom: 1;">
        <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target="nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
<img style="float:left;width:50px;height:50px;    " src="logo.png" />
            <a class="brand" style="padding-left: 40px;"href="index.php">Text Summarizer & Simplifier</a>
            <div class="nav-collapse collapse" id="navbar-main">
              
            </div>
        </div>
    </div>
</div>
        <div style="height:60px"></div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                   
 

<div class="row-fluid">
    <div class="span8 offset2">
        <div class="hero-unit">
<form action="result.php" method="post" name="analyse">
    <div style="display:none;"><input id="csrf_token" name="csrf_token" type="hidden" value="1457775018##79b6a2316694f526842bc2da5fbacc0a7034f96b"></div>
    <h4>Summarized Text and Click on Want to Simplify to Simplify it.</h4>
  <textarea readonly id="text" maxlength="50000" name="text" size="5000" style="width:600px;height:250px"><?php
	if(!empty($summary)) echo $summary;
	$myFile = "input.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	fwrite($fh, $summary);
	fclose($fh);
?></textarea><p></p><table>
        <tbody><tr>
             
        </tr>
        <tr>
            <td><input class="btn btn-primary btn-large" type="submit" value="Want to Simplify"></td>
            <td></td>
        </tr>
    </tbody></table>
</form>

</div>
</div>
</div>

                </div>
            </div>
            <div style="height:10px"></div>
            <footer>
<p align="center">
<span id="mashape-button" data-api="text-summarization" data-name="textanalysis" data-light="1"></span><script src="./Text Summarizer - TextSummarization _ Text Summarization Online _ Text Summarization Demo _ Text Summarization API_files/button.js"></script>
<a href ="https://hackathon.guide> " > Hackathon</a>'16 @IIITV --- Team Fury</a>
</p>
</footer>
        </div>
        
</body></html>
