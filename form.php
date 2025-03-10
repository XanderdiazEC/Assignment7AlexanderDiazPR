<!DOCTYPE html>
<html>
<head>
    <title>Bitwise Operations</title>
</head>
<body>
    <h1>Bitwise Operations Calculator</h1>
    
    <form action="process.php" method="post">
        <div>
            <label for="integers">Integers (separated by commas):</label>
            <input type="text" id="integers" name="integers" required>
        </div>
        
        <div>
            <label for="threshold">Threshold:</label>
            <input type="number" id="threshold" name="threshold" required>
        </div>
        
        <button type="submit">Submit</button>
    </form>
    
    <p>Note: You can also use URL parameters: process.php?integers=3,5,7,9&threshold=4</p>
</body>
</html>