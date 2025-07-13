
let selectedMonths = [];

function selectMonth(element) {
    const month = element.getAttribute('data-month');

    // Nếu đã chọn thì bỏ chọn
    if (selectedMonths.includes(month)) {
        selectedMonths = selectedMonths.filter(m => m !== month);
        element.classList.remove('bg-info', 'text-white');
    }
    // Nếu chưa chọn và còn dưới 3 tháng thì thêm
    else if (selectedMonths.length < 3) {
        selectedMonths.push(month);
        element.classList.add('bg-info', 'text-white');
    }
    // Nếu đã đủ 3 tháng thì cảnh báo
    else {
        alert("Chỉ được chọn tối đa 3 tháng.");
    }

    // Cập nhật trạng thái nút
    const chooseButton = document.getElementById("chooseButton");
    const submitButton = document.getElementById("submitButton");
    if (selectedMonths.length > 0) {
        chooseButton.disabled = false;
        submitButton.disabled = false;
    } else {
        chooseButton.disabled = true;
        submitButton.disabled = true;
    }

    console.log("Các tháng đã chọn:", selectedMonths);
}

