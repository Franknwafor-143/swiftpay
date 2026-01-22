<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions | SwiftPay</title>
    <link rel="stylesheet" href="css/transaction.css">
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
                <a href="fund.php" class="nav-item "><i class="fas fa-history"></i> Funding History</a>
                <a href="transaction.php" class="nav-item active"><i class="fas fa-exchange-alt"></i> Transactions</a>
                
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
                    <h1>Recent Transactions</h1>
                </div>
                <div class="topbar-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search reference...">
                    </div>
                </div>
            </header>

            <div class="content-body">
                <div class="ledger-header" data-aos="fade-down">
                    <div class="header-text">
                        <h2>Transaction Ledger</h2>
                        <p>Track your latest transactions instantly.</p>
                    </div>
                    <div class="filter-group">
                        <select class="filter-select">
                            <option>All Services</option>
                            <option>Airtime</option>
                            <option>Data</option>
                            <option>Utility</option>
                        </select>
                        <button class="btn-export"><i class="fas fa-download"></i> Export</button>
                    </div>
                </div>

                <div class="table-container" data-aos="fade-up">
                    <table class="transaction-table">
                        <thead>
                            <tr>
                                <th>Service Type</th>
                                <th>Reference</th>
                                <th>Date & Time</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-row">
                                <td>
                                    <div class="service-cell">
                                        <div class="s-icon data"><i class="fas fa-wifi"></i></div>
                                        <span>MTN 5GB Data</span>
                                    </div>
                                </td>
                                <td class="ref-text">TRX-99201102</td>
                                <td>Jan 18, 2026 • 14:20</td>
                                <td class="amount-text negative">-₦1,200.00</td>
                                <td><span class="status-badge success">Success</span></td>
                                <td><button class="btn-view">View</button></td>
                            </tr>

                            <tr class="tr-row">
                                <td>
                                    <div class="service-cell">
                                        <div class="s-icon wallet"><i class="fas fa-plus"></i></div>
                                        <span>Wallet Funding</span>
                                    </div>
                                </td>
                                <td class="ref-text">TRX-88273319</td>
                                <td>Jan 17, 2026 • 09:12</td>
                                <td class="amount-text positive">+₦25,000.00</td>
                                <td><span class="status-badge success">Success</span></td>
                                <td><button class="btn-view">View</button></td>
                            </tr>

                            <tr class="tr-row">
                                <td>
                                    <div class="service-cell">
                                        <div class="s-icon airtime"><i class="fas fa-phone"></i></div>
                                        <span>Airtel Airtime</span>
                                    </div>
                                </td>
                                <td class="ref-text">TRX-77210023</td>
                                <td>Jan 15, 2026 • 18:45</td>
                                <td class="amount-text negative">-₦500.00</td>
                                <td><span class="status-badge failed">Failed</span></td>
                                <td><button class="btn-view">Retry</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pagination" data-aos="fade-up">
                    <p>Showing 1 to 3 of 45 entries</p>
                    <div class="page-btns">
                        <button class="p-btn"><i class="fas fa-chevron-left"></i></button>
                        <button class="p-btn active">1</button>
                        <button class="p-btn">2</button>
                        <button class="p-btn">3</button>
                        <button class="p-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
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