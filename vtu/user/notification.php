<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications | SwiftPay</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/notification.css">
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
                <a href="wallet.php" class="nav-item"><i class="fas fa-wallet"></i> My Wallet</a>
                <a href="fund.php" class="nav-item"><i class="fas fa-history"></i> Funding History</a>
                <a href="transaction.php" class="nav-item"><i class="fas fa-exchange-alt"></i> Transactions</a>
                
                <div class="nav-label">Services</div>
                <a href="airtime.php" class="nav-item"><i class="fas fa-phone"></i> Airtime</a>
                <a href="data.php" class="nav-item"><i class="fas fa-wifi"></i> Data Plans</a>
                <a href="bulk.php" class="nav-item"><i class="fas fa-bolt"></i> Bulk SMS</a>

                <div class="nav-label">Communication</div>
                <a href="notification.php" class="nav-item active"><i class="fas fa-bell"></i> Notification</a>
                <a href="message.php" class="nav-item"><i class="fas fa-envelope"></i> Message</a>
                
                <div class="nav-label">System</div>
                <a href="settings.php" class="nav-item"><i class="fas fa-user-cog"></i> Settings</a>
                <a href="logout.php" class="nav-item logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="topbar">
                <div class="topbar-left">
                    <i class="fas fa-bars hamburger" id="openMenu"></i>
                    <h1>Notifications</h1>
                </div>
                <div class="user-profile">
                    <div class="u-info" style="text-align: right; margin-right: 10px;">
                        <p class="u-name">Frank</p>
                        <p style="font-size: 0.7rem; color: var(--muted);">User ID: #8821</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Frank&background=0A2540&color=fff" alt="User">
                </div>
            </div>

            <div class="content-body">
                <div class="notification-container">
                    <div class="notif-header">
                        <div class="header-text">
                            <h2>All Notifications</h2>
                            <p>Stay updated with your account activities and latest offers.</p>
                        </div>
                        <button class="btn-clear-all">Mark all as read</button>
                    </div>

                    <div class="notif-tabs">
                        <button class="tab-btn active">All</button>
                        <button class="tab-btn">Transactions</button>
                        <button class="tab-btn">Promos</button>
                    </div>

                    <div class="notif-list">
                        <div class="notif-card unread">
                            <div class="notif-icon success">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="notif-content">
                                <h4>Wallet Funded Successfully</h4>
                                <p>You have successfully funded your wallet with <strong>₦5,000.00</strong>. Your new balance is ₦12,450.00.</p>
                                <span class="notif-time">2 minutes ago</span>
                            </div>
                            <div class="notif-status"></div>
                        </div>

                        <div class="notif-card">
                            <div class="notif-icon warning">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="notif-content">
                                <h4>Network Maintenance Alert</h4>
                                <p>MTN SME Data services are currently undergoing maintenance. Please use Gifting plans for now.</p>
                                <span class="notif-time">1 hour ago</span>
                            </div>
                        </div>

                        <div class="notif-card">
                            <div class="notif-icon promo">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="notif-content">
                                <h4>Weekend Bonus!</h4>
                                <p>Enjoy 2% cashback on all Airtime to Cash transactions this Saturday and Sunday.</p>
                                <span class="notif-time">4 hours ago</span>
                            </div>
                        </div>

                        <div class="notif-card">
                            <div class="notif-icon security">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="notif-content">
                                <h4>Security Update</h4>
                                <p>Your password was changed successfully. If you did not perform this action, contact support immediately.</p>
                                <span class="notif-time">Yesterday</span>
                            </div>
                        </div>

                        <div class="notif-card">
                            <div class="notif-icon danger">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div class="notif-content">
                                <h4>Data Purchase Failed</h4>
                                <p>The data purchase for 08012345678 failed due to network timeout. Your ₦250.00 has been refunded.</p>
                                <span class="notif-time">2 days ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Menu Toggle
        const sidebar = document.getElementById('sidebar');
        const openMenu = document.getElementById('openMenu');
        const closeMenu = document.getElementById('closeMenu');

        openMenu.onclick = () => sidebar.classList.add('active');
        closeMenu.onclick = () => sidebar.classList.remove('active');
    </script>
</body>
</html>