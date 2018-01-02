
<div class="text-primary"> 
	<p class="aih4"> 
<?php
$analyse = $_POST["analyse"];
if(isset($analyse))
{
	
$words=$_POST["word"];

	if(!empty(chop($words)) && chop($words!=""))
	
	{		 	
	echo "My dear friend after successfull analysis,I was able to analyse your input .<br> Amount of Content " . str_word_count($words);
		}
		
		
		else
		{
			echo"My dear friend  am  so sorry i was unable to give  you result because no Content was entered.";
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
	echo" & Amount of characters " . strlen(chop($words)) . " characters ";
}

else if(strlen(chop($words))==1)

{
	
	 echo" & Amount of character " . strlen(chop($words)) . " character ";
}
else{
	echo"";
}

}
?>
 </p>
 </div>