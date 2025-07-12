import React from 'react'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import './Header.css'

function Header({ onToggleSideBar }) {
  return (
    <>
      <header className="Header d-flex align-items-center justify-content-between flex-nowrap">
        <div className="filter text-black fw-bold flex-shrink-0 ">
          <i onClick={onToggleSideBar} className="bi bi-filter"></i>
        </div>
        <div className="Header_Logo d-flex align-items-center justify-content-center flex-grow-1 flex-shrink-1 mx-2 mx-md-3">
          <img src="/image/logo.png" alt="Logo" className="img-fluid" />
        </div>

        <div className="Header_Items d-flex align-items-center flex-nowrap flex-shrink-0">
          <div className="Header_Bell position-relative">
            <i className="bi bi-bell-fill"></i>
            <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              3<span className="visually-hidden">unread messages</span>
            </span>
          </div>
          <div className="Header_Admin">
            <i className="bi bi-person-check-fill"></i>
            <span className="Header_Admin_Name d-none d-md-inline ms-1">
              Admin
            </span>
          </div>
          <div className="Header_Logout">
            <i className="bi bi-box-arrow-right"></i>
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
