<!--
  @Filename: Quiz.php
  @Author:   Ben Sokol <Ben>
  @Email:    bensokol@ku.edu
  @Created:  October 1st, 2017 [9:09pm]
  @Modified: October 3rd, 2017 [1:08am]

  Copyright (C) 2017 by Ben Sokol. All Rights Reserved.
-->


<html>
<head>
  <title>EECS 448 - Lab 4 - Exercise 2</title>
  <link type="text/css" rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h1>Quiz Results</h1>
  <?php
  $score = 0;
  $questions = ["What course is this?",
                "How many roads must a man walk down, before you can call him a man?",
                "Who is the current president of The United States?",
                "What are the remote servers in the EECS department called?",
                "How much wood could a woodchuck chuck, if a woodchuck could chuck wood?"
               ];
  $answers = ["EECS 448",
              "The answer my friend is blowin' in the wind",
              "Donald Trump",
              "Cycle Servers",
              "A woodchuck would chuck wood until the woodchuck upchucks"
             ];

  for($i = 0; $i < 5; $i++) {
    print "Question ".($i + 1).": ".$questions[$i]."<br>";
    print "You answered: ".$_POST["q".($i + 1)]."<br>";
    print "Correct answer: ".$answers[$i]."<br>";
    $score += (($_POST["q".($i + 1)] == $answers[$i]) ? 20 : 0);
    print "<br>";
  }
  print "Quiz Score: ".$score."%".($score == 100 ? "<br>Good Job!" : "");
  ?>
</body>
</html>
