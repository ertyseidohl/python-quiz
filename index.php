<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Python Self-Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<?php
		define ("SHOW_ANSWERS", true);
		function q($number, $question, $showPython = true, $textAnswer = false) {
			echo '<div class="q">';
			echo '<h3 class="n">' . $number . '</h3>';
			echo '<p class="q">' . $question . '</p>';
			if ($showPython) {
				echo '<pre class="qc">';
				echo file_get_contents('./examples/' . $number . '.py');
				echo '</pre>';
			}	
			
			if (SHOW_ANSWERS) {
				echo '<p>Answer:</p>';
				if ($textAnswer) {
					echo '<blockquote>' . $textAnswer . '</blockquote>';
				} else {
					echo '<pre class="qa">';
					echo shell_exec("/usr/local/bin/python3 ./examples/{$number}.py  2>&1");
					echo '</pre>';
				}
			}
			echo '</div>';
		}
	?>
</head>

<body>
	<div class="container">
		<h1>Python Self-Test</h1>

		<h2>1 PAPER QUIZ</h2>

		<p><strong>These questions are designed to be solved without the help of a computer.</strong> They test your ability to run code in your head and think about programming logic. You're welcome to use paper and pencil. Please feel free to look up syntax in a book or online, but don't look up how to solve the problem itself.</p>
		
		<ul>
			<li>This quiz is written using syntax from Python 3</li>
			<li>Assume each question starts with a fresh interpreter - no values are carried over from a previous question.</li>
			<li>All code provided is valid and working unless specifically marked as code which will throw an error.</li>
		</ul>
		
		<h3>1.1 Variables and Types</h3>

		<?php q("1.1.1", "What does the following code print?"); ?>

		<?php q("1.1.2", "What does the following code print?"); ?>

		<?php q("1.1.3", "What does the following code print?"); ?>

		<?php q("1.1.4", "The following code is invalid and <strong>will not run</strong>. Why?"); ?>

		<?php q("1.1.5", "What does the following code print?"); ?>
		
		<?php q("1.1.6", "What does the following code print?"); ?>
		
		<h3>1.2 Functions</h3>
		
		<?php q("1.2.1", "What does the following code print?"); ?>
		
		<?php q("1.2.2", "What does the following code print?"); ?>
		
		<?php q("1.2.3", "What does the following code print?"); ?>
		
		<?php q("1.2.4", "The following code is valid, but <strong>prints nothing</strong>. Why?"); ?>
		
		<?php q("1.2.5", "The following code is invalid and <strong>will not run</strong>. Why?", true, "Because we never actually tell python to <code>print</code> anything."); ?>
		
		<h3>1.3 Object-Oriented Programming</h3>
	</div>

</body>

</html>