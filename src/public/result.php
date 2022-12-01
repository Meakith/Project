<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8" />
	<title>PHP Quiz</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles2.css" />
</head>
<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-yellow-500 rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <a href="index.php" class="ml-3 text-xl">Our History</a>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="gallery.php" class="mr-5 hover:text-gray-900">Gallery</a>
        <a href="places.php" class="mr-5 hover:text-gray-900">Places</a>
        <a href="quiz.php" class="mr-5 hover:text-gray-900">QUIZ!</a>
        <a href="registration.php" class="mr-5 hover:text-gray-900" style="font-weight:bold;">Register/Login</a>
        <a href="logout.php" class="mr-5 hover:text-gray-900" style="font-weight:bold;">Logout</a>
        </nav>
    </div>
</header>
<body>
	<div id="page-wrap">
		<h1>Your SCORE:</h1>
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];

            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "D") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "B") { $totalCorrect++; }
            if ($answer10 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
        ?>
	</div>
</body>
</html>