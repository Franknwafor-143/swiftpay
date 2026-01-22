<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages & Support | SwiftPay</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/message.css">
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
                <a href="message.php" class="nav-item active"><i class="fas fa-envelope"></i> Message</a>
                
                <div class="nav-label">System</div>
                <a href="settings.php" class="nav-item"><i class="fas fa-user-cog"></i> Settings</a>
                <a href="logout.php" class="nav-item logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="topbar">
                <div class="topbar-left">
                    <i class="fas fa-bars hamburger" id="openMenu"></i>
                    <h1>Messages & Support</h1>
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
                <div class="message-container">
                    <div class="inbox-panel">
                        <div class="panel-header">
                            <h3>Inboxes</h3>
                            <button class="compose-btn"><i class="fas fa-edit"></i></button>
                        </div>
                        <div class="search-bar">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search messages...">
                        </div>
                        <div class="message-list">
                            <div class="msg-item active">
                                <div class="msg-icon"><i class="fas fa-headset"></i></div>
                                <div class="msg-info">
                                    <div class="msg-top">
                                        <h4>Support Team</h4>
                                        <span>12:45 PM</span>
                                    </div>
                                    <p>Your wallet funding was successful...</p>
                                </div>
                            </div>
                            <div class="msg-item unread">
                                <div class="msg-icon secondary"><i class="fas fa-gift"></i></div>
                                <div class="msg-info">
                                    <div class="msg-top">
                                        <h4>Promotions</h4>
                                        <span>Yesterday</span>
                                    </div>
                                    <p>Get 5% discount on data today!</p>
                                </div>
                            </div>
                            <div class="msg-item">
                                <div class="msg-icon accent"><i class="fas fa-shield-alt"></i></div>
                                <div class="msg-info">
                                    <div class="msg-top">
                                        <h4>Security Alert</h4>
                                        <span>2 days ago</span>
                                    </div>
                                    <p>A new login was detected from...</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chat-panel" id="chatPanel">
                        <div class="chat-header">
                            <div class="chat-user">
                                <div class="u-avatar">S</div>
                                <div>
                                    <h4>Support Team</h4>
                                    <p class="status">Online</p>
                                </div>
                            </div>
                            <div class="chat-actions">
                                <i class="fas fa-phone"></i>
                                <i class="fas fa-ellipsis-v"></i>
                            </div>
                        </div>

                        <div class="chat-history">
                            <div class="chat-bubble received">
                                <p>Hello Frank, how can we assist you today?</p>
                                <span>12:40 PM</span>
                            </div>
                            <div class="chat-bubble sent">
                                <p>I tried funding my wallet via bank transfer but the balance hasn't updated yet.</p>
                                <span>12:42 PM</span>
                            </div>
                            <div class="chat-bubble received">
                                <p>Checking that for you right now. Please hold on a moment.</p>
                                <span>12:44 PM</span>
                            </div>
                            <div class="chat-bubble received">
                                <p>Your wallet funding was successful. It has been manually approved. Please check your dashboard.</p>
                                <span>12:45 PM</span>
                            </div>
                        </div>

                        <div class="chat-input-area">
                            <button class="attach-btn"><i class="fas fa-plus"></i></button>
                            <input type="text" placeholder="Type your message here...">
                            <button class="send-btn"><i class="fas fa-paper-plane"></i></button>
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

        // Simple Mobile Chat Toggle
        const msgItems = document.querySelectorAll('.msg-item');
        const chatPanel = document.getElementById('chatPanel');
        
        msgItems.forEach(item => {
            item.onclick = () => {
                if(window.innerWidth <= 768) {
                    chatPanel.classList.add('mobile-show');
                }
            }
        });
    </script>
</body>
</html>