import React from 'react'
import './CategoryList.css'
function ArticlesList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh mục nhóm bài viết</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh sách nhóm bài viết</span>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default ArticlesList
