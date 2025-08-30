<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agri-Chain - Smart Farming Analytics</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">Agri-Chain</a>
            <ul class="nav-links">
                <li><a href="index.php" class="btn-primary">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="retailer_signup.php">Retailer Signup</a></li>
                <li><a href="retailer_login.php">Retailer Login</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
            <div class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div class="cool-body">
        <div class="container">
            <section class="hero-section">
                <h1 class="hero-title">Smart Farming Analytics</h1>
                <p class="hero-subtitle">Transform your agricultural decisions with our advanced demand-supply analysis and predictive insights</p>
                <a href="signup.php" class="btn">Get Started for Free</a>
            </section>

            <div class="feature-cards">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Demand Analysis</h3>
                    <p class="feature-desc">Track surplus/deficit scenarios based on historical production data and consumption patterns.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3 class="feature-title">Price Trends</h3>
                    <p class="feature-desc">Analyze wholesale and retail price fluctuations with our comprehensive datasets.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud-sun-rain"></i>
                    </div>
                    <h3 class="feature-title">Weather Insights</h3>
                    <p class="feature-desc">Understand how weather patterns affect crop yields and market prices.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="cool-footer">
        <div class="footer-content">
            <div class="footer-left">
                <span class="footer-logo">Agri-Chain</span>
                <p>Smart farming analytics for better decisions</p>
            </div>
            <div class="footer-right">
                <a href="#" class="footer-link">About</a>
                <a href="#" class="footer-link">Contact</a>
                <a href="#" class="footer-link">Privacy</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Agri-Chain. All rights reserved.</p>
        </div>
    </footer>
    <script>
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.classList.toggle('open');
        });
    </script>
</body>
</html>