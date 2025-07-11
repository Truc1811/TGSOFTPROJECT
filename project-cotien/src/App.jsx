import './App.css'
import Layout from './components/Layout'
import DashboardMenu from './pages/DashboardMenu'
import Dashboard from './pages/DashboardMenu'
import 'bootstrap/dist/css/bootstrap.min.css'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'

function App() {
  return (
    <>
      <Router>
       
          <Layout>
            <Routes>
              <Route path="/" element={<DashboardMenu />} />
              <Route path="/dashboard" element={<Dashboard />} />
            </Routes>
          </Layout>

      </Router>
    </>
  )
}

export default App
