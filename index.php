<!DOCTYPE html>
<html lang="en">
<head>
<link rel="canonical" href="https://theyyampattilgcc.com/" />  
<meta name="robots" content="index, follow">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="luxury furniture outlet, luxury home furniture, modern furniture dubai, interior design companies, custom furniture, italian furniture, luxury closet dubai, walk in closets, wardrobe cabinet, tv unit design, modern tv wall, wall cladding, 3d wall panels, bedroom sets, kids bedroom furniture, partition wall, home decor, luxury furniture abu dhabi, living room furniture, furniture shop sharjah, furniture sale dubai, custom closet, كاف للخزائن" />
<meta name="author" content="Theyyampattil Furniture Trading LLC">
<meta property="og:title" content="Best Luxury Furniture in Dubai | Theyyampattil Furniture">
<meta property="og:description" content="Premium custom-made furniture across UAE. Showrooms in Dubai, Sharjah and Abu Dhabi.">
<meta property="og:type" content="website">
<title> Best Luxury Furniture in Dubai | Theyyampattil Furniture</title>
<meta name="description" content="Theyyampattil Furniture offers premium Italian luxury furniture in Dubai. Explore bespoke sofas, bedroom sets, and modern TV wall units.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="https://theyyampattilgcc.com/assets/images/favicons/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="https://theyyampattilgcc.com/assets/images/favicons/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="https://theyyampattilgcc.com/assets/images/favicons/favicon-16x16.png" />
<!-- tell broser to start downloading the first image before it reads css -->
<link rel="preload" as="image" href="https://theyyampattilgcc.com/assets/images/home-page/hero-banner/hero-slider-1.avif">




<!-- Common <head> include materials like schema markup,social tags,...etc -->
<?php include 'includes/head-tag-include.php'; ?>


    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NHMN58QX');</script>


<style>


  /* ===== GLOBAL RESET & BASE ===== */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; font-size: 16px; }
  body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: #0a0a0a;
    color: #e8e0d4;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  a { text-decoration: none; color: inherit; }
  img { max-width: 100%; display: block; }
  ul { list-style: none; }
  :root {
    --gold: #c9a76a;
    --gold-light: #e8c88a;
    --gold-dark: #9a7840;
    --dark: #0a0a0a;
    --dark-2: #111111;
    --dark-3: #181818;
    --dark-4: #222222;
    --cream: #e8e0d4;
    --cream-muted: #b5a99a;
    --white: #ffffff;
    --border: rgba(201,167,106,0.15);
    --border-hover: rgba(201,167,106,0.4);
  }
</style>





</head>
<body>


<!-- Header -->
<?php include 'includes/home-page-header.php'; ?>


<!-- ============================================================
     COMPONENT: HERO SLIDER
     ============================================================ -->

<!-- hero section starts -->
<section id="hero-section" aria-label="Hero">
  <style>
    :root {
      --gold: #c5a059;
      --gold-light: #e2c285;
      --transition-main: cubic-bezier(0.23, 1, 0.32, 1);
      --text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8), 0 1px 3px rgba(0, 0, 0, 0.9);
      -webkit-text-size-adjust: 100%;
      text-size-adjust: 100%;
    }

    /* --- Performance & CLS Optimization --- */
    #hero-section {
      position: relative;
      height: 100vh;
      min-height: 600px;
      overflow: hidden;
      background: #0a0a0a;
      contain: layout style;
    }

    .hero-slide {
      position: absolute;
      inset: 0;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.8s var(--transition-main), visibility 0.8s;
      z-index: 1;
      backface-visibility: hidden;
      transform: translateZ(0);
    }

    /* Prevent LCP delay & layout shift */
    .hero-slide:first-child {
      opacity: 1;
      visibility: visible;
      z-index: 2;
    }

    .hero-slide.active {
      opacity: 1;
      visibility: visible;
      z-index: 2;
    }

    .hero-slide-bg {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      transform: scale(1.02);
      transition: transform 6s linear;
      will-change: transform;
    }

    .hero-slide.active .hero-slide-bg {
      transform: scale(1);
    }

    /* --- Layout & Typography --- */
    .hero-content {
      position: absolute;
      inset: 0;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 0 10% 15vh;
      z-index: 3;
      background: linear-gradient(to right, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 50%, transparent 100%);
    }

    .hero-eyebrow, .hero-title, .hero-desc, .hero-btns {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s var(--transition-main), transform 0.6s var(--transition-main);
      text-shadow: var(--text-shadow);
    }

    /* Immediate activation for the first slide to satisfy GTmetrix LCP */
    .hero-slide:first-child .hero-eyebrow,
    .hero-slide:first-child .hero-title,
    .hero-slide:first-child .hero-desc,
    .hero-slide:first-child .hero-btns,
    .hero-slide.active .hero-eyebrow, 
    .hero-slide.active .hero-title, 
    .hero-slide.active .hero-desc, 
    .hero-slide.active .hero-btns { 
      opacity: 1; 
      transform: translateY(0); 
    }

    .hero-slide.active .hero-eyebrow { transition-delay: 0.1s; }
    .hero-slide.active .hero-title { transition-delay: 0.2s; }
    .hero-slide.active .hero-desc { transition-delay: 0.3s; }
    .hero-slide.active .hero-btns { transition-delay: 0.4s; }

    .hero-eyebrow { 
      display: flex; 
      align-items: center; 
      gap: 15px; 
      margin-bottom: 1.5rem; 
    }
    
    .hero-eyebrow-line { 
      width: 40px; 
      height: 2px; 
      background: var(--gold); 
    }
    
    .hero-eyebrow span {
      letter-spacing: 0.1em;
      white-space: nowrap;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: inline-block;
      color: var(--gold);
      text-transform: uppercase;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .hero-title { 
      font-size: clamp(2.2rem, 5vw, 5rem); 
      font-weight: 700; 
      line-height: 1.1; 
      color: #fff; 
      max-width: 850px; 
      margin-bottom: 1.5rem; 
    }
    
    .hero-title em { 
      color: var(--gold-light); 
      font-style: normal; 
      font-weight: 300; 
    }

.hero-desc { 
  /* 1. INCREASED FONT SIZE: Adjusting the clamp values so it's larger everywhere */
  font-size: clamp(1.15rem, 1.5vw, 1.4rem); 
  color: #ffffff; 
  max-width: 550px; 
  line-height: 1.6; 
  margin-bottom: 2.5rem; 
  /* 2. INCREASED THICKNESS: Changed from 400 (Regular) to 500 (Medium) or 600 (Semi-bold) */
  font-weight: 500; 
}

    .btn-hero {
      display: inline-flex; 
      align-items: center; 
      padding: 16px 40px; 
      font-size: 0.75rem; 
      font-weight: 700;
      letter-spacing: 0.2em; 
      text-transform: none; 
      background: var(--gold); 
      color: #ffffff; 
      border: 1px solid var(--gold); 
      text-decoration: none; 
      transition: all 0.3s ease; 
      position: relative;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    
    .btn-hero:hover { 
      background: #ffffff; 
      color: #0a0a0a; 
      border-color: #ffffff; 
    }

    .hero-nav { 
      position: absolute; 
      bottom: 60px; 
      left: 10%; 
      display: flex; 
      gap: 12px; 
      z-index: 10; 
    }
    
    .hero-dot { 
      width: 30px; 
      height: 3px; 
      background: rgba(255,255,255,0.4); 
      cursor: pointer; 
      transition: all 0.4s ease; 
      border: none; 
      padding: 0; 
    }
    
    .hero-dot.active { 
      background: var(--gold); 
      width: 60px; 
    }

    .hero-scroll-hint { 
      position: absolute; 
      bottom: 60px; 
      right: 10%; 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
      z-index: 10; 
      text-decoration: none; 
    }
    
    .hero-scroll-hint span { 
      font-size: 0.6rem; 
      font-weight: 700; 
      letter-spacing: 0.4em; 
      text-transform: uppercase; 
      color: var(--gold); 
      writing-mode: vertical-rl; 
      margin-bottom: 20px; 
    }
    
    .arrow-line { 
      width: 2px; 
      height: 50px; 
      background: linear-gradient(to bottom, var(--gold), transparent); 
    }
    
    .arrow-head { 
      width: 8px; 
      height: 8px; 
      border-right: 2px solid var(--gold); 
      border-bottom: 2px solid var(--gold); 
      transform: rotate(45deg); 
      margin-top: -4px; 
    }

    /* --- Tablet Responsive Breakpoint (1024px & down) --- */
    @media (max-width: 1024px) {
      .hero-content { 
        padding: 0 8% 12vh;
      }
      .hero-nav {
        left: 8%;
        bottom: 50px;
      }
      .hero-scroll-hint {
        right: 8%;
        bottom: 50px;
      }
    }

    /* --- Mobile Responsive Breakpoint (768px & down) --- */
/* --- Mobile Responsive Breakpoint (768px & down) --- */
    @media (max-width: 768px) {
      #hero-section {
        height: 100svh; 
      }
      
      .hero-content {
        align-items: center; 
        text-align: center; 
        padding: 60px 24px 80px !important; 
        justify-content: center !important; 
        
        /* --- REDUCED DARK OVERLAY --- */
        /* Changed bottom opacity from 0.85 to 0.50, and center from 0.4 to 0.25 */
        background: linear-gradient(
          to top, 
          rgba(0, 0, 0, 0.50) 0%, 
          rgba(0, 0, 0, 0.25) 60%, 
          rgba(0, 0, 0, 0.40) 100__
        ) !important;
      }
      
      .hero-eyebrow { 
        justify-content: center !important; 
        margin-bottom: 1rem; 
      }
      
      .hero-eyebrow-line { 
        display: none !important; 
      }
      
      .hero-title { 
        margin-bottom: 1.2rem;
        max-width: 100%;
      }
      
      .hero-desc { 
        margin-bottom: 2.2rem;
        max-width: 100%;
      }
      
      .hero-nav { 
        left: 50%; 
        transform: translateX(-50%); 
        bottom: 35px; 
      } 
      
      .hero-scroll-hint { 
        display: none; 
      }
    }


    /* --- Small Mobile Form Factors (380px & down) --- */
    @media (max-width: 380px) {
      .hero-title {
        font-size: 1.85rem;
      }
      .hero-desc {
        font-size: 1.05rem;
      }
      .btn-hero {
        padding: 12px 30px;
        font-size: 0.7rem;
      }
    }
    /* --- Scroll Hint Background Isolation Fix --- */
.hero-scroll-hint {
  /* Adds a soft dark glow behind the entire scroll indicator element */
  filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.85)) drop-shadow(0 4px 20px rgba(0, 0, 0, 0.4));
}

.hero-scroll-hint span {
  /* Reinforces text contrast on top of the global text shadow */
  text-shadow: 0 2px 4px rgba(0,0,0,0.9), 0 0 10px rgba(0,0,0,0.5);
}

.modern-arrow-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
}

.arrow-line {
  /* Swaps transparent for a dark semi-transparent fade at the top to anchor the line */
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, var(--gold) 20%, transparent 100%) !important;
  /* Adds a subtle 1px dark border glow around the line itself */
  box-shadow: -1px 0 0 rgba(0,0,0,0.7), 1px 0 0 rgba(0,0,0,0.7);
}

.arrow-head {
  /* Generates a crisp dark stroke outline directly around the gold vector corner */
  filter: drop-shadow(1px 1px 0px rgba(0, 0, 0, 0.9)) drop-shadow(-1px -1px 0px rgba(0, 0, 0, 0.5));
}
  </style>

  <!-- Slide 1: Optimized for LCP -->
  <div class="hero-slide active">
    <div class="hero-slide-bg" 
         style="background-image:url('assets/images/home-page/hero-banner/hero-slider-1.avif');" 
         role="img" 
         aria-label="Bespoke luxury furniture"
         fetchpriority="high"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Welcome to Theyyampattil</span></div>
      <h2 class="hero-title">Discover the <em>Art</em> of Comfort and Design</h2>
      <p class="hero-desc">Elevating UAE homes with bespoke luxury furniture crafted for those who appreciate the finest details.</p>
      <div class="hero-btns">
        <a href="about" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <!-- Subsequent slides -->
  <div class="hero-slide">
    <div class="hero-slide-bg" style="background-image:url('assets/images/home-page/hero-banner/hero-slider-2.avif');"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Modern Elegance</span></div>
      <h2 class="hero-title">Design Your <em>Perfect</em> Space</h2>
      <p class="hero-desc">From modern minimalism to Italian-inspired opulence — every piece tells a story of superior craftsmanship.</p>
      <div class="hero-btns">
        <a href="about" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <div class="hero-slide">
    <div class="hero-slide-bg" style="background-image:url('assets/images/home-page/hero-banner/hero-slider-1.avif');"></div>
    <div class="hero-content">
      <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Legacy of Quality</span></div>
      <h2 class="hero-title">Embrace <em>Comfort.</em> Embrace Life.</h2>
      <p class="hero-desc">26 years of excellence. 3 showrooms. 300+ artisans. One unwavering commitment to quality.</p>
      <div class="hero-btns">
        <a href="about" class="btn-hero">DISCOVER MORE</a>
      </div>
    </div>
  </div>

  <div class="hero-nav">
    <button class="hero-dot active" onclick="goToSlide(0)" aria-label="Slide 1"></button>
    <button class="hero-dot" onclick="goToSlide(1)" aria-label="Slide 2"></button>
    <button class="hero-dot" onclick="goToSlide(2)" aria-label="Slide 3"></button>
  </div>

  <a href="#next-section" class="hero-scroll-hint">
    <span>Scroll</span>
    <div class="modern-arrow-wrap">
      <div class="arrow-line"></div>
      <div class="arrow-head"></div>
    </div>
  </a>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const slides = document.querySelectorAll('.hero-slide');
      const dots = document.querySelectorAll('.hero-dot');
      let current = 0;
      let timer;

      function goToSlide(n){
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (n + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
        resetTimer();
      }

      function resetTimer() {
        clearInterval(timer);
        timer = setInterval(() => {
          requestAnimationFrame(() => goToSlide(current + 1));
        }, 6000);
      }

      window.addEventListener('load', () => {
        const otherImages = [
          'assets/images/home-page/hero-banner/hero-slider-2.avif'
        ];
        otherImages.forEach(src => {
          const img = new Image();
          img.src = src;
        });
      }, {passive: true});

      window.goToSlide = goToSlide;
      resetTimer();
    });
  </script>
</section>
<!-- hero section ends -->
<!-- END: HERO SLIDER -->


<!-- ============================================================
     COMPONENT: ABOUT / LUXURY HOME FURNITURE INTRO
     ============================================================ -->
<!-- about section starts -->
<section id="about-section" style="background:#121212; padding: clamp(40px, 8vw, 100px) 0; overflow:hidden; contain: content;" aria-label="About Theyyampattil">
  <style>
    /* Add display=swap to prevent FOIT (Flash of Invisible Text) */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');

    :root {
      --gold: #c9a76a;
      --gold-dark: #b08d55;
      --white: #ffffff;
      --cream-muted: #bcbcbc;
      --glass: rgba(255, 255, 255, 0.03);
      --border: rgba(255, 255, 255, 0.08);
      --font-main: 'Plus Jakarta Sans', sans-serif;
    }

    #about-section {
      font-family: var(--font-main);
      /* Use content-visibility for off-screen performance */
      content-visibility: auto;
      contain-intrinsic-size: 1px 500px;
    }

    .about-container {
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 24px;
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: clamp(40px, 5vw, 80px);
      align-items: center;
    }

    .section-label {
      display: inline-flex;
      padding: 6px 12px;
      background: var(--glass);
      border-left: 3px solid var(--gold);
      margin-bottom: 16px;
    }

    .section-label span {
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .section-title {
      font-size: clamp(2.2rem, 5vw, 3.5rem);
      font-weight: 800;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 24px;
      letter-spacing: -0.02em;
    }

    .section-title em {
      color: var(--gold);
      font-style: normal;
    }

    .about-badges {
      display: flex;
      gap: 12px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .about-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 10px 18px;
      background: var(--glass);
      border: 1px solid var(--border);
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--white);
      /* Performance: Only transition what is needed */
      transition: border-color 0.3s ease, background 0.3s ease;
    }

    .about-badge:hover {
      border-color: var(--gold);
      background: rgba(201, 167, 106, 0.1);
    }

    .about-badge svg { fill: var(--gold); }

    .about-text {
      font-size: clamp(1rem, 2vw, 1.05rem);
      line-height: 1.6;
      color: var(--cream-muted);
      margin-bottom: 20px;
      max-width: 600px;
    }

    .about-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin: 35px 0;
      padding: 25px 0;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }

    .about-stat-num {
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--gold);
      margin-bottom: 4px;
    }

    .about-stat-label {
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      color: var(--cream-muted);
    }

    .about-cta {
      display: flex;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background: var(--gold);
      color: #000;
      text-decoration: none;
      font-weight: 700;
      font-size: 0.95rem;
      padding: 16px 35px;
      border-radius: 4px;
      /* Use transform for better FPS */
      transition: transform 0.3s ease, background 0.3s ease;
      will-change: transform;
    }

    .btn-primary:hover {
      background: var(--gold-dark);
      transform: translateY(-3px);
    }

    .about-phone {
      display: flex;
      align-items: center;
      gap: 15px;
      text-decoration: none;
      transition: opacity 0.3s;
    }
    
    .about-phone:hover { opacity: 0.8; }

    .about-phone-icon {
      width: 48px;
      height: 48px;
      background: var(--gold);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .about-phone-num {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--white);
      display: block;
    }

    .about-images {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-img-container {
      position: relative;
      width: 100%;
      max-width: 500px;
      /* Prevent layout shift before images load */
      aspect-ratio: 4/5; 
    }

    .about-img-main {
      width: 90%;
      margin-left: auto;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 4/5;
      box-shadow: 0 30px 60px rgba(0,0,0,0.7);
      background: #222; /* Placeholder color */
    }

    .about-img-main img, .about-img-small img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      /* GPU acceleration for scale animation */
      transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
      will-change: transform;
    }

    .about-img-main:hover img, .about-img-small:hover img {
      transform: scale(1.03);
    }

    .about-img-small {
      position: absolute;
      bottom: -20px;
      left: 0;
      width: 55%;
      aspect-ratio: 1/1;
      border-radius: 12px;
      overflow: hidden;
      border: 6px solid #1a1a1a;
      box-shadow: 0 20px 40px rgba(0,0,0,0.8);
      z-index: 2;
      background: #222;
    }

    @media (max-width: 991px) {
      .about-container {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 50px;
      }
      .section-label, .about-badges, .about-stats, .about-cta {
        justify-content: center;
      }
      .about-text { margin: 0 auto 20px auto; }
      .about-images { order: -1; } 
    }

    @media (max-width: 480px) {
      .about-stats { grid-template-columns: 1fr; gap: 15px; }
      .about-cta { flex-direction: column; width: 100%; }
      .btn-primary { width: 100%; text-align: center; }
    }
  </style>

  <div class="about-container">
    <div class="about-content">
      <div class="section-label">
        <span>About Company</span>
      </div>
      
      <h1 class="section-title">Luxury <em>Home</em> Furniture</h1>
      
      <div class="about-badges">
        <div class="about-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
          Smart &amp; Unique Designs
        </div>
        <div class="about-badge">
          <svg width="16" height="16" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z"/></svg>
          Best Quality Standards
        </div>
      </div>

      <p class="about-text">With over two decades of excellence, Theyyampattil Furniture has become a trusted name in the world of premium custom-made furniture across the UAE. Established in 2000, our journey has been built on a foundation of craftsmanship, quality, and customer trust.</p>
      
      <p class="about-text">We operate 3 elegant showrooms in Dubai, Sharjah, and Abu Dhabi, supported by two production facilities and 300+ skilled professionals.</p>

      <div class="about-stats">
        <div class="about-stat">
          <div class="about-stat-num">26+</div>
          <div class="about-stat-label">Years Experience</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-num">3</div>
          <div class="about-stat-label">UAE Showrooms</div>
        </div>
        <div class="about-stat">
          <div class="about-stat-num">300+</div>
          <div class="about-stat-label">Professionals</div>
        </div>
      </div>

      <div class="about-cta">
        <a href="about" class="btn-primary">Read Our Story</a>
        <a href="tel:+971559132200" class="about-phone">
          <div class="about-phone-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="#000" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
          </div>
          <div>
            <span style="font-size:0.65rem; color:var(--gold); text-transform:uppercase; letter-spacing:1px; font-weight:bold;">Available 24/7</span>
            <span class="about-phone-num">+971 55 913 2200</span>
          </div>
        </a>
      </div>
    </div>

    <div class="about-images">
      <div class="about-img-container">
          <div class="about-img-main">
            <img src="assets/images/home-page/about-big.avif" 
                 alt="Luxury showroom" 
                 loading="eager" 
                 width="600" 
                 height="750">
          </div>
          <div class="about-img-small">
            <img src="assets/images/home-page/about-small.avif" 
                 alt="Furniture detail" 
                 loading="lazy" 
                 width="300" 
                 height="300">
          </div>
      </div>
    </div>
  </div>
</section>
<!-- about section ends -->
<!-- END: ABOUT SECTION -->


<!-- ============================================================
     COMPONENT: ENHANCE YOUR LIVING SPACE (STATIC FADE IMAGES + CONTENT)
     ============================================================ -->



<!-- enhance section starts      -->
<section id="enhance-section" style="background:#181818; padding: 60px 0 80px 0; overflow:hidden; contain: content;" aria-label="Enhance Your Living Space">
  <style>
    /* Critical CSS - Minimize layout shifts */
    .enhance-wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 40px;
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 80px;
      align-items: center;
    }

    .enhance-image-container {
      position: relative;
      border-radius: 0 50px 0 50px; 
      overflow: hidden;
      aspect-ratio: 4/5;
      background: #121212; /* Placeholder color to reduce CLS */
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      transform: translateZ(0); /* Force GPU layer */
    }

    .enhance-img-animation-trigger {
      width: 100%;
      height: 100%;
      opacity: 0; /* Start hidden to prevent flash of unstyled content */
      animation: ultraFadeIn 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
      will-change: transform, opacity;
    }

    .enhance-img-main {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .enhance-image-container:hover .enhance-img-main {
      transform: scale(1.05);
    }

    @keyframes ultraFadeIn {
      0% {
        opacity: 0;
        transform: translate3d(0, 20px, 0);
        filter: blur(5px);
      }
      100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        filter: blur(0);
      }
    }

    .enhance-image-container::after {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(24, 24, 24, 0.2), transparent);
      pointer-events: none;
    }

    .enhance-lead {
      font-size: 1rem;
      line-height: 1.8;
      color: var(--cream-muted);
      margin-bottom: 32px;
      border-left: 2px solid var(--gold);
      padding-left: 20px;
    }

    .enhance-subsection {
      margin-bottom: 24px;
      transition: transform 0.3s ease;
      will-change: transform;
    }

    .enhance-subsection:hover {
      transform: translate3d(5px, 0, 0);
    }

    .enhance-subsection h3 {
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .enhance-subsection h3::before {
      content: '';
      display: inline-block;
      width: 16px;
      height: 2px;
      background: var(--gold);
      transition: width 0.3s ease;
    }

    .enhance-subsection:hover h3::before {
      width: 25px;
    }

    .enhance-subsection p {
      font-size: 0.88rem;
      line-height: 1.8;
      color: var(--cream-muted);
      padding-left: 28px;
      margin: 0;
    }

    /* Performance: Use Media Queries to adjust aspect ratios to prevent jumping */
    @media (max-width: 991px) {
      #enhance-section { padding: 40px 0 60px 0 !important; }
      .enhance-wrap { grid-template-columns: 1fr; gap: 40px; }
      .enhance-image-container { aspect-ratio: 16/9; order: -1; border-radius: 0 30px 0 30px; }
    }

    @media (max-width: 600px) {
      #enhance-section { padding: 20px 0 50px 0 !important; }
      .enhance-wrap { padding: 0 20px; gap: 30px; }
      .enhance-image-container { aspect-ratio: 4/3; border-radius: 0 20px 0 20px; }
    }
  </style>

  <div class="enhance-wrap">
    <div class="enhance-image-container">
      <div class="enhance-img-animation-trigger">
        <img src="assets/images/home-page/3rd-section-desktop.avif" 
             alt="Luxury home furniture curation" 
             class="enhance-img-main"
             decoding="async"
             width="600" 
             height="750">
      </div>
    </div>

    <div class="enhance-content">
      <div class="section-label">
        <div class="section-label-line"></div>
        <span>Our Collection</span>
      </div>
      
      <h2 class="section-title">Enhance Your Living Space with <em>Style</em> &amp; Customization</h2>
      
      <p class="enhance-lead">At Theyyampattil Furniture, we redefine your home with our curated selection of home furniture in Dubai. From modern and custom pieces to Italian-inspired designs, our collection seamlessly blends with your interior style.</p>

      <div class="enhance-subsection">
        <h3>Custom Made Furniture Solutions in Dubai</h3>
        <p>Revel in the luxury of customization with our range of custom furniture in Dubai. Tailored to your preferences, our furniture adds a personal touch to every corner of your home.</p>
      </div>

      <div class="enhance-subsection">
        <h3>Discover the Finest Luxury Furniture in Dubai</h3>
        <p>Theyyampattil Furniture stands among the elite luxury furniture outlets in the UAE, offering a wide selection of high-quality, Italian home furniture.</p>
      </div>

      <div class="enhance-subsection">
        <h3>Interior Design Excellence in Dubai</h3>
        <p>As a leading luxury furniture store in Dubai, we combine creativity and functionality to ensure a harmonious blend of aesthetics and comfort.</p>
      </div>
    </div>
  </div>
</section>
<!-- enhance section ends -->


<!-- END: ENHANCE SECTION -->


<!-- ============================================================
     COMPONENT: CTA BANNER (Wall Beauty / Contact)
     ============================================================ -->
<!-- contact cta starts -->
<section id="cta-banner" aria-label="Contact for Wall Beauty Solutions">
  <style>
    /* 1. Performance: Use system fonts or display: swap for custom fonts to avoid FOIT */
    :root {
      --gold: #c9a76a;
      --gold-light: #e2c28a;
      --white: #ffffff;
      --glass-bg: rgba(17, 17, 17, 0.8);
      --glass-border: rgba(255, 255, 255, 0.1);
      --accent-glow: rgba(201, 167, 106, 0.15);
    }

    #cta-banner {
      padding: 80px 20px;
      position: relative;
      overflow: hidden;
      /* 2. Optimization: Containment tells the browser this area is independent */
      contain: content; 
      background-color: #0a0a0a; /* Fallback for better LCP */
    }

    /* 3. Performance: Use will-change for heavy blurs to move them to the GPU */
    #cta-banner::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      height: 300px;
      background: var(--gold);
      filter: blur(120px);
      opacity: 0.15;
      z-index: 0;
      pointer-events: none;
      will-change: filter;
    }

    .cta-container {
      max-width: 1100px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .cta-glass-card {
      background: var(--glass-bg);
      /* 4. Critical: Add a fallback background-color for browsers where blur fails */
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid var(--glass-border);
      border-radius: 30px;
      padding: 50px 70px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      /* 5. Optimization: Simplified transition for smoother 60fps rendering */
      transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
    }

    /* 6. Accessibility: Ensure hover states don't cause layout shifts */
    .cta-glass-card:hover {
      transform: translateY(-5px);
      border-color: var(--gold);
      box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.6), 0 0 20px var(--accent-glow);
    }

    .cta-content { flex: 1; }

    .cta-eyebrow {
      font-size: 0.7rem;
      font-weight: 800;
      letter-spacing: 0.4em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 16px;
      display: inline-block;
      padding-bottom: 4px;
      border-bottom: 1px solid var(--gold);
    }

    .cta-headline {
      font-size: clamp(2rem, 5vw, 2.8rem);
      font-weight: 700;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 20px;
      letter-spacing: -0.02em;
    }

    .cta-sub {
      font-size: 1.1rem;
      color: rgba(255, 255, 255, 0.7);
      max-width: 480px;
      line-height: 1.6;
    }

    .cta-actions {
      display: flex;
      flex-direction: column;
      gap: 15px;
      min-width: 280px;
    }

    .cta-phone-btn, .cta-appt-btn {
      /* 7. Optimization: Use aspect-ratio or fixed heights to prevent layout jumps during load */
      min-height: 68px; 
      box-sizing: border-box;
    }

    .cta-phone-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 15px;
      background: var(--gold);
      color: #111;
      padding: 12px 32px;
      border-radius: 16px;
      text-decoration: none;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .cta-phone-btn:hover {
      background: var(--gold-light);
      transform: translateY(-3px);
    }

    /* Use transform for icon to keep it off the main thread */
    .cta-phone-btn svg { transition: transform 0.3s ease; flex-shrink: 0; }
    .cta-phone-btn:hover svg { transform: rotate(-15deg) scale(1.1); }

    .cta-phone-btn span { display: flex; flex-direction: column; line-height: 1.2; text-align: left;}
    .cta-phone-btn small { font-size: 0.65rem; font-weight: 800; text-transform: uppercase; opacity: 0.8; }
    .cta-phone-btn strong { font-size: 1.2rem; font-weight: 800; }

    .cta-appt-btn {
      display: flex; /* Added for alignment */
      align-items: center;
      justify-content: center;
      text-decoration: none;
      padding: 16px 32px;
      border-radius: 16px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--glass-border);
      color: var(--white);
      font-size: 0.9rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      transition: all 0.3s ease;
    }

    .cta-appt-btn:hover {
      background: var(--white);
      color: #111;
    }

    @media (max-width: 1024px) {
      .cta-glass-card { padding: 40px; }
      .cta-actions { min-width: 240px; }
    }

    @media (max-width: 850px) {
      .cta-glass-card {
        flex-direction: column;
        text-align: center;
        padding: 50px 30px;
        gap: 30px;
      }
      .cta-sub { margin: 0 auto; }
      .cta-actions { width: 100%; }
      .cta-phone-btn span { text-align: center; }
    }

    @media (max-width: 480px) {
      #cta-banner { padding: 40px 15px; }
      .cta-glass-card { padding: 40px 20px; border-radius: 24px; }
      .cta-headline { font-size: 1.8rem; }
    }
  </style>

  <div class="cta-container">
    <div class="cta-glass-card">
      <div class="cta-content">
        <span class="cta-eyebrow">Wall Design Solutions</span>
        <h2 class="cta-headline">Elevate Your Space with Wall Beauty</h2>
        <p class="cta-sub">Get a professional cost estimation in minutes. Call us directly or secure your slot online.</p>
      </div>

      <div class="cta-actions">
        <a href="tel:+971559132200" class="cta-phone-btn" aria-label="Call us at +971 55 913 2200">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span>
            <small>Direct Line</small>
            <strong>+971 55 913 2200</strong>
          </span>
        </a>
        <a href="contact" class="cta-appt-btn">Book Appointment</a>
      </div>
    </div>
  </div>
</section>
<!-- contact cta ends -->
<!-- END: CTA BANNER -->



<!-- ============================================================
     COMPONENT: SERVICES GRID
     ============================================================ -->
<!-- services section starts -->
<section id="services-section" style="background: #121212; padding: clamp(60px, 10vw, 120px) 0; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;" aria-label="Our Services">
  <style>
    /* 1. Preconnect/Swap for better LCP */
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;700&display=swap&text=Premium%20Solutions%20Services%20We%27re%20Offering%20Explore%20View%20All');

    :root {
      --gold: #c9a76a;
      --white: #ffffff;
      --card-gap: 30px;
      --font-main: 'Plus Jakarta Sans', sans-serif;
    }

    /* 2. Critical CSS: Set min-height to prevent layout shifts (CLS) */
    .services-wrap { 
      max-width: 1440px; 
      margin: 0 auto; 
      padding: 0 24px;
      contain: content; /* Improves browser paint performance */
    }

    .services-header { 
      margin-bottom: clamp(40px, 6vw, 80px); 
      display: flex; 
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .section-label {
      display: inline-flex;
      align-items: center;
      color: var(--gold);
      text-transform: uppercase;
      letter-spacing: 0.25em;
      font-size: 0.75rem;
      font-weight: 500;
      margin-bottom: 16px;
    }

    .section-title {
      color: var(--white);
      font-size: clamp(2.2rem, 6vw, 3.5rem);
      margin: 0;
      line-height: 1.1;
      font-weight: 700;
      letter-spacing: -0.02em;
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      border: 1px solid rgba(201, 167, 106, 0.5);
      color: var(--gold);
      text-decoration: none;
      font-family: var(--font-main);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      border-radius: 100px;
      transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      position: relative;
      overflow: hidden;
      z-index: 1;
      cursor: pointer;
    }

    .btn-outline.btn-lg {
      padding: 20px 44px;
      font-size: 0.85rem;
    }

    .btn-outline .btn-icon {
      transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .btn-outline:hover {
      color: #000;
      border-color: var(--gold);
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(201, 167, 106, 0.2);
    }

    .btn-outline:hover .btn-icon {
      transform: translateX(5px);
    }

    .btn-outline::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background: var(--gold);
      transition: width 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      z-index: -1;
    }

    .btn-outline:hover::before {
      width: 100%;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: var(--card-gap);
      margin-bottom: 60px;
    }

    .service-card {
      position: relative; 
      overflow: hidden; 
      border-radius: 20px;
      background: #1a1a1a; /* Background color shows while image loads */
      text-decoration: none; 
      display: block;
      aspect-ratio: 1607 / 1828;
      isolation: isolate;
      transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
      will-change: transform; /* Hint for browser hardware acceleration */
    }

    /* 3. Optimized Image Rendering */
    .service-card img {
      width: 100%; 
      height: 100%; 
      object-fit: cover;
      transition: transform 1.2s ease;
      content-visibility: auto; /* Browser optimizes off-screen images */
    }

    .service-card:hover img { 
      transform: scale(1.08); 
    }

    .service-card-overlay {
      position: absolute; 
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 20%, transparent 50%);
      z-index: 1;
      pointer-events: none;
    }

    .service-card-content {
      position: absolute; 
      bottom: 0; 
      left: 0; 
      right: 0; 
      padding: 40px 30px;
      z-index: 2;
      display: flex;
      flex-direction: column-reverse;
      gap: 12px;
    }

    .service-card-name {
      font-size: 1.5rem; 
      font-weight: 700; 
      color: var(--white);
      letter-spacing: -0.01em;
      line-height: 1.3;
      margin: 0;
    }

    .service-card-link {
      display: flex; 
      align-items: center; 
      gap: 10px;
      font-size: 0.65rem; 
      font-weight: 800; 
      letter-spacing: 0.2em;
      text-transform: uppercase; 
      color: var(--gold);
      transition: all 0.4s ease;
    }

    .services-footer {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    @media (min-width: 1024px) {
      .service-card-link { transform: translateY(-15px); opacity: 0; }
      .service-card:hover .service-card-link { opacity: 1; transform: translateY(0); }
      .service-card:hover { transform: translateY(-10px); }
    }

    @media (max-width: 1200px) {
      .services-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 850px) {
      .services-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
      .service-card-link { opacity: 1; transform: none; }
    }

    @media (max-width: 480px) {
      .services-grid { grid-template-columns: 1fr; }
      .section-title { font-size: 2.2rem; }
      .btn-outline { width: 100%; }
    }
  </style>

  <div class="services-wrap">
    <div class="services-header">
      <div class="section-label">Premium Solutions</div>
      <h2 class="section-title">Services We're <span style="color:var(--gold);">Offering</span></h2>
    </div>

    <div class="services-grid">
      <a href="product/modern-tv-wall-unit-uae" class="service-card" aria-label="TV Wall service">
        <img src="assets/images/home-page/tv-wall.avif" alt="TV Wall unit" width="960" height="1280" >
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">TV Wall</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <!-- 5. All other images use LOADING="LAZY" and DECODING="ASYNC" -->
      <a href="product/luxury-bed-panels" class="service-card" aria-label="Bedroom service">
        <img src="assets/images/home-page/bed-room.avif" alt="Bedroom panel" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Bedroom</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/modern-luxury-kitchen-furniture-dubai" class="service-card" aria-label="Kitchen service">
        <img src="assets/images/home-page/kitchen.avif" alt="Kitchen" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Kitchen</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/custom-luxury-walk-in-closets-dubai" class="service-card" aria-label="Closets service">
        <img src="assets/images/home-page/closet.avif" alt="Custom closets" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Closets</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/premium-wall-panels-dubai" class="service-card" aria-label="Wall Panel service">
        <img src="assets/images/home-page/wall-panel.avif" alt="Wall paneling" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Wall Panel</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/luxury-living-room-furniture-dubai" class="service-card" aria-label="Welcome Unit service">
        <img src="assets/images/home-page/welcome-unit.avif" alt="Welcome unit" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Welcome Unit</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
      
      <a href="product/luxury-dressing-rooms-dubai" class="service-card" aria-label="Dressing Room service">
        <img src="assets/images/home-page/dressing-unit.avif" alt="Dressing room design" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Dressing Unit</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>

      <a href="product/modern-doors-uae" class="service-card" aria-label="Modern Door service">
        <img src="assets/images/home-page/modern-door.avif" alt="Modern Door" width="960" height="1280" loading="lazy" decoding="async">
        <div class="service-card-overlay"></div>
        <div class="service-card-content">
          <div class="service-card-name">Modern Door</div>
          <div class="service-card-link">Explore <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </div>
      </a>
    </div>

    <div class="services-footer">
      <a href="products" class="btn-outline btn-lg">
        <span>View All Solutions</span>
        <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13 5L20 12L13 19M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</section>
<!-- services section ends -->
<!-- END: SERVICES SECTION -->



<!-- ============================================================
     COMPONENT: VALUE PROPOSITIONS (Features / USPs)
     ============================================================ -->
<section id="features-section" style="background:#0a0a0a;padding:80px 0;overflow:hidden;contain:content;" aria-label="Our Values">
  <style>
    :root {
      --accent-gold: #c9a76a;
      --glass-bg: rgba(255, 255, 255, 0.03);
      --glass-border: rgba(255, 255, 255, 0.08);
      --text-muted: #a0a0a0;
    }

    .features-wrap {
      max-width: 1300px; margin: 0 auto; padding: 0 25px;
      content-visibility: auto; /* Optimization: Renders only when near viewport */
      contain-intrinsic-size: 1px 500px;
    }

    .features-header { text-align: center; margin-bottom: 60px; }
    
    .section-label {
      text-transform: uppercase; letter-spacing: 0.3em; font-size: 0.7rem;
      color: var(--accent-gold); margin-bottom: 12px; display: block;
    }

    .section-title { 
      font-size: clamp(1.8rem, 5vw, 2.5rem); /* Fluid typography */
      font-weight: 300; color: #fff; letter-spacing: -0.02em; margin: 0;
    }
    .section-title em { font-style: normal; font-weight: 600; color: var(--accent-gold); }

    .features-grid {
      display: grid; 
      grid-template-columns: repeat(5, 1fr); 
      gap: 15px;
      will-change: transform;
    }

    .feature-card {
      position: relative; background: var(--glass-bg);
      border: 1px solid var(--glass-border); border-radius: 20px;
      padding: 40px 20px; text-align: center;
      transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1), background 0.3s ease;
      backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);
      cursor: default;
    }

    /* Hardware acceleration for smoother hover */
    .feature-card:hover {
      transform: translateY(-8px);
      border-color: rgba(201,167,106,0.4);
      background: rgba(255, 255, 255, 0.06);
    }

    .feature-icon-wrapper {
      width: 50px; height: 50px; margin: 0 auto 20px;
      display: flex; align-items: center; justify-content: center;
    }

    .feature-icon-wrapper svg {
      stroke: var(--accent-gold); stroke-width: 1.5px; fill: none;
      width: 100%; height: 100%;
      transition: transform 0.4s ease;
    }

    .feature-card:hover svg { transform: scale(1.1) rotate(3deg); }

    .feature-name {
      font-size: 1rem; font-weight: 600; color: #fff;
      margin-bottom: 10px; letter-spacing: 0.02em;
    }

    .feature-desc {
      font-size: 0.85rem; color: var(--text-muted);
      line-height: 1.6; font-weight: 300;
      text-wrap: balance; /* Prevents awkward single-word lines */
    }

    /* Responsive Grid Logic */
    @media (max-width: 1100px) { .features-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 768px) { .features-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 480px) { 
      .features-grid { grid-template-columns: 1fr; }
      #features-section { padding: 60px 0; }
    }
  </style>

  <!-- SVG Sprite for Performance: Reduces DOM nodes if icons repeat -->
  <svg style="display: none;">
    <symbol id="icon-star" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></symbol>
    <symbol id="icon-design" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></symbol>
    <symbol id="icon-prod" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></symbol>
    <symbol id="icon-shield" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></symbol>
    <symbol id="icon-tool" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></symbol>
  </svg>

  <div class="features-wrap">
    <div class="features-header">
      <span class="section-label">Why Choose Us</span>
      <h2 class="section-title">Our Core <em>Values</em></h2>
    </div>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-star"/></svg></div>
        <div class="feature-name">Customized Elegance</div>
        <div class="feature-desc">We celebrate diversity, equity and inclusion</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-design"/></svg></div>
        <div class="feature-name">Design</div>
        <div class="feature-desc">Made with trust build to last</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-prod"/></svg></div>
        <div class="feature-name">Production</div>
        <div class="feature-desc">Where quality meet innovation</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-shield"/></svg></div>
        <div class="feature-name">Sustainable</div>
        <div class="feature-desc">Luxury with responsibility</div>
      </div>

      <div class="feature-card">
        <div class="feature-icon-wrapper"><svg><use href="#icon-tool"/></svg></div>
        <div class="feature-name">Installation</div>
        <div class="feature-desc">Your vision our expertise</div>
      </div>
    </div>
  </div>
</section>
<!-- END: FEATURES SECTION -->







<!-- ============================================================
     COMPONENT: MISSION & VISION
     ============================================================ -->
<section id="mission-vision-modern" style="background:var(--dark-2, #1a1a1a); padding: 60px 0 100px 0; overflow: hidden; contain: content;" aria-label="Mission and Vision">
  <style>
    :root {
      /* Optimized glass color: slightly more opaque to avoid needing heavy blur filters */
      --glass-bg: rgba(255, 255, 255, 0.05);
      --glass-border: rgba(201, 167, 106, 0.2);
      --card-radius: 24px;
      --gold-gradient: linear-gradient(135deg, #c9a76a, #f1e0ac);
    }

    .mv-container { 
      max-width: 1200px; 
      margin: 0 auto; 
      padding: 0 20px; 
      position: relative;
    }

    .mv-modern-card {
      display: grid;
      grid-template-columns: 1fr 1px 1fr; 
      background: var(--glass-bg);
      border: 1px solid var(--glass-border);
      border-radius: var(--card-radius);
      position: relative;
      /* Optimized shadow: smoother and less complex for the browser to calculate */
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
      width: 100%;
      /* Forces GPU acceleration for smoother rendering */
      transform: translateZ(0);
    }

    .mv-side {
      padding: 60px 50px;
      position: relative;
      /* Using transform for hover instead of background for better performance */
      transition: background 0.3s ease;
      display: flex;
      flex-direction: column;
    }

    .mv-divider {
      background: linear-gradient(to bottom, transparent, var(--glass-border), transparent);
      height: 70%;
      align-self: center;
    }

    .mv-icon-float {
      width: 48px;
      height: 48px;
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--gold-gradient);
      border-radius: 12px;
      flex-shrink: 0;
    }

    .mv-icon-float svg {
      fill: #1a1a1a; /* Hardcoded for speed */
      width: 22px;
      height: 22px;
    }

    .mv-title-main {
      font-size: clamp(1.5rem, 4vw, 2.2rem);
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 20px;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }

    .mv-description {
      font-size: clamp(0.95rem, 2vw, 1rem);
      line-height: 1.7;
      color: var(--cream-muted, #e5e5e5);
      font-weight: 300;
      margin: 0;
    }

    /* Hover State - Only on desktop to save battery/resources on mobile */
    @media (min-width: 1025px) {
      .mv-side:hover {
        background: rgba(201, 167, 106, 0.05);
      }
    }

    @media (max-width: 1024px) {
      .mv-side { padding: 40px 30px; }
      .mv-container { padding: 0 30px; }
    }

    @media (max-width: 768px) {
      .mv-modern-card {
        grid-template-columns: 1fr;
        background: transparent;
        border: none;
        box-shadow: none;
        gap: 20px;
      }
      .mv-divider { display: none; }
      .mv-side {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--card-radius);
        padding: 40px 25px;
      }
      #mission-vision-modern { padding: 40px 0 60px 0; }
    }

    @media (max-width: 480px) {
      .mv-container { padding: 0 15px; }
      .mv-side { padding: 35px 20px; }
    }
  </style>

  <div class="mv-container">
    <div class="mv-modern-card">
      <div class="mv-side">
        <div class="mv-icon-float">
          <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
            <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71L12 2z"/>
          </svg>
        </div>
        <h2 class="mv-title-main">Our Mission</h2>
        <p class="mv-description">
          At Theyyampattil Furniture, our mission is to craft timeless interior solutions that blend elegance, functionality, and precision. We are committed to delivering premium quality, innovative designs, and exceptional craftsmanship that elevate everyday living into a refined experience.
        </p>
      </div>

      <div class="mv-divider"></div>

      <div class="mv-side">
        <div class="mv-icon-float">
          <svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
          </svg>
        </div>
        <h2 class="mv-title-main">Our Vision</h2>
        <p class="mv-description">
          To be recognized as a leading name in luxury interiors across the UAE, setting new standards in design excellence, quality, and customer satisfaction. We envision creating spaces that inspire, impress, and stand the test of time.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- END: MISSION & VISION -->




<!-- ============================================================
     COMPONENT: WHY THEYYAMPATTIL (EXPERIENCE & TRUST)
     ============================================================ -->
<!-- Why Theyyampattil Furniture Section -->
<section class="tp-modern-features">
  <div class="tp-container">
    <h2 class="tp-title">Why <span class="brand-color">Theyyampattil Furniture?</span></h2>
    
    <div class="tp-circle-wrapper">
      <!-- Item 1 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <span class="tp-number">25+</span>
          <div class="tp-content">
            <h3>Years Experience</h3>
            <p>in Custom Furniture</p>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="tp-circle-item accent-glow">
        <div class="tp-circle-inner">
          <span class="tp-number">1000+</span>
          <div class="tp-content">
            <h3>Completed Projects</h3>
            <p>Across UAE</p>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>In-house Design</h3>
            <p>+ Manufacturing</p>
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="tp-circle-item accent-glow">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>Premium Materials</h3>
            <p>& Finishes</p>
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="tp-circle-item">
        <div class="tp-circle-inner">
          <div class="tp-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <div class="tp-content">
            <h3>On-Time Delivery</h3>
            <p>Guarantee</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* 1. Critical Performance Root Variables */
:root {
  --tp-primary: #c9a76a; 
  --tp-bg: #0a0a0a;
  --tp-card-bg: rgba(255, 255, 255, 0.03);
  --tp-text: #ffffff;
  --tp-text-dim: #999999;
  --tp-border: rgba(212, 175, 55, 0.2);
  --ease-out-expo: cubic-bezier(0.19, 1, 0.22, 1);
}

.tp-modern-features {
  background-color: var(--tp-bg);
  padding: 100px 20px;
  /* 2. Added system font fallback to prevent CLS while 'Inter' loads */
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  overflow: hidden;
  /* 3. GPU Acceleration for smoother scrolling/rendering */
  content-visibility: auto;
  contain-intrinsic-size: 1px 500px;
}

.tp-container {
  max-width: 1300px;
  margin: 0 auto;
}

.tp-title {
  color: var(--tp-text);
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 300;
  margin-bottom: 80px;
  text-align: center;
  line-height: 1.2;
}

.tp-title .brand-color {
  color: var(--tp-primary);
  font-weight: 600;
}

.tp-circle-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  /* Improves rendering speed */
  will-change: transform;
}

.tp-circle-item {
  width: 240px;
  height: 240px;
  position: relative;
  /* 4. Use transform only for performance (Avoids Reflow) */
  transition: transform 0.4s var(--ease-out-expo);
}

.tp-circle-inner {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 1px solid var(--tp-border);
  background: var(--tp-card-bg);
  /* 5. Reduced blur intensity for lower-end devices performance */
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
}

.accent-glow .tp-circle-inner {
  box-shadow: 0 0 30px rgba(212, 175, 55, 0.05);
  border-color: rgba(212, 175, 55, 0.4);
}

/* 6. Hover state optimized for GPU */
@media (hover: hover) {
  .tp-circle-item:hover {
    transform: translateY(-10px) scale(1.02);
    z-index: 10;
  }
}

.tp-number {
  font-size: 2.2rem;
  font-weight: 200;
  color: var(--tp-primary);
  margin-bottom: 5px;
  display: block;
}

.tp-icon {
  width: 40px;
  height: 40px;
  color: var(--tp-primary);
  margin-bottom: 10px;
}

.tp-icon svg {
  width: 100%;
  height: 100%;
}

.tp-content h3 {
  color: var(--tp-text);
  font-size: 1rem;
  font-weight: 500;
  margin: 0;
  line-height: 1.2;
}

.tp-content p {
  color: var(--tp-text-dim);
  font-size: 0.8rem;
  margin-top: 5px;
}

/* 7. Advanced Layout Fluidity */
@media (min-width: 1024px) {
  .tp-circle-wrapper { gap: 0; }
  .tp-circle-item { margin: 0 -15px; }
  .tp-circle-item:nth-child(even) {
    transform: translateY(60px);
  }
  /* Adjusted hover to respect the stagger */
  .tp-circle-item:nth-child(even):hover {
    transform: translateY(50px) scale(1.02);
  }
}

@media (max-width: 768px) {
  /* Increased from 200px to 220px for tablets/medium mobile */
  .tp-circle-item { 
    width: 250px; 
    height: 250px; 
    flex: 0 0 250px; /* Prevents circles from squishing into ovals */
  }
  .tp-title { margin-bottom: 40px; }
  .tp-circle-item:nth-child(even) { transform: none; } /* Reset stagger on mobile */
}
@media (max-width: 480px) {
  /* Increased from 160px to 185px for smaller mobile devices */
  .tp-circle-item { 
    width: 200px; 
    height: 200px; 
    flex: 0 0 200px; /* Ensures they stay perfectly round */
  }
  .tp-number { font-size: 2rem; }
  .tp-content h3 { font-size: 0.95rem; }
  .tp-circle-wrapper { gap: 15px; }
}
</style>
<!-- why theyyampattil ends -->




<!-- faq section starts -->
<!-- Optimized FAQ Section -->
<!-- Optimized FAQ Section -->
<section id="faq-section" style="background: #111111; padding: 50px 0 100px 0; font-family: 'Plus Jakarta Sans', sans-serif; content-visibility: auto; contain-intrinsic-size: 1px 500px;">
  <style>
    /* Critical CSS for GTmetrix */
    .faq-container { max-width: 900px; margin: 0 auto; padding: 0 40px; }
    
    .faq-header { text-align: center; margin-bottom: 80px; }
    .faq-pre-title {
      display: block; font-size: 0.7rem; font-weight: 800; text-transform: uppercase;
      letter-spacing: 0.4em; color: #cfa34e; margin-bottom: 15px; opacity: 0.9;
    }
    .faq-main-title {
      font-size: clamp(2rem, 5vw, 2.8rem); font-weight: 300; color: #ffffff;
      letter-spacing: -0.02em; margin: 0;
    }
    .faq-main-title em { font-style: normal; color: #cfa34e; }

    .faq-wrap { border-top: 1px solid rgba(255,255,255,0.08); }
    
    .faq-item {
      border-bottom: 1px solid rgba(255,255,255,0.08);
      transition: background 0.3s ease;
    }
    .faq-item:hover { background: rgba(255,255,255,0.02); }

    .faq-q {
      width: 100%; background: transparent; border: none; cursor: pointer;
      padding: 35px 10px; display: flex; justify-content: space-between; align-items: center;
      gap: 30px; text-align: left; outline: none;
    }
    
    .faq-q-text {
      font-size: 1.1rem; font-weight: 500; color: rgba(255,255,255,0.85);
      letter-spacing: -0.01em; transition: color 0.3s ease, transform 0.3s ease;
    }
    
    /* Hardware accelerated hover */
    .faq-q:hover .faq-q-text { color: #ffffff; transform: translate3d(5px, 0, 0); }

    .faq-trigger {
      position: relative; width: 32px; height: 32px; 
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .faq-trigger::before, .faq-trigger::after {
      content: ''; position: absolute; background: #cfa34e; 
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    }
    .faq-trigger::before { width: 16px; height: 1.5px; }
    .faq-trigger::after { width: 1.5px; height: 16px; }

    /* Expanded States */
    .faq-q[aria-expanded="true"] .faq-trigger::after { transform: rotate(90deg); opacity: 0; }
    .faq-q[aria-expanded="true"] .faq-trigger::before { transform: rotate(180deg); }
    .faq-q[aria-expanded="true"] .faq-q-text { color: #cfa34e; }

    /* Performance optimized transition */
    .faq-a { 
      max-height: 0; 
      overflow: hidden; 
      transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1); 
      will-change: max-height;
    }
    .faq-a-inner { 
      padding: 0 72px 35px 10px; font-size: 1rem; line-height: 1.8; 
      color: rgba(255,255,255,0.5); font-weight: 300; 
    }

    @media (max-width: 768px) {
      .faq-container { padding: 0 25px; }
      .faq-q { padding: 25px 0; }
      .faq-q-text { font-size: 1rem; }
      .faq-a-inner { padding-right: 10px; }
    }
  </style>

  <div class="faq-container">
    <header class="faq-header">
      <span class="faq-pre-title">Customer Support</span>
      <h2 class="faq-main-title">Frequently Asked <em>Questions</em></h2>
    </header>

    <div class="faq-wrap">
      <!-- Item 1 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-1" onclick="toggleFaq(this)">
          <span class="faq-q-text">Can I customize the color and fabric of bedroom furniture?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-1" class="faq-a" role="region">
          <div class="faq-a-inner">
            Absolutely! Our bedroom furniture is available in various colors and fabrics, allowing you to tailor it to your preferences.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-2" onclick="toggleFaq(this)">
          <span class="faq-q-text">How long does it take to create custom furniture?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-2" class="faq-a" role="region">
          <div class="faq-a-inner">
            The timeline for custom furniture varies based on the complexity of the design. Our team will provide you with a detailed timeframe during the consultation.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-3" onclick="toggleFaq(this)">
          <span class="faq-q-text">Do you offer installation services for wall accents?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-3" class="faq-a" role="region">
          <div class="faq-a-inner">
            Yes, we provide professional installation services to showcase your premium wall accents perfectly in your home.
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-4" onclick="toggleFaq(this)">
          <span class="faq-q-text">What sets your luxury home furniture apart from others?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-4" class="faq-a" role="region">
          <div class="faq-a-inner">
            Our furniture stands out due to its uncompromising quality, customization options, and diverse range of exquisite designs that cater to various tastes.
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="faq-item">
        <button class="faq-q" aria-expanded="false" aria-controls="faq-a-5" onclick="toggleFaq(this)">
          <span class="faq-q-text">Is there a showroom where I can view the furniture in person?</span>
          <div class="faq-trigger"></div>
        </button>
        <div id="faq-a-5" class="faq-a" role="region">
          <div class="faq-a-inner">
            Visit our showroom in Abu Dhabi, Dubai, and Sharjah, where you can experience the luxury and craftsmanship of our furniture firsthand.
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    /**
     * Optimized Toggle Function
     * Uses requestAnimationFrame for smoother performance
     */
    function toggleFaq(btn) {
      const isExpanded = btn.getAttribute('aria-expanded') === 'true';
      const allBtns = document.querySelectorAll('.faq-q');
      
      // Close others first (Optional: remove this loop if you want multiple items open)
      allBtns.forEach(otherBtn => {
        if (otherBtn !== btn && otherBtn.getAttribute('aria-expanded') === 'true') {
          otherBtn.setAttribute('aria-expanded', 'false');
          otherBtn.nextElementSibling.style.maxHeight = '0';
        }
      });

      // Toggle Active State
      const content = btn.nextElementSibling;
      if (!isExpanded) {
        btn.setAttribute('aria-expanded', 'true');
        content.style.maxHeight = content.scrollHeight + "px";
      } else {
        btn.setAttribute('aria-expanded', 'false');
        content.style.maxHeight = '0';
      }
    }
  </script>
</section>
<!-- faq section ends -->


<!-- ============================================================
     COMPONENT: TESTIMONIALS
     ============================================================ -->
<section id="testimonials-section" style="background:var(--dark);padding:80px 0;" aria-label="Customer Testimonials">
  <style>
    :root {
      /* Fallbacks if variables aren't defined in your main CSS */
      --dark: #0f0f0f;
      --dark-3: #1a1a1a;
      --border: rgba(255,255,255,0.1);
      --border-hover: #c9a76a;
      --gold: #c9a76a;
      --white: #ffffff;
      --cream-muted: #d1d1d1;
    }

    .testimonials-wrap {
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 60px;
      position: relative;
    }

    .testimonials-header { text-align: center; margin-bottom: 50px; }

    .testimonials-overflow {
      overflow: hidden;
      padding: 15px 0;
      /* Ensures container has height before JS runs to prevent CLS */
      min-height: 300px; 
    }

    .testimonials-track {
      display: flex;
      gap: 24px;
      align-items: flex-start;
      transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
      /* Use translate3d for GPU acceleration */
      transform: translate3d(0, 0, 0);
      will-change: transform;
    }

    /* PREVENT CLS: Define widths via CSS media queries instead of waiting for JS */
    .testimonial-card {
      flex: 0 0 100%; /* Mobile default */
      background: var(--dark-3);
      border: 1px solid var(--border);
      border-radius: 4px;
      padding: 30px 25px;
      position: relative;
      transition: border-color 0.3s, transform 0.3s;
      display: flex;
      flex-direction: column;
      min-height: 250px;
      box-sizing: border-box;
    }

    @media (min-width: 601px) { .testimonial-card { flex: 0 0 calc(50% - 12px); } }
    @media (min-width: 901px) { .testimonial-card { flex: 0 0 calc(33.333% - 16px); } }

    .testimonial-card:hover { border-color: var(--border-hover); transform: translateY(-4px); }

    .testimonial-card::before {
      content: '\201C';
      position: absolute;
      top: 10px; right: 20px;
      font-size: 5rem; line-height: 1;
      color: rgba(201,167,106,0.1);
      font-family: Georgia, serif;
      pointer-events: none;
    }

    .testimonial-stars { display: flex; gap: 4px; margin-bottom: 15px; }
    .testimonial-stars span { color: var(--gold); font-size: 0.85rem; }

    .testimonial-text {
      font-size: 0.88rem; line-height: 1.6;
      color: var(--cream-muted);
      margin-bottom: 10px;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
    }

    .testimonial-text.expanded { -webkit-line-clamp: unset; display: block; margin-bottom: 20px; }

    .read-more-btn {
      background: none; border: none; color: var(--gold);
      font-size: 0.7rem; font-weight: 700; cursor: pointer;
      padding: 0; margin-bottom: 15px; text-transform: uppercase;
      letter-spacing: 1px; display: none; text-align: left;
    }

    .testimonial-author {
      display: flex; align-items: center; gap: 12px; margin-top: auto;
      padding-top: 15px; border-top: 1px solid rgba(255,255,255,0.05);
    }

    .testimonial-avatar {
      width: 40px; height: 40px; border-radius: 50%; overflow: hidden;
      border: 1px solid var(--gold); flex-shrink: 0;
      background: #222; /* Placeholder color */
    }
    .testimonial-avatar img { width: 100%; height: 100%; object-fit: cover; }
    .testimonial-name { font-size: 0.8rem; font-weight: 700; color: var(--white); }

    .tst-arrow {
      position: absolute; top: 50%; transform: translateY(-50%);
      background: var(--dark-3); border: 1px solid var(--border);
      color: var(--white); width: 40px; height: 40px; border-radius: 50%;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: all 0.3s; z-index: 10;
    }
    .tst-arrow:hover { background: var(--gold); border-color: var(--gold); color: var(--dark); }
    .tst-arrow.prev { left: 8px; }
    .tst-arrow.next { right: 8px; }

    @media (min-width: 1360px) {
      .tst-arrow.prev { left: -50px; }
      .tst-arrow.next { right: -50px; }
    }

    .testimonials-nav { display: flex; justify-content: center; gap: 8px; margin-top: 30px; }
    .tst-dot {
      width: 20px; height: 2px; background: rgba(255,255,255,0.15);
      border: none; cursor: pointer; transition: all 0.3s; padding: 0;
    }
    .tst-dot.active { background: var(--gold); width: 35px; }

    @media (max-width: 900px) { .testimonials-wrap { padding: 0 52px; } }
    @media (max-width: 600px) {
      .testimonials-wrap { padding: 0 44px; }
      .tst-arrow { width: 32px; height: 32px; }
    }
  </style>

  <div class="testimonials-wrap">
    <div class="testimonials-header">
      <h2 class="section-title" style="color:var(--white);text-align:center;">What Our <em>Customers</em> Say</h2>
    </div>

    <button class="tst-arrow prev" id="tstPrev" aria-label="Previous Page">&#10094;</button>
    <button class="tst-arrow next" id="tstNext" aria-label="Next Page">&#10095;</button>

    <div class="testimonials-overflow" id="testimonialsOverflow">
      <div class="testimonials-track" id="testimonialsTrack">
        
        <!-- Card Template -->
        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"The designs are great and they are professional in making the best finishing. I really like their work and commitment to every project."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar">
              <!-- Optimized Image: Added width/height and loading=lazy -->
              <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Mana Al Doubi" width="40" height="40" loading="lazy">
            </div>
            <div class="testimonial-name">Mana Al Doubi</div>
          </div>
        </div>

        <!-- Repeat for other cards (keep your content same) -->
        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"I highly recommend them for Home Decorating. Product quality is outstanding and the staff is highly skilled. Many thanks to Mr. Faisal for his help."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Salwa Darwish" width="40" height="40" loading="lazy"></div>
            <div class="testimonial-name">Salwa Darwish</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"They converted my home from A to Z with incredible care. A special thank you to Abdul Raouf for ensuring every detail of our vision was perfect."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Rashed Moh" width="40" height="40" loading="lazy"></div>
            <div class="testimonial-name">Rashed Moh</div>
          </div>
        </div>
        
       <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Very good experience; they deliver exactly what they promise. The photos they showed me were an exact match to the high-quality execution."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Tariq Selah"></div>
            <div class="testimonial-name">Tariq Selah</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"One of the strongest companies for high-quality bedroom interiors. Their team is highly professional, genuinely kind, and a pleasure to work with."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Aisha Ahmed"></div>
            <div class="testimonial-name">Aisha Ahmed</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Great experience with their store. They made my dressing table and wardrobe with excellent quality and professional handling from start to finish."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="asma alowais"></div>
            <div class="testimonial-name">asma alowais</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"One of the best companies for design and execution. Special thanks to Engineer Junair for his exceptional skills and excellent customer service."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Ali AL Nuaimi"></div>
            <div class="testimonial-name">Ali AL Nuaimi</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"Incredible work and creativity. A special thank you to Midhun, whose attention to detail and commitment made the entire experience truly exceptional."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Mahmood Al Nasser"></div>
            <div class="testimonial-name">Mahmood Al Nasser</div>
          </div>
        </div>

        <div class="testimonial-card">
          <div class="testimonial-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p class="testimonial-text">"شركة قمة في العمل ومعاملة الموظفين ممتازة وعملهم ممتاز. انصح بالتعامل معهم لنتائجهم الرائعة واحترافيتهم العالية في التنفيذ."</p>
          <button class="read-more-btn">Read More</button>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><img src="assets/images/testimonial/testimonial-1-1.jpg" alt="Fayez Alshamsi"></div>
            <div class="testimonial-name">Fayez Alshamsi</div>
          </div>
        </div>

      </div>
    </div>
    <div class="testimonials-nav" id="testimonialsNav" role="tablist" aria-label="Testimonial navigation"></div>
  </div>

  <script>
  (function () {
    'use strict';
    const track = document.getElementById('testimonialsTrack');
    const overflow = document.getElementById('testimonialsOverflow');
    const navEl = document.getElementById('testimonialsNav');
    const btnPrev = document.getElementById('tstPrev');
    const btnNext = document.getElementById('tstNext');
    const cards = Array.from(track.querySelectorAll('.testimonial-card'));

    const GAP = 24;
    let perView = 3;
    let current = 0;
    let pages = 1;
    let autoSlide;

    function updateMetrics() {
      const w = window.innerWidth;
      perView = w < 600 ? 1 : w < 900 ? 2 : 3;
      pages = Math.ceil(cards.length / perView);
    }

    function goTo(n) {
      if (n < 0) n = pages - 1;
      if (n >= pages) n = 0;
      current = n;

      const cardW = cards[0].offsetWidth;
      const slideAmt = (cardW + GAP) * perView * current;

      // Use translate3d for better performance (A grade friendly)
      track.style.transform = `translate3d(-${slideAmt}px, 0, 0)`;

      const dots = navEl.querySelectorAll('.tst-dot');
      dots.forEach((d, i) => d.classList.toggle('active', i === current));
    }

    function buildDots() {
      navEl.innerHTML = '';
      if (pages <= 1) return;
      const fragment = document.createDocumentFragment();
      for (let i = 0; i < pages; i++) {
        const d = document.createElement('button');
        d.className = 'tst-dot' + (i === 0 ? ' active' : '');
        d.setAttribute('aria-label', 'Go to page ' + (i + 1));
        d.onclick = () => { stopAuto(); goTo(i); startAuto(); };
        fragment.appendChild(d);
      }
      navEl.appendChild(fragment);
    }

    function startAuto() {
      stopAuto();
      autoSlide = setInterval(() => goTo(current + 1), 6000);
    }
    function stopAuto() { clearInterval(autoSlide); }

    // Init Logic
    function init() {
      updateMetrics();
      buildDots();
      
      // Setup Read More logic
      cards.forEach(card => {
        const text = card.querySelector('.testimonial-text');
        const btn = card.querySelector('.read-more-btn');
        if (text.scrollHeight > text.clientHeight + 2) {
          btn.style.display = 'block';
        }
        btn.onclick = () => {
          const expanded = text.classList.toggle('expanded');
          btn.textContent = expanded ? 'Read Less' : 'Read More';
          goTo(current); 
        };
      });
    }

    // Event Listeners
    window.addEventListener('resize', () => {
      updateMetrics();
      buildDots();
      goTo(current);
    }, { passive: true });

    btnPrev.onclick = () => { stopAuto(); goTo(current - 1); startAuto(); };
    btnNext.onclick = () => { stopAuto(); goTo(current + 1); startAuto(); };

    // Swiping
    let touchStartX = 0;
    overflow.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].clientX;
      stopAuto();
    }, { passive: true });

    overflow.addEventListener('touchend', (e) => {
      const diff = touchStartX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) goTo(current + (diff > 0 ? 1 : -1));
      startAuto();
    }, { passive: true });

    // Performance: Start only when visible
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        init();
        startAuto();
        observer.disconnect();
      }
    }, { threshold: 0.1 });

    observer.observe(overflow);
  })();
  </script>
</section>
<!-- END: TESTIMONIALS -->


<!-- Footer -->
<?php include 'includes/footer.php'; ?>



<!-- Floating Buttons -->
<?php include 'includes/fixed-floating-buttons.php'; ?>




<!-- ============================================================
     COMPONENT: SCROLL TO TOP BUTTON
     ============================================================ -->
<button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Scroll to top" style="
  position:fixed; bottom:50px; left:20px; z-index:900;
  width:38px; height:38px; background:rgba(15,15,15,0.9);
  border:1px solid var(--border); border-radius:50%; cursor:pointer;
  display:flex; align-items:center; justify-content:center;
  opacity:0; visibility:hidden; transition:opacity 0.3s, visibility 0.3s, transform 0.2s;
  box-shadow: 0 2px 12px rgba(0,0,0,0.4);
">
  <svg width="14" height="14" fill="none" stroke="var(--gold)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M18 15l-6-6-6 6"/></svg>
  <script>
    (function(){
      var btn = document.getElementById('scrollTop');
      window.addEventListener('scroll', function(){
        var show = window.scrollY > 400;
        btn.style.opacity = show ? '1' : '0';
        btn.style.visibility = show ? 'visible' : 'hidden';
      }, {passive:true});
    })();
  </script>
</button>
<!-- END: SCROLL TO TOP -->

</body>
</html>