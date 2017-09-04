<?php
	error_reporting(E_ALL || ~E_NOTICE);
	class User{
		public $mId=-1;
		public $mPhone="";
		public $mUserName="";
		public $mPwd="";
		public $mImgUrl="";
		public $mIsSelf='';
		public $mJifen='';
		public $mLastQianDaoTime='';
		public $mEmail='';
		public $mActive='';
		
		function __construct($mId = -1, $mPhone = '', $mUserName = '', $mPwd = '',$mImgUrl='',
			$mIsSelf='',$mJifen='',$mLastQianDaoTime='',$mEmail='',$mActive='') {
			if ($mId != '')
				$this -> mId = $mId;
			if ($mPhone != '')
				$this -> mPhone = $mPhone;
			if ($mUserName != '')
				$this -> mUserName = $mUserName;
			if ($mPwd != '')
				$this -> mPwd = $mPwd;
			if ($mImgUrl != '')
				$this -> mImgUrl = $mImgUrl;
			if ($mIsSelf != '')
				$this -> mIsSelf = $mIsSelf;
			if ($mJifen != '')
				$this -> mJifen = $mJifen;
			if ($mLastQianDaoTime != '')
				$this -> mLastQianDaoTime = $mLastQianDaoTime;
			if ($mEmail != '')
				$this -> mEmail = $mEmail;
			if ($mActive != '')
				$this -> mActive = $mActive;
		}
	}
?>