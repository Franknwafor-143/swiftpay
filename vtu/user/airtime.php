<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Airtime | SwiftPay</title>
    <link rel="stylesheet" href="css/airtime.css">
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
                <a href="transaction.php" class="nav-item"><i class="fas fa-exchange-alt"></i> Transactions</a>
                
                <div class="nav-label">Services</div>
                <a href="airtime.php" class="nav-item active"><i class="fas fa-phone"></i> Airtime</a>
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
                    <h1>Buy Airtime</h1>
                </div>
                <div class="topbar-right">
                    <div class="wallet-mini-display">
                        <span>Balance:</span>
                        <strong>₦45,250.00</strong>
                    </div>
                </div>
            </header>

            <div class="content-body">
                <div class="airtime-container">
                    <div class="form-card" data-aos="fade-right">
                        <div class="card-header">
                            <h2>Instant Top-up</h2>
                            <p>Purchase airtime instantly for any major network. Simply enter the details below.</p>
                        </div>

                        <form id="airtimeForm" onsubmit="handlePurchase(event)">
                            <label class="input-label">Select Network</label>
                            <div class="network-selector">
                                <input type="radio" name="network" id="mtn" value="MTN" required>
                                <label for="mtn" class="network-tile">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/MTN_Logo.svg" alt="MTN">
                                    <span>MTN</span>
                                </label>

                                <input type="radio" name="network" id="airtel" value="Airtel">
                                <label for="airtel" class="network-tile">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Airtel_logo.svg" alt="Airtel">
                                    <span>Airtel</span>
                                </label>

                                <input type="radio" name="network" id="glo" value="Glo">
                                <label for="glo" class="network-tile">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Glo_Logo.svg" alt="Glo">
                                    <span>Glo</span>
                                </label>

                                <input type="radio" name="network" id="mobile" value="9mobile">
                                <label for="mobile" class="network-tile">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_x7v2BvG9uP2_yX9G9v5u5u" alt="9mobile">
                                    <span>9mobile</span>
                                </label>
                            </div>

                            <div class="input-group">
                                <label class="input-label">Phone Number</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-phone-alt"></i>
                                    <input type="tel" id="phone" placeholder="08012345678" pattern="[0-9]{11}" required>
                                </div>
                                <small>Format: 08012345678</small>
                            </div>

                            <div class="input-group">
                                <label class="input-label">Amount (₦)</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-wallet"></i>
                                    <input type="number" id="amount" placeholder="Min: 100" min="100" required>
                                </div>
                            </div>

                            <button type="submit" class="btn-purchase">
                                <span>Purchase Airtime</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                    <div class="summary-card" data-aos="fade-left">
                        <div id="summaryContent">
                            <h3>Transaction Summary</h3>
                            <div class="summary-item">
                                <span>Service</span>
                                <strong>Airtime Top-up</strong>
                            </div>
                            <div class="summary-item">
                                <span>Fee</span>
                                <strong class="text-free">₦0.00 (No Charges)</strong>
                            </div>
                            <div class="info-box">
                                <i class="fas fa-info-circle"></i>
                                <p>Your airtime will be delivered instantly to the recipient and your wallet updated.</p>
                            </div>
                        </div>

                        <div id="successMessage" class="success-display">
                            <div class="success-icon"><i class="fas fa-check"></i></div>
                            <h3>Request Processed!</h3>
                            <p>Your airtime purchase is being processed. It will be delivered instantly.</p>
                            <button class="btn-refresh" onclick="location.reload()">Done</button>
                        </div>
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

        // Form Submission
        function handlePurchase(e) {
            e.preventDefault();
            document.getElementById('summaryContent').style.display = 'none';
            document.getElementById('successMessage').style.display = 'flex';
            document.querySelector('.btn-purchase').disabled = true;
            document.querySelector('.btn-purchase').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        }
    </script>
</body>
</html>