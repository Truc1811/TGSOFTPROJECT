<style>
    .chat-box {
        background-color: white;
    }

    .message {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
    }

    .message.user {
        flex-direction: row-reverse;
    }

    .avatar {
        font-size: 20px;
        margin: 0 8px;
    }

    .text {
        padding: 8px 12px;
        border-radius: 12px;
        border: 1px solid #ddd;
        max-width: 75%;
    }

    .user .text {
        text-align: right;
    }
</style>
<h4 class="mt-2">Nguyễn Văn Nam</h4>

<div class="chat-box mt-4 p-4">
    <div class="message user">
        <div class="avatar">👤</div>
        <div class="text">Chào bạn, mình muốn đặt một chuyến du lịch Đà Nẵng vào cuối tuần này.
        </div>
    </div>
    <div class="message agent">
        <div class="avatar">🧑‍💼</div>
        <div class="text">Chào bạn! Bạn muốn đi mấy ngày và xuất phát từ đâu ạ?</div>
    </div>
    <div class="message user">
        <div class="avatar">👤</div>
        <div class="text">Mình muốn đi 3 ngày 2 đêm, xuất phát từ TP.HCM.</div>
    </div>
    <div class="message agent">
        <div class="avatar">🧑‍💼</div>
        <div class="text">Dạ có! Bên mình có tour 3N2Đ khởi hành thứ 6 tuần này, bao gồm vé máy bay,
            khách sạn và ăn uống.</div>
    </div>
    <div class="message user">
        <div class="avatar">👤</div>
        <div class="text">Tuyệt! Giá tour là bao nhiêu vậy?</div>
    </div>
    <div class="message agent">
        <div class="avatar">🧑‍💼</div>
        <div class="text">Giá trọn gói là 4.200.000đ/người. Bạn cần đặt cho bao nhiêu người ạ?</div>
    </div>
</div>