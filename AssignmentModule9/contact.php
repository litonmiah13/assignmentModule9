<?php include "include/header.php"?>
    <main>
        <section class="contact">
            <div class="container">
                <div class="contact-area">
                    <div class="contact-form">
                        <div class="headline">
                            <h1>Send your message</h1>
                        </div>
                        <form action="message.php" method="POST">
							<label for="">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required>
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" required>
                            <label for="">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Enter subject" required>
                            <label for="">Message</label>
                            <textarea name="message" placeholder="Write a message" id="message" cols="20" rows="10" required></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include "include/footer.php"?>