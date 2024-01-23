<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Form with Sections</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        fieldset {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        input {
            margin-top: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        input:hover {
            transform: scale(1.05);
        }

        button {
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px 12px;
            background-color: rgb(67, 67, 178);
            color: white;
            width: 100%;
        }

        .message {
            margin-top: 20px;
            font-size: 18px;
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="game2.php" method="post">
        <fieldset>
            <h1>Starter Form</h1>
            <input type="text" name="input1" placeholder="Input 1">
            <input type="text" name="input2" placeholder="Input 2">
            <input type="text" name="input3" placeholder="Input 3">
            <input type="text" name="input4" placeholder="Input 4">
            <input type="text" name="input5" placeholder="Input 5">
            <input type="text" name="input6" placeholder="Input 6">
            <div class="message"></div>
        </fieldset>

        <fieldset>
            <h1>Another Form</h1>
            <input type="text" name="input11" placeholder="Input 1">
            <input type="text" name="input22" placeholder="Input 2">
            <input type="text" name="input33" placeholder="Input 3">
            <input type="text" name="input44" placeholder="Input 4">
            <input type="text" name="input55" placeholder="Input 5">
            <input type="text" name="input66" placeholder="Input 6">
            <div class="message"></div>
        </fieldset>

        <fieldset>
            <h1>1st Prize</h1>
            <input type="text" name="111" placeholder="1st Prize">
            <div class="message"></div>
        </fieldset>

        <fieldset>
            <h1>2nd Prize</h1>
            <input type="text" name="222" placeholder="2nd Prize">
            <div class="message"></div>
        </fieldset>

        <fieldset>
            <h1>3rd Prize</h1>
            <input type="text" name="333" placeholder="3rd Prize">
            <div class="message"></div>
        </fieldset>

        <button type="submit" id="submitButton">Submit</button>
    </form>

    <!-- Uncomment the JavaScript when you're ready to use it -->
    <!-- <script>
        // Add your JavaScript logic here
    </script> -->

</body>
</html>
