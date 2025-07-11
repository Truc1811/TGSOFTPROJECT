import React from 'react'
import './CategoryList.css'
function ReportList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Báo cáo khoản vay</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Báo cáo đầu tư</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Báo cáo khách hàng</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Báo cáo công việc</span>
            </li>
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Sao kê giao dịch</span>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default ReportList
