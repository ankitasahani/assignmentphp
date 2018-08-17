<?php

echo "*&nbsp";
for($i=0;$i<3;$i++){ 
	echo "&nbsp&nbsp&nbsp";
}
for($i=0;$i<5;$i++){ 
	echo "*&nbsp";
}
echo "<br>";
for($j=0;$j<3;$j++){ 
	echo "*&nbsp";
	for($i=0;$i<3;$i++){
		echo "&nbsp&nbsp&nbsp";
	}
	echo "*&nbsp<br>";
}
for($i=0;$i<5*2-1;$i++){
	echo "*&nbsp";
}
echo "<br>";
for($j=0;$j<3;$j++){ 
	for($i=0;$i<=3;$i++){
		echo "&nbsp&nbsp&nbsp";
	}
	echo "*&nbsp";
	for($i=0;$i<3;$i++){
		echo "&nbsp&nbsp&nbsp";
	}
	echo "*&nbsp<br>";
}
for($i=0;$i<5;$i++){ 
	echo "*&nbsp";
}
for($i=0;$i<3;$i++){ 
	echo "&nbsp&nbsp&nbsp";
}
echo "*&nbsp";

?>