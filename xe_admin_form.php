<?php
// declare constants for generic use and for checking to avoid a direct call from the Web
define('__XE__',   TRUE);

// require the necessary configuration files
require dirname(__FILE__) . '/config/config.inc.php';
?><!DOCTYPE html>
<html lang="ko">
<head>
<!-- META -->
<meta charset="utf-8">
<meta name="Generator" content="XpressEngine">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- TITLE -->
<title>XE Admin Login Form</title>
<!-- CSS -->
<link rel="stylesheet" href="/common/css/xe.min.css?20160305231345" />
<link rel="stylesheet" href="/common/js/plugins/ui/jquery-ui.min.css?20160305231345" />
<link rel="stylesheet" href="/modules/member/skins/default/css/member.css?20160305231345" />
<link rel="stylesheet" href="/modules/editor/styles/ckeditor_light/style.css?20160305231345" />
<!-- JS -->
<!--[if lt IE 9]><script src="/common/js/jquery-1.x.min.js?20160305231345"></script>
<![endif]--><!--[if gte IE 9]><!--><script src="/common/js/jquery.min.js?20160305231345"></script>
<!--<![endif]--><script src="/common/js/x.min.js?20160305231345"></script>
<script src="/common/js/xe.min.js?20160305231345"></script>
<script src="/modules/member/skins/default/js/member.js?20160305231345"></script>
<!-- RSS -->
<!-- ICON -->
</head>
<body>
<section class="xm">
    <div class="signin">
    <div class="login-header">
        <h1><i class="icon-user"></i> 로그인</h1>
    </div>
    <div class="login-body">
            <form  action="/xe_admin_login.php" method="post" id="fo_member_login">
            <fieldset>
                <div class="control-group">
                    <input type="text" name="user_id" id="uid" required placeholder="이메일 주소" title="이메일 주소나 아이디" />
                    <input type="password" name="password" id="upw" required placeholder="비밀번호" title="비밀번호" />
                </div>
                <div class="control-group">
                    <label for="keepid_opt">
                        <input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" disabled="disabled" />
                        로그인 유지</label>
                    <input type="submit" value="로그인" class="submit btn btn-inverse" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="login-footer">
        <a href="#" onclick="return false;">ID/PW 찾기</a>
        |
        <a href="#" onclick="return false;">회원가입</a>
    </div>
</div>
</section>
<!-- ETC -->
<div class="wfsr"></div>
</body>
</html>
