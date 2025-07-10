<?php
class logingoogle extends Controller{
	
	
	function __construct(){
		//$this->usermodel=parent::model('usermodel');
	}

	function chao(){
		/***
	     *
	     * TRANG ĐĂNG NHẬP VỚI GOOGLE CLIENT
	     *
	     ***/
		
	    $client = new Google_Client();

	    $redirecturi = "https://kienthucblockchain.net/van.php";  // URL này được Google chuyển hướng, khi người dùng đồng ý

	    $client->setRedirectUri($redirecturi);

	    // Khai báo xin các quyền truy cập: lấy email, tên, ID người dùng ...
	    // Tham khảo các quyền khác Scope: https://developers.google.com/identity/protocols/googlescopes
	    $client->addScope([
	        'https://www.googleapis.com/auth/plus.login',
	        'https://www.googleapis.com/auth/userinfo.email'
	    ]);



	    //Set param google API
	    $client->setClientId('169635764830-4m07puom1bajemqghhet9fe3ueglod93.apps.googleusercontent.com');
	    $client->setClientSecret('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');
	    $client->setAccessType('offline');

	    //Đây là URL đến Google, bạn cần mở nếu chưa đăng nhập
	    $auth_url = $client->createAuthUrl();


	    if (isset($_SESSION['access_token']) && $_SESSION['access_token'])
	    {
	        /*
	         * Đã đăng nhập trước rồi do tồn tại access_token trong Session
	         * Nên bạn không cần xác thực từ Google nữa mà chỉ việc lấy thông tin
	         */

	        $name=$this->getinfo($client);
	        // setcookie('hoivien',$name, time()+86400, "/","", 0);
	        // header("location:".$this->dm);
	    }
	    else
	    {
	        /**
	         * Nếu tồn tại $_GET['code'] trên URL có nghĩa là Google vừa gửi Code truy cập tới cho bạn, bạn cần lấy thông
	         * tin này để truy cập.
	         */
	        if (isset($_GET['code'])) {
	            $client->fetchAccessTokenWithAuthCode($_GET['code']);
	            //Lấy mã Token và lưu lại tại SESSION
	            $_SESSION['access_token'] = $client->getAccessToken();
	            // getinfo($client);
	            $name=$this->getinfo($client);
	            // setcookie('hoivien',$name, time()+86400, "/","", 0);
	            // header("location:".$this->dm);
	        }
	        else
	        {
	            //Chuyển hướng sang Google để lấy xác thực
	            $auth_url = $client->createAuthUrl();
	            header("Location: $auth_url");
	            die();
	        }
	    }
	}

	function getinfo($client) {

        $client->setAccessToken($_SESSION['access_token']);
        $plus = new Google_Service_Plus($client);

        if ($client->isAccessTokenExpired()) {
            //Truy cập bị hết hạn, cần xác thực lại
            //Chuyển hướng sang Google để lấy xác thực
            $auth_url = $client->createAuthUrl();
            header("Location: $auth_url");
            die();
        }


        //Lấy các thông tin của User
        $me = $plus->people->get('me');
        $id    = @$me['id'];                    //ID
        $email = @$me['emails'][0]['value'];    //Địa chỉ email
        $name  = @$me['displayName'];           //Tên
        $image = @$me['image']['url'];          //Url của ảnh avatar

        // var_dump($id, $email, $name);
        

        /***
            Đến đây bạn đã có $email, $id, $name ... từ tài khoản Google của người dùng
            Từ thông tin này bạn cho phép đăng nhập (xác thực, đăng ký ...) trên website của bạn
            mà không cần thiết phải yêu cầu nhập các thông tin khác (password, xác thực email ...)

        ***/
            var_dump($id, $email, $name);

    }
	
	
	
}
?>