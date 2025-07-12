import React from 'react'
import Category from './Category'
import './SideBar.css'

function SideBar({ isOpen }) {
  console.log('SideBar isOpen:', isOpen)
  return (
    <div className={`sideBar ${isOpen ? 'open' : 'closed'}`}>
      <Category />
    </div>
  )
}

export default SideBar
