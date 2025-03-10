<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .payment-form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .payment-option {
            margin: 10px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .upi-field {
            display: none;
            margin-top: 10px;
        }
        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleUPIField() {
            var upiField = document.getElementById('upi-field');
            var upiOption = document.getElementById('upi-option');
            if (upiOption.checked) {
                upiField.style.display = 'block';
            } else {
                upiField.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="payment-form">
        <h1>Select Payment Method</h1>
        <form action="userhome.php" method="post">
        <div class="payment-option">
                <label>
                    <input type="radio" name="payment_method" value="upi" id="upi-option" onclick="toggleUPIField()" required>
                    UPI Payment
                </label>
                <div class="upi-field" id="upi-field">
                    <label for="upi_qr">UPI QR Code URL:</label>
                    <input type="text" name="upi_qr" id="upi_qr" placeholder="Enter UPI QR Code URL">
                    <p>Use your UPI app to scan the QR code and complete the payment.</p>
                </div>
            </div><br>

            <div class="payment-option">
        <h4>Scan QR Code to Pay</h4>
        <img src="qr.jpeg" height="200" width="200" alt="QR Code">
        </div><br>
            <div class="payment-option">
                <label>
                    <input type="radio" name="payment_method" value="cod" id="cod-option" onclick="toggleUPIField()" required>
                    Cash on Delivery
                </label>
            </div><br><br>
           
            <button type="submit">Proceed</button>
        </form>
    </div>
</body>
</html>