<?php
	error_reporting(E_ALL || ~E_NOTICE);
	class News{
		public $mId=-1;
		public $mTitle="";
		public $mTime="";
		public $mContent="";
		public $mVisited=0;
		
		function __construct($mId = -1, $mTitle = '', $mTime = '', $mContent = '',$mVisited=0) {
			if ($mId != '')
				$this -> mId = $mId;
			if ($mTitle != '')
				$this -> mTitle = $mTitle;
			if ($mTime != '')
				$this -> mTime = $mTime
			if ($mContent != '')
				$this -> mContent = $mContent;
			if ($mVisited != '')
				$this -> mContent = $mVisited;
		}
	}
?>