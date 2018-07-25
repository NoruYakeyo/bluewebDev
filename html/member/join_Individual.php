<!DOCTYPE HTML>
<html  lang="ko">
<head>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Page-Enter" content="blendTrans(Duration=0)" />
	<meta http-equiv="Page-Exit" content="blendTrans(Duration=0)" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	<!-- favicon ================================================== -->
	<link rel="shortcut icon" href="/html/assets/images/favicon.ico">

	<!-- slide ================================================== --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>    
	<script src="/html/assets/js/main_script.js"></script>

    <!-- bootstrapk ================================================== -->    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"><!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"><!-- 부가적인 테마 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script><!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    
    <!-- css ================================================== -->
	<link rel="stylesheet" href="/html/assets/css/common.css">
	<link rel="stylesheet" href="/html/assets/css/style.css">

</head>
<body>

    
    
    
    
    
<!--========== header ==========-->
<header class="header">
<?php
	include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/top.php");
?>
</header>
<!--========== end header ==========-->






<!--==========  effect start ==========-->
<script>
function tooltipOnOff(el){
	if($(el).val() == ""){
		$(el).parent().find('.tooltip').slideDown(300);
	}else{
		$(el).parent().find('.tooltip').slideUp(300);
	}
}

$(function(){
	$(".form-join").find("input[type=text]").keyup(function(){
		tooltipOnOff(this);
	}).focusout(function(){
		tooltipOnOff(this);
	});
});
</script>
<!--==========  effect end ==========-->






<!--========== join_Individual ==========-->
<section class="join-warp">	
	<div class="form-join">




		<!-- join -->
		<div class="form-type">		

			<h2><span>개인사업자</span> 회원가입</h2>
			
			<div class="frm-input">	
				<input type="text" value="" placeholder="성명" class="input-style01">
				<div class="tooltip">임의로 입력시 정보제공에 제한을 받으실 수 있습니다.</div>
			</div>

			<div class="frm-input">
				<input type="text" value="" placeholder="아이디"  class="input-style01"><bR/>
				<div class="tooltip">영문 소문자, 숫자 조합 6~15자로 입력해 주세요.</div>
				<button class="join-btn01">중복확인</button>							
			</div>

			<div class="frm-input">
				<input type="text" value="" placeholder="비밀번호" class="input-style02">
				<input type="text" value="" placeholder="비밀번호 재확인"  class="input-style02">
				<div class="tooltip">6~12를 이내 영문과 숫자 조합(대소문자 구별)</div>
			</div>

			<div class="frm-input">	
				<input type="text" value="" placeholder="휴대폰전화번호" class="input-style05">				
				<div class="tooltip">휴대전화번호를 확인하세요</div>
				<input type="checkbox" value="" name="checkbox" checked="" id="fff" class="checkbox-style01"><label for="fff" class="label-style01"> SMS 수신 여부</label>				
			</div>

			<div class="frm-input">
				<input type="text" value="" placeholder="이메일" class="input-style03"> @
				<select name="" id="" title="이메일 도메인 선택" class="select-style">
					<option value="">메일을 선택해주세요.</option>
					<option value="naver.com">naver.com</option>
					<option value="hanmail.net">hanmail.net</option>
					<option value="nate.com">nate.com</option>
					<option value="daum.net">daum.net</option>
					<option value="gmail.com">gmail.com</option>
					<option value="paran.com">paran.com</option>
					<option value="hotmail.com">hotmail.com</option>
					<option value="-1">직접입력</option>
				</select>		
				<div class="tooltip"> ※ 이메일주소는 아이디찾기, 비밀번호찾기에 활용되는 정보이므로 정확하게 입력해주세요. </div>				
				<input type="checkbox" value="" name="checkbox" checked="" id="ddd" class="checkbox-style01"><label for="ddd" class="label-style02"> 이메일 수신 여부</label>							
			</div>

			<div class="frm-input">		
				<input type="radio" value="" name="radio1" checked="" id="aaa" class="radio-style"><label for="aaa" class="radio-label"> 휴대폰인증</label>
				<input type="radio" value="" name="radio1" id="bbb" class="radio-style"><label for="bbb" class="radio-label"> 이메일인증</label>
				<button class="join-btn02">인증키발급</button>
				<input type="text" value="" placeholder="인증번호" class="input-style04">
				<button class="join-btn03">확인</button>
			</div>
			
			<hr>	

		</div>	
		



		<!-- agreement -->	
		<div class="form-type2">		
			
			<input type="checkbox" value="" name="checkbox" checked="" id="ccc" class="table-style04"><label for="ccc" class="table-style05"> 블루웹 회원 약관에 동의합니다.</label><a href="/html/agreements/agreement_user.php">상세보기</a>
			<bR/>
			<input type="checkbox" value="" name="checkbox" checked="" id="eee" class="table-style04"><label for="eee" class="table-style05"> 개인정보의 수집 및 이용에 동의합니다.</label><a href="/html/member/privacy.php">상세보기</a>
				
			<table>
			<caption>개인정보 수집 및 이용안내</caption>
			<colgroup><col width="34%">
				<col width="33%">
				<col width="33%">
			</colgroup>
			<thead>
				<tr>
					<th>개인정보 수집 항목</th>
					<th>수집 및 이용 목적</th>
					<th>보유 및 이용기간</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>성명, 아이디, 비밀번호,<Br/>전화번호, 이메일 주소</td>
					<td>이용자 식별 및 서비스 이용,<Br/>장애 처리, 정보 안내</td>
					<td>회원탈퇴 후 1년</td>
				</tr>
			</tbody>
			</table>

		</div>


		<!-- btn-->				
		<button class="join-btn04"><a href="/html/member/join_complete.php">회원가입</a></button>				


	</div>
	<p class="join-memo">※ 블루웹은 만 14세 미만 아동의 회원가입을 받지 않습니다.</p>


</section>
<!--========== end join_Individual ==========-->








<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->





</body>
</html>

