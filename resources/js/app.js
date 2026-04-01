import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
/* =========================
   COUNTER
========================= */
function formatNumberID(value) {
    return new Intl.NumberFormat('id-ID').format(value);
}

function animateCounter(element) {
    const target = parseInt(element.dataset.target || '0', 10);
    const suffix = element.dataset.suffix || '';
    const duration = 1600;

    let startTimestamp = null;
    let hasAnimated = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting || hasAnimated) return;

            hasAnimated = true;

            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * target);

                element.textContent = formatNumberID(current) + suffix;

                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    element.textContent = formatNumberID(target) + suffix;
                }
            };

            window.requestAnimationFrame(step);
            observer.unobserve(element);
        });
    }, { threshold: 0.35 });

    observer.observe(element);
}

/* =========================
   MAP SVG
========================= */
function createRegionBadge(name) {
    return `<span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-slate-700 ring-1 ring-slate-200">${name}</span>`;
}

function initImpactMap() {
    const data = window.senandungMapData;
    if (!data) return;

    const mapTitle = document.getElementById('map-title');
    const infoTitle = document.getElementById('info-title');
    const infoDescription = document.getElementById('info-description');
    const infoList = document.getElementById('info-list');
    const backButton = document.getElementById('map-back-button');
    const jatengView = document.getElementById('jateng-map-view');
    const tegalView = document.getElementById('tegal-map-view');
    const tooltip = document.getElementById('map-tooltip');

    const jatengIntegrated = data.jatengIntegrated || [];
    const tegalImpacted = data.tegalImpacted || [];
    const tegalComingSoon = data.tegalComingSoon || [];

    function showTooltip(event, text) {
        if (!tooltip) return;
        tooltip.textContent = text;
        tooltip.classList.remove('hidden');

        const rect = tooltip.parentElement.getBoundingClientRect();
        tooltip.style.left = `${event.clientX - rect.left}px`;
        tooltip.style.top = `${event.clientY - rect.top - 12}px`;
    }

    function moveTooltip(event) {
        if (!tooltip || tooltip.classList.contains('hidden')) return;
        const rect = tooltip.parentElement.getBoundingClientRect();
        tooltip.style.left = `${event.clientX - rect.left}px`;
        tooltip.style.top = `${event.clientY - rect.top - 12}px`;
    }

    function hideTooltip() {
        tooltip?.classList.add('hidden');
    }

    function resetJatengPanel() {
        mapTitle.textContent = 'Peta Jawa Tengah';
        infoTitle.textContent = 'Jawa Tengah';
        infoDescription.innerHTML =
            'Hover pada wilayah untuk melihat detail. Klik <span class="font-semibold text-slate-900">Kabupaten Tegal</span> untuk masuk ke tampilan kecamatan.';
        infoList.innerHTML = jatengIntegrated.map(createRegionBadge).join('');

        backButton.classList.add('hidden');

        jatengView.classList.remove('hidden');
        jatengView.classList.add('flex');

        tegalView.classList.add('hidden');
        tegalView.classList.remove('flex');
    }

    function resetTegalPanel() {
        mapTitle.textContent = 'Kabupaten Tegal • Tingkat Kecamatan';
        infoTitle.textContent = 'Kabupaten Tegal';
        infoDescription.innerHTML =
            'Sebaran kecamatan terdampak dan coming soon di Kabupaten Tegal.';
        infoList.innerHTML = [...tegalImpacted, ...tegalComingSoon]
            .map(createRegionBadge)
            .join('');

        backButton.classList.remove('hidden');

        jatengView.classList.add('hidden');
        jatengView.classList.remove('flex');

        tegalView.classList.remove('hidden');
        tegalView.classList.add('flex');
    }

    function openTegalMap() {
        hideTooltip();
        resetTegalPanel();
    }

    document.querySelectorAll('#jateng-map-view .region').forEach((region) => {
        const name = (region.dataset.name || '').trim();

        region.style.pointerEvents = 'auto';
        region.style.cursor = 'pointer';

        region.addEventListener('mouseenter', (event) => {
            const isIntegrated = jatengIntegrated.includes(name);

            showTooltip(event, name || 'Wilayah');

            infoTitle.textContent = name || 'Wilayah';
            infoDescription.innerHTML = isIntegrated
                ? 'Wilayah ini sudah <span class="font-semibold text-sky-600">terintegrasi</span> dalam ekosistem Senandung Asa.'
                : 'Wilayah ini belum ditandai sebagai area terintegrasi pada peta utama.';
            infoList.innerHTML = createRegionBadge(name || 'Wilayah');
        });

        region.addEventListener('mousemove', moveTooltip);

        region.addEventListener('mouseleave', () => {
            hideTooltip();
            resetJatengPanel();
        });

        region.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            if (name.toLowerCase().includes('tegal')) {
                openTegalMap();
            }
        });
    });

    document.querySelectorAll('#tegal-map-view .district').forEach((district) => {
        const name = (district.dataset.name || '').trim();

        district.style.pointerEvents = 'auto';
        district.style.cursor = 'pointer';

        district.addEventListener('mouseenter', (event) => {
            showTooltip(event, name || 'Kecamatan');

            infoTitle.textContent = name || 'Kecamatan';

            if (tegalImpacted.includes(name)) {
                infoDescription.innerHTML =
                    'Kecamatan ini berstatus <span class="font-semibold text-emerald-600">terdampak</span> dalam ekosistem Senandung Asa.';
            } else if (tegalComingSoon.includes(name)) {
                infoDescription.innerHTML =
                    'Kecamatan ini berstatus <span class="font-semibold text-slate-500">coming soon</span>.';
            } else {
                infoDescription.innerHTML =
                    'Kecamatan ini berada dalam fokus keberdampakan Kabupaten Tegal.';
            }

            infoList.innerHTML = createRegionBadge(name || 'Kecamatan');
        });

        district.addEventListener('mousemove', moveTooltip);

        district.addEventListener('mouseleave', () => {
            hideTooltip();
            resetTegalPanel();
        });
    });

    backButton?.addEventListener('click', (event) => {
        event.preventDefault();
        resetJatengPanel();
    });

    resetJatengPanel();
}



/* =========================
   FAQ ACCORDION
========================= */
function initFAQ() {
    const items = document.querySelectorAll('.faq-item');
    if (!items.length) return;

    items.forEach((item) => {
        const button = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = item.querySelector('.faq-icon-svg');

        button.addEventListener('click', () => {
            const isOpen = item.classList.contains('is-open');

            items.forEach((otherItem) => {
                const otherAnswer = otherItem.querySelector('.faq-answer');
                const otherIcon = otherItem.querySelector('.faq-icon-svg');
                const otherButton = otherItem.querySelector('.faq-question');

                otherItem.classList.remove('is-open');
                otherAnswer.style.maxHeight = '0px';
                otherIcon.classList.remove('rotate-45');
                otherButton.setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('is-open');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.classList.add('rotate-45');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
}

/* =========================
   TESTIMONIAL SLIDER
========================= */
function initTestimonials() {
    const track = document.getElementById('testimonial-track');
    if (!track) return;

    const slides = Array.from(document.querySelectorAll('.testimonial-slide'));
    const dots = Array.from(document.querySelectorAll('.testimonial-dot'));

    const prev = document.getElementById('testimonial-prev');
    const next = document.getElementById('testimonial-next');
    const prevMobile = document.getElementById('testimonial-prev-mobile');
    const nextMobile = document.getElementById('testimonial-next-mobile');

    let current = 0;
    let autoSlide;

    function updateSlider() {
        track.style.transform = `translateX(-${current * 100}%)`;

        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-slate-900', index === current);
            dot.classList.toggle('scale-110', index === current);
            dot.classList.toggle('bg-slate-300', index !== current);
        });
    }

    function goToSlide(index) {
        current = (index + slides.length) % slides.length;
        updateSlider();
    }

    function nextSlide() {
        goToSlide(current + 1);
    }

    function prevSlide() {
        goToSlide(current - 1);
    }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlide = setInterval(() => {
            nextSlide();
        }, 5000);
    }

    function stopAutoSlide() {
        if (autoSlide) clearInterval(autoSlide);
    }

    next?.addEventListener('click', () => {
        nextSlide();
        startAutoSlide();
    });

    prev?.addEventListener('click', () => {
        prevSlide();
        startAutoSlide();
    });

    nextMobile?.addEventListener('click', () => {
        nextSlide();
        startAutoSlide();
    });

    prevMobile?.addEventListener('click', () => {
        prevSlide();
        startAutoSlide();
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            startAutoSlide();
        });
    });

    track.addEventListener('mouseenter', stopAutoSlide);
    track.addEventListener('mouseleave', startAutoSlide);

    updateSlider();
    startAutoSlide();
}

/* =========================
   NAVBAR DROPDOWN
========================= */
function initNavbarDropdown() {
    const dropdown = document.getElementById('home-dropdown');
    const button = document.getElementById('home-dropdown-button');
    const menu = document.getElementById('home-dropdown-menu');
    const icon = document.getElementById('home-dropdown-icon');

    if (!dropdown || !button || !menu || !icon) return;

    function openMenu() {
        menu.classList.remove('invisible', 'opacity-0', 'translate-y-2');
        menu.classList.add('visible', 'opacity-100', 'translate-y-0');
        icon.classList.add('rotate-180');
    }

    function closeMenu() {
        menu.classList.add('invisible', 'opacity-0', 'translate-y-2');
        menu.classList.remove('visible', 'opacity-100', 'translate-y-0');
        icon.classList.remove('rotate-180');
    }

    let isOpen = false;

    button.addEventListener('click', (e) => {
        e.preventDefault();
        isOpen = !isOpen;

        if (isOpen) {
            openMenu();
        } else {
            closeMenu();
        }
    });

    document.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            isOpen = false;
            closeMenu();
        }
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            isOpen = false;
            closeMenu();
        });
    });
}

/* =========================
   SCROLL TO TOP
========================= */
function initScrollToTop() {
    const button = document.getElementById('scroll-to-top');
    if (!button) return;

    function toggleButton() {
        if (window.scrollY > 500) {
            button.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
            button.classList.add('opacity-100', 'translate-y-0');
        } else {
            button.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
            button.classList.remove('opacity-100', 'translate-y-0');
        }
    }

    window.addEventListener('scroll', toggleButton);

    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });

    toggleButton();
}

/* =========================
   MOBILE MENU
========================= */
function initMobileMenu() {
    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    if (!button || !menu) return;

    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
        });
    });
}
/* =========================
   INIT
========================= */
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-counter]').forEach((el) => animateCounter(el));
    initImpactMap();
    initFAQ();
    initTestimonials();
    initNavbarDropdown();
    initScrollToTop();
    initMobileMenu();

    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
        delay: 0,
    });
});