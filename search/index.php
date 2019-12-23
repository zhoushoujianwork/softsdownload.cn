<?php 
// search info tips
$searchKeyword = $_GET["searchKeyword"];
// echo $searchKeyword;
include('../php/mysql_connect.php');
$sql_search = "select d.*, u.*
					from (select *
							from download 
							where softname like '%$searchKeyword%'
							) d, userinfo u 
					where
					u.username=d.uploader
					order by amountofdownload desc";
$mysqli_result = $db->query($sql_search);
$rows_a = [];
while ( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC )) {
	$rows_a[] = $row;
}
// set the show number
if (count($rows_a) % 3 == 0) {
	$number_foreach = count($rows_a) / 3;
}elseif (count($rows_a) < 3){
	$number_foreach = 1;
}else{
	$number_foreach = count($rows_a) / 3 + 1;
}
if ($number_foreach == 0) {
	$number_foreach = 1;
}
$a = array_chunk($rows_a,$number_foreach,true);

$soft_url = "https://www.baidu.com";
// set  the size for arrange_picture
$size = array('35','66.66','35','66.66','35','66.66');
$pic = array('Adobe_Ae.svg','ADOBE_CH.svg','ADOBE_CO.svg','Adobe_Dw.svg','Adobe_Pl.svg','ADOBE_PR.svg','Adobe_Ps.svg','Adobe.svg','office365.svg','Adobe_Flash_Player.svg'); 

// noresult_buttom
if (count($rows_a) <> 0) {
	$noresult_button = "none";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../web.css" media="screen">
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
	<div data-test="search-route">
		<div class="_3VG_J">
			<div class="_5v3br">
				<!-- kinds -->
				<div class="_1Dmzg">
					<ul class="_2d0kJ _2Y-QM _1eXFm">
					  <li class="_1hkdt">
					    <a aria-current="page" class="qvEaq _1CBrG EfqHf" data-test="search-nav-link-photos" href="/s/photos/dog">
					      <svg class="DhJsa" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
					        <path d="M10.81 18.22l3.71 4.45L19.7 16l6.67 8.89H5.63zM29.33 28V4A1.32 1.32 0 0028 2.67H4A1.32 1.32 0 002.67 4v24A1.32 1.32 0 004 29.33h24A1.32 1.32 0 0029.33 28z"></path>
					      </svg>
					      <span class="_1WMnM xLon9">Softs Result</span>
					      <span class="x543r">&nbsp;
					        <span class="_3ruL8"><?php echo count($rows_a) ?></span></span>
					    </a>
					  </li>
					  <li class="_1hkdt">
					    <a class="qvEaq _1CBrG" data-test="search-nav-link-collections" href="/s/collections/dog">
					      <svg class="DhJsa" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
					        <path d="M.57 9.42c4.76 2.22 9.54 4.46 14.32 6.66a2.28 2.28 0 0 0 2.21 0c4.76-2.18 9.56-4.44 14.28-6.64.27-.13.61-.2.61-.55s-.34-.45-.61-.57c-4.72-2.21-9.58-4.5-14.32-6.7a3.16 3.16 0 0 0-2.06-.02c-4.8 2.22-9.67 4.51-14.45 6.75-.23.11-.55.2-.55.52s.32.44.57.55zm19 .72v-4.14l8.09 2.3-11.66 5.43v-4.73zM31.83 22.71a1.31 1.31 0 0 0-.36-.21c-.83-.39-1.67-.8-2.52-1.18a2.63 2.63 0 0 0-2.29 0l-9.48 4.44a2.61 2.61 0 0 1-2.34 0l-9.51-4.4a2.71 2.71 0 0 0-2.36 0c-.78.38-1.58.75-2.37 1.12-.26.13-.6.2-.6.55s.34.45.59.57c4.74 2.22 9.52 4.46 14.3 6.67a3.57 3.57 0 0 0 1.1.32 3.08 3.08 0 0 0 1.18-.36c4.74-2.19 9.49-4.35 14.19-6.61a2.48 2.48 0 0 0 .47-.27.36.36 0 0 0 0-.64zM.6 16.51c4.73 2.24 9.49 4.44 14.26 6.68a6 6 0 0 0 1.13.3 4 4 0 0 0 1.09-.3c4.8-2.22 9.58-4.44 14.39-6.72a1.62 1.62 0 0 0 .32-.17.39.39 0 0 0 0-.68 2 2 0 0 0-.34-.2l-2.45-1.17a2.54 2.54 0 0 0-2.22 0q-4.83 2.23-9.62 4.5a2.54 2.54 0 0 1-2.22 0c-3.2-1.49-6.4-3-9.56-4.44a2.55 2.55 0 0 0-2.38-.06l-2.38 1.14c-.26.12-.62.19-.62.57s.36.44.6.55z"></path>
					      </svg>
					      <span class="_1WMnM xLon9">Collections</span>
					      <span class="x543r">&nbsp;
					        <span class="_3ruL8">16.6k</span></span>
					    </a>
					  </li>
					  <li class="_1hkdt">
					    <a class="qvEaq _1CBrG" data-test="search-nav-link-users" href="/s/users/dog">
					      <svg class="DhJsa" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
					        <path d="M30.67 22.67v4h-5.34v-4a6.21 6.21 0 00-3.1-5.16c3.68.49 8.44 2.25 8.44 5.16zM12 16a5.34 5.34 0 10-5.33-5.33A5.33 5.33 0 0012 16zm8 0a5.34 5.34 0 000-10.67 5.72 5.72 0 00-1.77.32 8 8 0 010 10A5.44 5.44 0 0020 16zm-8 1.33c-3.56 0-10.67 1.79-10.67 5.34v4h21.34v-4c0-3.55-7.11-5.34-10.67-5.34z"></path>
					      </svg>
					      <span class="_1WMnM xLon9">Users</span>
					      <span class="x543r">&nbsp;
					        <span class="_3ruL8">115</span></span>
					    </a>
					  </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="_2v9nm _2sCnE PrOBO _1CR66">
			<div>
			<h1 class="_1GUcz _2RmO0 _3zWw2 _2Mu9I" data-test="page-header-title"><?php echo $searchKeyword ?></h1>
			<div class="_3NchO _1iWCF _1pgnK _5KnKv"></div>
			<div class="_2xMqe _3hIYZ _3PSbf">
			<div class="_1fgQj">
			  <div class="_2Ru_P" style="height: 42px;">
			  	<!-- recommendations -->
			    <div class="_3b4NQ">
					<div class="R6-Wf">
						<div class="_3sVnM _3TUA0">
						  <div class="x1MBX _1Ta1W _1KGak">
						    <a class="_2634o _1CBrG _1ByhS _2bG1V xLon9" title="More puppy images" href="/s/photos/puppy">puppy</a></div>
						</div>
					</div>
					<div class="R6-Wf">
						<div class="_3sVnM _3TUA0">
						  <div class="x1MBX _1Ta1W _1KGak">
						    <a class="_2634o _1CBrG _1ByhS _2bG1V xLon9" title="More puppy images" href="/s/photos/puppy">puppy</a></div>
						</div>
					</div>
					<div class="R6-Wf">
						<div class="_3sVnM _3TUA0">
						  <div class="x1MBX _1Ta1W _1KGak">
						    <a class="_2634o _1CBrG _1ByhS _2bG1V xLon9" title="More puppy images" href="/s/photos/puppy">puppy</a></div>
						</div>
					</div>
					<div class="R6-Wf">
						<div class="_3sVnM _3TUA0">
						  <div class="x1MBX _1Ta1W _1KGak">
						    <a class="_2634o _1CBrG _1ByhS _2bG1V xLon9" title="More puppy images" href="/s/photos/puppy">puppy</a></div>
						</div>
					</div>
			    </div>
			  </div>
			</div>
			</div>
			</div>
		</div>
		<!-- 搜索结果展示 -->
		<div data-test="search-photos-route" style="display: <?php echo $noresult_button ?>"><div class="_1SdCr"><img alt="No content available" class="_3AIC0" src="/img/noresult.png"></div></div>
		<div data-test="search-photos-route">
			<div class="_14IbC _2sCnE PrOBO _1CR66">
			  <div>
			    <div class="">
					<div class="qztBA _2TNYr _6fYUh" style="--column-gutter:24px;" data-test="masonry-grid-count-three">

						<!-- 1 -->
						<div class="_1ZjfQ _2T3hc Xl8Lr">
							<?php
							$rows = $a[0];
							foreach ($rows as $row) {
								if ($row['uploader'] == "") {
									$user_name = "未知用户";
								}else{
									$user_name = "{$row['username']}";
								}

								if ($row['user_company_position'] == "") {
									$user_company_position = "未设置职位信息";
								}else{
									$user_company_position = "{$row['user_company_position']}";
								}

								if ($row['company'] == "") {
									$user_company = "未设置公司";
								}else{
									$user_company = "{$row['company']}";
								}

								// arrange the picture
								$random_keys_size = array_rand($size,2);
								// var_dump($random_keys_size[1]);
								$random_keys = array_rand($pic,2);
								$pic_a = $pic[$random_keys [1]];
								$size_a = $size[$random_keys_size[1]];
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
							<figure>
								<div style="padding-bottom: 24px;">
									<div class="_1Nk0C">
										<a itemprop="contentUrl" class="_2Mc8_" href="/introduce">
										<div style='<?php echo $arrange_picture ?>' class="IEpfq">
											<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
											<img  style="background-color:#fff;"
											srcset="/img/soft_svg/<?php echo $pic_a ?>"
											itemprop="thumbnailUrl" class="_2zEKz">
										</div>
										</a>
										<div class="moxNI">
											<div class="_3Ac7K"></div>
											<div class="QQWml _1pUy3 _3nWK4">
												<!-- <div>
												<a class="SdfBi _287S- _1CBrG" href="/brands">
												<span>Sponsored</span>
												<svg class="Xe80T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
												<path d="M16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm2 25c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-12c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v12zm0-16c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v2z"></path>
												</svg>
												</a>
												</div> -->
												<div class="_271oZ">
													<button type="button" title="收藏软件" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1EJJ- _2L6Ut _2Xklx">
														<svg class="BWSrD" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M17.4 29c-.8.8-2 .8-2.8 0l-12.3-12.8c-3.1-3.1-3.1-8.2 0-11.4 3.1-3.1 8.2-3.1 11.3 0l2.4 2.8 2.3-2.8c3.1-3.1 8.2-3.1 11.3 0 3.1 3.1 3.1 8.2 0 11.4l-12.2 12.8z"></path>
														</svg>
													</button>
													<div class="_1ec11">
														<button type="button" title="失效标记" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _3dBbn _2L6Ut _2Xklx">
														<svg class="_2rdbO" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M14 3h4v26h-4zM29 14v4h-26v-4z"></path>
														</svg></button>
													</div>
												</div>
											</div>
											<div class="kOmuh _1pUy3">
												<div class="_3Iv8j">
													<span class="_2aPXR">
														<div class="_2BNtU">
															<div class="_1JARO">
																<div class="ODWzM" style="width: 32px; height: 32px;">
																	<a href="/@honest" title="前往个人主页">
																	<img class="_1FdcY" src="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff" srcset="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 1x, https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=2&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 2x" role="presentation" alt="前往个人主页"></a>
																</div>
															</div>
														</div>
														<div class="_80uCh">
															<div class="_1JARO">
																<a class="_3XzpS _1ByhS _4kjHg _1_w0v _3XJBh _1CBrG" href="/@honest"><?php echo $user_name ?></a>
																<a class="_1_w0v _3XJBh _1CBrG vTCGl _1ByhS _4kjHg Pw4sh _287S-" href="/@honest"><?php echo $user_company.' '.$user_company_position ?></a>
															</div>
														</div>
													</span>
												</div>
												<!-- 下载按钮 -->
												<div class="_3RDWG _3nWK4">
													<a title="下载软件" href="<?php echo $soft_url ?>" rel="nofollow" download="" target="_blank" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1Tfeo _2L6Ut _2Xklx">
													<svg class="Apljk _11dQc" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
													<path d="M25.8 15.5l-7.8 7.2v-20.7h-4v20.7l-7.8-7.2-2.7 3 12.5 11.4 12.5-11.4z"></path>
													</svg>
													</a>
												</div>

											</div>
										</div>
									</div>
									<!-- search result tips -->
										<div class="_3A74U">
											<figcaption itemprop="caption">
											<p class="_3IsQW _27Bp2"><?php echo $row['description'] ?></p></figcaption>
										</div>
										<div class="_3A74U">
											<div class="_2_OE1">
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="软件种类"><?php echo $row['kind'] ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="下载次数"><?php echo shortenNumber($row['amountofdownload']) ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="操作系统"><?php echo $row['system'] ?></a>
												</div>
											</div>
										</div>
								</div>
							</figure>
							<?php 
							}
							 ?>
						</div>
						<!-- 2 -->
						<div class="_1ZjfQ _2T3hc Xl8Lr">
							<?php
							$rows = $a[1];
							if ($rows <> "") {
							foreach ($rows as $row) {
								if ($row['uploader'] == "") {
									$user_name = "未知用户";
								}else{
									$user_name = "{$row['username']}";
								}

								if ($row['user_company_position'] == "") {
									$user_company_position = "未设置职位信息";
								}else{
									$user_company_position = "{$row['user_company_position']}";
								}

								if ($row['company'] == "") {
									$user_company = "未设置公司";
								}else{
									$user_company = "{$row['company']}";
								}

								// arrange the picture
								$random_keys_size = array_rand($size,2);
								// var_dump($random_keys_size[1]);
								$random_keys = array_rand($pic,2);
								$pic_a = $pic[$random_keys [1]];
								$size_a = $size[$random_keys_size[1]];
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
							<figure>
								<div style="padding-bottom: 24px;">
									<div class="_1Nk0C">
										<a itemprop="contentUrl" class="_2Mc8_" href="/introduce">
										<div style='<?php echo $arrange_picture ?>' class="IEpfq">
											<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
											<img  style="background-color:#fff;"
											srcset="/img/soft_svg/<?php echo $pic_a ?>"
											itemprop="thumbnailUrl" class="_2zEKz">
										</div>
										</a>
										<div class="moxNI">
											<div class="_3Ac7K"></div>
											<div class="QQWml _1pUy3 _3nWK4">
												<!-- <div>
												<a class="SdfBi _287S- _1CBrG" href="/brands">
												<span>Sponsored</span>
												<svg class="Xe80T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
												<path d="M16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm2 25c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-12c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v12zm0-16c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v2z"></path>
												</svg>
												</a>
												</div> -->
												<div class="_271oZ">
													<button type="button" title="收藏软件" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1EJJ- _2L6Ut _2Xklx">
														<svg class="BWSrD" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M17.4 29c-.8.8-2 .8-2.8 0l-12.3-12.8c-3.1-3.1-3.1-8.2 0-11.4 3.1-3.1 8.2-3.1 11.3 0l2.4 2.8 2.3-2.8c3.1-3.1 8.2-3.1 11.3 0 3.1 3.1 3.1 8.2 0 11.4l-12.2 12.8z"></path>
														</svg>
													</button>
													<div class="_1ec11">
														<button type="button" title="失效标记" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _3dBbn _2L6Ut _2Xklx">
														<svg class="_2rdbO" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M14 3h4v26h-4zM29 14v4h-26v-4z"></path>
														</svg></button>
													</div>
												</div>
											</div>
											<div class="kOmuh _1pUy3">
												<div class="_3Iv8j">
													<span class="_2aPXR">
														<div class="_2BNtU">
															<div class="_1JARO">
																<div class="ODWzM" style="width: 32px; height: 32px;">
																	<a href="/@honest" title="前往个人主页">
																	<img class="_1FdcY" src="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff" srcset="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 1x, https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=2&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 2x" role="presentation" alt="前往个人主页"></a>
																</div>
															</div>
														</div>
														<div class="_80uCh">
															<div class="_1JARO">
																<a class="_3XzpS _1ByhS _4kjHg _1_w0v _3XJBh _1CBrG" href="/@honest"><?php echo $user_name ?></a>
																<a class="_1_w0v _3XJBh _1CBrG vTCGl _1ByhS _4kjHg Pw4sh _287S-" href="/@honest"><?php echo $user_company.' '.$user_company_position ?></a>
															</div>
														</div>
													</span>
												</div>
												<!-- 下载按钮 -->
												<div class="_3RDWG _3nWK4">
													<a title="下载软件" href="<?php echo $soft_url ?>" rel="nofollow" download="" target="_blank" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1Tfeo _2L6Ut _2Xklx">
													<svg class="Apljk _11dQc" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
													<path d="M25.8 15.5l-7.8 7.2v-20.7h-4v20.7l-7.8-7.2-2.7 3 12.5 11.4 12.5-11.4z"></path>
													</svg>
													</a>
												</div>

											</div>
										</div>
									</div>
									<!-- search result tips -->
										<div class="_3A74U">
											<figcaption itemprop="caption">
											<p class="_3IsQW _27Bp2"><?php echo $row['description'] ?></p></figcaption>
										</div>
										<div class="_3A74U">
											<div class="_2_OE1">
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="软件种类"><?php echo $row['kind'] ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="下载次数"><?php echo number_format($row['amountofdownload']) ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="操作系统"><?php echo $row['system'] ?></a>
												</div>
											</div>
										</div>
								</div>
							</figure>
							<?php 
							}
							}
							 ?>
						</div>
						<!-- 3 -->
						<div class="_1ZjfQ _2T3hc Xl8Lr">
							<?php
							$rows = $a[2];
							if ($rows <> "") {
							foreach ($rows as $row) {
								if ($row['uploader'] == "") {
									$user_name = "未知用户";
								}else{
									$user_name = "{$row['username']}";
								}

								if ($row['user_company_position'] == "") {
									$user_company_position = "未设置职位信息";
								}else{
									$user_company_position = "{$row['user_company_position']}";
								}

								if ($row['company'] == "") {
									$user_company = "未设置公司";
								}else{
									$user_company = "{$row['company']}";
								}

								// arrange the picture
								$random_keys_size = array_rand($size,2);
								// var_dump($random_keys_size[1]);
								$random_keys = array_rand($pic,2);
								$pic_a = $pic[$random_keys [1]];
								$size_a = $size[$random_keys_size[1]];
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
							<figure>
								<div style="padding-bottom: 24px;">
									<div class="_1Nk0C">
										<a itemprop="contentUrl" class="_2Mc8_" href="/introduce">
										<div style='<?php echo $arrange_picture ?>' class="IEpfq">
											<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
											<img  style="background-color:#fff;"
											srcset="/img/soft_svg/<?php echo $pic_a ?>"
											itemprop="thumbnailUrl" class="_2zEKz">
										</div>
										</a>
										<div class="moxNI">
											<div class="_3Ac7K"></div>
											<div class="QQWml _1pUy3 _3nWK4">
												<!-- <div>
												<a class="SdfBi _287S- _1CBrG" href="/brands">
												<span>Sponsored</span>
												<svg class="Xe80T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
												<path d="M16 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm2 25c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-12c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v12zm0-16c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1v-2c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v2z"></path>
												</svg>
												</a>
												</div> -->
												<div class="_271oZ">
													<button type="button" title="收藏软件" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1EJJ- _2L6Ut _2Xklx">
														<svg class="BWSrD" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M17.4 29c-.8.8-2 .8-2.8 0l-12.3-12.8c-3.1-3.1-3.1-8.2 0-11.4 3.1-3.1 8.2-3.1 11.3 0l2.4 2.8 2.3-2.8c3.1-3.1 8.2-3.1 11.3 0 3.1 3.1 3.1 8.2 0 11.4l-12.2 12.8z"></path>
														</svg>
													</button>
													<div class="_1ec11">
														<button type="button" title="失效标记" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _3dBbn _2L6Ut _2Xklx">
														<svg class="_2rdbO" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M14 3h4v26h-4zM29 14v4h-26v-4z"></path>
														</svg></button>
													</div>
												</div>
											</div>
											<div class="kOmuh _1pUy3">
												<div class="_3Iv8j">
													<span class="_2aPXR">
														<div class="_2BNtU">
															<div class="_1JARO">
																<div class="ODWzM" style="width: 32px; height: 32px;">
																	<a href="/@honest" title="前往个人主页">
																	<img class="_1FdcY" src="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff" srcset="https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=1&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 1x, https://images.unsplash.com/profile-1562879881254-56eb37673331?dpr=2&amp;auto=format&amp;fit=crop&amp;w=32&amp;h=32&amp;q=60&amp;crop=faces&amp;bg=fff 2x" role="presentation" alt="前往个人主页"></a>
																</div>
															</div>
														</div>
														<div class="_80uCh">
															<div class="_1JARO">
																<a class="_3XzpS _1ByhS _4kjHg _1_w0v _3XJBh _1CBrG" href="/@honest"><?php echo $user_name ?></a>
																<a class="_1_w0v _3XJBh _1CBrG vTCGl _1ByhS _4kjHg Pw4sh _287S-" href="/@honest"><?php echo $user_company.' '.$user_company_position ?></a>
															</div>
														</div>
													</span>
												</div>
												<!-- 下载按钮 -->
												<div class="_3RDWG _3nWK4">
													<a title="下载软件" href="<?php echo $soft_url ?>" rel="nofollow" download="" target="_blank" class="_1QwHQ _1l4Hh _1CBrG _1zIyn xLon9 _1Tfeo _2L6Ut _2Xklx">
													<svg class="Apljk _11dQc" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
													<path d="M25.8 15.5l-7.8 7.2v-20.7h-4v20.7l-7.8-7.2-2.7 3 12.5 11.4 12.5-11.4z"></path>
													</svg>
													</a>
												</div>

											</div>
										</div>
									</div>
									<!-- search result tips -->
										<div class="_3A74U">
											<figcaption itemprop="caption">
											<p class="_3IsQW _27Bp2"><?php echo $row['description'] ?></p></figcaption>
										</div>
										<div class="_3A74U">
											<div class="_2_OE1">
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="软件种类"><?php echo $row['kind'] ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="下载次数"><?php echo number_format($row['amountofdownload']) ?></a>
												</div>
												<div class="_3Z-ua">
													<a class="_6PxCM _2SmIi" title="操作系统"><?php echo $row['system'] ?></a>
												</div>
											</div>
										</div>
								</div>
							</figure>
							<?php 
							}
							}
							 ?>
						</div>
					</div>
			    </div>
			  </div>
			<!--   <div id="spinner" class="_72qNE in79c">
			    <div class="_1d72G"></div>
			  </div> -->
			</div>
		</div>
		<div class="_2WMKE">
		<a href="/">
		  <svg class="_1Ig-9" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
		    <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
		  </svg>
		</a>
		<p class="_1cQDt">Make something awesome</p></div>
	</div>
</body>
</html>