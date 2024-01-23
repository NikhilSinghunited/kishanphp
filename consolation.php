<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with 6 Inputs</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #inputContainer {
            display: flex;
            gap: 10px;
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

        h1 {
            margin-top: 20px;
            font-size: 32px;
            color: orange;
            text-align: center;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            border-radius: 10px 12px;
            background-color: rgb(67, 67, 178);
            color: white;
        }

        #message {
            margin-top: 20px;
            font-size: 18px;
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1></h1>
    <form action="game2.php" method="post" id="inputContainer">
        <input type="text" name="input11" placeholder="Input 1">
        <input type="text" name="input22" placeholder="Input 2">
        <input type="text" name="input33" placeholder="Input 3">
        <input type="text" name="input44" placeholder="Input 4">
        <input type="text" name="input55" placeholder="Input 5">
        <input type="text" name="input66" placeholder="Input 6">
    
        <button type="submit" id="submitButton">Submit</button>
    </form>
    <div id="message"></div>

    <!-- Uncomment the JavaScript when you're ready to use it -->
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            const submitButton = document.getElementById('submitButton');
            const messageContainer = document.getElementById('message');

            submitButton.addEventListener('click', function () {
                // Collect input values from all input fields
                const input1 = document.getElementById('input1').value;
                const input2 = document.getElementById('input2').value;
                const input3 = document.getElementById('input3').value;
                const input4 = document.getElementById('input4').value;
                const input5 = document.getElementById('input5').value;
                const input6 = document.getElementById('input6').value;

                // Create an object with input values
                const inputData = {
                    input1: input1,
                    input2: input2,
                    input3: input3,
                    input4: input4,
                    input5: input5,
                    input6: input6,
                };

                // Send input values to display.php
                fetch('display.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(inputData),
                })
                .then(response => response.text()) // change response.json() to response.text()
                .then(data => {
                    console.log('Server response:', data);

                    // Display a success message
                    messageContainer.textContent = 'Data sent properly!';
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Display an error message
                    messageContainer.textContent = 'Error sending data. Please try again.';
                });
            });
        });
    </script> -->
</body>
</html>
