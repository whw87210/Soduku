<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no" />
	<title>sudoku</title>
	<link rel="Stylesheet" type="text/css" href="sudoku.css" />

</head>

<body style="background-color: yellow; ">
	<h1>Welcome to Sudoku, Enjoy the Game!</h1>
	<p>Player: <?php session_start(); echo $_SESSION['username']; ?></p> 
    <p>Number of Succeed:  </p>
	<p id="p3"></p>
	
  <div class = "btn-group">
		<button class="button button1" onclick = "sd.checkRes();">Finish</button>
		<button class="button button2" onclick = "sd.reset();">Reset</button>
		<button class="button button3" onclick = "sd.again();">Restart</button>
	</div>

	<script
  src="http://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"></script>
	<script src="sudoku.js"></script>
	<script>
		var sd = new SD;
		sd.init(30);
	</script>



	 <script>   
   // ppfz MAR-10 代码：
        function getSucceed(){  //应该按 button1 的时候执行吧
            var xmlHttp;

            if (window.XMLHttpRequest){
              xmlHttp=new XMLHttpRequest(); //for most of the browsers
            }else {
              xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");  // code for IE6, IE5
            }

            xmlHttp.onreadystatechange=function(){
              if (xmlHttp.status==200 && xmlHttp.readyState==4){
                  var result= xmlHttp.responseText;
                  if (result=='false'){
                  }
                  }
            };
   
           // 重点是这句： 调用 getSucceed.php
            xmlHttp.open("GET","getSucceed.php?username=test&succeed=55",true);  //这里实际上应该用变量, 我这里就试验性
            xmlHttp.send();
          
    }
//测试执行下：
        setInterval("getSucceed()",1000);
   
  </script>
		
<a href="logout.php">Log Out</a>

</body>
</html>
