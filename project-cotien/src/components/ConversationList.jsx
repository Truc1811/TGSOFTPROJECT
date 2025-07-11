import React from 'react'
import './CategoryList.css'
function ConversationsList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh mục hỏi đáp</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh sách hỏi đáp</span>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default ConversationsList
