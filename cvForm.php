<?php session_start(); //add this on all pages
//here create session variable: ex: $_SESSION['name'] = 'Jean';
//they can be created anywhere though
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CV_Form</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<header>
	</header>
	
	<body>
	<form method='post' action="execute_cvForm.php" enctype="multipart/form-data">
		<h1>Identity</h1>
		<div class="text_input">
			Name: <input type="text" name="name" value="">
		</div>
        <div class="text_input">
            Name: <input type="text" name="mail" value="">
        </div>
        <div class="text_input">
            Name: <input type="text" name="telephone" value="">
        </div>
        <div class="text_input">
            Name: <input type="text" name="location" value="">
        </div>
        <div class="text_input">
            Name: <input type="text" name="age" value="">
        </div>
		
		<div class="text_input">
			Photo: <br/><input type="file" name="image">
		</div>
		
		<h1>Your Experience</h1>
		<textarea rows="4" cols="50" name="experience">Talk about your experience: </textarea>
	
		<h1>Your Skills</h1>
		<textarea rows="4" cols="50" name="skills">Talk about your skills: </textarea>
		
		<h1>Your Studies</h1>
		<textarea rows="4" cols="50" name="studies">Talk about your studies: </textarea>

        <h1>Other Information</h1>
        <textarea rows="4" cols="50" name="other">Anything you would like to add ? </textarea>

		</br>
		<input type="submit">
	</form>
	</body>
</html>