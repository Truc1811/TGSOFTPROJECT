<style>
  body {
    background: #f9fafb;
  }

  .chat-wrapper {
    height: 90vh;
    display: flex;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 0 1px #e5e7eb;
  }

  .sidebar {
    width: 300px;
    background-color: #fff;
    border-right: 1px solid #e5e7eb;
    overflow-y: auto;
  }

  .chat-area {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    background-color: #fff;
  }

  .chat-header {
    padding: 16px;
    border-bottom: 1px solid #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .chat-body {
    flex-grow: 1;
    padding: 16px;
    overflow-y: auto;
  }

  .chat-footer {
    padding: 12px 16px;
    border-top: 1px solid #e5e7eb;
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .message-left,
  .message-right {
    max-width: 60%;
    padding: 10px 24px;
    border-radius: 999px;

    margin-bottom: 10px;
  }

  .message-left {
    background-color: #f3f4f6;
    align-self: flex-start;
  }

  .message-right {
    background-color: #7c3aed;
    color: white;
    align-self: flex-end;

    display: flex;
    align-items: center;
    /* căn giữa theo chiều dọc */
    justify-content: center;
    /* căn giữa theo chiều ngang */
    text-align: center;
  }

  .conversation-item:hover {
    background-color: #f3f4f6;
  }

  .conversation-item {
    padding: 12px 6px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .conversation-item .avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .avatar-purple {
    background: #7c3aed;
  }

  .avatar-green {
    background: #10b981;
  }

  .avatar-yellow {
    background: #facc15;
    color: #000;
  }

  .avatar-red {
    background: #ef4444;
  }


  .message-right,
  .message-left {
    position: relative;
    cursor: pointer;
    transition: background 0.2s;
  }

  .message-right:hover,
  .message-left:hover {
    background-color: #ede9fe;
  }

  .tab-item {
    cursor: pointer;
    padding: 4px 5px;
    border-radius: 6px;
  }

  .tab-item.active {
    background-color: #e0e7ff;
    font-weight: bold;
  }
</style>

<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model', '', $model); ?>">

  <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
    <!---- khung -->
    <div class="col-12 col-md-12 d-flex flex-wrap">



      <div class="container py-4">
        <div class="chat-wrapper">

          <!-- Sidebar -->
          <div class="sidebar">
            <div class="p-3 border-bottom d-flex align-items-center justify-content-between">
              <input class="form-control form-control-sm rounded-pill" placeholder="Tìm kiếm cuộc hội thoại..." />
              <button class="btn btn-sm btn-purple ms-2"><i class="bi bi-plus"></i></button>
            </div>

            <div class="py-2 text-muted d-flex gap-3 text-nowrap" id="chatTabs">
              <span class="tab-item active text-dark fw-bold" data-tab="all">Tất cả</span>
              <span class="tab-item" data-tab="unread">Chưa đọc</span>
              <span class="tab-item" data-tab="important">Quan trọng</span>
            </div>


            <!-- Chat List -->
            <div>
              <div class="conversation-item border-bottom" data-id="TI" data-name="Tech Innovation Team" data-avatar="TI" data-color="avatar-purple" data-status="unread">

                <div class="d-flex align-items-center gap-2">
                  <div class="avatar avatar-purple px-3">TI</div>
                  <div>
                    <div class="fw-bold text-dark">Tech Innovation Team</div>
                    <div class="small text-muted">Cảm ơn bạn đã đầu tư vào dự á...</div>
                  </div>
                </div>
                <div class="text-end small">
                  <div>10:30</div>
                  <div><span class="badge bg-primary rounded-pill">2</span></div>
                </div>
              </div>

              <div class="conversation-item border-bottom" data-id="GF" data-name="Green Farm" data-avatar="GF" data-color="avatar-green" data-status="unread">

                <div class="d-flex align-items-center gap-2">
                  <div class="avatar avatar-green">GF</div>
                  <div>
                    <div class="fw-bold text-dark">Green Farm</div>
                    <div class="small text-muted">Hạt giống hữu cơ đã về, dự kiế...</div>
                  </div>
                </div>
              </div>

              <div class="conversation-item border-bottom" data-id="DN" data-name="TS. Nguyễn Văn B" data-avatar="DN" data-color="avatar-yellow" data-status="unread">

                <div class="d-flex align-items-center gap-2">
                  <div class="avatar avatar-yellow">DN</div>
                  <div>
                    <div class="fw-bold text-dark">TS. Nguyễn Văn B</div>
                    <div class="small text-muted">Tôi có một số lời khuyên về ch...</div>
                  </div>
                </div>
                <div><span class="badge bg-danger rounded-pill">1</span></div>
              </div>

            </div>
          </div>

          <!-- Chat Area -->
          <div class="chat-area">
            <div class="chat-header">
              <div class="d-flex align-items-center gap-2">
                <div id="chatAvatar" class="avatar avatar-purple rounded-circle px-2 py-1 text-white fw-bold">TI</div>
                <div>
                  <div id="chatName" class="fw-bold">Tech Innovation Team</div>
                  <div id="chatStatus" class="text-success small">● Đang hoạt động</div>
                </div>
              </div>
              <div class="d-flex gap-2">

                <button class="btn btn-light btn-sm"><i class="bi bi-telephone"></i></button>
                <button class="btn btn-light btn-sm"><i class="bi bi-camera-video"></i></button>
                <button class="btn btn-light btn-sm"><i class="bi bi-info-circle"></i></button>
              </div>
            </div>

            <!-- Chat Body -->
            <div class="chat-body d-flex flex-column" id="chatBody">
              <!-- Tin nhắn mẫu -->
              <div class="message-left" onclick="replyToMessage(this)">Anh có thể xem trước báo cáo này. Nếu có thắc mắc gì, anh cứ hỏi chúng tôi nhé!</div>
              <div class="text-end small text-muted">10:32</div>

              <div class="message-right" onclick="replyToMessage(this)">dfdf</div>
              <div class="text-end small text-muted">18:57</div>
            </div>

            <!-- Chat Footer -->
            <div class="chat-footer">
              <div id="replyBox" class="w-100 mb-2 d-none bg-light p-2 rounded">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="small text-muted">Đang trả lời: <span id="replyContent" class="fst-italic text-dark"></span></div>
                  <button class="btn btn-sm btn-link text-danger" onclick="cancelReply()">Hủy</button>
                </div>
              </div>
              <button class="btn btn-light"><i class="bi bi-image"></i></button>
              <button class="btn btn-light"><i class="bi bi-paperclip"></i></button>
              <button class="btn btn-light"><i class="bi bi-emoji-smile"></i></button>
              <input id="messageInput" class="form-control flex-grow-1 rounded-pill" placeholder="Nhập tin nhắn..." />
              <button class="btn btn-primary" onclick="sendMessage()"><i class="bi bi-send"></i></button>
            </div>
          </div>
          <script>
            let replyingTo = null;

            function replyToMessage(element) {
              replyingTo = element.textContent;
              document.getElementById('replyBox').classList.remove('d-none');
              document.getElementById('replyContent').textContent = replyingTo;
            }

            function cancelReply() {
              replyingTo = null;
              document.getElementById('replyBox').classList.add('d-none');
              document.getElementById('replyContent').textContent = '';
            }

            function sendMessage() {
              const input = document.getElementById("messageInput");
              const chatBody = document.getElementById("chatBody");

              if (input.value.trim() === "") return;

              const wrapper = document.createElement("div");
              wrapper.classList.add("d-flex", "flex-column", "align-self-end");

              if (replyingTo) {
                const reply = document.createElement("div");
                reply.className = "small text-muted fst-italic mb-1";
                reply.textContent = "Trả lời: " + replyingTo;
                wrapper.appendChild(reply);
              }

              const message = document.createElement("div");
              message.className = "message-right";
              message.textContent = input.value;
              message.onclick = () => replyToMessage(message);
              wrapper.appendChild(message);

              const time = document.createElement("div");
              time.className = "text-end small text-muted";
              const now = new Date();
              time.textContent = now.getHours().toString().padStart(2, '0') + ":" + now.getMinutes().toString().padStart(2, '0');
              wrapper.appendChild(time);

              chatBody.appendChild(wrapper);
              chatBody.scrollTop = chatBody.scrollHeight;

              input.value = "";
              cancelReply();

              setTimeout(() => {
                const replyWrapper = document.createElement("div");
                replyWrapper.classList.add("d-flex", "flex-column", "align-self-start");

                const replyMsg = document.createElement("div");
                replyMsg.className = "message-left";
                replyMsg.textContent = "Cảm ơn bạn đã quan tâm. Đội ngũ của chúng tôi sẽ liên hệ với bạn trong vòng 24 giờ";
                replyMsg.onclick = () => replyToMessage(replyMsg);
                replyWrapper.appendChild(replyMsg);

                const replyTime = document.createElement("div");
                replyTime.className = "text-end small text-muted";
                const later = new Date();
                replyTime.textContent = later.getHours().toString().padStart(2, '0') + ":" + later.getMinutes().toString().padStart(2, '0');
                replyWrapper.appendChild(replyTime);

                chatBody.appendChild(replyWrapper);
                chatBody.scrollTop = chatBody.scrollHeight;
              }, 1200);
            }
          </script>

          <script>
            const chatData = {
              "TI": [{
                  from: "left",
                  text: "Anh có thể xem trước báo cáo này."
                },
                {
                  from: "right",
                  text: "dfdf"
                }
              ],
              "GF": [{
                  from: "left",
                  text: "Xin chào Green Farm!"
                },
                {
                  from: "right",
                  text: "Vâng, mình cần thêm thông tin về hạt giống."
                }
              ],
              "DN": [{
                  from: "left",
                  text: "Chào thầy ạ!"
                },
                {
                  from: "right",
                  text: "Em xin ý kiến thầy về đề tài..."
                }
              ]
            };

            document.querySelectorAll(".conversation-item").forEach(item => {
              item.addEventListener("click", function() {
                const id = this.getAttribute("data-id");
                const name = this.getAttribute("data-name");
                const avatar = this.getAttribute("data-avatar");
                const color = this.getAttribute("data-color");

                // 🧠 Cập nhật nội dung phần header chat
                document.getElementById("chatName").textContent = name;
                const avatarDiv = document.getElementById("chatAvatar");
                avatarDiv.textContent = avatar;
                avatarDiv.className = "avatar " + color;

                // 🧠 Hiển thị tin nhắn theo người
                const messages = chatData[id] || [];
                const chatBody = document.getElementById("chatBody");
                chatBody.innerHTML = "";

                messages.forEach(msg => {
                  const msgDiv = document.createElement("div");
                  msgDiv.className = msg.from === "left" ? "message-left" : "message-right";
                  msgDiv.textContent = msg.text;
                  msgDiv.onclick = () => replyToMessage(msgDiv);

                  const timeDiv = document.createElement("div");
                  timeDiv.className = "text-end small text-muted";
                  const now = new Date();
                  timeDiv.textContent = now.getHours().toString().padStart(2, '0') + ":" + now.getMinutes().toString().padStart(2, '0');

                  chatBody.appendChild(msgDiv);
                  chatBody.appendChild(timeDiv);
                });

                chatBody.scrollTop = chatBody.scrollHeight;
              });
            });
          </script>
          <script>
            document.querySelectorAll("#chatTabs .tab-item").forEach(tab => {
              tab.addEventListener("click", function() {
                // Xoá class active khỏi tất cả tab
                document.querySelectorAll("#chatTabs .tab-item").forEach(t => t.classList.remove("active"));
                this.classList.add("active");

                const selectedTab = this.getAttribute("data-tab");
                const conversations = document.querySelectorAll(".conversation-item");

                conversations.forEach(item => {
                  const status = item.getAttribute("data-status") || "all";
                  if (selectedTab === "all" || status === selectedTab) {
                    item.style.display = "flex";
                  } else {
                    item.style.display = "none";
                  }
                });
              });
            });
          </script>

          <script>
            // Gửi tin nhắn khi nhấn Enter
            document.getElementById("messageInput").addEventListener("keydown", function(event) {
              if (event.key === "Enter" && !event.shiftKey) {
                event.preventDefault(); // Ngăn xuống dòng
                sendMessage(); // Gọi hàm gửi tin nhắn
              }
            });
          </script>

        </div>
      </div>
    </div>
    <!-- end khung   -->
  </div>
</form>