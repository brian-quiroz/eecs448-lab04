

<?php
$answer1 = $_POST["question1-answers"];
$answer2 = $_POST["question2-answers"];
$answer3 = $_POST["question3-answers"];
$answer4 = $_POST["question4-answers"];
$answer5 = $_POST["question5-answers"];

$answersCorrect = 0;

echo "<h1 style='text-align: center'>Results</h1><br>";

echo "Question 1: What is the capital of Spain?<br>";
if ($answer1 == "A") {
  echo "&emsp;You answered: Lisbon<br>";
  echo "&emsp;Correct answer: Madrid<br>";
}
if ($answer1 == "B") {
  echo "&emsp;You answered: Paris<br>";
  echo "&emsp;Correct answer: Madrid<br>";
}
if ($answer1 == "C") {
  echo "&emsp;You answered: London<br>";
  echo "&emsp;Correct answer: Madrid<br>";
}
if ($answer1 == "D") {
  echo "&emsp;You answered: Madrid<br>";
  echo "&emsp;Correct answer: Madrid<br>";
  echo "&emsp;Good job!<br>";
  $answersCorrect++;
}

echo "<br>";

echo "Question 2: What is the capital of Monaco?<br>";
if ($answer2 == "A") {
  echo "&emsp;You answered: Monaco<br>";
  echo "&emsp;Correct answer: Monte Carlo<br>";
}
if ($answer2 == "B") {
  echo "&emsp;You answered: Monte Carlo<br>";
  echo "&emsp;Correct answer: Monte Carlo<br>";
  echo "&emsp;Good job!<br>";
  $answersCorrect++;
}
if ($answer2 == "C") {
  echo "&emsp;You answered: Bucharest<br>";
  echo "&emsp;Correct answer: Monte Carlo<br>";
}
if ($answer2 == "D") {
  echo "&emsp;You answered: Budapest<br>";
  echo "&emsp;Correct answer: Monte Carlo<br>";
}

echo "<br>";

echo "Question 3: What is the capital of Djibouti?<br>";
if ($answer3 == "A") {
  echo "&emsp;You answered: Djibouti<br>";
  echo "&emsp;Correct answer: Djibouti<br>";
  echo "&emsp;Good job!<br>";
  $answersCorrect++;
}
if ($answer3 == "B") {
  echo "&emsp;You answered: Harare<br>";
  echo "&emsp;Correct answer: Djibouti<br>";
}
if ($answer3 == "C") {
  echo "&emsp;You answered: Praia<br>";
  echo "&emsp;Correct answer: Djibouti<br>";
}
if ($answer3 == "D") {
  echo "&emsp;You answered: Porto-Novo<br>";
  echo "&emsp;Correct answer: Djibouti<br>";
}

echo "<br>";

echo "Question 4: What is the capital of Fiji?<br>";
if ($answer4 == "A") {
  echo "&emsp;You answered: Canberra<br>";
  echo "&emsp;Correct answer: Suva<br>";
}
if ($answer4 == "B") {
  echo "&emsp;You answered: Guam<br>";
  echo "&emsp;Correct answer: Suva<br>";
}
if ($answer4 == "C") {
  echo "&emsp;You answered: Suva<br>";
  echo "&emsp;Correct answer: Suva<br>";
  echo "&emsp;Good job!<br>";
  $answersCorrect++;
}
if ($answer4 == "D") {
  echo "&emsp;You answered: Honiara<br>";
  echo "&emsp;Correct answer: Suva<br>";
}

echo "<br>";

echo "Question 5: What is the capital of Pakistan?<br>";
if ($answer5 == "A") {
  echo "&emsp;You answered: Kuala Lumpur<br>";
  echo "&emsp;Correct answer: Islamabad<br>";
}
if ($answer5 == "B") {
  echo "&emsp;You answered: Thimphu<br>";
  echo "&emsp;Correct answer: Islamabad<br>";
}
if ($answer5 == "C") {
  echo "&emsp;You answered: Islamabad<br>";
  echo "&emsp;Correct answer: Islamabad<br>";
  echo "&emsp;Good job!<br>";
  $answersCorrect++;
}
if ($answer5 == "D") {
  echo "&emsp;You answered: Riyadh<br>";
  echo "&emsp;Correct answer: Riyadh<br>";
}

echo "<br>";

echo "Correct answers: " . $answersCorrect . " of 5<br>";

$percent = number_format($answersCorrect/5 * 100,0) . '%';

echo "Percent correct: " . $percent . "<br>";

?>
