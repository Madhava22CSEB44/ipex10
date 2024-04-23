<?

// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Check if the form has been submitted
If ($_SERVER[“REQUEST_METHOD”] == “POST”) {
// Get the user’s guess from the form
$userGuess = $_POST[“guess”];

// Check if the guess is valid
If (is_numeric($userGuess) && $userGuess >= 1 && $userGuess <= 100) {
// Compare the user’s guess with the random number If ($userGuess == $randomNumber) {
$message = “Congratulati php ons! You guessed the correct number.”;
} elseif ($userGuess < $randomNumber) {
$message = “Too low! Try guessing a higher number.”;
} else {
$message = “Too high! Try guessing a lower number.”;
}
} else {
$message = “Please enter a valid number between 1 and 100.”;
}
} else {
// If the form has not been submitted yet, initialize the message
$message = “Guess a number between 1 and 100.”;
}

?>

<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
<title>Guessing Game</title>
</head>
<body>
<h1>Guessing Game</h1>
<p><?php echo $message; ?></p>
 
<form method=”post” action=”<?php echo htmlspecialchars($_SERVER[“PHP_SELF”]);
?>”>
<label for=”guess”>Enter your guess:</label>
<input type=”number” id=”guess” name=”guess” min=”1” max=”100” required>
<button type=”submit”>Guess</button>
</form>
</body>
</html>
