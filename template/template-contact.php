<?php get_header(); ?>
<?php
/*
 Template Name: Contact Us
*/
?>
    <h1 style="text-align: center; font-size: 30px; font-weight:800; margin-top: 30px;">Contact Us</h1>
    <p style="font-size: 14px; font-weight:600; text-align: center; margin-top: 30px;">Thanks For Vistiing Us</p>

    <div class="container">
        <div class="card">
            <div class="card-body contact-box">
                <div>
                <form id="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name"><br><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br><br>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea><br><br>
                    <input type="submit" value="Send">
                </form>
                </div>
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54444.646213954955!2d74.28918441953128!3d31.474951784132436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391903fc8b773e39%3A0x3abfcdee69af7713!2sVirtual%20University%20Campus%20Faisal%20Town!5e0!3m2!1sen!2s!4v1725112148636!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
