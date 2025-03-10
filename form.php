<!DOCTYPE html>
<html>
<head>
    <title>Bitwise Operations</title>
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
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .note {
            margin-top: 20px;
            color: #777;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Bitwise Operations Calculator</h1>
    
    <div class="form-container">
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="integers">Integers (separated by commas):</label>
                <input type="text" id="integers" name="integers" required placeholder="e.g., 3, 5, 7, 9">
            </div>
            
            <div class="form-group">
                <label for="threshold">Threshold:</label>
                <input type="number" id="threshold" name="threshold" required placeholder="e.g., 4">
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    
    <div class="note">

    </div>
</body>
</html>