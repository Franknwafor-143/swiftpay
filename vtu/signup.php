<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | SwiftPay</title>
    <link rel="stylesheet" href="css/signup.css">
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
                <li><a href="plans.php">Pricing</a></li>
            </ul>
            <div class="nav-btns">
                <a href="login.php" class="btn-text">Login</a>
                <div class="hamburger" id="hamburger">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="signup-wrapper">
        <section class="signup-visual">
            <div class="visual-content" data-aos="fade-right">
                <div class="badge-live"><span class="dot"></span> 256-bit SSL Secured</div>
                <h1>Join the Future of <span>Digital Payments.</span></h1>
                <p>Creating an account is quick and secure. Fund your wallet, purchase services, and track transactions in real time.</p>
                
                <div class="floating-cards">
                    <div class="f-card c1">
                        <i class="fas fa-shield-check"></i>
                        <span>Secure Encryption</span>
                    </div>
                    <div class="f-card c2">
                        <i class="fas fa-bolt"></i>
                        <span>Instant Delivery</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="signup-form-container">
            <div class="form-box" data-aos="zoom-in" data-aos-delay="200">
                <div class="form-header">
                    <h2>Create Your Account</h2>
                    <p>Start buying airtime & data instantly.</p>
                </div>

                <form action="process_signup.php" method="POST">
                    <div class="input-grid">
                        <div class="input-group">
                            <label><i class="fas fa-user"></i> Full Name</label>
                            <input type="text" name="fullname" placeholder="John Doe" required>
                        </div>
                        <div class="input-group">
                            <label><i class="fas fa-at"></i> Username</label>
                            <input type="text" name="username" placeholder="johndoe24">
                        </div>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-envelope"></i> Email Address</label>
                        <input type="email" name="email" placeholder="name@example.com" required>
                    </div>

                    <div class="input-group">
                        <label><i class="fas fa-phone"></i> Phone Number</label>
                        <input type="tel" name="phone" placeholder="0801 234 5678" required>
                    </div>

                    <div class="input-grid">
                        <div class="input-group">
                            <label><i class="fas fa-lock"></i> Password</label>
                            <input type="password" id="pass" placeholder="••••••••" required>
                        </div>
                        <div class="input-group">
                            <label><i class="fas fa-check-double"></i> Confirm</label>
                            <input type="password" id="confirm_pass" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="password-hints">
                        <p><i class="fas fa-info-circle"></i> Min. 8 characters with letters & symbols.</p>
                    </div>

                    <button type="submit" class="btn-submit">Create Account <i class="fas fa-arrow-right"></i></button>
                    
                    <p class="terms-text">By registering, you agree to our <a href="terms.php">Terms & Privacy Policy</a></p>
                </form>

                <div class="form-footer">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>

                <div class="security-reassurance">
                    <i class="fas fa-lock-alt"></i>
                    <p>Your information is encrypted and never shared with third parties without consent.</p>
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        // Hamburger
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.onclick = () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        };
    </script>
</body>
</html>