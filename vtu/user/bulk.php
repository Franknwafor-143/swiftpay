<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk SMS | SwiftPay</title>
    <link rel="stylesheet" href="css/bulk.css">
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
                <a href="data.php" class="nav-item"><i class="fas fa-wifi"></i> Data Plans</a>
                <a href="bulk.php" class="nav-item active"><i class="fas fa-envelope"></i> Bulk SMS</a>

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
                    <h1>Bulk SMS Console</h1>
                </div>
                <div class="topbar-right">
                    <div class="sms-balance">
                        <span>Units: 1,240</span>
                    </div>
                </div>
            </header>

            <div class="content-body">
                <div class="bulk-grid">
                    <div class="composer-card" data-aos="fade-right">
                        <div class="composer-header">
                            <h2>New Campaign</h2>
                            <p>Send instant announcements and notifications to your customers.</p>
                        </div>

                        <form id="smsForm" onsubmit="handleSMS(event)">
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Sender ID</label>
                                    <div class="input-wrap">
                                        <i class="fas fa-id-card"></i>
                                        <input type="text" placeholder="e.g. SWIFTPAY" required>
                                        <span class="verify-tag"><i class="fas fa-check-circle"></i> Approved</span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group">
                                <label>Recipient Numbers (Comma separated)</label>
                                <textarea placeholder="08012345678, 08098765432..." class="num-area" required></textarea>
                                <div class="area-footer">
                                    <span>Separate with commas</span>
                                    <span id="numCount">0 Numbers</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <label>Message Content</label>
                                <textarea id="msgContent" placeholder="Write your message here..." class="msg-area" onkeyup="calculateSMS()" required></textarea>
                                <div class="area-footer">
                                    <span id="charCount">0 / 160 characters</span>
                                    <span class="unit-badge">Required Units: <b id="unitDisplay">0</b></span>
                                </div>
                            </div>

                            <button type="submit" class="send-btn">
                                <span>Dispatch Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>

                    <div class="info-sidebar" data-aos="fade-left">
                        <div class="status-box">
                            <h3><i class="fas fa-shield-check"></i> System Routing</h3>
                            <p>Delivery depends on network routing. You can track status in SMS history.</p>
                        </div>

                        <div class="usage-card">
                            <h4>How it works</h4>
                            <div class="step">
                                <div class="s-num">1</div>
                                <p>Use approved Sender IDs only to avoid DND filtering.</p>
                            </div>
                            <div class="step">
                                <div class="s-num">2</div>
                                <p>160 characters equals 1 SMS unit.</p>
                            </div>
                            <div class="step">
                                <div class="s-num">3</div>
                                <p>Invalid numbers are automatically skipped.</p>
                            </div>
                        </div>

                        <div id="smsSuccess" class="success-screen">
                            <div class="ripple-check">
                                <i class="fas fa-check"></i>
                            </div>
                            <h4>Sent to Queue!</h4>
                            <p>Your message is being processed for delivery.</p>
                        </div>
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

        // SMS Logic
        function calculateSMS() {
            const msg = document.getElementById('msgContent').value;
            const chars = msg.length;
            const units = Math.ceil(chars / 160) || 0;
            document.getElementById('charCount').innerText = `${chars} / ${units * 160} characters`;
            document.getElementById('unitDisplay').innerText = units;
        }

        function handleSMS(e) {
            e.preventDefault();
            document.getElementById('smsSuccess').classList.add('show');
            document.querySelector('.send-btn').innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> Dispatched';
        }
    </script>
</body>
</html>