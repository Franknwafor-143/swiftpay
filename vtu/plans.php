<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing & Support | SwiftPay</title>
    <link rel="stylesheet" href="css/plans.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">Swift<span>Pay</span></div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.html">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="plans.php" class="active">Pricing & FAQ</a></li>
                <li class="mobile-only"><a href="#" class="btn-primary">Login</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#" class="btn-text">Login</a>
                <a href="#" class="btn-primary">Join SwiftPay</a>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </div>
        </nav>
    </header>

    <section class="plans-hero">
        <div class="container" data-aos="fade-down">
            <h1>Transparent Pricing. <span>No Hidden Fees.</span></h1>
            <p>SwiftPay offers competitive rates designed for both personal users and high-volume resellers.</p>
        </div>
    </section>

    <section class="data-categories container">
        <div class="category-grid">
            <div class="cat-card" data-aos="fade-right">
                <div class="cat-icon sme"><i class="fas fa-layer-group"></i></div>
                <h3>SME Data</h3>
                <p>Cost-effective bundles via enterprise channels. Best for resellers.</p>
                <span class="price-tag">From ₦220/GB</span>
            </div>
            <div class="cat-card featured" data-aos="fade-up">
                <div class="cat-icon cg"><i class="fas fa-building"></i></div>
                <h3>Corporate Gifting</h3>
                <p>Highly stable and fast activation. Recommended for heavy users.</p>
                <span class="price-tag">From ₦260/GB</span>
            </div>
            <div class="cat-card" data-aos="fade-left">
                <div class="cat-icon gifting"><i class="fas fa-gift"></i></div>
                <h3>Gifting (Direct)</h3>
                <p>Official network data. Highest reliability for critical tasks.</p>
                <span class="price-tag">Network Rates</span>
            </div>
        </div>
    </section>

    <section class="airtime-section container" data-aos="fade-up">
        <div class="section-title">
            <h2>Airtime Discount Structure</h2>
            <p>Save money every time you top up your line.</p>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Network</th>
                        <th>Retail Price</th>
                        <th>SwiftPay Price</th>
                        <th>You Save</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://upload.wikimedia.org/wikipedia/commons/9/93/MTN_Logo.svg" alt="MTN" width="30"> MTN</td>
                        <td>₦1,000</td>
                        <td>₦980</td>
                        <td class="save">2% Discount</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle" style="color:#ED1C24"></i> Airtel</td>
                        <td>₦1,000</td>
                        <td>₦985</td>
                        <td class="save">1.5% Discount</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle" style="color:#008338"></i> Glo</td>
                        <td>₦1,000</td>
                        <td>₦970</td>
                        <td class="save">3% Discount</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-circle" style="color:#00573D"></i> 9mobile</td>
                        <td>₦1,000</td>
                        <td>₦990</td>
                        <td class="save">1% Discount</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="faq-section container">
        <div class="section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">What happens if my transaction fails? <i class="fas fa-plus"></i></div>
                <div class="faq-answer"><p>If a transaction fails, your wallet is either not deducted at all, or an automatic refund is initiated instantly. All statuses are visible in your history.</p></div>
            </div>
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">How can I fund my wallet? <i class="fas fa-plus"></i></div>
                <div class="faq-answer"><p>You can fund your wallet via Bank Transfer or Secure Card Payment. Your balance updates automatically upon confirmation.</p></div>
            </div>
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">How long does delivery take? <i class="fas fa-plus"></i></div>
                <div class="faq-answer"><p>Airtime and Data are instant (within seconds). Cable TV and Electricity typically take 1-5 minutes.</p></div>
            </div>
        </div>
    </section>

    <section class="contact-section container" id="contact">
        <div class="grid-2">
            <div class="contact-info" data-aos="fade-right">
                <h2>Get in Touch</h2>
                <p>Have a complaint or need technical assistance? Our team is online 24/7.</p>
                <div class="contact-methods">
                    <a href="mailto:support@swiftpay.com" class="method-card">
                        <i class="fas fa-envelope"></i>
                        <span>support@swiftpay.com</span>
                    </a>
                    <a href="#" class="method-card">
                        <i class="fab fa-whatsapp"></i>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>
            </div>
            
            <div class="contact-form-card" data-aos="fade-left">
                <form action="#">
                    <div class="input-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="John Doe" required>
                    </div>
                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="john@example.com" required>
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" placeholder="Transaction Issue" required>
                    </div>
                    <div class="input-group">
                        <label>Message</label>
                        <textarea rows="4" placeholder="How can we help?"></textarea>
                    </div>
                    <button type="submit" class="btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 SwiftPay. Secure Payments • Instant Delivery</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // FAQ Toggle
        document.querySelectorAll('.faq-question').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                item.classList.toggle('active');
            });
        });

        // Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.onclick = () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        };
    </script>
</body>

</html>
