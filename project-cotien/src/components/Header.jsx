import React from 'react'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import './Header.css'

function Header({ onToggleSideBar }) {
  return (
    <>
      <header className="Header d-flex align-items-center justify-content-between">
        <div className="filter text-black fw-bold">
          <i onClick={onToggleSideBar} className="bi bi-filter"></i>
        </div>
        <div className="Header_Logo d-flex align-items-center flex-grow-1">
          <img src="/image/logo.png" alt="Logo" />
        </div>

        <div className="Header_Items d-flex align-items-center">
          <div className="Header_Bell position-relative mx-1 mx-md-2">
            <i className="bi bi-bell-fill fs-6"></i>
          </div>
          <div className="Header_Admin mx-1 mx-md-2">
            <i className="bi bi-person-check-fill fs-6"></i>
            <span className="Header_Admin_Name d-none d-md-inline ms-1">
              Admin
            </span>
          </div>
          <div className="Header_Logout mx-1 mx-md-2">
            <i className="bi bi-box-arrow-right fs-6"></i>
            <span className="Header_Admin_Name d-none d-md-inline ms-1">
              Logout
            </span>
          </div>
        </div>
      </header>
    </>
  )
}

export default Header
