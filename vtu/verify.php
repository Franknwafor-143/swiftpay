<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Account | SwiftPay Security</title>
    <link rel="stylesheet" href="css/verify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">Swift<span>Pay</span></div>
            <div class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="plans.php">Support</a></li>
                <li><a href="login.php" class="btn-outline">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="verify-wrapper">
        <div class="verification-reminder" data-aos="fade-down">
            <i class="fas fa-exclamation-triangle"></i>
            <span><strong>Account Verification Required:</strong> Please verify your details to unlock full transaction limits.</span>
        </div>

        <div class="verify-container">
            <div class="verify-card" data-aos="zoom-in">
                <div class="verify-header">
                    <div class="icon-stack">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h1>Verify Your Account</h1>
                    <p>To protect your account and ensure secure transactions, we require a quick identity check.</p>
                </div>

                <div class="verify-tabs">
                    <button class="tab-btn active" onclick="switchTab('otp')">Phone OTP</button>
                    <button class="tab-btn" onclick="switchTab('email')">Email Link</button>
                </div>

                <div id="otp-section" class="tab-content active">
                    <form onsubmit="handleVerify(event)">
                        <label>Enter 6-Digit Code</label>
                        <div class="otp-input-wrapper">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                            <input type="text" maxlength="1" class="otp-digit" pattern="\d*" inputmode="numeric">
                        </div>
                        <button type="submit" class="btn-verify">Verify Account</button>
                    </form>
                    <p class="resend-text">Didn't get the code? <a href="resend.php">Resend OTP</a></p>
                </div>

                <div id="email-section" class="tab-content">
                    <div class="email-visual">
                        <i class="fas fa-paper-plane"></i>
                        <p>A verification link was sent to your registered email address.</p>
                    </div>
                    <button class="btn-verify" onclick="simulateEmailCheck()">Check Verification Status</button>
                    <p class="resend-text">Can't find it? <a href="resend.php">Resend Email Link</a></p>
                </div>

                <div id="successBox" class="status-box success">
                    <i class="fas fa-circle-check"></i>
                    <p>Your account has been verified successfully. Redirecting...</p>
                </div>

                <div id="errorBox" class="status-box error">
                    <i class="fas fa-circle-xmark"></i>
                    <p>Invalid verification code or expired link. Please try again.</p>
                </div>

                <div class="security-note">
                    <i class="fas fa-shield-alt"></i>
                    <p>If you did not request this verification, contact support immediately.</p>
                </div>
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800 });

        // Tab Switching Logic
        function switchTab(type) {
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            
            event.currentTarget.classList.add('active');
            document.getElementById(type + '-section').classList.add('active');
        }

        // OTP Auto-focus Logic
        const digits = document.querySelectorAll('.otp-digit');
        digits.forEach((digit, idx) => {
            digit.oninput = (e) => {
                if (e.target.value.length > 0 && idx < digits.length - 1) {
                    digits[idx + 1].focus();
                }
            }
            digit.onkeydown = (e) => {
                if (e.key === "Backspace" && !e.target.value && idx > 0) {
                    digits[idx - 1].focus();
                }
            }
        });

        // Form Submission Logic
        function handleVerify(e) {
            e.preventDefault();
            const success = document.getElementById('successBox');
            success.style.display = 'flex';
            setTimeout(() => { window.location.href = 'dashboard.php'; }, 2000);
        }

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