import React from 'react'
import './CategoryList.css'
function LoanProductList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Thuộc tính sản phẩm</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Phương án trả nợ</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Điều kiện sản phẩm</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Yêu cầu đảm bảo</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Giấy tờ yêu cầu</span>
            </li>

            <li>
              <i class="bi bi-chevron-right"></i>
              <span>Danh mục sản phẩm</span>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default LoanProductList
