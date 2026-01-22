<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wallet | SwiftPay</title>
    <link rel="stylesheet" href="css/wallet.css">
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
                <a href="dashboard.php" class="nav-item"><i class="fas fa-th-large"></i> Dashboard</a>
                <a href="wallet.php" class="nav-item active"><i class="fas fa-wallet"></i> My Wallet</a>
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
                    <h1>My Wallet</h1>
                </div>
                <div class="topbar-right">
                    <div class="user-profile">
                        <img src="https://ui-avatars.com/api/?name=Frank&background=0A2540&color=fff" alt="User">
                        <span class="u-name">Frank</span>
                    </div>
                </div>
            </header>

            <div class="content-body">
                <div class="wallet-grid">
                    <div class="wallet-card-main" data-aos="fade-right">
                        <div class="card-chip">
                            <i class="fas fa-microchip"></i>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" alt="Mastercard" width="40">
                        </div>
                        <div class="balance-display">
                            <p>Wallet Balance</p>
                            <h2 id="walletBalance">₦45,250.00</h2>
                        </div>
                        <div class="card-footer">
                            <div class="card-info">
                                <span>Wallet ID</span>
                                <strong>SWP-2026-8812</strong>
                            </div>
                            <div class="card-status">
                                <span class="badge active">Live Account</span>
                            </div>
                        </div>
                        <div class="glass-blob"></div>
                    </div>

                    <div class="wallet-info-card" data-aos="fade-left">
                        <h3>Wallet Summary</h3>
                        <p>Your current balance is displayed in real time. Use it to purchase airtime, data, cable TV, electricity, and SMS.</p>
                        
                        <ul class="wallet-perks">
                            <li><i class="fas fa-check-circle"></i> Available for use immediately</li>
                            <li><i class="fas fa-check-circle"></i> No hidden charges</li>
                            <li><i class="fas fa-check-circle"></i> Secure end-to-end encryption</li>
                        </ul>

                        <div class="action-buttons">
                            <button class="btn btn-fund"><i class="fas fa-plus"></i> Fund Wallet</button>
                            <button class="btn btn-withdraw"><i class="fas fa-arrow-up-from-bracket"></i> Withdraw</button>
                        </div>
                    </div>
                </div>

                <section class="funding-methods" data-aos="fade-up">
                    <div class="section-title">
                        <h3>Funding Methods</h3>
                    </div>
                    <div class="method-grid">
                        <div class="method-item">
                            <div class="m-icon"><i class="fas fa-university"></i></div>
                            <div>
                                <h4>Bank Transfer</h4>
                                <p>Automated Virtual Account</p>
                            </div>
                            <i class="fas fa-chevron-right m-arrow"></i>
                        </div>
                        <div class="method-item">
                            <div class="m-icon card-icon"><i class="fas fa-credit-card"></i></div>
                            <div>
                                <h4>Paystack / Flutterwave</h4>
                                <p>Card, USSD, or Bank Transfer</p>
                            </div>
                            <i class="fas fa-chevron-right m-arrow"></i>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Sidebar Controls
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openMenu');
        const closeBtn = document.getElementById('closeMenu');

        openBtn.onclick = () => sidebar.classList.add('active');
        closeBtn.onclick = () => sidebar.classList.remove('active');
    </script>
</body>
</html>