<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Data | SwiftPay</title>
    <link rel="stylesheet" href="css/data.css">
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
                <a href="airtime.php" class="nav-item"><i class="fas fa-phone"></i> Airtime</a>
                <a href="data.php" class="nav-item active"><i class="fas fa-wifi"></i> Data Plans</a>
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
                    <h1>Buy Data Bundle</h1>
                </div>
                <div class="topbar-right">
                    <div class="balance-pill">
                        <i class="fas fa-shield-halved"></i>
                        <span>Balance: ₦45,250.00</span>
                    </div>
                </div>
            </header>

            <div class="content-body">
                <div class="data-grid">
                    <div class="purchase-card" data-aos="fade-up">
                        <div class="intro">
                            <h2>Subscription Center</h2>
                            <p>Choose your preferred network and data category to purchase data instantly.</p>
                        </div>

                        <form id="dataForm" onsubmit="processData(event)">
                            <div class="form-section">
                                <label class="label-title">Step 1: Choose Network</label>
                                <div class="network-grid">
                                    <input type="radio" name="network" id="mtn" value="MTN" required>
                                    <label for="mtn" class="net-item">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/af/MTN_Logo.svg" alt="MTN">
                                    </label>

                                    <input type="radio" name="network" id="airtel" value="Airtel">
                                    <label for="airtel" class="net-item">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Airtel_logo.svg" alt="Airtel">
                                    </label>

                                    <input type="radio" name="network" id="glo" value="Glo">
                                    <label for="glo" class="net-item">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Glo_Logo.svg" alt="Glo">
                                    </label>

                                    <input type="radio" name="network" id="mobile" value="9mobile">
                                    <label for="mobile" class="net-item">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_x7v2BvG9uP2_yX9G9v5u5u" alt="9mobile">
                                    </label>
                                </div>
                            </div>

                            <div class="form-section">
                                <label class="label-title">Step 2: Data Category</label>
                                <div class="type-selector">
                                    <div class="type-btn active" onclick="selectType(this)">SME Data</div>
                                    <div class="type-btn" onclick="selectType(this)">Corporate</div>
                                    <div class="type-btn" onclick="selectType(this)">Gifting</div>
                                </div>
                            </div>

                            <div class="form-section row">
                                <div class="col">
                                    <label class="label-title">Select Plan</label>
                                    <select class="custom-select" required>
                                        <option value="" disabled selected>Choose a plan...</option>
                                        <option value="1">1.0GB - ₦245 (30 Days)</option>
                                        <option value="2">2.0GB - ₦490 (30 Days)</option>
                                        <option value="5">5.0GB - ₦1,225 (30 Days)</option>
                                        <option value="10">10.0GB - ₦2,450 (30 Days)</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="label-title">Phone Number</label>
                                    <div class="input-icon">
                                        <i class="fas fa-hashtag"></i>
                                        <input type="tel" placeholder="08012345678" maxlength="11" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="purchase-btn">
                                <span>Complete Purchase</span>
                                <i class="fas fa-bolt"></i>
                            </button>
                        </form>
                    </div>

                    <div class="preview-card" data-aos="fade-left">
                        <div class="preview-header">
                            <i class="fas fa-cart-shopping"></i>
                            <h3>Order Summary</h3>
                        </div>
                        
                        <div class="summary-list">
                            <div class="sum-item"><span>Service</span><strong>Data Subscription</strong></div>
                            <div class="sum-item"><span>Status</span><strong class="green">Instant Delivery</strong></div>
                            <div class="sum-item"><span>Processing Fee</span><strong>₦0.00</strong></div>
                        </div>

                        <div class="disclaimer">
                            <i class="fas fa-circle-info"></i>
                            <p>Once successful, your data will be delivered instantly and your wallet will be updated.</p>
                        </div>

                        <div id="successState" class="success-overlay">
                            <div class="check-box">
                                <i class="fas fa-check"></i>
                            </div>
                            <h3>Request Sent!</h3>
                            <p>Your data purchase is being processed. Thank you for using SwiftPay.</p>
                            <button onclick="window.location.reload()" class="btn-reset">New Order</button>
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

        // Dynamic Type Selection
        function selectType(element) {
            document.querySelectorAll('.type-btn').forEach(btn => btn.classList.remove('active'));
            element.classList.add('active');
        }

        // Process Function
        function processData(e) {
            e.preventDefault();
            document.getElementById('successState').classList.add('active');
            document.querySelector('.purchase-btn').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        }
    </script>
</body>
</html>