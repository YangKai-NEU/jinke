<html>
	<head>
		<title></title>
		<style type="text/css">
			.loading-spinner {
			  background: #FCFCFC;
			  position:absolute;
			  left:50%;
			  top:250px; 
			  width: 150px;
			  height: 100px;
			  line-height: 100px;
			  padding: 20px;
			  text-align: center;
			  font-size: 10px;
			}
			.loading-spinner > div {
			  background-color: #67CF22;
			  height: 100%;
			  width: 6px;
			  display: inline-block;
			   
			  -webkit-animation: stretchdelay 1.2s infinite ease-in-out;
			  animation: stretchdelay 1.2s infinite ease-in-out;
			}
			 
			.loading-spinner .rect2 {
			  -webkit-animation-delay: -1.1s;
			  animation-delay: -1.1s;
			}
			 
			.loading-spinner .rect3 {
			  -webkit-animation-delay: -1.0s;
			  animation-delay: -1.0s;
			}
			 
			.loading-spinner .rect4 {
			  -webkit-animation-delay: -0.9s;
			  animation-delay: -0.9s;
			}
			 
			.loading-spinner .rect5 {
			  -webkit-animation-delay: -0.8s;
			  animation-delay: -0.8s;
			}
			 
			@-webkit-keyframes stretchdelay {
			  0%, 40%, 100% { -webkit-transform: scaleY(0.4) } 
			  20% { -webkit-transform: scaleY(1.0) }
			}
			 
			@keyframes stretchdelay {
			  0%, 40%, 100% {
			    transform: scaleY(0.4);
			    -webkit-transform: scaleY(0.4);
			  }  20% {
			    transform: scaleY(1.0);
			    -webkit-transform: scaleY(1.0);
			  }
			}
		</style>
	</head>
	<body>
		<div class="loading-spinner" id="loading-spinner">
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		</div>
	</body>
</html>