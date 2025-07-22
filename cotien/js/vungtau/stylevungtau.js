
//  xử lý kịch bản dữ liệu: click hiển thị tất cả các thông tin và hiện thị các thông tin lại ít khi 
function toggleMore() {
    const content = document.getElementById("more-options");
    const showAllBtn = document.getElementById("show-all-btn");
    const showLessBtn = document.getElementById("show-less-btn");

    if (content.style.display === "none") {
        // Hiện thêm các lựa chọn và ẩn nút "Hiển thị tất cả"
        content.style.display = "block";
        showAllBtn.style.display = "none";
    } else {
        // Ẩn phần thêm và hiện lại nút "Hiển thị tất cả"
        content.style.display = "none";
        showAllBtn.style.display = "block";
    }
}

//  xử lý kịch bản dữ liệu: click hiển thị tất cả các thông tin và hiện thị các thông tin lại ít khi 
function toggleMore_2() {
    const content2 = document.getElementById("more-options_2");
    const showAllBtn2 = document.getElementById("show-all-btn_2");
    const showLessBtn2 = document.getElementById("show-less-btn_2");

    if (content2.style.display === "none") {
        // Hiện thêm các lựa chọn và ẩn nút "Hiển thị tất cả"
        content2.style.display = "block";
        showAllBtn2.style.display = "none";
    } else {
        // Ẩn phần thêm và hiện lại nút "Hiển thị tất cả"
        content2.style.display = "none";
        showAllBtn2.style.display = "block";
    }
}

function loadMore() {
    document.getElementById("more-results-1").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-2").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-4").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-5").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-6").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-7").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn

    document.getElementById("more-results-8").style.display = "block";
    event.target.style.display = "none"; // Ẩn nút sau khi nhấn
}