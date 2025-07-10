function scrollCarousel(direction) {
    const container = document.getElementById('carouselList');
    const itemWidth = container.querySelector('.scroll-item').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}
