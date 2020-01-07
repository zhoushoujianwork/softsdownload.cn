<?php 
$id=$_GET['id'];
include('../php/mysql_connect.php');
$sql_search = "SELECT * FROM softsdown.download where id=$id;";
$mysqli_result = $db->query($sql_search);
$rows_a = [];
while ( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC )) {
	$rows_a[] = $row;
}
$rows=$rows_a['0'];
// var_dump($rows);
// die();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../web.css" media="screen">
	<style type="text/css">
		#message { width: 100%;height: 100%; }
		#message span { width: 100%;height: 100%;color: black;}
		#message .discuss { border: 0px black dashed;background-color: #ccc; margin-top: 5px;border-radius:10px;padding: 5px;}
		#message .discuss span { width: 100%;height: 100%;color: white; }
		.box { display: inline-block;width: 20%;text-align: center;background-color: #ccc;border-radius:10px;border: 1px white solid;}
	</style>
</head>
<body>
	<header class="niA6p _3PSbf">
	  <nav class="_1M8LQ _2xMJp">
	    <div class="_2jZzC">
	      <a class="_2-Pvv _1CBrG" title="Home — Unsplash" href="/">
	        <svg class="_2m4hn" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-labelledby="unsplash-home" aria-hidden="false">
	          <title id="unsplash-home">Unsplash Home</title>
	          <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
	        </svg>
	        <div class="_3nvuJ">
	          <span class="_1Xu6J _22v5L _2svCU">Download</span>
	          <span class="_2TTDP _22v5L xLon9">Softs for everyone</span></div>
	      </a>
	      <div class="_1g2pj _3PSbf">
	        <form class="_2jvJJ mV0BM" data-test="nav-bar-search-form-form" action="/search">
	          <button title="Search Softs" class="_2VoZY _3d86A" type="submit" data-test="nav-bar-search-form-button">
	            <svg class="_2-tlh _1azRR _1mPD6" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	              <path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
	            </svg>
	            <span class="_3cUBZ _2iX7Z">Search</span></button>
	          <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-SEARCH_FORM_INPUT_nav-bar" aria-expanded="false" class="_2ZbDJ">
	            <input type="search" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-SEARCH_FORM_INPUT_nav-bar" class="_3q0cO _3FYu1" name="searchKeyword" placeholder="Search softs to Download" required="" data-test="nav-bar-search-form-input" id="SEARCH_FORM_INPUT_nav-bar" title="Search Softs" autocapitalize="none" spellcheck="false" value="">
	            <div id="react-autowhatever-SEARCH_FORM_INPUT_nav-bar" role="listbox"></div>
	          </div>
	        </form>
	      </div>
	    </div>
	    <div class="_2j1Lb">
			<ul class="_250wZ _2Y-QM _1eXFm">
				<li class="_29OpZ xLon9">
				  <a class="_3t5Ep _1CBrG" href="/collections">馆藏</a></li>
				<li class="_29OpZ xLon9">
				  <a class="_3t5Ep _1CBrG" href="/collections">关于</a></li>
				<li class="_29OpZ xLon9">
				  <a class="_3t5Ep _1CBrG" href="/license">免责声明</a></li>
				<li class="_29OpZ xLon9">
				  <a class="_3t5Ep _1CBrG" href="/collections">更新日志</a></li>
			</ul>
        </div>
	    <div class="aApNa">
	      <div>
	        <div class="_1S7B0 _1XDQr">
	          <button type="button" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo NDx0k _2Xklx">上传<span class="_3LZjN">软件</span></button>
	        </div>
	        <div class="QoLMB">
	          <a href="/login" rel="nofollow" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo _2YZnO NDx0k _2Xklx">Login</a>
	          <a href="https://unsplash.com/join" rel="nofollow" class="_1yvXd _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo TPbmh _2Xklx">Join free</a></div>
	      </div>
	    </div>
	  </nav>
	  <div class="_1g4h6"></div>
	</header>
	<div data-test="collections-route">
		<div class="_2cm4q _2sCnE PrOBO _1CR66">
			<span class="_3K82f _2RmO0 _2svCU">软件介绍</span>
			<div class="_2WEjr _1iWCF _1pgnK _5KnKv">
			  <h1 class="gype5 _1iWCF _27Bp2">共享的软件资源，请自觉维护网络环境。</h1>
			  <h2 class="yA4DS _1iWCF _27Bp2">本站资源属于用户自行上传分享，如果涉及到版权问题，请联系作者删除资源。
			    <!-- -->
			    <a href="/license">softsdownload License</a>.</h2>
			</div>
		</div>
		<!-- theme contax  -->
		<div class="_14IbC _2sCnE PrOBO _1CR66">
			<div class="_2WEjr _1iWCF _1pgnK _5KnKv">
			  <h1 class="gype5 _1iWCF _27Bp2">软件名称：<?php echo $rows['softname'] ?></h1>
			  <h1 class="gype5 _1iWCF _27Bp2">软件适用平台：<?php echo $rows['system'] ?></h1>
			  <h1 class="gype5 _1iWCF _27Bp2">软件上传日期：<?php echo date("Y-m-d h:i:sa",$rows['intime']) ?></h1>
			  <h1 class="gype5 _1iWCF _27Bp2">软件下载次数：<?php echo number_format($rows['amountofdownload']) ?></h1>
			  <h1 class="gype5 _1iWCF _27Bp2">软件失效投票数：<?php echo $rows['lose'] ?></h1>
			  <h1 class="gype5 _1iWCF _27Bp2">软件描述：</h1>
			  <div style="border:0px black dashed;width: 100%;background-color: #ccc">
			  	 <span style="color: #aaa;font-size: 15px;"><?php echo $rows['description'] ?></span>
			  </div>
				<div id="message">
					<h1 class="gype5 _1iWCF _27Bp2">评论区</h1>
					<div>
						<input style="width: 100%;" type="text" name="">
						<button style="width: 120px;height: 40px;margin: 0px auto;">提交</button>
					</div>
					<div class="discuss">
						<span>我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论我是评论</span>
					</div>
					<div style="width: 100%;">
						<div class="box">2019-12-31</div><div class="box">奥利给</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>