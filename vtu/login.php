<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SwiftPay Secure Access</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar container">
            <div class="logo">
                <a href="index.php" style="text-decoration:none; color:inherit;">
                    Swift<span>Pay</span>
                </a>
            </div>
            <div class="nav-right">
                <a href="signup.php" class="btn-outline">Create Account</a>
            </div>
        </nav>
    </header>

    <main class="login-container">
        <div class="bg-glow"></div>
        
        <div class="login-card" data-aos="zoom-in-up">
            <div class="login-header">
                <div class="lock-icon">
                    <i class="fas fa-shield-halved"></i>
                </div>
                <h2>Welcome Back</h2>
                <p>Enter your credentials to access your wallet</p>
            </div>

            <form action="dashboard.php" method="POST">
                <div class="input-group">
                    <label>Email or Phone Number</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user-circle"></i>
                        <input type="text" placeholder="e.g. 08012345678" required>
                    </div>
                </div>

                <div class="input-group">
                    <div class="label-row">
                        <label>Password</label>
                        <a href="#" class="forgot-link">Forgot Password?</a>
                    </div>
                    <div class="input-wrapper">
                        <i class="fas fa-key"></i>
                        <input type="password" id="loginPass" placeholder="••••••••" required>
                        <i class="fas fa-eye-slash toggle-pass" onclick="togglePassword()"></i>
                    </div>
                </div>

                <div class="security-tip">
                    <i class="fas fa-info-circle"></i>
                    <p>Keep your login details secure. Never share your password.</p>
                </div>

                <button type="submit" class="btn-login">
                    <span>Secure Login</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </form>

            <div class="login-footer">
                <p>New to SwiftPay? <a href="signup.php">Create an account</a></p>
            </div>
        </div>

        <div class="support-note" data-aos="fade-up" data-aos-delay="400">
            <p><i class="fas fa-exclamation-triangle"></i> Suspect unauthorized access? <a href="plans.php#contact">Contact Support Immediately</a></p>
        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        function togglePassword() {
            const passInput = document.getElementById('loginPass');
            const toggleIcon = document.querySelector('.toggle-pass');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                passInput.type = 'password';
                toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        }
    </script>
</body>
</html>