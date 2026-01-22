<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SwiftPay</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

    <div class="dashboard-layout">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">Swift<span>Pay</span></div>
                <i class="fas fa-times close-menu" id="closeMenu"></i>
            </div>
            
            <nav class="side-nav">
                <div class="nav-label">Main Menu</div>
                <a href="dashboard.php" class="nav-item active"><i class="fas fa-th-large"></i> Dashboard</a>
                <a href="wallet.php" class="nav-item"><i class="fas fa-wallet"></i> My Wallet</a>
                <a href="fund.php" class="nav-item "><i class="fas fa-history"></i> Funding History</a>
                <a href="transaction.php" class="nav-item"><i class="fas fa-exchange-alt"></i> Transactions</a>
                
                <div class="nav-label">Services</div>
                <a href="airtime.php" class="nav-item"><i class="fas fa-phone"></i> Airtime</a>
                <a href="data.php" class="nav-item"><i class="fas fa-wifi"></i> Data Plans</a>
                <a href="bulk.php" class="nav-item"><i class="fas fa-bolt"></i> Bulk SMS</a>

                <div class="nav-label">Communication</div>
                <a href="notification.php" class="nav-item "><i class="fas fa-bell"></i> Notification</a>
                <a href="message.php" class="nav-item"><i class="fas fa-envelope"></i> Message</a>
                
                <div class="nav-label">System</div>
                <a href="settings.php" class="nav-item"><i class="fas fa-user-cog"></i> Settings</a>
                <a href="logout.php" class="nav-item logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="topbar">
                <div class="topbar-left">
                    <i class="fas fa-bars-staggered hamburger" id="openMenu"></i>
                    <h1>Dashboard</h1>
                </div>
                <div class="topbar-right">
                    <a href="notification.php">
                    <div class="notification-bell">
                        <i class="fas fa-bell"></i>
                        <span class="pulse-dot"></span>
                    </div>
                    </a>
                    <div class="user-profile">
                        <img src="https://ui-avatars.com/api/?name=Frank&background=0A2540&color=fff" alt="User">
                        <div class="user-info">
                            <span class="u-name">Frank</span>
                            <span class="u-status">Verified</span>
                        </div>
                    </div>
                </div>
            </header>

            <div class="content-body">
                <section class="welcome-section" data-aos="fade-up">
                    <h2>Welcome back, Frank! 👋</h2>
                    <p>Your SwiftPay dashboard gives you a complete overview of your wallet and quick actions.</p>
                </section>

                <section class="stats-grid">
                    <div class="balance-card" data-aos="zoom-in">
                        <div class="card-head">
                            <span>Wallet Balance</span>
                            <i class="fas fa-eye-slash toggle-balance"></i>
                        </div>
                        <h2 id="balance-amount">₦45,250.00</h2>
                        <div class="card-footer">
                            <button class="btn-fund"><i class="fas fa-plus"></i> Fund Wallet</button>
                        </div>
                        <i class="fas fa-shield-alt decor-shield"></i>
                    </div>

                    <div class="action-card" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Quick Actions</h3>
                        <div class="action-btns">
                            <div class="a-btn">
                                <div class="a-icon airtime"><i class="fas fa-mobile-alt"></i></div>
                                <span>Airtime</span>
                            </div>
                            <div class="a-btn">
                                <div class="a-icon data"><i class="fas fa-signal"></i></div>
                                <span>Data</span>
                            </div>
                            <div class="a-btn">
                                <div class="a-icon utility"><i class="fas fa-lightbulb"></i></div>
                                <span>Bills</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="transaction-history" data-aos="fade-up">
                    <div class="section-header">
                        <h3>Recent Transactions</h3>
                        <a href="#">View All</a>
                    </div>

                    <div class="transaction-list">
                        <div class="tr-item">
                            <div class="tr-icon success"><i class="fas fa-arrow-down"></i></div>
                            <div class="tr-details">
                                <strong>MTN Data (SME) - 2GB</strong>
                                <span>Today, 12:45 PM • 08123456789</span>
                            </div>
                            <div class="tr-amount negative">-₦460.00</div>
                        </div>

                        <div class="tr-item">
                            <div class="tr-icon wallet"><i class="fas fa-wallet"></i></div>
                            <div class="tr-details">
                                <strong>Wallet Funding</strong>
                                <span>Yesterday, 09:12 AM • Bank Transfer</span>
                            </div>
                            <div class="tr-amount positive">+₦10,000.00</div>
                        </div>

                        <div class="tr-item">
                            <div class="tr-icon success"><i class="fas fa-bolt"></i></div>
                            <div class="tr-details">
                                <strong>IKEDC Prepaid Token</strong>
                                <span>15 Jan 2026 • 0423-1123...</span>
                            </div>
                            <div class="tr-amount negative">-₦5,000.00</div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Mobile Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openMenu');
        const closeBtn = document.getElementById('closeMenu');

        openBtn.onclick = () => sidebar.classList.add('active');
        closeBtn.onclick = () => sidebar.classList.remove('active');

        // Balance Masking Toggle
        let isMasked = false;
        const balanceTxt = document.getElementById('balance-amount');
        document.querySelector('.toggle-balance').onclick = function() {
            if(!isMasked) {
                balanceTxt.innerText = '₦ ••••••••';
                this.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                balanceTxt.innerText = '₦45,250.00';
                this.classList.replace('fa-eye', 'fa-eye-slash');
            }
            isMasked = !isMasked;
        };
    </script>
</body>
</html>