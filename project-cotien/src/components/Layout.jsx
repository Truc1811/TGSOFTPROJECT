import React from 'react'
import Header from './Header'
import SideBar from './SideBar'
import { useState } from 'react'

function Layout({ children }) {
  const [isSideBarOpen, setIsSideBarOpen] = useState(false)
  const toggleSideBar = () => {
    setIsSideBarOpen(!isSideBarOpen)
  }
  return (
    <>
      <Header onToggleSideBar={toggleSideBar} />
      <SideBar isOpen={isSideBarOpen} />
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
