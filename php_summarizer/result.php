<?php
shell_exec("/usr/bin/javac WordClass.java");
$add = shell_exec("/usr/bin/java WordClass <input.txt >output.txt ");

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

<form name="myForm" action="test_summarizer.php" onsubmit="return validateForm()" method="post" name="analyse">
    <div style="display:none;"><input id="csrf_token" name="csrf_token" type="hidden" value="1457775018##79b6a2316694f526842bc2da5fbacc0a7034f96b"></div>
    <h3>Your Simplified Text:</h3>
  <textarea readonly id="text" maxlength="50000" name="text" size="5000" style="width:600px;height:160px">
<?php 
$f = fopen("output.txt", "r");
while(!feof($f))
{  
    echo fgets($f)." ";
}
fclose($f);

$add = shell_exec("/var/www/run.sh 2>&1");
$f1 = fopen("/var/www/html/semantics/src/num.txt", "r");
    $num =  fgets($f1);
fclose($f1);


shell_exec("rm /var/www/html/semantics/src/num.txt");

shell_exec("rm /var/www/html/semantics/src/sem.txt");

shell_exec("rm output.txt");

?></textarea><p></p><table>
        <tbody><tr>
             
        </tr>
        <tr>
            <td></td>
        </tr>
    </tbody></table>
</form>
------------------------------------------------------------------------------------------------------
<h5> Matching % between Simplified and Summarized text  = <b><?php echo abs($num*100) ?></b> </h5> 

------------------------------------------------------------------------------------------------------

<form name="myForm" action="test_summarizer.php" onsubmit="return validateForm()" method="post" name="analyse">
    <div style="display:none;"><input id="csrf_token" name="csrf_token" type="hidden" value="1457775018##79b6a2316694f526842bc2da5fbacc0a7034f96b"></div>
    <h3>Your Summarized Text:</h3>
  <textarea readonly id="text" maxlength="50000" name="text" size="5000" style="width:600px;height:160px"><?php 

$f = fopen("input.txt", "r");
while(!feof($f))
{  
    echo fgets($f)." ";
}
fclose($f);
 
?></textarea><p></p><table>
        <tbody><tr>
             
        </tr>
        <tr>
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
