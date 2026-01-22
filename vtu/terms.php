<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Privacy | SwiftPay Legal</title>
    <link rel="stylesheet" href="css/terms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">Swift<span>Pay</span></div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="plans.php">Pricing</a></li>
                <li><a href="terms.php" class="active">Legal</a></li>
            </ul>
            <div class="nav-btns">
                <a href="#" class="btn-primary">Dashboard</a>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </div>
        </nav>
    </header>

    <main class="legal-layout">
        <div class="container">
            <div class="legal-wrapper">
                
                <aside class="legal-sidebar" data-aos="fade-right">
                    <div class="sidebar-inner">
                        <h3>Legal Portal</h3>
                        <ul>
                            <li><a href="#tos" class="side-link active"><i class="fas fa-file-contract"></i> Terms of Service</a></li>
                            <li><a href="#privacy" class="side-link"><i class="fas fa-user-shield"></i> Privacy Policy</a></li>
                            <li><a href="#compliance" class="side-link"><i class="fas fa-gavel"></i> Legal Compliance</a></li>
                        </ul>
                    </div>
                </aside>

                <div class="legal-content">
                    
                    <section id="tos" class="legal-section" data-aos="fade-up">
                        <div class="section-header">
                            <span class="badge">Updated Jan 2026</span>
                            <h1>Terms of Service</h1>
                            <p>By using SwiftPay, you agree to comply with the following terms and conditions. Please read them carefully.</p>
                        </div>

                        <div class="legal-card">
                            <h3>User Responsibilities</h3>
                            <ul>
                                <li>Provide accurate information during registration.</li>
                                <li>Maintain the absolute confidentiality of your login details.</li>
                                <li>Use the platform only for lawful purposes as defined by local and international law.</li>
                            </ul>
                        </div>

                        <div class="legal-card">
                            <h3>Service Availability & Transactions</h3>
                            <p>SwiftPay strives to maintain uninterrupted service but does not guarantee absolute uptime due to network or third-party dependencies.</p>
                            <div class="info-box">
                                <i class="fas fa-info-circle"></i>
                                <span>SwiftPay is not responsible for errors caused by incorrect user input (e.g., wrong phone number).</span>
                            </div>
                        </div>

                        <div class="legal-card danger">
                            <h3>Account Suspension</h3>
                            <p>Accounts may be suspended without notice for:</p>
                            <ul>
                                <li>Fraudulent activity or suspicious funding.</li>
                                <li>Abuse of services or technical exploitation.</li>
                                <li>Violation of any part of these terms.</li>
                            </ul>
                        </div>
                    </section>

                    <section id="privacy" class="legal-section" data-aos="fade-up">
                        <div class="section-header">
                            <h1>Privacy Policy</h1>
                            <p>Your data security is our top priority. We use bank-grade encryption to protect your information.</p>
                        </div>

                        <div class="data-grid">
                            <div class="data-item">
                                <i class="fas fa-database"></i>
                                <h4>Data Collection</h4>
                                <p>We collect Name, Email, Phone number, and Transaction records only.</p>
                            </div>
                            <div class="data-item">
                                <i class="fas fa-user-lock"></i>
                                <h4>Data Protection</h4>
                                <p>Stored securely with access restricted to authorized personnel only.</p>
                            </div>
                        </div>

                        <div class="legal-card">
                            <h3>Usage & Cookies</h3>
                            <p>User data is used strictly for service delivery and account verification. SwiftPay uses cookies to enhance platform performance and remember your preferences.</p>
                        </div>
                    </section>

                    <section id="compliance" class="legal-section" data-aos="fade-up">
                        <div class="compliance-banner">
                            <div class="banner-icon"><i class="fas fa-balance-scale"></i></div>
                            <div>
                                <h2>Legal Compliance Statement</h2>
                                <p>SwiftPay operates in full compliance with applicable laws governing digital payments and data protection. We respect user privacy rights and cooperate with lawful regulatory requests.</p>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>

    <footer class="legal-footer">
        <div class="container">
            <p>&copy; 2026 SwiftPay. All Rights Reserved. Dedicated to Secure Digital Utilities.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.onclick = () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        };

        // Sidebar active link switcher on scroll
        const sections = document.querySelectorAll('.legal-section');
        const sideLinks = document.querySelectorAll('.side-link');

        window.onscroll = () => {
            let current = "";
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            sideLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        };
    </script>
</body>
</html>