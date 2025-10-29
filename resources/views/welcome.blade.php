<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAIISAA24 Solution Pvt Ltd | Car Finance & Loan Services</title>
    <meta name="description"
        content="Get the best car finance deals with Paiisaa24. Low interest rates, quick approval, and flexible repayment options for new and used car loans. Apply online today!">
    <meta name="keywords"
        content="car finance, auto loans, car loans, vehicle financing, car loan approval, low interest car loans, used car finance, new car loans, quick car loan, Paiisaa24">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.paiisaa24.in/">
    <meta property="og:title" content="Paiisaa24 - Car Finance & Loan Services | Affordable Auto Loans">
    <meta property="og:description"
        content="Get the best car finance deals with Paiisaa24. Low interest rates, quick approval, and flexible repayment options for new and used car loans.">
    <meta property="og:site_name" content="Paiisaa24">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Reset & Variables */
        :root {
            --primary: #1a56db;
            --secondary: #0e2a6c;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --success: #10b981;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
        }

        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .btn-accent {
            background-color: var(--accent);
        }

        .btn-accent:hover {
            background-color: #e69008;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-img {
            height: 50px;
            width: auto;
            margin-right: 12px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo h1 {
            font-size: 1.8rem;
            color: var(--primary);
            line-height: 1;
        }

        .logo span {
            color: var(--accent);
        }

        .logo p {
            font-size: 0.7rem;
            color: var(--gray);
            margin-top: 2px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 86, 219, 0.8), rgba(14, 42, 108, 0.9)), url('https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 180px 0 100px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--secondary);
        }

        /* Loan Calculator Section */
        .calculator-section {
            background-color: #f1f5f9;
        }

        .calculator-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            align-items: start;
        }

        .calculator-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .calculator-results {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 86, 219, 0.2);
        }

        .range-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .range-value {
            min-width: 100px;
            padding: 8px 12px;
            background: var(--primary);
            color: white;
            border-radius: 5px;
            text-align: center;
            font-weight: 600;
        }

        input[type="range"] {
            width: 100%;
            height: 8px;
            -webkit-appearance: none;
            background: #e2e8f0;
            border-radius: 5px;
            outline: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            cursor: pointer;
        }

        .result-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .result-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .result-value {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.1rem;
        }

        .result-highlight {
            background: var(--light);
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            border-left: 4px solid var(--accent);
        }

        .result-highlight .result-value {
            font-size: 1.5rem;
            color: var(--secondary);
        }

        /* Partners Section */
        .partners-section {
            background-color: white;
        }

        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            align-items: center;
        }

        .partner-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .partner-logo:hover {
            transform: translateY(-5px);
        }

        .partner-logo img {
            max-width: 100%;
            max-height: 60px;
            filter: grayscale(100%);
            transition: var(--transition);
        }

        .partner-logo:hover img {
            filter: grayscale(0%);
        }

        /* Process Section */
        .process-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .step {
            flex: 1;
            min-width: 200px;
            text-align: center;
            padding: 0 20px;
            position: relative;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 40px;
            right: -10px;
            width: 50%;
            height: 2px;
            background-color: var(--primary);
            z-index: -1;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        .step h3 {
            margin-bottom: 15px;
            color: var(--secondary);
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            text-align: center;
            padding: 80px 0;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        /* Contact Form */
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .contact-icon {
            background-color: var(--primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        /* Footer */
        footer {
            background-color: var(--secondary);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--accent);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .step:not(:last-child)::after {
                display: none;
            }

            .process-steps {
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }

            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 80%;
                height: calc(100vh - 70px);
                background-color: white;
                flex-direction: column;
                align-items: center;
                padding-top: 50px;
                transition: var(--transition);
                box-shadow: var(--shadow);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 15px 0;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 80%;
                max-width: 250px;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .calculator-container {
                grid-template-columns: 1fr;
            }

            .partners-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .logo-img {
                height: 40px;
            }

            .logo h1 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                padding: 150px 0 80px;
            }

            section {
                padding: 60px 0;
            }

            .service-card {
                padding: 20px;
            }

            .partners-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .logo-img {
                height: 35px;
            }

            .logo h1 {
                font-size: 1.3rem;
            }

            .logo p {
                font-size: 0.6rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">

            <a class="navbar-brand" href="/">
                <img src="{{ file_exists(public_path('images/paisa24_logo_1.png')) ? asset('images/paisa24_logo_1.png') : asset('images/placeholder-car.svg') }}"
                    alt="Finance DSA India Logo" style="height: 50px;">
            </a>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#calculator">Calculator</a></li>
                <li><a href="#partners">Partners</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact" class="btn btn-accent">Apply Now</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Your Trusted Partner for Car Finance & Loans</h1>
            <p>We provide seamless financing solutions for cars, bikes, homes, and personal loans across India with
                competitive rates and quick approvals.</p>
            <div class="hero-btns">
                <a href="#contact" class="btn">Get Free Consultation</a>
                <a href="#calculator" class="btn btn-accent">Calculate EMI</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a comprehensive range of financial products to meet all your needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Car Finance</h3>
                    <p>Get the best car loan deals with low interest rates and flexible repayment options for new and
                        used cars.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-motorcycle"></i>
                    </div>
                    <h3>Bike Loans</h3>
                    <p>Affordable two-wheeler financing with minimal documentation and quick disbursal across India.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home Loans</h3>
                    <p>Realize your dream of owning a home with our competitive home loan options and expert guidance.
                    </p>
                </div>

            </div>
    </section>

    <!-- Loan Calculator Section -->
    <section id="calculator" class="calculator-section">
        <div class="container">
            <div class="section-title">
                <h2>Loan Calculator</h2>
                <p>Calculate your monthly EMI and find the perfect loan plan for your needs</p>
            </div>
            <div class="calculator-container">
                <div class="calculator-form">
                    <form id="emiCalculator">
                        <div class="form-group">
                            <label for="loanType">Loan Type</label>
                            <select id="loanType" class="form-control" required>
                                <option value="car">Car Loan</option>
                                <option value="bike">Bike Loan</option>
                                <option value="home">Home Loan</option>
                                <option value="personal">Personal Loan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="loanAmount">Loan Amount (₹)</label>
                            <div class="range-container">
                                <input type="range" id="loanAmount" min="50000" max="5000000" step="50000"
                                    value="500000" class="form-control">
                                <div class="range-value" id="loanAmountValue">₹5,00,000</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="interestRate">Interest Rate (%)</label>
                            <div class="range-container">
                                <input type="range" id="interestRate" min="5" max="20" step="0.1"
                                    value="9.5" class="form-control">
                                <div class="range-value" id="interestRateValue">9.5%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="loanTenure">Loan Tenure (Years)</label>
                            <div class="range-container">
                                <input type="range" id="loanTenure" min="1" max="30" value="5"
                                    class="form-control">
                                <div class="range-value" id="loanTenureValue">5 Years</div>
                            </div>
                        </div>
                        <button type="button" id="calculateBtn" class="btn" style="width: 100%;">Calculate
                            EMI</button>
                    </form>
                </div>
                <div class="calculator-results">
                    <h3 style="margin-bottom: 20px; color: var(--secondary);">Your Loan Details</h3>
                    <div class="result-item">
                        <span>Monthly EMI</span>
                        <span class="result-value" id="emiValue">₹0</span>
                    </div>
                    <div class="result-item">
                        <span>Total Interest</span>
                        <span class="result-value" id="totalInterest">₹0</span>
                    </div>
                    <div class="result-item">
                        <span>Total Payment</span>
                        <span class="result-value" id="totalPayment">₹0</span>
                    </div>
                    <div class="result-highlight">
                        <p>Your EMI is</p>
                        <p class="result-value" id="highlightEmi">₹0</p>
                        <p>per month for <span id="highlightTenure">5</span> years</p>
                    </div>
                    <div style="margin-top: 25px; text-align: center;">
                        <a href="#contact" class="btn">Apply for this Loan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="partners-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Lending Partners</h2>
                <p>We work with India's leading banks and financial institutions</p>
            </div>
            <div class="partners-grid">
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/CHOLAFIN.NS_BIG.png')) ? asset('images/CHOLAFIN.NS_BIG.png') : asset('images/placeholder-car.svg') }}"
                        alt="Chola Madalam Finance">
                </div>
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/mahindra.png')) ? asset('images/mahindra.png') : asset('images/placeholder-car.svg') }}"
                        alt="Mahindra Finance">
                </div>
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/indostar.png')) ? asset('images/indostar.png') : asset('images/placeholder-car.svg') }}"
                        alt="Indostar Capital Finance">
                </div>
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/bajaj.jpg')) ? asset('images/bajaj.jpg') : asset('images/placeholder-car.svg') }}"
                        alt="Bajaj Finserv">
                </div>
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/tata_capital.png')) ? asset('images/tata_capital.png') : asset('images/placeholder-car.svg') }}"
                        alt="Tata Capital Finance">
                </div>
                <div class="partner-logo">
                    <img src="{{ file_exists(public_path('images/hdb.svg')) ? asset('images/hdb.svg') : asset('images/placeholder-car.svg') }}"
                        alt="HDB Financial Services">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" style="background-color: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>How It Works</h2>
                <p>Our simple 4-step process to get your loan approved quickly</p>
            </div>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Application</h3>
                    <p>Fill our simple online application form with basic details</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Documentation</h3>
                    <p>Submit required documents for verification</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Approval</h3>
                    <p>Get quick approval with best interest rates</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Disbursal</h3>
                    <p>Receive funds directly in your account</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Get Your Loan Approved?</h2>
            <p>Join thousands of satisfied customers who have achieved their dreams with our financial solutions</p>
            <a href="#contact" class="btn btn-accent">Apply Now</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with our financial experts for personalized assistance</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Our Office</h3>
                            <p>Plot-52, G/F KH NO. 32/12, Nangli Sakrawati Anand Vihar, Najafgarh, New Delhi, New Delhi-
                                110043</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3>Phone Number</h3>
                            <p>+91 777 999 5656</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email Address</h3>
                            <p>info@paiisaa24.in</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3>Working Hours</h3>
                            <p>Monday - Saturday: 9:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (Session::has('success'))
                            <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
                                role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (Session::has('error'))
                            <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                                role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                {{ session('error') }}
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <form id="loanForm" method="POST" action="{{ route('submitLoanApplication') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control"
                                placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="contactLoanType">Loan Type</label>
                            <select id="contactLoanType" name="contactLoanType" class="form-control" required>
                                <option value="">Select loan type</option>
                                <option value="car">Car Loan</option>
                                <option value="bike">Bike Loan</option>
                                <option value="home">Home Loan</option>
                                <option value="personal">Personal Loan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4"
                                placeholder="Tell us about your requirements"></textarea>
                        </div>
                        <button type="submit" class="btn" style="width: 100%;">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Amishek Paiisaa24 Solution Private Limited</h3>
                    <p>Your trusted partner for all financial needs across India. We provide the best loan solutions
                        with transparency and efficiency.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#calculator">Calculator</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#process">Process</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Car Finance</a></li>
                        <li><a href="#">Bike Loans</a></li>
                        <li><a href="#">Home Loans</a></li>
                        <li><a href="#">Personal Loans</a></li>
                        <li><a href="#">Business Loans</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Subscribe</h3>
                    <p>Subscribe to our newsletter for the latest updates and offers</p>
                    <form class="subscribe-form">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email address" required>
                        </div>
                        <button type="submit" class="btn btn-accent" style="width: 100%;">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} Amishek Paiisaa24 Solution Private Limited. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.nav-menu').classList.remove('active');
            });
        });


        // Sticky Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)';
            } else {
                header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.05)';
            }
        });

        // Loan Calculator Functionality
        const loanAmount = document.getElementById('loanAmount');
        const loanAmountValue = document.getElementById('loanAmountValue');
        const interestRate = document.getElementById('interestRate');
        const interestRateValue = document.getElementById('interestRateValue');
        const loanTenure = document.getElementById('loanTenure');
        const loanTenureValue = document.getElementById('loanTenureValue');
        const calculateBtn = document.getElementById('calculateBtn');

        // Update range values display
        loanAmount.addEventListener('input', function() {
            loanAmountValue.textContent = '₹' + formatNumber(this.value);
        });

        interestRate.addEventListener('input', function() {
            interestRateValue.textContent = this.value + '%';
        });

        loanTenure.addEventListener('input', function() {
            loanTenureValue.textContent = this.value + ' Years';
        });

        // Format numbers with commas
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Calculate EMI
        function calculateEMI() {
            const principal = parseFloat(loanAmount.value);
            const rate = parseFloat(interestRate.value) / 12 / 100; // Monthly interest rate
            const time = parseFloat(loanTenure.value) * 12; // Months

            const emi = principal * rate * Math.pow(1 + rate, time) / (Math.pow(1 + rate, time) - 1);
            const totalPayment = emi * time;
            const totalInterest = totalPayment - principal;

            // Update results
            document.getElementById('emiValue').textContent = '₹' + formatNumber(emi.toFixed(0));
            document.getElementById('totalInterest').textContent = '₹' + formatNumber(totalInterest.toFixed(0));
            document.getElementById('totalPayment').textContent = '₹' + formatNumber(totalPayment.toFixed(0));
            document.getElementById('highlightEmi').textContent = '₹' + formatNumber(emi.toFixed(0));
            document.getElementById('highlightTenure').textContent = loanTenure.value;
        }

        // Calculate on button click
        calculateBtn.addEventListener('click', calculateEMI);

        // Calculate on page load
        window.addEventListener('load', calculateEMI);

        // Calculate when any input changes
        loanAmount.addEventListener('input', calculateEMI);
        interestRate.addEventListener('input', calculateEMI);
        loanTenure.addEventListener('input', calculateEMI);
    </script>
</body>

</html>
