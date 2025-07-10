// JavaScript Document
/*
--------chen ckeditor mac dinh-----------------------
<textarea id="ckeditorkhoahoc" name="content" required="required"></textarea>
CKEDITOR.replace('ckeditorkhoahoc');

--------chen ckeditor có chỉnh toolbar-----------------------
<textarea id="ckeditorkhoahoc" name="content" required="required"></textarea>
CKEDITOR.replace('ckeditorkhoahoc', {
                          // Define the toolbar groups as it is a more accessible solution.
                          toolbarGroups: [
                            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
                            { name: 'forms' },
                            '/',
                            
                          ],
                          
                        });

---------Toolbar configuration generated automatically by the editor based on config.toolbarGroups.------
config.toolbar = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
	{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
	'/',
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
	{ name: 'others', items: [ '-' ] },
	{ name: 'about', items: [ 'About' ] }
];

--------- Toolbar groups configuration.------------------------------------
config.toolbarGroups = [
	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
	{ name: 'forms' },
	'/',
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
	{ name: 'links' },
	{ name: 'insert' },
	'/',
	{ name: 'styles' },
	{ name: 'colors' },
	{ name: 'tools' },
	{ name: 'others' },
	{ name: 'about' }
];


-------------coppy text khi click-------------------------
<div onclick="geturl('<?php echo $dm; ?>testonline/test/<?php echo $value->id; ?>')">
    Coppy link test
</div>
function geturl(giatri){
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val(giatri).select();
  document.execCommand("copy");
  $temp.remove();
}

-------------------hiệu ứng menu di dong-----------------------
$(document).ready(function(){
    // hieu ung menu di dong
    // hieu ung menu di dong
    $('.hien').click(function () {
        $(this).toggle();
        $('.an').toggle();
        $('.ddm').animate({
            opacity: 1,
            left:'0%',
            }, 400, 'swing');
            
    });

    
    $('.an').click(function () {
        $(this).toggle();
        $('.hien').toggle();
        $('.ddm').animate({
            opacity: 0,
            left:'-100%',
            }, 400, 'swing');
        $('.ddm2').hide();
        $('.hien_1').show();
        $('.an_1').hide();            
    });

    $('.dd2').click(function () {
        $(this).children('.hien_1').toggle();
        $(this).children('.an_1').toggle();
        $(this).next().slideToggle(400);
            
    });
});


------------------------tắt phím F5---------------
	function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

	$(document).ready(function(){
	     $(document).on("keydown", disableF5);
	});

-------------------------hieu ung scroll---------------------
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100){
				$('#header>div:nth-of-type(3)').css({'position':'fixed','width':'100%','z-index':22});
				$('#header>div:nth-of-type(4)').css({'position':'fixed','width':'100%','z-index':22});
				$('.len_top').show();						
			} else {
				// $('#header>div:nth-of-type(3)').css({'position':'relative','width':'100%','z-index':1});
				//$('#header>div:nth-of-type(4)').css({'position':'relative','width':'100%','z-index':22});
				$('.len_top').hide();
			}
		});
	});

-----------------------------kỹ thuật ajax----------------------
	$(document).ready(function(){
		$('.kiem_tra_trung').keyup(function(){
			var phone=$(this).val(); // lấy giá trị input
			var m=$(this).data('model'); //lấy giá thị arrtribu data trong html( data-model="gái trị" )
			$.post(
					'ajax/kiemtratrung', // URL 
					{'phone' : phone,'m': m},  // Data
					function(kqt){ // Success
						$('.ketquatrung').html(kqt);
					}, 
					'text' // dataTyppe
	   		);
		});
	});

-----------------------------chạy đồng hồ và thực hiện hành động bao nhiêu giây----------------
	var s="<?php echo $_SESSION['tg']; ?>";
	$(document).ready(function () {
	    setInterval(function(){
	        if(s>=0){
	            var a=s;
	            $.post(
	                    'testonline/cp', // URL 
	                    {'a' : a},  // Data
	                    function(kqt){ // Success
	                        //$('.ketquatrung').html(kqt);
	                        $('.giay').html(a);
	                        s--;
	                    }, 
	                    'text' // dataTyppe
	            );
	            
	        } else {
	            var url="<?php echo $dm.'testonline/quanly'; ?>";
	            window.location.href=url;
	        }  

	    },1000); 

	});

-------------------------------cảnh báo và ghi nhận thoát trang , chuyển trang và refresh----------------
	window.onbeforeunload = function() { 
        return "Your work will be lost."; 
        var van="<?php $_SESSION['loi']=1; ?>";
    };

-----------------------------hieu ung window trược--------------
	$(".len_top").click(function () {
		$("body,html").animate({scrollTop: 0}, "slow");
	});

--------------------------------kiểm tra trang thái checkbox và chuyển trạng thái checkbox--------------------------------
	$('#checkall').click(function(){
		var check=$('#checkall').is(':checked');
		if(check){
			$('.thecheck').prop('checked',true);
		} else {
			$('.thecheck').prop('checked',false);
		}		
	});

------------------------------------code cấm lưu hình ảnh từ web--------------------------------------------------------
	<script type="text/javascript">
	var  message="";function clickIE() {if (document.all) {(message);return   false;}}function clickNS(e) {if   (document.layers||(document.getElementById&&!document.all)) {if   (e.which==2||e.which==3) {(message);return false;}}}if  (document.layers)   {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new   Function("return false")
	</script>

----------------------------------------code xóa form và check xổ--------------------------------------------------------
	$(document).ready(function(){

		$('.check_xo_xuong').click(function(){
			var so_tag=$(this).data("id");
			var kt_check='#check_input_'+so_tag;
			var kt_xo='#tag_input_'+so_tag;
			var check=$(kt_check).is(':checked');
			if(check){
				$('.dong_lai').slideUp();
				$(kt_xo).slideDown();
			} else {
				$(kt_xo).slideUp();
				
			}		
		});


		$("#xoa_form").click(function(){
			$('#form_xoa')[0].reset();
			alert('Xóa thông tin trên form thành công.');

		});

	});

-----------------------------up hình có sử dụng javascript ----------------------
	$(document).ready(function(){
		var cao_kh=$('.trung').outerHeight();
		$('.trung1').outerHeight(cao_kh);



		// up ảnh
		$('#uphinh').on('change', function() {
		    // var file = $(this)[0].files[0];

		    // var fileReader = new FileReader();
		    // fileReader.onload = function() {
		    //   var str = '<div class="col-md-2">' +
		    //     '<span class="js-file-name"></span><br>' +
		    //     '<span class="js-file-size"></span> (Byte)<br>' +
		    //     '<img class="img-thumbnail js-file-image" style="width: 100%; height: 100%">' +
		    //   '</div>';
		    //   $('.js-file-list').append(str);

		      var tmppath = URL.createObjectURL(event.target.files[0]);
		      console.log(tmppath);
		      // var fileName = file.name;
		      // var fileSize = file.size;
		      var hinh='<img class="w-100" src="' + tmppath + '" />';
		      // $('.js-file-name').text(fileName);
		      // $('.js-file-size').text(fileSize);
		      $('.hienthi').html(hinh);
		});
		    

	});







*/


$(document).ready(function(){
	// hieu ung scroll
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100){
			// $('#header>div:nth-of-type(3)').css({'position':'fixed','width':'100%','z-index':22});
			//$('#header>div:nth-of-type(4)').css({'position':'fixed','width':'100%','z-index':22});
			$('.len_top').show();						
		} else {
			// $('#header>div:nth-of-type(3)').css({'position':'relative','width':'100%','z-index':1});
			//$('#header>div:nth-of-type(4)').css({'position':'relative','width':'100%','z-index':22});
			$('.len_top').hide();
		}
	});
	
	$(".len_top").click(function () {
		$("body,html").animate({scrollTop: 0}, "slow");
	});
	
	// quản lý check all
	// $('#checkall').click(function(){
	// 	var check=$('#checkall').is(':checked');
	// 	if(check){
	// 		$('.thecheck').prop('checked',true);
	// 	} else {
	// 		$('.thecheck').prop('checked',false);
	// 	}		
	// });
	
	//quản lý hiển thị cấp trong danh mục
	// $('#level').change(function(){
	// 	var giatri=$(this).val();
	// 	$.post(
	// 			'ajax/level', // URL 
	// 			{'giatri' : giatri},  // Data
	// 			function(kt){ // Success
	// 				 $('#load_level').html(kt);
	// 			}, 
	// 			'text' // dataTyppe
 //   		);
	// });
	
	//hiệu ứng đăng xuất
    $('.cap_con').hide();
	$(".cap").click(function(){
		$(this).next().slideToggle(400);
	});
	$(".cap_con_1").click(function(){
		$(this).next().slideToggle(400);
	});
	$('.header_2').click(function(){
		$('.dang_xuat').slideToggle(100);
	});
	
	//thêm chi nhánh
	// append() chèn nội dùng vào cuối trong các phần tử chọn
	// prepend() chèn nội dùng vào phần đầu trong phần tử chọn
	// after() chèn nội dùng vào phía sau phần tử chọn
	// before() chèn nội dùng vào phía trước phần tử chọn
	$('.them_chi_nhanh').click(function(){
		$('#khungchinhanh').append('<input type="text" name="chinhanh[]"  class="input_text" autocomplete="off" style="margin-bottom:0.5vw;" />');
	});
	
	//kiểm tra dữ liệu trùng
	$('.kiem_tra_trung').keyup(function(){
		var phone=$(this).val();
		var m=$(this).data('model');
		$.post(
				'ajax/kiemtratrung', // URL 
				{'phone' : phone,'m': m},  // Data
				function(kqt){ // Success
					$('.ketquatrung').html(kqt);
				}, 
				'text' // dataTyppe
   		);
	});

	//load lop quan ly
	$('.load_lop_quanly').click(function(){
		var id=$(this).data('id');
		var ck='#van'+id;
		$.post(
				'ajax/loadlopquanly', // URL 
				{'id': id},  // Data
				function(lql){ // Success
					$(ck).html(lql);
				}, 
				'text' // dataTyppe
   		);
	});

	//fix youtube
	var nyou=$('.kfix_youtube').width();
	var dyou=nyou*315/560;
	$('.fix_youtube').css({"width":nyou,"height":dyou});
	
});

