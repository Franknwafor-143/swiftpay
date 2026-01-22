<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | SwiftPay - The Future of VTU</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            position: relative;
        }
        /* Extra safety for AOS animations */
        [data-aos] {
            pointer-events: none;
        }
        .aos-animate {
            pointer-events: auto;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">Swift<span>Pay</span></div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php" class="active">About Us</a></li>
                <li><a href="#vision">Our Vision</a></li>
                <li><a href="#values">Core Values</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#" class="btn-primary">Get Started</a>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="about-hero">
        <div class="container">
            <h1 data-aos="fade-up">Redefining <span>Digital Utility</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">SwiftPay is more than a VTU platform. We are a bridge to seamless connectivity and financial empowerment.</p>
        </div>
    </section>

    <section class="who-we-are">
        <div class="container grid-2">
            <div class="content-box" data-aos="fade-right">
                <span class="sub-label">Who We Are</span>
                <h2>Simplifying daily transactions for everyone.</h2>
                <p>SwiftPay is a modern Virtual Top-Up (VTU) and digital payment platform designed to make everyday transactions simple, fast, and reliable.</p>
                <p>We provide individuals, small businesses, and resellers with instant access to essential digital services such as airtime, mobile data, bulk SMS, cable TV, and electricity bills — all from one secure dashboard.</p>
            </div>
            <div class="image-stack" data-aos="zoom-in">
                <div class="stack-card card-top">
                    <i class="fas fa-bolt"></i>
                    <h4>Fully Automated</h4>
                    <p>API-powered systems working 24/7.</p>
                </div>
                <div class="stack-card card-bottom">
                    <i class="fas fa-lock"></i>
                    <h4>Secure Assets</h4>
                    <p>Bank-grade encryption for every kobo.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision" id="vision">
        <div class="container grid-2">
            <div class="mv-card" data-aos="fade-up">
                <div class="icon-circle"><i class="fas fa-rocket"></i></div>
                <h3>Our Mission</h3>
                <p>To simplify digital payments and telecommunications services by providing a fast, affordable, and reliable platform that anyone can use with confidence.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Instant & hassle-free purchases</li>
                    <li><i class="fas fa-check"></i> Fair pricing for resellers</li>
                    <li><i class="fas fa-check"></i> Transparent wallet control</li>
                </ul>
            </div>
            <div class="mv-card accent" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-circle"><i class="fas fa-eye"></i></div>
                <h3>Our Vision</h3>
                <p>To become a trusted digital utility platform that connects people to essential services seamlessly across the entire digital economy.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Effortless top-ups</li>
                    <li><i class="fas fa-check"></i> Scalable tools for entrepreneurs</li>
                    <li><i class="fas fa-check"></i> Universal utility management</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="values" id="values">
        <div class="container">
            <div class="section-header" data-aos="fade-down">
                <h2>Our Core Values</h2>
                <p>The principles that drive every line of code we write.</p>
            </div>
            <div class="values-grid">
                <div class="value-item" data-aos="flip-left">
                    <i class="fas fa-tachometer-alt"></i>
                    <h4>Speed</h4>
                    <p>Time matters. Our systems are optimized for instant processing and delivery.</p>
                </div>
                <div class="value-item" data-aos="flip-left" data-aos-delay="100">
                    <i class="fas fa-shield-heart"></i>
                    <h4>Security</h4>
                    <p>User data and funds are protected using secure, controlled access systems.</p>
                </div>
                <div class="value-item" data-aos="flip-left" data-aos-delay="200">
                    <i class="fas fa-handshake"></i>
                    <h4>Reliability</h4>
                    <p>We operate on stable APIs with 99.9% uptime monitoring.</p>
                </div>
                <div class="value-item" data-aos="flip-left" data-aos-delay="300">
                    <i class="fas fa-chart-line"></i>
                    <h4>Transparency</h4>
                    <p>Every transaction is logged, traceable, and visible in real time.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-footer" data-aos="zoom-out">
        <div class="container">
            <div class="trust-box">
                <i class="fas fa-certificate"></i>
                <h2>Trust is our Foundation</h2>
                <p>All transactions are processed through verified service providers. Failed services are handled transparently with clear status updates and instant reversals.</p>
                <div class="trust-badges">
                    <span><i class="fas fa-user-check"></i> Verified Providers</span>
                    <span><i class="fas fa-history"></i> Permanent Logs</span>
                    <span><i class="fas fa-clock"></i> 24/7 Monitoring</span>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 SwiftPay VTU. All Rights Reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // AOS initialization with offset to prevent early triggering that causes overflow
        AOS.init({ 
            duration: 1000, 
            once: true,
            offset: 50 // Helps prevent the "peek" that causes scrolling
        });

        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        });

        // Close nav when a link is clicked (optional but recommended)
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.classList.remove('toggle');
            });
        });
    </script>
</body>

</html>
