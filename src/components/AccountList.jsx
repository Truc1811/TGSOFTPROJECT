import React from 'react'
import './CategoryList.css'
function AccountList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Nhóm tài khoản</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Tài khoản quản trị</span>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default AccountList
