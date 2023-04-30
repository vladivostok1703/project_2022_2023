<html>
 
<head>
	
	<title>Quiz - Chanel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Result</h1>
		
        <?php
            $res1=$_POST["res1"];
            $res2=$_POST["res2"];
            $res3=$_POST["res3"];
            $res4=$_POST["res4"];
            $res5=$_POST["res5"];
            $total = 0;
            if(!$res1 || !$res2 || !$res3 || !$res4 || !$res5)
                echo "<font size=7>Nu ati completat tot quiz-ul";
            else{
                if ($res1 == "B") { $total++; }
                if ($res2 == "A") { $total++; }
                if ($res3 == "D") { $total++; }
                if ($res4 == "C") { $total++; }
                if ($res5 == "D") { $total++; }

            }
            echo "<div id='result'>$total / 5 corecte</div>"
        ?> 
	
	</div>
 
</body>
 
</html>