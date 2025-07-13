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


<div class="chat-box mb-3">
  <div class="message user">
    <div class="avatar">👤</div>
    <div class="text">Chào bạn, mình muốn đặt phòng khách sạn cho 2 người vào cuối tuần này.</div>
  </div>
  <div class="message agent">
    <div class="avatar">🏨</div>
    <div class="text">Chào bạn! Bạn muốn đặt loại phòng nào và ở khu vực nào ạ?</div>
  </div>
  <div class="message user">
    <div class="avatar">👤</div>
    <div class="text">Mình cần phòng đôi ở gần trung tâm Đà Lạt, check-in ngày 28/06 và check-out ngày 30/06.</div>
  </div>
  <div class="message agent">
    <div class="avatar">🏨</div>
    <div class="text">Dạ bên mình còn phòng đôi Deluxe, giá 1.200.000đ/đêm, bao gồm ăn sáng. Bạn muốn đặt luôn không ạ?</div>
  </div>
  <div class="message user">
    <div class="avatar">👤</div>
    <div class="text">Có chỗ đậu xe không vậy?</div>
  </div>
  <div class="message agent">
    <div class="avatar">🏨</div>
    <div class="text">Dạ có bãi đậu xe miễn phí cho khách lưu trú ạ.</div>
  </div>
  <div class="message user">
    <div class="avatar">👤</div>
    <div class="text">Ok vậy mình đặt phòng đó nha, 2 người lớn, tên khách là Nguyễn Văn A.</div>
  </div>
</div>
