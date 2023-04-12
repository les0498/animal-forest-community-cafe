<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>모여봐요 동물의 숲</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css?after">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
	<div id="main_img_bar">
		<img src="./img/main_image.png?after">
    </div>
   	<div id="board_box">
	    <h3 id="board_title">
	    		 새 글 작성하기 
		</h3>
	    <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">닉네임 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
	    		<li>
				    <span class="col3">
						<select name="category">
						<option value="[공지]">공지</option>
						<option value="[자유게시판]" >자유게시판</option>
						<option value="[팁 게시판]">팁 게시판</option>
						<option value="[그림 게시판]" selected>그림 게시판</option>
						</select>
</span>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='artboard.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<aside>
		<?php include "sidebar.php" ; ?> 
</aside>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
