function scrollCarousel(direction) {
    const container = document.getElementById('carouselList');
    const itemWidth = container.querySelector('.scroll-item').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}

function scrollCarousel_2(direction) {
    const container = document.getElementById('carouselList_2');
    const itemWidth = container.querySelector('.scroll-item-2').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}

function scrollCarousel_3(direction) {
    const container = document.getElementById('carouselList_3');
    const itemWidth = container.querySelector('.scroll-item-3').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}


function scrollCarousel_4(direction) {
    const container = document.getElementById('carouselList_4');
    const itemWidth = container.querySelector('.scroll-item-4').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}


function scrollCarousel_5(direction) {
    const container = document.getElementById('carouselList_5');
    const itemWidth = container.querySelector('.scroll-item-5').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}


function scrollCarousel_6(direction) {
    const container = document.getElementById('carouselList_6');
    const itemWidth = container.querySelector('.scroll-item-6').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}

function scrollCarousel_3_thang_toi_thieu(direction) {
    const container = document.getElementById('carouselList_7');
    const itemWidth = container.querySelector('.scroll-item_7').offsetWidth + 16; // 16px là khoảng cách giữa các item (gap)
    container.scrollBy({
        left: direction * itemWidth,
        behavior: 'smooth'
    });
}

function changeCount(id, delta) {
    const input = document.getElementById(id);
    let value = parseInt(input.value);
    value = Math.max(0, value + delta);
    input.value = value;
}

function updateDropdown() {
    const adults = document.getElementById('adults').value;
    const children = document.getElementById('children').value;
    const rooms = document.getElementById('rooms').value;

    const button = document.getElementById('dropdownGuestRoom');
    button.textContent = `${adults} người lớn · ${children} trẻ em · ${rooms} phòng`;

    // Tự động đóng dropdown
    const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('dropdownGuestRoom'));
    if (dropdown) dropdown.hide();
}

const toggle = document.getElementById('darkModeToggle');
toggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});