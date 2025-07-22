const tabButtons = document.querySelectorAll('.tab-btn');
const underline = document.getElementById('underline');

function moveUnderline(el) {
    const offsetLeft = el.offsetLeft;
    const width = el.offsetWidth;

    underline.style.width = width + 'px';
    underline.style.left = offsetLeft + 'px';
}

tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        tabButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        moveUnderline(btn);
    });
});

// Khi dropdown hiện ra (Bootstrap event)
const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('shown.bs.dropdown', () => {
    const activeBtn = document.querySelector('.tab-btn.active');
    if (activeBtn) {
        moveUnderline(activeBtn);
    }
});

// Resize vẫn xử lý bình thường
window.addEventListener('resize', () => {
    const activeBtn = document.querySelector('.tab-btn.active');
    if (activeBtn) {
        moveUnderline(activeBtn);
    }
});