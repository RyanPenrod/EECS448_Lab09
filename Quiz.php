<?php
  echo '<html><head></head>';
  echo '<div style="font-size: 50px;">Quiz<br></div>';
  echo 'Question 1: What year is it?<br>';
  echo '<div style="text-indent: 50px;">You answered: ' . $_POST["q1"] . '</div>';
  echo '<div style="text-indent: 50px;">Correct answer: 2021</div><br>';
  echo 'Question 2: What does 1 + 1 equal?<br>';
  echo '<div style="text-indent: 50px;">You answered: ' . $_POST["q2"] . '</div>';
  echo '<div style="text-indent: 50px;">Correct answer: 2</div><br>';
  echo 'Question 3: Which of the following is the largest?<br>';
  echo '<div style="text-indent: 50px;">You answered: ' . $_POST["q3"] . '</div>';
  echo '<div style="text-indent: 50px;">Correct answer: Sun</div><br>';
  echo 'Question 4: What color do yellow and red make when mixed together?<br>';
  echo '<div style="text-indent: 50px;">You answered: ' . $_POST["q4"] . '</div>';
  echo '<div style="text-indent: 50px;">Correct answer: Orange</div><br>';
  echo 'Question 5: Which of the following contain venom that is harmful to humans?<br>';
  echo '<div style="text-indent: 50px;">You answered: ' . $_POST["q5"] . '</div>';
  echo '<div style="text-indent: 50px;">Correct answer: Platypus</div><br>';

  $x = 0;
  $y = 0;
  if($_POST["q1"] == 2021){
    $x++;
  }
  if($_POST["q2"] == 2){
    $x++;
  }
  if($_POST["q3"] == Sun){
    $x++;
  }
  if($_POST["q4"] == Orange){
    $x++;
  }
  if($_POST["q5"] == Platypus){
    $x++;
  }
  $y = $x * 20;

  echo 'You answered ' . $x . ' question(s) correctly.<br><br>';
  echo 'Your score as a percentage is ' . $y . '%';
?>
