import React from 'react'
import './CategoryList.css'
function ServicesProductList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh sách dịch vu</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh sách đăng ký</span>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default ServicesProductList
