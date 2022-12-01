<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>Quiz Page</title>
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
		<h1>Just for fun QUIZ</h1>
		<form action="result.php" method="post" id="quiz">
            <ol>
                <li>
                    <h3>Tower of Pizza is located in ..</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) France </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Latvia</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Italy</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Spain</label>
                    </div>
                </li>
                <li>
                    <h3>Battle of Žalgiris happenned in ...</h3>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) 1398</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) 1414</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 1650</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) 1410</label>
                    </div>
                </li>
                <li>
                    <h3>Stonehenge was built by...</h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) No one knows</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Aliens</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Regular people</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Giants</label>
                    </div>
                </li>
                <li>
                    <h3>Bigest pyramid of Egypt is ...</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Saqqara</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Giza</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Abusir</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Zawyet el-Aryan</label>
                    </div>
                </li>
                <li>
                    <h3>Eiffel tower was built in ...</h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) 1801</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 1885</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) 1919</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) 1889</label>
                    </div>
                </li>
                <li>
                    <h3>Where Taj Majal is located ?</h3>
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) China</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Shrilanka</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) India</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) Taiwan</label>
                    </div>
                </li>
                <li>
                    <h3>United States of America gained independence in ...</h3>
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A) 1752</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) 1781</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) 1832</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) 1787</label>
                    </div>
                </li>
                <li>
                    <h3>The two cities USA used atomic bombs on in 1945 ?</h3>
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A) Hiroshima and Nagasaki</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) Tokyo and Beijing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) Singapoore and Sejong</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) Osaka and Kyoto</label>
                    </div>
                </li>
                <li>
                    <h3>Where Acropolis is located ... ?</h3>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A) Rome</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B) Athens</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) Sydney</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) Paris</label>
                    </div>
                </li>
                <li>
                    <h3>The only true king of Lithuania was ...</h3>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A) Kestutis</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Vytautas</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Algirdas</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) Mindaugas</label>
                    </div>
                </li>
            </ol>
            <input type="submit" value="Submit" class="submitbtn" />
		</form>
	</div>
</body>
</html>