<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile & Settings | SwiftPay</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/settings.css">
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
                <a href="notification.php" class="nav-item"><i class="fas fa-bell"></i> Notification</a>
                <a href="message.php" class="nav-item"><i class="fas fa-envelope"></i> Message</a>
                
                <div class="nav-label">System</div>
                <a href="settings.php" class="nav-item active"><i class="fas fa-user-cog"></i> Settings</a>
                <a href="logout.php" class="nav-item logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="topbar">
                <div class="topbar-left">
                    <i class="fas fa-bars hamburger" id="openMenu"></i>
                    <h1>Profile & Settings</h1>
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
                <div class="settings-header">
                    <h2>Account Settings</h2>
                    <p>Manage your personal details, change password, and update security settings.</p>
                </div>

                <div class="settings-grid">
                    <div class="settings-card">
                        <div class="card-header">
                            <i class="fas fa-user-circle"></i>
                            <h3>Personal Details</h3>
                        </div>
                        <form action="#" method="POST" class="settings-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter full name" value="Frank">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" placeholder="Username" value="frank_swift" readonly>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" placeholder="email@example.com" value="frank@example.com">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" placeholder="08012345678" value="08012345678">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>Date of Birth (Optional)</label>
                                    <input type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address (Optional)</label>
                                <textarea rows="3" placeholder="Enter your residential address"></textarea>
                            </div>

                            <button type="button" class="btn-update">Update Profile</button>
                        </form>
                    </div>

                    <div class="info-sidebar">
                        <div class="security-card">
                            <i class="fas fa-shield-alt"></i>
                            <h4>Security Status</h4>
                            <p>Your account is currently secured with standard encryption.</p>
                            <div class="security-badges">
                                <span class="badge active"><i class="fas fa-check-circle"></i> Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Responsive Menu Toggle
        const sidebar = document.getElementById('sidebar');
        const openMenu = document.getElementById('openMenu');
        const closeMenu = document.getElementById('closeMenu');

        openMenu.onclick = () => sidebar.classList.add('active');
        closeMenu.onclick = () => sidebar.classList.remove('active');

        // Close sidebar when clicking outside on mobile
        window.onclick = (event) => {
            if (window.innerWidth <= 992 && event.target === document.querySelector('.main-content')) {
                sidebar.classList.remove('active');
            }
        }
    </script>
</body>
</html>