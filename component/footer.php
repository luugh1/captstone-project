<footer>
            <div class="footer-first">
                <div class="brand-section">
                    <span><img src="assets/images/brands-images/Brandit Logo-01.png" alt="company logo"></span>
                    <p>Lorem ipsum dolor assumenda, odio, ex
                        laborum ab repellendus consectetur cum vitae!</p>
                    <div class="social-icons">
                    <div><i class="fa-brands fa-instagram"></i></div>
                    <div><i class="fa-brands fa-x-twitter"></i></div>
                    <div><i class="fa-brands fa-facebook-f"></i></div>
                    </div>

                    Email Us: <a href="mailto@Support@brandit.com">Support@brandit.com</a>
                </div>

                <div class="quick-link">
                    <h2>Quick Link</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="sign-up.php">Register</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <div>Copyright &copy; 2024, </div>

                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Term</a></li>
                    <li><a href="#">Condition</a></li>
                </ul>
            </div>
        </footer>

        <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <video id="myVideo" autoplay muted loop controls>
                <source src="assets/video/AdobeStock_921126920_Video_HD_Preview.mov" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
          </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
    integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>


<script>
    window.addEventListener('scroll', function () {
        const header = document.getElementById('header');
        const scrollY = window.scrollY;

        // Change header color based on scroll position
        if (scrollY > 50) {
            header.classList.add("header-style");
        } else {
            header.classList.remove("header-style");
        }
    });

</script>
</html>