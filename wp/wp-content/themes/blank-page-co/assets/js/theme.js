/**
 * Blank Page Co - Theme Scripts
 *
 * @package Blank_Page_Co
 */

(function() {
    'use strict';

    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            navigation.classList.toggle('toggled');
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navigation.contains(e.target) && !menuToggle.contains(e.target)) {
                navigation.classList.remove('toggled');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navigation.classList.contains('toggled')) {
                navigation.classList.remove('toggled');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.focus();
            }
        });
    }

    // Product category filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card[data-category]');

    if (filterButtons.length && productCards.length) {
        filterButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active state
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');

                // Filter products
                productCards.forEach(function(card) {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = '';
                        card.style.opacity = '0';
                        requestAnimationFrame(function() {
                            card.style.transition = 'opacity 0.3s ease';
                            card.style.opacity = '1';
                        });
                    } else {
                        card.style.opacity = '0';
                        setTimeout(function() {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (navigation && navigation.classList.contains('toggled')) {
                    navigation.classList.remove('toggled');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });

    // Add hover shadow effect to product cards
    document.querySelectorAll('.product-card').forEach(function(card) {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translate(-2px, -2px)';
            this.style.boxShadow = '4px 4px 0 0 #1A1A1A';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });

        card.addEventListener('mousedown', function() {
            this.style.transform = 'translate(2px, 2px)';
            this.style.boxShadow = 'none';
        });

        card.addEventListener('mouseup', function() {
            this.style.transform = 'translate(-2px, -2px)';
            this.style.boxShadow = '4px 4px 0 0 #1A1A1A';
        });
    });

    // Add hover effect to buttons
    document.querySelectorAll('.btn').forEach(function(button) {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translate(-1px, -1px)';
            this.style.boxShadow = '2px 2px 0 0 #1A1A1A';
        });

        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
        });

        button.addEventListener('mousedown', function() {
            this.style.transform = 'translate(2px, 2px)';
            this.style.boxShadow = 'none';
        });

        button.addEventListener('mouseup', function() {
            this.style.transform = 'translate(-1px, -1px)';
            this.style.boxShadow = '2px 2px 0 0 #1A1A1A';
        });
    });

})();
