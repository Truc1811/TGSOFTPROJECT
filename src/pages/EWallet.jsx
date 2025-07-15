


import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faWallet } from '@fortawesome/free-solid-svg-icons'

import './EWallet.css'

const EWallet=()=>{
    return(

  <div className="container-fluid mt-3 p-4">
      <div className="row mt-5 p-2 ">
        <div className="col-12">
            <div className="row bg-primary">
                <div className="col-12 col-md-1 text-center fs-4 my-2">
                    
                <FontAwesomeIcon icon={faWallet} style={{ color:'white' }} />
                </div>
                <div className="col-12 col-md-9 text-white">
                    <div>Số dư ví chính</div>
                    <div className="text-white fs-4">9.300.000  VND </div>
                </div>
                <div classNme="d-flex justif-content-between ">
                    <button>Nạp tiền</button>
                    <button>Rút tiền</button>
                    <button>API</button>
                </div>
            </div> 
        </div>
      </div>
    </div>
    )

}

export default EWallet