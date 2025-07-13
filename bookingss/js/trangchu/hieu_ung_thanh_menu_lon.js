let currentMonth = new Date();

function renderCalendar() {
    const container = document.getElementById('calendarContainer');
    container.innerHTML = '';
    const monthLabel = document.getElementById('monthLabel');
    const monthLabel2 = document.getElementById('monthLabel2');

    let monthsToShow = 2;
    let tempDate = new Date(currentMonth);

    for (let i = 0; i < monthsToShow; i++) {
        const year = tempDate.getFullYear();
        const month = tempDate.getMonth();

        const firstDay = new Date(year, month, 1).getDay(); // day of week
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        let table = `<table class="calendar-table table table-bordered">
          <thead>
            <tr><th colspan="7">${month + 1}/${year}</th></tr>
            <tr><td>T2</td><td>T3</td><td>T4</td><td>T5</td><td>T6</td><td>T7</td><td>CN</td></tr>
          </thead>
          <tbody><tr>`;

        let dayOfWeek = (firstDay + 6) % 7; // Convert Sunday=0 to end of week
        for (let j = 0; j < dayOfWeek; j++) {
            table += "<td></td>";
        }

        for (let d = 1; d <= daysInMonth; d++) {
            if ((dayOfWeek + d - 1) % 7 === 0 && d !== 1) table += "</tr><tr>";
            table += `<td>${d}</td>`;
        }
        table += "</tr></tbody></table>";
        // container.innerHTML += table;
        const wrapper = document.createElement('div');
        wrapper.className = 'calendar-wrapper';
        wrapper.innerHTML = table;
        container.appendChild(wrapper);


        // Tăng tháng lên cho lần lặp tiếp theo
        tempDate.setMonth(tempDate.getMonth() + 1);
    }

    // Hiển thị tháng đầu tiên ở giữa
    const firstMonthLabel = `${currentMonth.getMonth() + 1}/${currentMonth.getFullYear()}`;
    monthLabel.textContent = `Tháng ${firstMonthLabel}`;

    // Tính tháng thứ hai
    const nextMonth = new Date(currentMonth);
    nextMonth.setMonth(nextMonth.getMonth() + 1);
    const secondMonthLabel = `${nextMonth.getMonth() + 1}/${nextMonth.getFullYear()}`;
    monthLabel2.textContent = `Tháng ${secondMonthLabel}`;
}

// Ngăn dropdown đóng khi click bên trong
document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
function prevMonth() {
    currentMonth.setMonth(currentMonth.getMonth() - 1);
    renderCalendar();
}

function nextMonth() {
    currentMonth.setMonth(currentMonth.getMonth() + 1);
    renderCalendar();
}

renderCalendar(); // gọi lần đầu khi trang load
// Ngăn dropdown đóng khi click vào trong lịch
document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});




document.addEventListener("DOMContentLoaded", function () {
    const underline = document.getElementById("underline");
    const buttons = document.querySelectorAll("#calendarTab button");

    buttons.forEach((btn, index) => {
        btn.addEventListener("click", function () {
            underline.style.left = `${index * 50}%`;
        });
    });
});








