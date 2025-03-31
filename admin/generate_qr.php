<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <style>
        #qrcode {
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>QR Code Generator</h1>
    <input type="text" id="text-input" placeholder="Enter text or URL" />
    <button id="generate-btn">Generate QR Code</button>
    <div id="qrcode"></div>

    <script>
        $(document).ready(function() {
            $('#generate-btn').click(function() {
                const text = $('#text-input').val();
                $('#qrcode').empty(); // Clear previous QR code
                $('#qrcode').qrcode({
                    text: text,
                    width: 128,
                    height: 128
                });
            });
        });
    </script>
</body>
</html>