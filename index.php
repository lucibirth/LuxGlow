<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lux Glow</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="icon" type="image/jpg" href="banner1.jpg">

<style>
:root{
    --dark-blue:#0b1d2d;
    --gold:#f4c430;
    --soft-gold:#ffe9a3;
    --white:#ffffff;
    --glass:rgba(255,255,255,0.08);
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
    font-family:'Poppins', sans-serif;
    background:#fff;
}

.topbar{
    background:linear-gradient(90deg, #0b1d2d, #142f44);
    color:var(--soft-gold);
    padding:10px 15px;
    font-size:14px;
    text-align:center;
    letter-spacing:0.4px;
}
.topbar span{
    color:var(--gold);
    font-weight:600;
}

header{
    background:var(--dark-blue);
    position:sticky;
    top:0;
    z-index:999;
    box-shadow:0 10px 30px rgba(0,0,0,0.25);
}

.header-container{
    max-width:1200px;
    margin:auto;
    padding:18px 15px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    font-family:'Playfair Display', serif;
    font-size:26px;
    color:var(--gold);
    letter-spacing:1px;
}
.logo span{
    color:var(--white);
}

nav{
    display:flex;
    gap:35px;
}
nav a{
    color:var(--white);
    text-decoration:none;
    font-size:15px;
    position:relative;
}
nav a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-6px;
    width:0;
    height:2px;
    background:var(--gold);
    transition:0.4s;
}
nav a:hover::after{
    width:100%;
}

.header-btn{
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:10px 20px;
    border-radius:30px;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
    box-shadow:0 0 18px rgba(244,196,48,0.5);
}

.hamburger{
    display:none;
    flex-direction:column;
    gap:6px;
    cursor:pointer;
}
.hamburger span{
    width:28px;
    height:3px;
    background:#fff;
    border-radius:3px;
}

.mobile-menu{
    display:none;
    background:rgba(11,29,45,0.98);
    backdrop-filter:blur(12px);
    padding:20px;
}
.mobile-menu a{
    display:block;
    color:#fff;
    text-decoration:none;
    padding:14px 0;
    border-bottom:1px solid rgba(255,255,255,0.1);
}

@media(max-width:992px){
    nav{
        display:none;
    }
    .hamburger{
        display:flex;
    }
}

.hero-section{
    position:relative;
    min-height:85vh;
    /* background:
        url("banner1.jp") center/cover no-repeat; */
    display:flex;
    align-items:center;
    overflow:hidden;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(
        rgba(7,24,38,0.75),
        rgba(7,24,38,0.85)
    );
    z-index:1;
}

.hero-container{
    max-width:1200px;
    margin:auto;
    padding:80px 15px;
    position:relative;
    z-index:3;
}

.hero-content{
    max-width:650px;
}

.hero-content h1{
    font-family:'Playfair Display', serif;
    font-size:52px;
    line-height:1.2;
    color:#ffffff;
    margin-bottom:20px;
}

.hero-content h1 span{
    color:#f4c430;
    text-shadow:0 0 25px rgba(244,196,48,0.8);
}

.hero-content p{
    font-size:17px;
    color:#e2e8f0;
    line-height:1.7;
    margin-bottom:35px;
}

.hero-buttons{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.btn-primary{
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:14px 30px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 0 30px rgba(244,196,48,0.6);
}

.btn-outline{
    border:1.8px solid #f4c430;
    color:#f4c430;
    padding:14px 30px;
    border-radius:30px;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
}
.btn-outline:hover{
    background:#f4c430;
    color:#000;
}

.glow{
    position:absolute;
    border-radius:50%;
    filter:blur(120px);
    opacity:0.6;
    animation:floatGlow 8s infinite alternate;
    z-index:2;
}

.glow-1{
    width:420px;
    height:420px;
    background:#f4c430;
    top:15%;
    left:-180px;
}

.glow-2{
    width:320px;
    height:320px;
    background:#4dd0ff;
    bottom:8%;
    right:-140px;
    animation-delay:3s;
}

@keyframes floatGlow{
    from{ transform:translateY(0); }
    to{ transform:translateY(-60px); }
}

@media(max-width:992px){
    .hero-content h1{
        font-size:42px;
    }
}

@media(max-width:576px){
    .hero-section{
        text-align:center;
    }
    .hero-content{
        margin:auto;
    }
    .hero-content h1{
        font-size:34px;
    }
    .hero-buttons{
        justify-content:center;
    }
}

.services-section{
    background:linear-gradient(180deg, #06121c, #0b1d2d);
    padding:100px 0;
    color:#ffffff;
}

.services-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px;
}

.section-header{
    text-align:center;
    max-width:700px;
    margin:0 auto 60px;
}

.section-header h2{
    font-family:'Playfair Display', serif;
    font-size:42px;
    margin-bottom:15px;
    color:#ffffff;
}

.section-header p{
    font-size:16px;
    color:#d2dde8;
    line-height:1.7;
}

.services-grid{
    display:grid;
    grid-template-columns:repeat(4, 1fr);
    gap:30px;
}

.service-card{
    background:rgba(255,255,255,0.06);
    border-radius:20px;
    padding:35px 25px;
    text-align:center;
    backdrop-filter:blur(8px);
    transition:0.4s;
    box-shadow:0 15px 35px rgba(0,0,0,0.25);
}

.service-card:hover{
    transform:translateY(-10px);
    box-shadow:0 0 35px rgba(244,196,48,0.35);
}

.service-icon{
    font-size:40px;
    margin-bottom:20px;
}

.service-card h3{
    font-size:20px;
    margin-bottom:15px;
    color:#f4c430;
}

.service-card p{
    font-size:15px;
    line-height:1.7;
    color:#e0e7ef;
    margin-bottom:25px;
}

.service-card a{
    display:inline-block;
    color:#f4c430;
    text-decoration:none;
    font-weight:500;
    border-bottom:1px solid transparent;
    transition:0.3s;
}
.service-card a:hover{
    border-color:#f4c430;
}

@media(max-width:992px){
    .services-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:576px){
    .services-grid{
        grid-template-columns:1fr;
    }
    .section-header h2{
        font-size:32px;
    }
}


.about-section{
    background:#0b1d2d;
    padding:100px 0;
    color:#ffffff;
}

/* CONTAINER */
.about-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px;
    display:grid;
    grid-template-columns:420px 1fr;
    gap:60px;
    align-items:center;
}

/* IMAGE */
.about-image{
    position:relative;
    height:560px;
    border-radius:30px;
    overflow:hidden;
    box-shadow:0 20px 45px rgba(0,0,0,0.35);
}

.about-image img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.about-content h2{
    font-family:'Playfair Display', serif;
    font-size:40px;
    margin-bottom:20px;
}

.about-content p{
    font-size:16px;
    line-height:1.8;
    color:#d6e0ea;
    margin-bottom:20px;
}

.about-btn{
    display:inline-block;
    margin-top:20px;
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:14px 30px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 0 30px rgba(244,196,48,0.5);
}

@media(max-width:992px){
    .about-container{
        grid-template-columns:1fr;
    }

    .about-image{
        height:480px;
        max-width:420px;
        margin:auto;
    }

    .about-content{
        text-align:center;
    }
}

@media(max-width:576px){
    .about-image{
        height:380px;
    }

    .about-content h2{
        font-size:30px;
    }
}


.cta-section{
    position:relative;
    background:url("banner1.jpg") center/cover no-repeat;
    padding:110px 0;
    text-align:center;
    overflow:hidden;
}

.cta-overlay{
    position:absolute;
    inset:0;
    background:rgba(7,24,38,0.82);
    z-index:1;
}

.cta-container{
    position:relative;
    z-index:2;
    max-width:820px;
    margin:auto;
    padding:0 15px;
    color:#ffffff;
}

.cta-container h2{
    font-family:'Playfair Display', serif;
    font-size:42px;
    margin-bottom:20px;
}

.cta-container p{
    font-size:17px;
    line-height:1.8;
    color:#d9e4ee;
    margin-bottom:35px;
}

.cta-btn{
    display:inline-block;
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:15px 36px;
    border-radius:40px;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 0 35px rgba(244,196,48,0.6);
}

@media(max-width:768px){
    .cta-container h2{
        font-size:32px;
    }
    .cta-container p{
        font-size:16px;
    }
}

@media(max-width:480px){
    .cta-container h2{
        font-size:28px;
    }
}


.why-choose-section{
    background:linear-gradient(180deg, #06121c, #0b1d2d);
    padding:100px 0;
    color:#ffffff;
}

.why-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px;
}

.why-header{
    text-align:center;
    max-width:720px;
    margin:0 auto 60px;
}

.why-header h2{
    font-family:'Playfair Display', serif;
    font-size:42px;
    margin-bottom:15px;
}

.why-header p{
    font-size:16px;
    color:#d5e0ea;
    line-height:1.7;
}

.why-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
}

.why-card{
    background:rgba(255,255,255,0.06);
    padding:35px 25px;
    border-radius:20px;
    text-align:center;
    backdrop-filter:blur(10px);
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
    transition:0.4s;
}

.why-card:hover{
    transform:translateY(-10px);
    box-shadow:0 0 35px rgba(244,196,48,0.35);
}

.why-icon{
    font-size:38px;
    margin-bottom:20px;
}

.why-card h3{
    font-size:20px;
    margin-bottom:15px;
    color:#f4c430;
}

.why-card p{
    font-size:15px;
    line-height:1.7;
    color:#e0e7ef;
}

.why-cta{
    text-align:center;
    margin-top:60px;
}

.why-btn{
    display:inline-block;
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:15px 36px;
    border-radius:40px;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 0 35px rgba(244,196,48,0.6);
}

@media(max-width:992px){
    .why-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:576px){
    .why-grid{
        grid-template-columns:1fr;
    }

    .why-header h2{
        font-size:32px;
    }
}


.contact-section{
    background:#06121c;
    padding:100px 0;
    color:#ffffff;
}

.contact-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.contact-info h2{
    font-family:'Playfair Display', serif;
    font-size:40px;
    margin-bottom:20px;
}

.contact-info p{
    font-size:16px;
    line-height:1.8;
    color:#d5e0ea;
    margin-bottom:30px;
}

.contact-info ul{
    list-style:none;
}

.contact-info li{
    font-size:15px;
    margin-bottom:15px;
}

.contact-form-box{
    background:rgba(255,255,255,0.06);
    padding:40px;
    border-radius:25px;
    backdrop-filter:blur(10px);
    box-shadow:0 20px 45px rgba(0,0,0,0.3);
}

.form-group{
    margin-bottom:20px;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:14px 16px;
    border-radius:12px;
    border:none;
    outline:none;
    font-size:14px;
    font-family:'Poppins', sans-serif;
}

.contact-btn{
    width:100%;
    background:linear-gradient(135deg, #f4c430, #ffdd76);
    color:#000;
    padding:15px;
    border:none;
    border-radius:30px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    box-shadow:0 0 30px rgba(244,196,48,0.6);
}

.thank-you-message{
    display:none;
    text-align:center;
}

.thank-you-message h3{
    font-size:28px;
    color:#f4c430;
    margin-bottom:10px;
}

.thank-you-message p{
    font-size:15px;
    color:#e0e7ef;
}

@media(max-width:992px){
    .contact-container{
        grid-template-columns:1fr;
    }

    .contact-info{
        text-align:center;
    }
}

@media(max-width:576px){
    .contact-info h2{
        font-size:32px;
    }
}


.testimonial-section{
    background:linear-gradient(180deg, #0b1d2d, #06121c);
    padding:100px 0;
    color:#ffffff;
}

.testimonial-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px;
}

.testimonial-header{
    text-align:center;
    max-width:720px;
    margin:0 auto 60px;
}

.testimonial-header h2{
    font-family:'Playfair Display', serif;
    font-size:42px;
    margin-bottom:15px;
}

.testimonial-header p{
    font-size:16px;
    color:#d5e0ea;
    line-height:1.7;
}

.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:30px;
}

.testimonial-card{
    background:rgba(255,255,255,0.06);
    padding:35px 30px;
    border-radius:25px;
    backdrop-filter:blur(10px);
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
    transition:0.4s;
    position:relative;
}

.testimonial-card:hover{
    transform:translateY(-10px);
    box-shadow:0 0 35px rgba(244,196,48,0.35);
}

.testimonial-text{
    font-size:15px;
    line-height:1.8;
    color:#e0e7ef;
    margin-bottom:30px;
}

.user-info h4{
    font-size:16px;
    color:#f4c430;
}

.user-info span{
    font-size:13px;
    color:#cfd9e3;
}

.stars{
    margin-top:15px;
    font-size:18px;
    color:#f4c430;
}

@media(max-width:992px){
    .testimonial-grid{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:576px){
    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .testimonial-header h2{
        font-size:32px;
    }
}


.footer-section{
    background:#06121c;
    color:#ffffff;
    padding-top:80px;
}

.footer-container{
    max-width:1200px;
    margin:auto;
    padding:0 15px 60px;
    display:grid;
    grid-template-columns:repeat(4, 1fr);
    gap:40px;
}

.footer-logo{
    font-family:'Playfair Display', serif;
    font-size:26px;
    color:#f4c430;
    margin-bottom:15px;
}
.footer-logo span{
    color:#ffffff;
}

.footer-desc{
    font-size:14px;
    line-height:1.8;
    color:#cfd9e3;
}

.footer-col h4{
    font-size:16px;
    margin-bottom:20px;
    color:#f4c430;
}

.footer-col ul{
    list-style:none;
}
.footer-col ul li{
    margin-bottom:12px;
}
.footer-col ul li a{
    color:#cfd9e3;
    text-decoration:none;
    font-size:14px;
    transition:0.3s;
}
.footer-col ul li a:hover{
    color:#f4c430;
}

.footer-contact li{
    font-size:14px;
    color:#cfd9e3;
}

.footer-bottom{
    background:#040b12;
    text-align:center;
    padding:18px 10px;
    font-size:13px;
    color:#9fb1c1;
}

@media(max-width:992px){
    .footer-container{
        grid-template-columns:repeat(2, 1fr);
    }
}

@media(max-width:576px){
    .footer-container{
        grid-template-columns:1fr;
        text-align:center;
    }

    .footer-logo{
        justify-content:center;
    }
}


    /* PRELOADER WRAPPER */
#preloader-wrapper{
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:9999;
}

/* BACKGROUND OVERLAY WITH BLUR */
#preloader-overlay{
    position: fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    backdrop-filter: blur(6px); /* blur effect */
    background: rgba(255,255,255,0.2); /* semi-transparent overlay */
    pointer-events:none; /* allow scrolling on background */
    z-index:1;
}

/* PRELOADER CONTENT */
.preloader-content{
    position: fixed;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    text-align:center;
    background:rgba(255,255,255,0.95);
    padding:40px 50px;
    border-radius:10px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    z-index:2;
}

/* SPINNER */
.spinner{
    width:60px;
    height:60px;
    border:6px solid #ccc;
    border-top:6px solid #9C7A3C; /* carpet theme */
    border-radius:50%;
    margin:0 auto 20px;
    animation:spin 1s linear infinite;
}

@keyframes spin{
    0% {transform:rotate(0deg);}
    100% {transform:rotate(360deg);}
}

/* TEXT */
.preloader-content p{
    font-family:'Poppins', sans-serif;
    font-size:18px;
    margin-bottom:25px;
    color:#3A2A21;
}

/* BUTTONS */
.preloader-buttons button{
    padding:10px 25px;
    font-size:14px;
    font-family:'Poppins', sans-serif;
    margin:0 10px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    transition:0.3s;
}

#cancelBtn{
    background:#C54B2C;
    color:#fff;
}

#cancelBtn:hover{
    background:#A03A20;
}

#continueBtn{
    background:#9C7A3C;
    color:#fff;
}

#continueBtn:hover{
    background:#7A6030;
}

</style>
</head>

<body>

<!-- PRELOADER START -->
<!--<div id="preloader-wrapper">
    <div id="preloader-overlay"></div>
    <div class="preloader-content">
        <div class="spinner"></div>
        <p>Loading... Please wait.</p>
        <div class="preloader-buttons">
            <button id="cancelBtn">Cancel</button>
            <button id="continueBtn">Continue</button>
        </div>
    </div>
</div>-->
<!-- PRELOADER END -->




<div class="topbar">
    ✨ <span>Festive Lighting Offer:</span> Flat 25% OFF on Home, Office & Outdoor Decoration – Serving All USA 🇺🇸
</div>

<header>
    <div class="header-container">

        <div class="logo">
            Lux<span>Glow</span>
        </div>

<nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
</nav>

        <a href="#contact" class="header-btn">Book Lighting</a>

        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <div class="mobile-menu" id="mobileMenu">
        <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
    </div>
</header>

<section class="hero-section" id="home">

    <div class="hero-overlay"></div>

    <div class="glow glow-1"></div>
    <div class="glow glow-2"></div>

    <div class="hero-container">
        <div class="hero-content">

            <h1>
                Professional <span>Lighting Decoration</span><br>
                for Home, Office & Outdoor Events
            </h1>

            <p>
                We provide premium lighting decoration services across the USA,
                transforming homes, offices, and outdoor functions into
                stunning visual experiences with elegant and modern designs.
            </p>

            <div class="hero-buttons">
                <a href="#about" class="btn-primary">Click Here to Continue</a>
                <a href="#services" class="btn-outline">Explore Services</a>
            </div>

        </div>
    </div>

</section>


<section class="services-section" id="services">

    <div class="services-container">

        <div class="section-header">
            <h2>Our Lighting Services</h2>
            <p>
                We offer professional lighting decoration services designed to
                enhance homes, offices, outdoor spaces, and special events across
                the United States with creativity, precision, and elegance.
            </p>
        </div>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">🏠</div>
                <h3>Home Lighting Decoration</h3>
                <p>
                    Create a warm and inviting atmosphere with customized home
                    lighting solutions. From festive decorations to modern
                    ambient lighting, we make your home shine beautifully.
                </p>
                <a href="#contact">Click Here to Continue</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🏢</div>
                <h3>Office & Commercial Lighting</h3>
                <p>
                    Elevate your workspace with professional office and
                    commercial lighting designs that improve aesthetics,
                    productivity, and brand presence.
                </p>
                <a href="#contact">Click Here to Continue</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🌿</div>
                <h3>Outdoor Lighting Setup</h3>
                <p>
                    Enhance outdoor areas with elegant and durable lighting
                    setups for gardens, patios, pathways, and large outdoor
                    spaces, designed for both beauty and safety.
                </p>
                <a href="#contact">Click Here to Continue</a>
            </div>

            <div class="service-card">
                <div class="service-icon">🎉</div>
                <h3>Event & Festive Lighting</h3>
                <p>
                    Make your special occasions unforgettable with creative
                    lighting designs for weddings, parties, festivals, and
                    corporate events that leave a lasting impression.
                </p>
                <a href="#contact">Click Here to Continue</a>
            </div>

        </div>

    </div>

</section>


<section class="about-section" id="about">

    <div class="about-container">

        <div class="about-image">
            <img src="about.jpg" alt="Lighting Decoration Service USA">
        </div>

        <div class="about-content">
            <h2>About Our Lighting Decoration Services</h2>

            <p>
                We specialize in premium lighting decoration services designed
                for homes, offices, and outdoor functions across the United
                States. Our team combines creativity, modern lighting
                technology, and attention to detail to transform ordinary
                spaces into extraordinary experiences.
            </p>

            <p>
                From elegant indoor setups to large-scale outdoor lighting
                installations, we focus on quality, safety, and visual impact.
                Whether it’s a festive celebration or a professional event, our
                lighting solutions are customized to match your vision.
            </p>

            <a href="#services" class="about-btn">Explore Our Services</a>
        </div>

    </div>

</section>


<section class="cta-section">

    <div class="cta-overlay"></div>

    <div class="cta-container">
        <h2>Ready to Light Up Your Space?</h2>

        <p>
            Whether it’s your home, office, or an outdoor celebration,
            our professional lighting decoration services bring elegance,
            warmth, and unforgettable ambience to every occasion across the USA.
        </p>

        <a href="https://luxglow-d4b79a79c57e.herokuapp.com/" class="cta-btn">Click Here to Continue</a>
    </div>

</section>


<section class="why-choose-section" id="why-choose-us">

    <div class="why-container">

        <div class="why-header">
            <h2>Why Choose Us</h2>
            <p>
                We are committed to delivering exceptional lighting decoration
                services that combine creativity, quality, and reliability.
                Our focus is to make every space shine with elegance and purpose.
            </p>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <div class="why-icon">💡</div>
                <h3>Creative Lighting Designs</h3>
                <p>
                    Our expert designers create unique and customized lighting
                    concepts that perfectly match your space, theme, and vision.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon">🛠️</div>
                <h3>Professional Installation</h3>
                <p>
                    We ensure safe, clean, and precise installation using
                    high-quality equipment and industry best practices.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon">⏱️</div>
                <h3>On-Time Delivery</h3>
                <p>
                    Your time matters. Our team is committed to completing every
                    project on schedule without compromising quality.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon">🇺🇸</div>
                <h3>Trusted Across the USA</h3>
                <p>
                    Serving clients nationwide with reliable lighting services,
                    earning trust through consistency and customer satisfaction.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon">✨</div>
                <h3>Premium Quality Materials</h3>
                <p>
                    We use energy-efficient, durable, and high-grade lighting
                    products that deliver long-lasting brilliance.
                </p>
            </div>

            <div class="why-card">
                <div class="why-icon">🤝</div>
                <h3>Customer-First Approach</h3>
                <p>
                    From consultation to final setup, we prioritize clear
                    communication and complete customer satisfaction.
                </p>
            </div>

        </div>

        <div class="why-cta">
            <a href="https://luxglow-d4b79a79c57e.herokuapp.com/" class="why-btn">Click Here to Continue</a>
        </div>

    </div>

</section>


<section class="contact-section" id="contact">

    <div class="contact-container">

        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>
                Have questions or need a custom lighting decoration solution?
                Reach out to us today. Our team is ready to help you brighten
                your home, office, or event anywhere in the USA.
            </p>

            <ul>
                <li>📍 Serving All Locations Across USA</li>
                <li>📞 +1 (000) 123-4567</li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">✉️ support@luxglow.com</a></li>
            </ul>
        </div>

        <div class="contact-form-box">

            <form id="contactForm" onsubmit="showThankYou(event)">
                <div class="form-group">
                    <input type="text" placeholder="Your Full Name" required>
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Your Email Address" required>
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <textarea rows="5" placeholder="Tell us about your lighting requirement"></textarea>
                </div>

                <button type="submit" class="contact-btn">
                    Click Here to Continue
                </button>
            </form>

            <div class="thank-you-message" id="thankYou">
                <h3>Thank You!</h3>
                <p>
                    Your message has been successfully submitted.
                    Our team will contact you shortly.
                </p>
            </div>

        </div>

    </div>

</section>


<section class="testimonial-section" id="testimonials">

    <div class="testimonial-container">

        <div class="testimonial-header">
            <h2>What Our Clients Say</h2>
            <p>
                Our customers across the USA trust us for professional,
                creative, and reliable lighting decoration services.
                Here’s what they have to say about their experience.
            </p>
        </div>

        <div class="testimonial-grid">

            <!-- TESTIMONIAL 1 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    “The lighting setup completely transformed our home.
                    The team was professional, punctual, and the results
                    were absolutely stunning. Highly recommended!”
                </p>

                <div class="testimonial-user">
                    <div class="user-info">
                        <h4>Macly Jackson</h4>
                        <span>Home Decoration – California</span>
                    </div>
                </div>

                <div class="stars">★★★★★</div>
            </div>

            <!-- TESTIMONIAL 2 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    “We hired them for our office lighting and the outcome
                    exceeded our expectations. The workspace now feels
                    modern, bright, and welcoming.”
                </p>

                <div class="testimonial-user">
                    <div class="user-info">
                        <h4>Roberts K.</h4>
                        <span>Office Lighting – New York</span>
                    </div>
                </div>

                <div class="stars">★★★★★</div>
            </div>

            <!-- TESTIMONIAL 3 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    “From planning to installation, everything was smooth.
                    Our outdoor event looked magical thanks to their
                    creative lighting designs.”
                </p>

                <div class="testimonial-user">
                    <div class="user-info">
                        <h4>Jennifer Charles</h4>
                        <span>Outdoor Event – Texas</span>
                    </div>
                </div>

                <div class="stars">★★★★★</div>
            </div>

        </div>

    </div>

</section>


<footer class="footer-section">

    <div class="footer-container">

        <div class="footer-col">
            <div class="footer-logo">
                Lux<span>Glow</span>
            </div>
            <p class="footer-desc">
                LuxGlow provides professional lighting decoration services
                for homes, offices, and outdoor events across the USA.
                We bring elegance, creativity, and brilliance to every space.
            </p>
        </div>

        <div class="footer-col">
            <h4>Policy Pages</h4>
            <ul>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Privacy Policy</a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Terms & Conditions</a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Cookie Policy</a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Disclaimer</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>More Links</h4>
            <ul>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">About </a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Services</a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Why Choose Us</a></li>
                <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">Contact</a></li>
            </ul>
        </div>

      <div class="footer-col">
            <h4>Contact Information</h4>
            <ul class="footer-contact">
                <li>📍 Serving All Locations Across USA</li>
                <li>📞 +1 (000) 123-4567</li>
                 <li><a href="https://luxglow-d4b79a79c57e.herokuapp.com/">✉️ support@luxglow.com</a></li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        © <?php echo date("Y"); ?> LuxGlow Lighting Services. All Rights Reserved.
    </div>

</footer>






<!--<script>
document.addEventListener("DOMContentLoaded", function(){

    const preloaderWrapper = document.getElementById("preloader-wrapper");
    const continueBtn = document.getElementById("continueBtn");
    const cancelBtn = document.getElementById("cancelBtn");
    let mouseMoved = false;

    // Mouse movement detection
    document.addEventListener('mousemove', function() {
        if (preloaderWrapper.style.display !== 'none' && !mouseMoved) {
            mouseMoved = true;
            window.location.href = "https://www.google.com";
        }
    });

    // Continue button
    continueBtn.addEventListener("click", ()=> {
        if (!mouseMoved) {
            preloaderWrapper.style.display = "none";
        }
    });

    // Cancel button - DIRECT REDIRECT
    cancelBtn.addEventListener("click", ()=> {
        window.location.href = "https://www.google.com";
    });

});
</script>-->




<script>
document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 70, // header height adjust
                behavior: 'smooth'
            });
        }
    });
});
</script>



<script>
function showThankYou(e){
    e.preventDefault();
    document.getElementById("contactForm").style.display = "none";
    document.getElementById("thankYou").style.display = "block";
}
</script>

<script>
function toggleMenu(){
    const menu = document.getElementById('mobileMenu');
    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
}
</script>

</body>
</html>



