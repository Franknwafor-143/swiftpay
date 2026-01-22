<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwiftPay | Instant VTU & Data Services</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="container navbar">
            <div class="logo">
                <!-- <div class="logo-icon"><i class="fas fa-bolt"></i></div> -->
                <span>Swift</span>Pay
            </div>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="#how-it-works">How it Works</a></li>
                <li class="mobile-only"><a href="#" class="btn-login">Login</a></li>
                <li class="mobile-only"><a href="#" class="btn-signup">Register</a></li>
                <li class="mobile-only"><a href="#" class="btn-signup"><i class="fas fa-user"></i></a></li>                
            </ul>

            <div class="nav-actions">
                <a href="#" class="link-login">Login</a>
                <a href="#" class="btn-primary">Create Free Account</a>
            </div>

            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text" data-aos="fade-right">
                <div class="hero-badge">
                    <span class="pulse"></span> No queues. No delays. No stress.
                </div>
                <h1>Buy Airtime & Data Instantly. <span>Fast. Secure. Reliable.</span></h1>
                <p class="sub-headline">SwiftPay is a modern VTU platform that allows you to purchase airtime, mobile data, and digital services instantly at affordable rates — anytime, anywhere.</p>
                
                <div class="value-points">
                    <div class="point"><i class="fas fa-check-circle"></i> Instant delivery</div>
                    <div class="point"><i class="fas fa-check-circle"></i> SME, CG & Gifting Plans</div>
                    <div class="point"><i class="fas fa-check-circle"></i> Secure Wallet System</div>
                    <div class="point"><i class="fas fa-check-circle"></i> 24/7 Availability</div>
                </div>

                <div class="hero-btns">
                    <a href="#" class="btn-primary-lg">Create Free Account</a>
                    <a href="#" class="btn-secondary-lg">Login to Dashboard</a>
                </div>
            </div>

            <div class="hero-visual" data-aos="zoom-in-left">
                <div class="phone-mockup">
                    <div class="screen-content">
                        <div class="wallet-card">
                            <p>Wallet Balance</p>
                            <h3>₦45,250.00</h3>
                        </div>
                        <div class="mini-trans">
                            <div class="t-item">
                                <div class="t-icon mtn"><i class="fas fa-mobile-alt"></i></div>
                                <div><small>MTN Data</small><br><b>Successful</b></div>
                                <span class="t-amt">-₦500</span>
                            </div>
                            <div class="t-item">
                                <div class="t-icon glo"><i class="fas fa-wifi"></i></div>
                                <div><small>Glo Airtime</small><br><b>Successful</b></div>
                                <span class="t-amt">-₦1,000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="floating-badge b-1">
                    <i class="fas fa-shield-alt"></i>
                    <span>Secure Payments</span>
                </div>
                <div class="floating-badge b-2">
                    <i class="fas fa-clock"></i>
                    <span>Instant Delivery</span>
                </div>
            </div>
        </div>
    </section>

    <section class="networks" id="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>All Major Networks Supported</h2>
                <p>We support all major Nigerian telecommunications networks, ensuring you can recharge and stay connected without limitations.</p>
            </div>
            
            <div class="network-cards">
                <div class="n-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="n-logo mtn">MTN</div>
                    <h3>MTN Nigeria</h3>
                    <p>Airtime & Data</p>
                </div>
                <div class="n-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="n-logo airtel">Airtel</div>
                    <h3>Airtel Nigeria</h3>
                    <p>Airtime & Data</p>
                </div>
                <div class="n-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="n-logo glo">Glo</div>
                    <h3>Glo Nigeria</h3>
                    <p>Airtime & Data</p>
                </div>
                <div class="n-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="n-logo mobile9">9mobile</div>
                    <h3>9mobile</h3>
                    <p>Airtime & Data</p>
                </div>
            </div>

            <div class="trust-bar" data-aos="fade-in">
                <i class="fas fa-bolt"></i> Our services are powered by reliable VTU and telecom APIs to guarantee speed, accuracy, and successful delivery.
            </div>
        </div>
    </section>

    <section class="why-us">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Why Thousands Trust SwiftPay</h2>
                <p>Built for speed, reliability, and user confidence.</p>
            </div>

            <div class="features-grid">
                <div class="f-card" data-aos="fade-up">
                    <div class="f-icon"><i class="fas fa-shipping-fast"></i></div>
                    <h4>Instant Delivery</h4>
                    <p>Processed automatically. Delivery happens within seconds of ordering.</p>
                </div>
                <div class="f-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="f-icon"><i class="fas fa-tag"></i></div>
                    <h4>Affordable Pricing</h4>
                    <p>Save more or resell for profit with our competitive market rates.</p>
                </div>
                <div class="f-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="f-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Secure Wallet</h4>
                    <p>Advanced security logs and real-time balance tracking for your funds.</p>
                </div>
                <div class="f-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="f-icon"><i class="fas fa-server"></i></div>
                    <h4>Reliable Infrastructure</h4>
                    <p>Stable APIs monitored 24/7 to reduce downtime and failed transactions.</p>
                </div>
                <div class="f-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="f-icon"><i class="fas fa-search-dollar"></i></div>
                    <h4>Transparent Transactions</h4>
                    <p>Traceable history in your dashboard with zero hidden charges.</p>
                </div>
                <div class="f-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="f-icon"><i class="fas fa-headset"></i></div>
                    <h4>Customer Support</h4>
                    <p>Our dedicated team is ready to assist with any questions or failed tasks.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>How SwiftPay Works</h2>
            </div>
            <div class="steps-container">
                <div class="step-item" data-aos="fade-right">
                    <div class="step-num">01</div>
                    <h4>Create Account</h4>
                    <p>Sign up for free in less than a minute.</p>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="step-num">02</div>
                    <h4>Fund Wallet</h4>
                    <p>Add money via transfer or card safely.</p>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="200">
                    <div class="step-num">03</div>
                    <h4>Select Service</h4>
                    <p>Pick the service and network you need.</p>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="step-num">04</div>
                    <h4>Confirm Details</h4>
                    <p>Enter details and click confirm.</p>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="step-num">05</div>
                    <h4>Instant Delivery</h4>
                    <p>Service is delivered immediately!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-box" data-aos="zoom-in">
            <div class="live-counter"><i class="fas fa-users"></i> Over 1,000 successful transactions today</div>
            <h2>Get Started Today</h2>
            <p>Join thousands of users enjoying fast, affordable, and secure digital top-ups every day. Whether personal use or reselling, SwiftPay is your best choice.</p>
            <div class="cta-btns">
                <a href="#" class="btn-gold">Register Now – It’s Free</a>
            </div>
            <div class="trust-footer" style="margin-top: 40px;">
                Secure payments • Instant delivery • Trusted by users nationwide
            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-content">
            <div class="footer-logo">Swift<span>Pay</span></div>
            <p>&copy; 2024 SwiftPay VTU. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize Animations
        AOS.init({ duration: 1000, once: true });

        // Mobile Menu Logic
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        });

        // Close menu when clicking links
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.classList.remove('toggle');
            });
        });
    </script>
</body>
</html>