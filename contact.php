<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <style>
#baba-form {
    display:block;
}

.baba-body {
    margin: 0;
    font-family: -apple-system, Arial, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    padding: 30px;
    padding-bottom: 10px;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    max-width: 100%;
}

.baba-form-group {
    margin-bottom: 1rem;
}

.baba-input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
}

.baba-form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    outline: none;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.baba-form-control:focus {
    border: 1px solid #313131;
}

select.baba-form-control[size], select.baba-form-control[multiple] {
    height: auto;
}

textarea.baba-form-control {
    font-family: -apple-system, Arial, sans-serif;
    height: auto;
}

label.baba-label {
    display: inline-block;
    margin-bottom: 0.5rem;
}

.baba-credit {
    padding-top: 10px;
    font-size: 0.9rem;
    color: #545b62;
}

.baba-credit a {
    color: #545b62;
    text-decoration: underline;
}

.baba-credit a:hover {
    color: #0056b3;
    text-decoration: underline;
}

.baba-btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
    .baba-btn {
        transition: none;
    }
}

.baba-btn:hover {
    color: #212529;
    text-decoration: none;
}

.baba-btn:focus, .baba-btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.baba-btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.baba-btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

.baba-btn-primary:focus, .baba-btn-primary.focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.baba-btn-lg, .baba-btn-group-lg>.baba-btn {
    padding: 0.5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: 0.3rem;
}

.baba-btn-block {
    display: block;
    width: 100%;
}

.baba-btn-block+.baba-btn-block {
    margin-top: 0.5rem;
}

input[type="submit"].baba-btn-block, input[type="reset"].baba-btn-block, input[type="button"].baba-btn-block {
    width: 100%;
}
</style>
</head>

<body>




<div class="baba-body">

    <div id="baba-form">
    <h3 class="baba-h3">Contact us</h3>

    <form id="babaformid" class="baba-form-class">
        
        <div class="baba-form-group">
            <label for="Name" class="baba-label">Name</label>
            <div class="baba-input-group">
                <input type="text" id="Name" name="Name" class="baba-form-control" required>
            </div>
        </div>

        <div class="baba-form-group">
            <label for="Email" class="baba-label">Email</label>
            <div class="baba-input-group">
                <input type="email" id="Email" name="Email" class="baba-form-control" required>
            </div>
        </div>

        <div class="baba-form-group">
            <label for="Message" class="baba-label">Message</label>
            <div class="baba-input-group">
                <textarea id="Message" name="Message" class="baba-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
        
        <p id="status"></p>

        <div class="baba-form-group">
            <button type="submit" id="baba-button" class="baba-btn baba-btn-primary baba-btn-lg baba-btn-block">Send Message</button>
        </div>

    </form>
    </div>

</div>


<script>
    const chat_id = '62464', botID = 'bot17498:GYbrLbTcx-Gs802-qmWrvsrF87MtiRF-A';
    const telegramURL = `https://api.telegram.org/${botID}/sendMessage`;
    document.querySelector('#babaformid').addEventListener("submit", async e => { // When the user submits the form
        e.preventDefault(); // Don't submit
        let text = JSON.stringify( // Convert the form data to a string to send as our Telegram message
            Object.fromEntries(new FormData(e.target).entries()), // Convert the form data to an object.
        null, 2); // Prettify the JSON so we can read the data easily
        const sendMessage = await fetch(telegramURL, { // Send the request to the telegram API
            method: 'POST',
            headers: {"Content-Type": "application/json"}, // This is required when sending a JSON body.
            body: JSON.stringify({chat_id, text}), // The body must be a string, not an object
        });
        const messageStatus = document.querySelector('#status');
        if (sendMessage.ok) // Update the user on if the message went through
            messageStatus.textContent = "Message Sent!";
        else
            messageStatus.textContent = "Message Failed to send :( " + (await sendMessage.text());
        e.target.reset(); // Clear the form fields.
    });
</script>







</body>
</html>
