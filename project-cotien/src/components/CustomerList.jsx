import React from 'react'
import './CategoryList.css'
function CustomerList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Danh sách khách hàng</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Danh sách đen</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Yêu cầu cập nhật tài khoản</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Thu phí gọi vốn đầu tư</span>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default CustomerList
