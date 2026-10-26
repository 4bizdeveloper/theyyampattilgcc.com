<?php
/**
 * Home Page Popup Component
 * Displays a popup 5 seconds after page load with a 3D flip animation.
 * Responsive images: desktop, tablet, mobile with exact aspect ratios.
 */
?>
<div id="homePromoPopup"
     class="home-popup-overlay"
     role="dialog"
     aria-modal="true"
     aria-label="Promotional offer"
     aria-hidden="true"
     style="display:none;">
    <div class="home-popup-box" role="document">

        <!-- Close button -->
        <button type="button" class="home-popup-close" aria-label="Close popup">&times;</button>

        <!-- Responsive Image Frame -->
        <div class="home-popup-img-wrapper">
            <picture>
                <!-- Desktop (991px and up) - 1536 x 1024 -->
                <source media="(min-width: 991px)" srcset="assets/images/popup/popup-1-deskto p.png">
                <!-- Tablet (577px to 990px) - 1254 x 1254 -->
                <source media="(min-width: 577px)" srcset="assets/images/popup/popup-1-tablet.png">
                <!-- Mobile (576px and down) - 1122 x 1402 (Fallback) -->
                <img src="assets/images/popup/popup-1-mobile.png"
                     alt="We're Expanding Across the UAE"
                     class="home-popup-image"
                     decoding="async">
            </picture>
        </div>

    </div>
</div>

<style>
    /* ============ OVERLAY ============ */
    .home-popup-overlay {
        position: fixed;
        inset: 0;
        width: 100vw;
        height: 100vh;
        height: 100dvh; 
        background: rgba(8, 8, 8, 0.85);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: clamp(12px, 3vw, 32px);
        z-index: 999999;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
        overscroll-behavior: contain;
        /* Perspective for the 3D flip effect */
        perspective: 1500px; 
    }
    .home-popup-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* ============ POPUP BOX ============ */
    .home-popup-box {
        position: relative;
        /* Default to Mobile Width */
        width: min(92vw, 400px);
        max-height: 92vh;
        max-height: 92dvh;
        border-radius: 16px;
        overflow: hidden;
        background: #0f0f0f;
        border: 1px solid rgba(201, 167, 106, 0.4);
        box-shadow:
            0 25px 60px rgba(0, 0, 0, 0.85),
            0 0 0 1px rgba(201, 167, 106, 0.1) inset,
            0 0 40px rgba(201, 167, 106, 0.15);
        display: flex;
        flex-direction: column;
        /* Initial state for CSS fallback */
        transform: rotateY(90deg) scale(0.9);
        opacity: 0;
        will-change: transform, opacity;
        transform-style: preserve-3d;
    }
    .home-popup-overlay.active .home-popup-box {
        transform: rotateY(0deg) scale(1);
        opacity: 1;
        transition:
            transform 0.8s cubic-bezier(0.22, 1, 0.36, 1),
            opacity 0.5s ease;
    }

    /* ============ IMAGE FRAME ============ */
    .home-popup-img-wrapper {
        position: relative;
        width: 100%;
        /* Mobile Aspect Ratio: 1122 / 1402 */
        aspect-ratio: 1122 / 1402;
        max-height: 90vh;
        max-height: 90dvh;
        overflow: hidden;
        background: #111;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home-popup-image {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Fits perfectly without blank areas now that aspect ratios match */
        display: block;
        user-select: none;
        -webkit-user-drag: none;
    }

    /* ============ CLOSE BUTTON ============ */
    .home-popup-close {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        color: #fff;
        font-size: 22px;
        line-height: 1;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 30;
        transition: background 0.25s ease, transform 0.25s ease, color 0.25s ease;
    }
    .home-popup-close:hover,
    .home-popup-close:focus-visible {
        background: #c9a76a;
        color: #000;
        transform: rotate(90deg);
        outline: none;
    }

    /* Prevent scroll behind modal */
    body.home-popup-open {
        overflow: hidden !important;
    }

    /* ============ RESPONSIVE TWEAKS ============ */
    @media (max-width: 576px) {
        .home-popup-close {
            width: 32px;
            height: 32px;
            font-size: 18px;
            top: 10px;
            right: 10px;
        }
    }

    @media (min-width: 577px) {
        .home-popup-box {
            /* Tablet Width */
            width: min(90vw, 650px); 
        }
        .home-popup-img-wrapper {
            /* Tablet Aspect Ratio: 1254 x 1254 (Square) */
            aspect-ratio: 1 / 1;
        }
    }

    @media (min-width: 991px) {
        .home-popup-box {
            /* Desktop Width */
            width: min(95vw, 850px); 
        }
        .home-popup-img-wrapper {
            /* Desktop Aspect Ratio: 1536 x 1024 (3:2) */
            aspect-ratio: 3 / 2;
        }
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .home-popup-overlay,
        .home-popup-box,
        .home-popup-close {
            transition: none !important;
            transform: none !important;
        }
    }
</style>

<!-- GSAP (lightweight, deferred) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>

<script>
(function () {
    'use strict';

    function initPopup() {
        var popup    = document.getElementById('homePromoPopup');
        if (!popup) return;

        var box      = popup.querySelector('.home-popup-box');
        var closeBtn = popup.querySelector('.home-popup-close');
        var hasGSAP  = typeof window.gsap !== 'undefined';
        var isOpen   = false;

        // ---------- Open ----------
        function openPopup() {
            popup.style.display = 'flex';
            document.body.classList.add('home-popup-open');

            // Force reflow so transitions kick in
            void popup.offsetWidth;

            if (hasGSAP) {
                gsap.timeline({
                    defaults: { ease: 'power3.out' }
                })
                .call(function () {
                    popup.classList.add('active');
                    popup.setAttribute('aria-hidden', 'false');
                })
                .fromTo(box,
                    { rotationY: 90, scale: 0.8, opacity: 0 },
                    { 
                        rotationY: 0, 
                        scale: 1, 
                        opacity: 1, 
                        duration: 1.2, 
                        ease: 'expo.out',
                        clearProps: 'transform' // Cleanup inline styles after animation
                    }
                );
            } else {
                // CSS fallback
                setTimeout(function () {
                    popup.classList.add('active');
                    popup.setAttribute('aria-hidden', 'false');
                }, 60);
            }

            isOpen = true;
            document.addEventListener('keydown', onKeyDown);
        }

        // ---------- Close ----------
        function closePopup() {
            if (!isOpen) return;
            isOpen = false;
            document.removeEventListener('keydown', onKeyDown);

            popup.classList.remove('active');
            popup.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('home-popup-open');

            if (hasGSAP) {
                gsap.to(box, {
                    rotationY: -90,
                    scale: 0.9,
                    opacity: 0,
                    duration: 0.4,
                    ease: 'power2.in',
                    onComplete: function () {
                        popup.style.display = 'none';
                        // Reset rotation for next open
                        gsap.set(box, { rotationY: 0, scale: 1 }); 
                    }
                });
            } else {
                setTimeout(function () {
                    popup.style.display = 'none';
                }, 320);
            }
        }

        // ---------- Events ----------
        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                closePopup();
            });
        }

        popup.addEventListener('click', function (e) {
            if (e.target === popup) closePopup();
        });

        function onKeyDown(e) {
            if (e.key === 'Escape') closePopup();
        }

        // ---------- Kick off (5 Second Delay) ----------
        setTimeout(function() {
            if (hasGSAP) {
                openPopup();
            } else {
                var waited = 0;
                var timer = setInterval(function () {
                    waited += 50;
                    if (typeof window.gsap !== 'undefined') {
                        clearInterval(timer);
                        hasGSAP = true;
                        openPopup();
                    } else if (waited >= 600) {
                        clearInterval(timer);
                        openPopup(); // CSS fallback
                    }
                }, 50);
            }
        }, 5000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPopup);
    } else {
        initPopup();
    }
})();
</script>