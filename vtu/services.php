<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | SwiftPay - Instant VTU & Utility</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">Swift<span>Pay</span></div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php" class="active">Services</a></li>
                <li><a href="pricing.php">Pricing</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#" class="btn-outline">Login</a>
                <a href="#" class="btn-primary">Get Started</a>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="services-hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-out">
                <span class="badge"><i class="fas fa-sparkles"></i> All-in-One Utility</span>
                <h1>Powerful Services for <span>Modern Living.</span></h1>
                <p>SwiftPay provides a wide range of digital services designed to keep you connected and in control. Each service is delivered instantly through secure and reliable systems.</p>
            </div>
        </div>
    </section>

    <section class="services-grid-section">
        <div class="container">
            <div class="bento-grid">
                
                <div class="bento-item main-item" data-aos="fade-up">
                    <div class="icon-box mtn-gradient"><i class="fas fa-phone-volume"></i></div>
                    <h3>Airtime Recharge</h3>
                    <p>Purchase airtime instantly for all major Nigerian networks at competitive rates.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Instant delivery</li>
                        <li><i class="fas fa-check-circle"></i> Real-time confirmation</li>
                    </ul>
                    <div class="use-cases">
                        <span>Personal</span> <span>Reselling</span> <span>Business</span>
                    </div>
                </div>

                <div class="bento-item tall-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box green-gradient"><i class="fas fa-wifi"></i></div>
                    <h3>Mobile Data</h3>
                    <p>Access SME, Corporate Gifting (CG), and Gifting plans easily.</p>
                    <div class="data-types">
                        <div class="type-pill">SME Data</div>
                        <div class="type-pill">CG Data</div>
                        <div class="type-pill">Gifting</div>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Affordable rates</li>
                        <li><i class="fas fa-check-circle"></i> Multiple Networks</li>
                        <li><i class="fas fa-check-circle"></i> Instant Activation</li>
                    </ul>
                </div>

                <div class="bento-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box blue-gradient"><i class="fas fa-comment-dots"></i></div>
                    <h3>Bulk SMS</h3>
                    <p>Reach thousands instantly with high delivery rates and custom Sender IDs.</p>
                </div>

                <!-- <div class="bento-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box gold-gradient"><i class="fas fa-tv"></i></div>
                    <h3>Cable TV</h3>
                    <p>DSTV, GOtv, and StarTimes. Instant activation from your dashboard.</p>
                </div>

                <div class="bento-item wide-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box energy-gradient"><i class="fas fa-bolt"></i></div>
                    <div class="wide-content">
                        <h3>Electricity Bill Payment</h3>
                        <p>Purchase prepaid tokens or pay postpaid bills for all major DISCOs instantly.</p>
                    </div>
                    <i class="fas fa-lightbulb decor-icon"></i>
                </div> -->

            </div>
        </div>
    </section>

    <section class="why-us-services">
        <div class="container">
            <div class="glass-card" data-aos="flip-up">
                <h2>Why use SwiftPay Services?</h2>
                <div class="perks-grid">
                    <div class="perk">
                        <i class="fas fa-layer-group"></i>
                        <p>One platform for multiple services</p>
                    </div>
                    <div class="perk">
                        <i class="fas fa-user-shield"></i>
                        <p>Secure wallet system</p>
                    </div>
                    <div class="perk">
                        <i class="fas fa-tags"></i>
                        <p>Transparent pricing</p>
                    </div>
                    <div class="perk">
                        <i class="fas fa-history"></i>
                        <p>Instant logs & Delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="final-cta">
        <div class="container" data-aos="zoom-in">
            <h2>Ready to experience speed?</h2>
            <p>Join thousands of users who trust SwiftPay for their daily digital needs.</p>
            <div class="cta-actions">
                <a href="#" class="btn-gold">Create Account</a>
                <a href="#" class="btn-outline-white">View Pricing</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 SwiftPay. Powered by reliable Telecom APIs.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Hamburger Menu
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.onclick = () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        };
    </script>
</body>
</html>