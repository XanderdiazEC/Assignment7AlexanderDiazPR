<?php
// Get input from POST or GET
$integers = isset($_POST['integers']) ? $_POST['integers'] : $_GET['integers'];
$threshold = isset($_POST['threshold']) ? $_POST['threshold'] : $_GET['threshold'];

// Run Python script
$command = "python3 bitwise_operations.py \"$integers\" $threshold";
$output = shell_exec($command);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bitwise Operations Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .results-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .result-text {
            font-family: monospace;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            border-left: 4px solid #4CAF50;
            white-space: pre-wrap;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Bitwise Operations Results</h1>
    
    <div class="results-container">
        <div class="result-text"><?php echo $output; ?></div>
        <a href="form.php" class="back-button">Back to Calculator</a>
    </div>
</body>
</html>