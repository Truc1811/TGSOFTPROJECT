import React from 'react'
import './CategoryList.css'
function ServiceList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Danh sách thuế suất</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Thu phí khoản vay</span>
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

export default ServiceList
