import React from 'react'
import { useState } from 'react'
import { Link } from 'react-router-dom'
import './Category.css'
import CategoryList from './CategoryList'
import AccountList from './AccountList'
import CustomerList from './CustomerList'
import LoanList from './LoanList'
import InvestmentList from './InvestmentList'
import Investment2List from './Investment2List'
import WithdrawList from './WithdrawList'
import ServiceList from './ServiceList'
import DebtList from './DebtList'
import ReportList from './ReportList'
import LoanProductList from './LoanProductList'
import ServicesProductList from './ServicesProductList'
import ConversationList from './Conversation'
import ConversationsList from './ConversationList'
import ArticlesList from './ArticlesList'
import ContactList from './ContactList'
import BannerList from './BannerList'
import SEOList from './SEOList'
import ConfigList from './ConfigList'

function Category() {
  // Tạo state riêng cho từng menu
  const [isCategoryOpen, setIsCategoryOpen] = useState(false)
  const [isAccountOpen, setIsAccountOpen] = useState(false)
  const [isOpenCustomer, setIsOpenCustomer] = useState(false)
  const [isOpenLoan, setIsOpenLoan] = useState(false)
  const [isOpenInvestment, setIsOpenInvestment] = useState(false)
  const [isOpenInvestment2, setIsOpenInvestment2] = useState(false)
  const [isOpenWithdraw, setOpenWithdraw] = useState(false)
  const [isOpenService, setIsOpenService] = useState(false)
  const [isOpenDebt, setIsOpenDebt] = useState(false)
  const [isOpenReport, setIsOpenReport] = useState(false)
  const [isOpenLoanProduct, setIsOpenLoanProduct] = useState(false)
  const [isOpenServicesProduct, setIsOpenServicesProduct] = useState(false)
  const [isOpenArticles, setIsOpenArticles] = useState(false)
  const [isOpenConversation, setIsOpenConversation] = useState(false)
  const [isOpenContact, setIsOpenContact] = useState(false)
  const [isOpenBanner, setIsOpenBanner] = useState(false)
  const [isOpenSEO, setIsOpenSEO] = useState(false)
  const [isOpenConfig, setIsOpenConfig] = useState(false)
  // Function toggle riêng cho Danh mục
  const toggleCategory = () => {
    setIsCategoryOpen(!isCategoryOpen)
  }
  // Function toggle account
  const toggleAccount = () => {
    setIsAccountOpen(!isAccountOpen)
  }

  // Function toggle customer
  const toggleCustomer = () => {
    setIsOpenCustomer(!isOpenCustomer)
  }
  // Function toggle  loan
  const toggleLoan = () => {
    setIsOpenLoan(!isOpenLoan)
  }
  // Function toggle investment
  const toggleInvestment = () => {
    setIsOpenInvestment(!isOpenInvestment)
  }
  // Function toggle investment2
  const toggleInvestment2 = () => {
    setIsOpenInvestment2(!isOpenInvestment2)
  }

  const toggleWithdrawal = () => {
    setOpenWithdraw(!isOpenWithdraw)
  }
  // Function toggle service
  const toggleService = () => {
    setIsOpenService(!isOpenService)
  }
  // Function toggle debt
  const toggleDebt = () => {
    setIsOpenDebt(!isOpenDebt)
  }
  // Function toggle report
  const toggleReport = () => {
    setIsOpenReport(!isOpenReport)
  }
  // Function toggle loan product

  const toggleLoanProduct = () => {
    setIsOpenLoanProduct(!isOpenLoanProduct)
  }
  // Function toggle services product
  const toggleServicesProduct = () => {
    setIsOpenServicesProduct(!isOpenServicesProduct)
  }
  // Function toggle articles
  const toggleArticles = () => {
    setIsOpenArticles(!isOpenArticles)
  }
  // Function toggle conversation
  const toggleConversation = () => {
    setIsOpenConversation(!isOpenConversation)
  }

  // Function toggle contact

  const toggleContact = () => {
    setIsOpenContact(!isOpenContact)
  }
  // Function toggle banner
  const toggleBanner = () => {
    setIsOpenBanner(!isOpenBanner)
  }
  // Function toggle SEO
  const toggleSEO = () => {
    setIsOpenSEO(!isOpenSEO)
  }
  // Function toggle config
  const toggleConfig = () => {
    setIsOpenConfig(!isOpenConfig)
  }
  // Trả về giao diện của Category
  return (
    <>
      {/* Menu Danh mục */}

      <div className="Category" onClick={toggleCategory}>
        <Link
          to="/"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
          <i className="bi bi-list"></i>
          <span className="Category_Title">Tổng quan</span>
        </Link>
      </div>

      {isCategoryOpen}

      {/* Menu account  */}
      <div className="Account" onClick={toggleAccount}>
        <Link
          to="/khoandautucuatoi"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
          <i className="bi bi-person-circle"></i>
          <span className="Account_Title">Danh mục đầu tư </span>
          {isAccountOpen}
        </Link>
      </div>
      {isAccountOpen}

      {/* Menu customers */}
      <div className="Customer" onClick={toggleCustomer}>
         <Link
          to="/duancuatoi"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
        <i className="bi bi-people-fill"></i>
        <span className="Customer_Title">Dự án của tôi</span>
        {isOpenCustomer }
        </Link>
      </div>
      {isOpenCustomer }

      {/* Menu investment */}
      <div className="Investment" onClick={toggleInvestment}>
          <Link
          to="/taochiendichgoivon"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
        <i className="bi bi-card-list"></i>
        <span className="Investment_Title">Gọi vốn đầu tư</span>
        {isOpenInvestment }
        </Link>
      </div>
      {isOpenInvestment }
      {/* Menu loan */}
      <div className="Loan" onClick={toggleLoan}>
         <Link
          to="/taochiendichgoivon"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
        <i className="bi bi-card-list"></i>
        <span className="Loan_Title">Tạo chiến dịch gọi vốn</span>
        {isOpenLoan }
        </Link>
      </div>
      {isOpenLoan }

      {/* Menu  investment2 */}
      <div className="Investment2" onClick={toggleInvestment2}>
         <Link
          to="/khamphaduan"
          className="d-flex align-items-center"
          style={{ textDecoration: 'none', color: 'inherit' }}
        >
        <i className="bi bi-currency-exchange"></i>
        <span className="Investment2_Title">Khám phá dự án</span>
         </Link>
        {isOpenInvestment2 }
      </div>
      {isOpenInvestment2 }
      <div className="Withdrawal" onClick={toggleWithdrawal}>
        <i className="bi bi-cash-coin"></i>
        <span className="Withdrawal_Title">Nạp rút tiền</span>
        {isOpenWithdraw }
      </div>
      {isOpenWithdraw }
      <div className="Services" onClick={toggleService}>
        <i className="bi bi-file-earmark-medical"></i>
        <span className="Services_Title">Thu phí dịch vụ</span>
        {isOpenService ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenService && <ServiceList />}

      <div className="Debt" onClick={toggleDebt}>
        <i className="bi bi-bank"></i>
        <span className="Debt_Title">Quản lý thu nợ</span>
        {isOpenDebt ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenDebt && <DebtList />}

      <div className="Report" onClick={toggleReport}>
        <i className="bi bi-boxes"></i>
        <span className="Report_Title">Báo cáo/Sao kê</span>
        {isOpenReport ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenReport && <ReportList />}

      <div className="LoanProduct" onClick={toggleLoanProduct}>
        <i className="bi bi-boxes"></i>
        <span className="LoanProduct_Title">Sản phẩm vay</span>
        {isOpenLoanProduct ? (
          <i className="bi bi-chevron-up"></i>
        ) : (
          <i className="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenLoanProduct && <LoanProductList />}

      <div className="ServicesProduct" onClick={toggleServicesProduct}>
        <i className="bi bi-boxes"></i>
        <span className="ServicesProduct_Title">Dịch vụ</span>
        {isOpenServicesProduct ? (
          <i className="bi bi-chevron-up"></i>
        ) : (
          <i className="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenServicesProduct && <ServicesProductList />}

      <div className="Articles" onClick={toggleArticles}>
        <i className="bi bi-stack"></i>
        <span className="Articles_Title">Nhóm bài viết</span>
        {isOpenArticles ? (
          <i className="bi bi-chevron-up"></i>
        ) : (
          <i className="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenArticles && <ArticlesList />}

      <div className="Conversation" onClick={toggleConversation}>
        <i className="bi bi-cloudy"></i>
        <span className="Conversation_Title">Hỏi đáp</span>
        {isOpenConversation ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenConversation && <ConversationsList />}

      <div className="Contact" onClick={toggleContact}>
        <i className="bi bi-person-lines-fill"></i>
        <span className="Contact_Title">Liên hệ</span>
        {isOpenContact ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenContact && <ContactList />}

      <div className="Banner" onClick={toggleBanner}>
        <i className="bi bi-bookmark-heart-fill"></i>
        <span className="Banner_Title">Banners</span>
        {isOpenBanner ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenBanner && <BannerList />}

      <div className="SEO" onClick={toggleSEO}>
        <i className="bi bi-tags"></i>
        <span className="SEO_Title">SEO</span>
        {isOpenSEO ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenSEO && <SEOList />}

      <div className="Config" onClick={toggleConfig}>
        <i className="bi bi-gear-wide-connected"></i>
        <span className="Config_Title">Cấu hình</span>
        {isOpenConfig ? (
          <i class="bi bi-chevron-up"></i>
        ) : (
          <i class="bi bi-chevron-down"></i>
        )}
      </div>
      {isOpenConfig && <ConfigList />}
    </>
  )
}

export default Category
