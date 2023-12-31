<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

</head>

<body>

    <?php include 'navbar.php'; ?>

    <section>
        <div class="swiper  mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/contact.png" alt="">
                    <div class="swiper-text">
                        <h4> Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="grid-container">
            <div class="contt">
                <h1><i class="fas fa-map-marker-alt"></i> </h1>
                <p>Kumasi</p>
            </div>
            <div class="contt">
                <h1><i class="far fa-envelope"></i></h1>
                <p>info@tlgghana.com</p>
            </div>
            <div class="contt">
                <h1><i class="fas fa-phone"></i></h1>
                <p><a href="tel:0208119455" style="color: #000;
                 text-decoration:none;">+233208119455</a></p>
                <p><a href="tel:+233322021894" style="color: #000;
                 text-decoration:none;">+233322021894</a></p>
            </div>
        </div>
    </section>

    <section>
        <div class="getintouch">
            <h1 class="text-center">Get in Touch with TLG</h1>
        </div>
        <div class="get-grid">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.6484199397514!2d-1.601593221530764!3d6.690396503962545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb942710a8ef0f%3A0x5a59a57750641d91!2sTLG%20Company!5e0!3m2!1sen!2sgh!4v1687290691970!5m2!1sen!2sgh" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-home">
                <form id="contact-form">
                    <div class="cont">
                        <label for="name">Name:</label>
                        <br>
                        <input type="text" id="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="cont">
                        <label for="phone">Phone:</label>
                        <br>
                        <input type="tel" id="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="cont">
                        <label for="message">Message:</label>
                        <br>
                        <textarea id="message" cols="30" rows="10" placeholder="Enter your message" required></textarea>
                    </div>
                    <div class="cont">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com/dist/email.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });

        (function() {
            emailjs.init("V25YH8woz5YG7ubmw");
        })();

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            sendMail();
        });

        function sendMail() {
            var params = {
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                message: document.getElementById('message').value
            };

            const serviceID = 'service_yoi94cf';
            const templateID = 'template_953dmf6';

            emailjs.send(serviceID, templateID, params)
                .then(function(response) {
                    console.log('Email sent successfully:', response);
                    alert('Your message has been sent! We will get back to you soon.');
                }, function(error) {
                    console.error('Email failed to send:', error);
                    alert('Sorry, there was an error sending your message. Please try again later.');
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>