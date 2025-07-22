const words = ["nhà", "căn hộ ", "biệt thự", "khách sạn căn hộ ", "nhà nghĩ dưỡng ", "cottage"];
let index = 0;

setInterval(() => {
    index = (index + 1) % words.length;
    document.getElementById("changingWord").textContent = words[index];
}, 3000); // thay đổi mỗi 3 giây
