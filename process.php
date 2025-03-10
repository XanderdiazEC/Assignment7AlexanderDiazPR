<?php
// Get input from POST or GET
$integers = isset($_POST['integers']) ? $_POST['integers'] : $_GET['integers'];
$threshold = isset($_POST['threshold']) ? $_POST['threshold'] : $_GET['threshold'];

// Run Python script
$command = "python3 bitwise_operations.py \"$integers\" $threshold";
$output = shell_exec($command);

// Display results
echo "<h1>Results</h1>";
echo "<pre>$output</pre>";
echo "<a href='form.php'>Back to form</a>";
?>