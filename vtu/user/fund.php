<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funding History | SwiftPay</title>
    <link rel="stylesheet" href="css/fund.css">
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
                <a href="wallet.php" class="nav-item"><i class="fas fa-wallet"></i> My Wallet</a>
                <a href="fund.php" class="nav-item active"><i class="fas fa-history"></i> Funding History</a>
                <a href="transaction.php" class="nav-item"><i class="fas fa-exchange-alt"></i> Transactions</a>
                
                <div class="nav-label">Services</div>
                <a href="airtime.php" class="nav-item"><i class="fas fa-phone"></i> Airtime</a>
                <a href="data.php" class="nav-item"><i class="fas fa-wifi"></i> Data Plans</a>
                <a href="bulk.php" class="nav-item"><i class="fas fa-envelope"></i> Bulk SMS</a>

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
                    <h1>Funding History</h1>
                </div>
                <div class="topbar-right">
                    <button class="btn-new-fund"><i class="fas fa-plus-circle"></i> Add Funds</button>
                </div>
            </header>

            <div class="content-body">
                <div class="stats-ribbon" data-aos="fade-down">
                    <div class="stat-card">
                        <span>Total Funded</span>
                        <h3>₦240,500.00</h3>
                    </div>
                    <div class="stat-card">
                        <span>Pending</span>
                        <h3 class="text-gold">₦5,000.00</h3>
                    </div>
                    <div class="stat-card">
                        <span>Success Rate</span>
                        <h3 class="text-green">98.2%</h3>
                    </div>
                </div>

                <div class="table-card" data-aos="fade-up">
                    <div class="table-header">
                        <div>
                            <h2>Deposit Logs</h2>
                            <p>Track your wallet funding transactions instantly.</p>
                        </div>
                        <div class="table-actions">
                            <input type="text" placeholder="Search Ref..." class="table-search">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="funding-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Reference</th>
                                    <th>Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jan 18, 2026 <small>12:45 PM</small></td>
                                    <td class="ref-code">SPF-9912033</td>
                                    <td><i class="fas fa-university icon-m"></i> Bank Transfer</td>
                                    <td class="fund-amount">₦50,000.00</td>
                                    <td><span class="badge b-success">Successful</span></td>
                                    <td><button class="action-icon"><i class="fas fa-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Jan 17, 2026 <small>09:15 AM</small></td>
                                    <td class="ref-code">SPF-8821045</td>
                                    <td><i class="fas fa-credit-card icon-m"></i> Card Payment</td>
                                    <td class="fund-amount">₦5,000.00</td>
                                    <td><span class="badge b-pending">Pending</span></td>
                                    <td><button class="action-icon disabled"><i class="fas fa-clock"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Jan 15, 2026 <small>03:20 PM</small></td>
                                    <td class="ref-code">SPF-7761200</td>
                                    <td><i class="fas fa-qrcode icon-m"></i> USSD</td>
                                    <td class="fund-amount">₦2,500.00</td>
                                    <td><span class="badge b-rejected">Rejected</span></td>
                                    <td><button class="action-icon"><i class="fas fa-info-circle"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        // Sidebar logic
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openMenu');
        const closeBtn = document.getElementById('closeMenu');
        openBtn.onclick = () => sidebar.classList.add('active');
        closeBtn.onclick = () => sidebar.classList.remove('active');
    </script>
</body>
</html>