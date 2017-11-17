<!DOCTYPE html>
    <html ng-app="ionicApp"> 
      <head>              
             <meta charset="UTF-8" content="text/html">
              <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 , user-scalable=no">
              <title> Words Ai </title>
              
 <link href="ionic.css" rel="stylesheet" />              
 <link href="bootstrap.min.css" rel="stylesheet" /> 
 <script src="ionic.bundle.js"></script>    
 <style>
 .content{
 	margin-left:25px;
 	margin-right:25px;
 }
 h1{
 	height:100px;
 }
 body{
 	color:green;
 	font-weight:bold;
 	text-align:center;
 	margin-top:200px;
 }
 h1,h3{
 	color:#000000;
 }

 </style>   

      </head>
        

<body ng-controller="myCtrl"> 

 <ion-content ng-controller="myCtrl"> 
  <ion-refresher pulling-text="Ai said pull to reload this page..." on-refresh="doRefresh()"> 
  </ion-refresher> 
  <ion-list> 
   <ion-item ng-repeat="item in items"></ion-item> 
  </ion-list> 
  
 </ion-content> 


<div class="content">

<h1>Ai</h1>
<h3 style="font-face:gabriola;"> Words Analyser Using Ionic</h3>
<?php
if(isset($_POST["analyse"]))
{
	
$words=$_POST["word"];

	if(!empty(chop($words)) && chop($words!=""))
	
	{		 	
	echo "After successfull analysis, our Ai was able to analyse your input .<br> Amount of words " . str_word_count($words);
		}
		
		
		else
		{
			echo"My dear friend  am  so sorry i was unable to analyse your input because no text was entered.";
		} 
					 	
		 	
		 if(str_word_count(chop($words))==1)
{
	echo" word";
}



else if(str_word_count($words) >=1)
{
	echo" words";
}

else {
	echo" ";
}


if(strlen(chop($words))>1)
{
	echo" & Amount of characters " . strlen(chop($words)) . " characters";
}

else if(strlen(chop($words))==1)

{
	
	 echo" & Amount of character " . strlen(chop($words)) . " character";
}
else{
	echo"";
}
}
?>


<form action="" method="POST">

 <div class="form-group"> 

  <textarea name="word"  class="form-control" placeholder="Enter text to analyse"> 
     </textarea>
     
 
 
  <button name="analyse" type="submit" class="button button-block button-calm">Analyse <i class=" icon ion-log-in"></i></button>   
  </form>
  </div>
  
 <script> 
  angular.module('ionicApp', ['ionic']) 
   .controller('myCtrl', function($scope, $ionicLoading) 
   { 
 
    $ionicLoading.show( 
    { 
     noBackdrop: true, 
     duration: 5000 
    }); 
 
   }); 
   
 </script>           
   </body>
 <footer>
   
 </footer>
    </html>     
        