<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | SwiftPay Security</title>
    <link rel="stylesheet" href="css/forgot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">
                <a href="index.php">Swift<span>Pay</span></a>
            </div>
    </header>

    <main class="forgot-wrapper">
        <div class="recovery-card" data-aos="fade-up">
            <div class="header-visual">
                <div class="icon-circle">
                    <i class="fas fa-key-skeleton"></i>
                </div>
                <div class="pulse-ring"></div>
            </div>

            <div class="card-text">
                <h1>Reset Your Password</h1>
                <p>Forgot your password? No problem. Enter your registered details to receive a secure recovery link.</p>
            </div>

            <form id="recoveryForm" onsubmit="handleRecovery(event)">
                <div class="input-group">
                    <label>Email Address or Phone Number</label>
                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" placeholder="e.g. name@mail.com or 080..." required>
                    </div>
                </div>

                <button type="submit" class="btn-recovery" id="submitBtn">
                    <span class="btn-text">Send Reset Link / OTP</span>
                    <div class="loader" id="loader"></div>
                </button>
            </form>

            <div id="successMessage" class="success-box">
                <div class="check-icon"><i class="fas fa-check-circle"></i></div>
                <h4>Link Sent Successfully!</h4>
                <p>A password reset link or OTP has been sent. If you do not receive it within 5 minutes, check your spam or contact support.</p>
                <a href="login.php" class="btn-back">Back to Login</a>
            </div>

            <div class="security-footer">
                <div class="security-shield">
                    <i class="fas fa-user-shield"></i>
                    <span>SwiftPay will never ask for your password or OTP via call or text.</span>
                </div>
            </div>
        </div>

        <div class="help-links">
            <p>Remembered your password? <a href="login.php">Go to Login</a></p>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800 });

        // Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.onclick = () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('toggle');
        };

        // Simulated Form Logic
        function handleRecovery(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            const form = document.getElementById('recoveryForm');
            const success = document.getElementById('successMessage');
            
            btn.classList.add('loading');
            
            setTimeout(() => {
                form.style.display = 'none';
                success.classList.add('show');
            }, 2000);
        }
    </script>
</body>
</html>