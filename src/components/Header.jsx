import React from 'react'
import 'bootstrap-icons/font/bootstrap-icons.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import './Header.css'

function Header({ onToggleSideBar }) {
  return (
    <>
      <div className="row Header d-flex align-items-center justify-content-between ">
        {/* Menu Toggle */}
        <div
          className=" col-1 col-md-2 filter text-white fw-bold "
          role="button"
          aria-label="Toggle Sidebar"
        >
          <i onClick={onToggleSideBar} className="bi bi-list"></i>
        </div>

        {/* Logo */}
        <div className="col-1 col-md-6 Header_Logo d-flex align-items-center">
          <img src="/image/logo.png" alt="Cotien Logo" />
        </div>

        {/* Header Actions */}

        <div className=" col-7 col-md-4 Header_Items d-flex align-items-center justify-content-end">
          {/* Notifications */}
          <div
            className="Header_Bell position-relative has-notifications"
            aria-label="Notifications (3 unread)"
            role="button"
            tabIndex="0"
            onKeyDown={(e) =>
              e.key === 'Enter' && console.log('Notifications clicked')
            }
          >
            <i className="bi bi-bell-fill"></i>
            <span className="notification-badge urgent">3</span>
            <div className="notification-ping"></div>
          </div>

          {/* User Profile */}
          <div className="Header_Admin" role="button" aria-label="User Profile">
            <i className="bi bi-person-circle"></i>
            <span className="Header_Admin_Name ">Admin</span>
          </div>

          {/* Logout */}
          <div className="Header_Logout" role="button" aria-label="Logout">
            <i className="bi bi-box-arrow-right"></i>
            <span className="Header_Admin_Name ">Logout</span>
          </div>
        </div>
      </div>
    </>
  )
}

export default Header
