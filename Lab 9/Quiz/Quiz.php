<html>
<body>
<?php

$answer1=$_POST['wplanet'];
$answer2=$_POST['dplanet'];
$answer3=$_POST['bplanet'];
$answer4=$_POST['nplanet'];
$answer5=$_POST['cplanet'];

$totalCorrect = 0;

if($answer1==Earth){
  $count++;
}
if($answer2== "Jupiter and Saturn" ){
  $count++;
}
if($answer3=="Contracted star with intense gravitational pull"){
  $count++;
}
if($answer4== Mercury){
  $count++;
}
if($answer5==Temperature){
  $count++;
}

echo "Question 1: Which planet is known as the 'Watery Planet' ?<br>";
echo "You answered: $answer1<br>";
echo "Correct answer: Earth <br><br>";

echo "Question 2: In order of their distances from the Sun, which of the following planets lie between Mars and Uranus?<br>";
echo "You answered: $answer2<br>";
echo "Correct answer: Jupiter and Saturn <br><br>";

echo "Question 3: A blackhole is a ________<br>";
echo "You answered: $answer3<br>";
echo "Correct answer: Contracted star with intense gravitational pull<br><br>";

echo "Question 4: Messenger satellite has been launched by NASA for the study of<br>";
echo "You answered: $answer4<br>";
echo "Correct answer: Mercury<br><br>";

echo "Question 5: Which of the following is indicated by the colour of a star?<br>";
echo "You answered: $answer5<br>";
echo "Correct answer: Temperature<br><br>";


$score=($count/5)*100;


 echo "You have $count correct answers <br>";
 echo "Your Score: $score%<br><br>";

?>
</body>
</html>
