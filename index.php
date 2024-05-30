<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>
    <form id="validate-form" action="" method="post">
        <fieldset>
            <legend>Payment Form</legend>
            <p id="message"></p>
            <div class="form-row">
                <label for="phone_no">Phone no.</label>
                <p>Enter phone number in this format: <span id="input-info">2547xxxxxxxxx or 2541xxxxxxxxx</span></p>
                <input id="phone_no" name="phone_no" type="tel" pattern="^254[71]\d{8}$" required />
            </div>
            <button type="submit">Submit</button>
        </fieldset>
    </form>

    <script src="validate.js"></script>
</body>

</html>