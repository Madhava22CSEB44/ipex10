<!DOCTYPE html>
<html>
<head>
 <title>Prime Numbers Finder</title>
</head>
<body>
 <h1>Find Prime Numbers Within a Given Range</h1>
 <!—Form to input the range →
 <form method=”POST” action=””>
 <label for=”start”>Enter the starting number:</label>
 <input type=”number” id=”start” name=”start” min=”2” required>
 <label for=”end”>Enter the ending number:</label>
 <input type=”number” id=”end” name=”end” min=”2” required>
 <input type=”submit” value=”Find Prime Numbers”>
 </form>
 <?php
 // Function to check if a number is prime
 Function is_prime($num) {
 // Numbers less than 2 are not prime
 If ($num < 2) {
 Return false;
 }
 // Check divisibility from 2 to square root of the number
 For ($i = 2; $i * $i <= $num; $i++) {
 If ($num % $i == 0) {
 Return false;
 }
 }
 // If no divisors are found, the number is prime
 Return true;
 }
 // Check if the form has been submitted
 If ($_SERVER[‘REQUEST_METHOD’] == ‘POST’) {
 // Retrieve the starting and ending numbers from the form
 $start = intval($_POST[‘start’]);
 $end = intval($_POST[‘end’]);
 // Ensure the range is valid
 If ($start > $end) {
 Echo “<p>Please enter a valid range (starting number should be less than or equal to 
ending number).</p>”;
 } else {
 Echo “<h2>Prime Numbers between $start and $end:</h2>”;
 // Loop through the range and check for prime numbers
 For ($i = $start; $i <= $end; $i++) {
 If (is_prime($i)) {
 Echo $i . “ “;
 }
 }
 }
 }
 ?>
</body>
</html>
