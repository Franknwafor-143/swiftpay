<style>
    /* Header & Nav */
header {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    padding: 1rem 0;
    position: sticky;
    top: 0;
    z-index: 1000;
    border-bottom: 1px solid rgba(0,0,0,0.05);
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
}

.logo span { color: var(--secondary); }

.logo-icon {
    background: var(--primary);
    color: var(--secondary);
    width: 35px;
    height: 35px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10px;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 2rem;
}

.nav-links a {
    text-decoration: none;
    color: var(--text-main);
    font-weight: 600;
    transition: 0.3s;
}

.nav-links a:hover, .nav-links a.active { color: var(--secondary); }

.nav-actions { display: flex; align-items: center; gap: 1.5rem; }

.link-login { text-decoration: none; color: var(--primary); font-weight: 700; }

.btn-primary {
    background: var(--primary);
    color: var(--white);
    padding: 12px 24px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    box-shadow: 0 4px 15px rgba(10, 37, 64, 0.15);
}

.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(10, 37, 64, 0.25); }
</style>


<header>
        <nav class="container navbar">
            <div class="logo">
                <div class="logo-icon"><i class="fas fa-bolt"></i></div>
                <span>Swift</span>Pay
            </div>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="#how-it-works">How it Works</a></li>
                <li class="mobile-only"><a href="#" class="btn-login">Login</a></li>
                <li class="mobile-only"><a href="#" class="btn-signup">Register</a></li>
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