import React from 'react'
import Header from './Header'
import SideBar from './SideBar'
import { useState, useEffect } from 'react'

function Layout({ children }) {
  const [isSideBarOpen, setIsSideBarOpen] = useState(false)
  const [isMobile, setIsMobile] = useState(false)

  // Kiểm tra screen size
  useEffect(() => {
    const checkMobile = () => {
      setIsMobile(window.innerWidth <= 768)
    }

    checkMobile()
    window.addEventListener('resize', checkMobile)

    return () => window.removeEventListener('resize', checkMobile)
  }, [])

  const toggleSideBar = () => {
    setIsSideBarOpen(!isSideBarOpen)
  }

  const closeSideBar = () => {
    setIsSideBarOpen(false)
  }

  return (
    <>
      <Header onToggleSideBar={toggleSideBar} />
      <SideBar isOpen={isSideBarOpen} />

      {/* Backdrop overlay cho mobile */}
      {isMobile && (
        <div
          className={`sidebar-backdrop ${isSideBarOpen ? 'show' : ''}`}
          onClick={closeSideBar}
        />
      )}

      <main
        className={`content ${
          isSideBarOpen ? 'sidebar-open' : 'sidebar-closed'
        }`}
      >
        {children}
      </main>
    </>
  )
}

export default Layout
