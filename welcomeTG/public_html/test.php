<html>
    <head>
        <script src="js/jquery.min-3.0.0.js" type="text/javascript"></script>
        <script src="js/validate.js" type="text/javascript"></script>
        <script src="js/time.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- Ajax Server time test -->
        <div id="serverDate"></div>
       
        <!-- Ajax Contact form mail to test --> 
        <div id='container'>
            <form name="contactForm" id='contact_form' method="post" action='mailto.php'>
                <h2>Ajax HTML Contact Form</h2>
                <h3>After submission of the form the email will be sent to the email id you entered.</h3>
                <p> Your Name:
                <div id='name_error' class='error'><img src='images/error.png'>Please enter your name.</div>
                <div>
                    <input type='text' name='name' id='name'>
                </div>
                </p>
                <p> Your E-mail ID:
                <div id='email_error' class='error'><img src='images/error.png'>Please enter your valid E-mail ID.</div>
                <div>
                    <input type='text' name='email' id='email'>
                    <div>
                        </p>
                        <p> Email Subject:
                        <div id='subject_error' class='error'><img src='images/error.png'>Please enter the subject.</div>
                        <div>
                            <input type='text' name='subject' id='subject'>
                        </div>
                        </p>
                        <p> Your Message:
                        <div id='message_error' class='error'><img src='images/error.png'>Please enter your message.</div>
                        <div>
                            <textarea name='message' id='message'></textarea>
                        </div>
                        </p>
                        <div id='mail_success' class='success'><img src='images/success.png'>Your message has been sent successfully.</div>
                        <div id='mail_fail' class='error'><img src='images/error.png'> Sorry, error occured this time sending your message.</div>
                        <p id='submit'>
                            <input type='submit' id='send_message' value='Submit Form'>
                        </p>

                        <footer>This demo form is the reference to the article <a href="http://bit.ly/122DCsw" title="How to create a simple HTML contact form with Ajax & PHP" target="_blank">http://bit.ly/122DCsw</a> </footer>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
