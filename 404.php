<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Theyyampattil Furniture</title>
    
    <!-- Google Font: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-color: #121212;
            --brand-color: #c9a76a;
            --text-color: #ffffff;
            --text-muted: #a0a0a0;
            --card-bg: #1a1a1a;
            --font-family: 'Plus Jakarta Sans', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-family);
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Header Navigation */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 8%;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--text-color);
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background-color: var(--brand-color);
            mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'/%3E%3C/svg%3E") no-repeat center / contain;
            -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'/%3E%3C/svg%3E") no-repeat center / contain;
        }

        .logo-text {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .logo-text span {
            display: block;
            font-size: 10px;
            color: var(--brand-color);
            letter-spacing: 2.5px;
            font-weight: 500;
        }

        nav a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-left: 24px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--brand-color);
        }

        /* 404 Main Section */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        .error-code {
            font-size: clamp(80px, 12vw, 150px);
            font-weight: 700;
            color: var(--brand-color);
            line-height: 1;
            letter-spacing: -2px;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .error-title {
            font-size: clamp(22px, 3vw, 32px);
            font-weight: 600;
            margin-bottom: 16px;
            letter-spacing: 0.5px;
        }

        .error-desc {
            color: var(--text-muted);
            font-size: 16px;
            max-width: 520px;
            line-height: 1.6;
            margin-bottom: 36px;
            font-weight: 300;
        }

        .btn-group {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-primary {
            background-color: var(--brand-color);
            color: #121212;
            padding: 14px 32px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 4px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(201, 167, 106, 0.2);
        }

        .btn-primary:hover {
            background-color: #d1b178;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(201, 167, 106, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--text-color);
            padding: 14px 32px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            border-color: var(--brand-color);
            color: var(--brand-color);
            transform: translateY(-2px);
        }

        /* Useful Links Bar */
        .quick-links {
            margin-top: 50px;
            display: flex;
            gap: 20px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .quick-links a {
            color: var(--text-muted);
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .quick-links a:hover {
            color: var(--brand-color);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 24px;
            color: var(--text-muted);
            font-size: 13px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        @media (max-width: 768px) {
            header nav {
                display: none;
            }
            .btn-group {
                flex-direction: column;
                width: 100%;
                max-width: 280px;
            }
            .btn-primary, .btn-secondary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <a href="/" class="logo">
            <div class="logo-icon"></div>
            <div class="logo-text">
                Theyyampattil
                <span>FURNITURE</span>
            </div>
        </a>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/products">Products</a>
            <a href="/our-showrooms">Our Showrooms</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- Main 404 Section -->
    <main>
        <div class="error-code">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-desc">
            The page you are looking for might have been moved, renamed, or is temporarily unavailable. Let us help you find the finest luxury furniture for your home.
        </p>
        
        <div class="btn-group">
            <a href="/" class="btn-primary">Return to Homepage</a>
            <a href="/products" class="btn-secondary">Explore Products</a>
        </div>

        <div class="quick-links">
            <span>Or check out:</span>
            <a href="/our-showrooms">Showrooms</a> • 
            <a href="/blogs">Blogs</a> • 
            <a href="/contact">Contact Us</a>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        &copy; <?php echo date("Y"); ?> Theyyampattil Furniture. All rights reserved.
    </footer>

</body>
</html>