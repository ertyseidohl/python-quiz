<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Python Self-Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<?php
		define ("SHOW_ANSWERS", isset($_GET['ans']) || isset($_GET['all']));
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
					echo '<blockquote class="qa">' . $textAnswer . '</blockquote>';
				} else {
					echo '<pre class="qa">';
					echo shell_exec("/usr/local/bin/python3 ./examples/{$number}.py  2>&1");
					echo '</pre>';
				}
			}
			echo '</div>';
		}
	?>
	<?php if (isset($_GET['ans'])): ?>
	<style>
		.qa {
			background-color: beige;
			color: beige;
			cursor: crosshair;
		}
		.qa:hover {
			color: black;
		}
	</style>
	<?php endif; ?>
	<?php if (isset($_GET['all'])): ?>
	<style>
		.qa {
			background-color: beige;
		}
	</style>
	<?php endif; ?>
</head>

<body>
	<div class="container">
		<h1>Python Self-Test</h1>
		
		<?php
			if(SHOW_ANSWERS) {
				echo '<p class="alert alert-info">Hover your mouse over the beige boxes to show the answers</p>';
				echo '<p><a class="btn btn-sm btn-warning" href="./?all">Reveal All Answers</a> <a class="btn btn-sm btn-warning" href="./">Hide Answers</a></p>';
			}
		?>
		

		<h2>1 PAPER QUIZ</h2>

		<p><strong>These questions are designed to be solved without the help of a computer.</strong> They test your ability to run code in your head and think about programming logic. You're welcome to use paper and pencil or a text editor. Please feel free to look up syntax in a book or online, but don't look up how to solve the problem itself.</p>
		
		<ul>
			<li>This quiz is written using syntax from Python 3</li>
			<li>Assume each question starts with a fresh interpreter - no values are carried over from a previous question.</li>
			<li>All code provided is valid and working unless specifically marked as code which will throw an error.</li>
		</ul>
		
		<h3>1.1 Variables and Basic Loops</h3>
		
		<?php q("1.1.0", "What does the following code print?"); ?>

		<?php q("1.1.1", "What does the following code print?"); ?>

		<?php q("1.1.2", "What does the following code print?"); ?>

		<?php q("1.1.3", "What does the following code print?"); ?>

		<?php q("1.1.4", "The following code is invalid and <strong>will not run</strong>. Why?"); ?>

		<?php q("1.1.5", "What does the following code print?"); ?>
		
		<?php q("1.1.6", "What does the following code print?"); ?>
		
		<?php q("1.1.7", "What does the following code print?"); ?>
		
		<?php q("1.1.8", "What does the following code print?"); ?>
		
		<?php q("1.1.9", "What does the following code print?"); ?>
		
		<h3>1.2 Functions</h3>
		
		<?php q("1.2.0", "What does the following code print?"); ?>
		
		<?php q("1.2.1", "The following code is invalid and <strong>will not run</strong>. Why?", true, "Because the argument <code>number</code> is not present and has been replaced by the number 5."); ?>
		
		<?php q("1.2.2", "What does the following code print?"); ?>
		
		<?php q("1.2.3", "What does the following code print?"); ?>
		
		<?php q("1.2.4", "The following code is valid, but <strong>prints nothing</strong>. Why?", true, "Because we never actually tell python to <code>print</code> anything."); ?>
		
		<?php q("1.2.5", "The following code is invalid and <strong>will not run</strong>. Why?", true, "Because the variable <code>inner</code> is scoped to the inside of the function and is not available outside of the function."); ?>
		
		<?php q("1.2.6", "The following code prints <code>3</code>. Why?", true, "Because the argument <code>a</code> passed into the function creates a new locally-scoped variable called <code>a</code> which shadows the outer variable called <code>a</code>"); ?>
		
		<?php q("1.2.7", "What does the following code print?"); ?>
		
		<?php q("1.2.8", "What does the following code print? What is the data type of the printed value?"); ?>
		
		<?php q("1.2.9", "What does the following code print?"); ?>
		
		<h3>1.3 Object-Oriented Programming</h3>
		
		<?php q("1.3.0", "What does the following code print?"); ?>

		<?php q("1.3.1", "The following code is invalid and <strong>will not run</strong>. Why?", true, "Because we are accessing <code>url</code>, which is a temporary variable in Image's intializer function, not <code>source</code> which is an attribute on the <code>img</code> object."); ?>

		<?php q("1.3.2", "What does the following code print?"); ?>

		<?php q("1.3.3", "What does the following code print?"); ?>

		<?php q("1.3.4", "The following code is valid, but <strong>prints nothing</strong>. Why?", true, "Because we have declared <code>Newspaper</code> as a function using <code>def</code>, instead of a class using <code>class</code>. Remember! you can create a function inside a function (although it's generally frowned upon, it's perfectly legal.)"); ?>

		<?php q("1.3.5", "Is the following code <strong>valid</strong>?", true, "Yes, the code is valid and runs, producing <code>8</code>. This is known as a <code>static method</code> or <code>class method</code>. You can use the <code>@staticmethod</code> decorator with this type of function to explicitly declare the method as static. For more information, see <a href='http://stackoverflow.com/a/10206355/374601'>this StackOverflow answer</a>."); ?>
		
		<?php q("1.3.6", "Is the following code <strong>valid</strong>? What is the <strong>data type</strong> of <code>area</code>?", true, "Yes, the code is valid and runs, producing <code>64</code>. The variable <code>area</code> is a function - it is a reference to the function <code>conforter.getArea</code> - the function is not called until we place the parentheses <code>()</code> after it."); ?>
		
		<?php q("1.3.7", "What does the following code print?"); ?>
		
		<?php q("1.3.8", "What does the following code print?"); ?>
		
		<?php q("1.3.9", "What does the following code print?"); ?>
		
		<h3>1.4 Libraries and Built-in Functions</h3>
		
		<?php q("1.4.0", "What does the following code print?"); ?>

		<?php q("1.4.1", "What does the following code print?"); ?>

		<?php q("1.4.2", "What does the following code print?"); ?>

		<?php q("1.4.3", "What does the following code print?"); ?>

		<?php q("1.4.4", "The following code is invalid and <strong>will not run</strong>. Why?", true, "The <code>tuple</code> type is not mutable, and we cannot change values in it."); ?>
		
		<?php q("1.4.5", "The following code is invalid and <strong>will not run</strong>. How could we <strong>change it</strong> so that the function handles all of the inputs?", true, "We could cast <code>subject</code> to a string before adding it: <code>print( 'Hello, ' + str(subject) )</code>"); ?>
		
		<?php q("1.4.6", "What does the following code print?"); ?>
		
		<?php q("1.4.7", "What does the following code print?"); ?>
		
		<?php q("1.4.8", "What does the following code print? Assume that the user will enter <code>10</code>"); ?>
		
		<?php q("1.4.9", "What does the following code print?"); ?>
		<!--
		<h2>2 COMPUTER QUIZ</h2>
		
		<p><strong>These questions are designed to be solved by writing and running code.</strong> They test your ability to create logic in the computer and to solve problems. Write code to solve the problem and make sure the tests pass.</p>
		
		<ul>
			<li>This quiz is written using syntax from Python 3</li>
			<li>Assume each question starts with a fresh interpreter - no values are carried over from a previous question.</li>
			<li>The code you write must pass the assert functions given, as is.</li>
		</ul>
		
		<h3>2.1 Libraries and Built-in Functions</h3>
		
		<p>(TODO)</p>
		-->
		<a class="btn btn-lg btn-warning" href="./?ans">Show Answers</a>
	</div>

</body>

</html>