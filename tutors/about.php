<?php
require_once("model.php");
	require("header.php");
	
	
?>
<h1 id="center3">About Digital Aristotle</h1>
<?php
$str= '	The web application we created is a method of teaching students, at the pace they need with the methods they need. The basics of the system are that a student takes a pretest and then if they pass, they are considered to know the subject. If else the website selects a method of teaching by placing three numbers into a random number generator, which determines how the student will be taught: with flashcards, with a video, or with an article. This is based on the result of the random number generator as if the value is <= the flashcard value, they are taught by flashcards, else if the value is <= the flashcard value + the video value, they are taught by an article, else they are taught by a video. If the student passes the post-test, the application will increase the likelihood that the student is taught the same way in the future. If they fail the post-test, the likelihood of them being taught by the other 2 methods that were not chosen will increase, and they are sent back to the tutor page. 
<br/>
<br/>
In addition to the success of the student affecting themselves, whenever a student successfully completes they also increase the likelihood of the “global student” being taught with the same tactic. Whenever a new student is created, the values from the global student (which starts at 200,200,200) are divided by ten, and then are used as their values of the random number generator. Since the “global student” represents the trend of all past students, it can allow newer students to be taught in a “recommended” while the better tactic for them is being found.
<br/>
<br/>
If students leave the current page or the website, their data is saved and they can return to where they left off, no matter the amount of progress they made on the page. This data is stored in a database with the tables. This includes users that contain the users’ id, username, password, and values for the random number generator. Pages that store the name of each class, their category, the iframe data for the tutoring methods, and the HTML for the tests. Finally scores which has the userid, pageid, and the score of the user on the given page. To save space on the scores table, whenever a user logs out their data on the table for untouched pages is removed, and then returned when they log back in.
<br/>
<br/>
The app itself has a vast database of classes and tests for the student to use. These are categorized by type and subtype, but they can also be searched for at the top of the site. Yet there is no way for a website to have everything a student might want to study. This is where the teacher accounts come in.
<br/>
<br/>
Teacher accounts act exactly like student accounts in all ways but one; when being created the user adds a teacher id to the sign-up form. Having a teacher-id allows the user to create a new class with its own tests and tutor materials. The teacher can then send out their teacher code and if students enter a classroom using the code they can take the new class created by the teacher.
<br/>
<br/>
In order to protect the users of the website, despite the lack of truly personal information, the website contains various protection measures. This includes hashing the password before it is stored in the SQL database and using bind.param when interacting with the database.
<br/>
<br/>
In conclusion, The problem we as high schoolers face is that the learning instructions were always one style, whether it is text or video. The problem is that everyone learns differently. With Digital Aristotle, using Machine Learning through a random number generator that improves upon itself when either yourself or someone else learns something, it can teach students the way that they need to be taught. The internet contains a wealth of knowledge with so many possible methods of teaching students. The web application not only learns how to teach the student best as individuals, but also allows the student to experience many different ways of learning.
<br/>
<br/>
Aristotle himself said, “Knowing yourself is the beginning of all wisdom”. Our web app follows this principle because the website knowing the student, and the student knowing how they learn best is the foundation of a strong education.';
 echo "<p>$str</p>";
	
	require("footer.php");
