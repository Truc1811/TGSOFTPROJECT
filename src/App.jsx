import './App.css'
import Layout from './components/Layout'
import DashboardMenu from './pages/DashboardMenu'
import Dashboard from './pages/DashboardMenu'
import 'bootstrap/dist/css/bootstrap.min.css'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import MyInvestment from './pages/MyInvestment'
import MyInvestment2 from './pages/MyInvesment2'

function App() {
  return (
    <>
      <Router>
        <Layout>
          <Routes>
            <Route path="/" element={<DashboardMenu />} />
            <Route path="/khoandautucuatoi" element={<MyInvestment />} />
            <Route path="/duancuatoi" element={<MyInvestment2 />} />
          </Routes>
        </Layout>
      </Router>
    </>
  )
}

export default App
