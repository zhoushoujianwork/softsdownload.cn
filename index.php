<?php 
// echo phpinfo();
include('php/mysql_connect.php');
$sql_search = "SELECT d.*, u.* FROM userinfo u, download d WHERE u.username=d.uploader limit 0,8;";
$mysqli_result = $db->query($sql_search);
$rows = [];
while ( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC )) {
	$rows[] =$row;
}
$soft_description = "免费的软件下载";
$user_company_position = "总裁";
$soft_url = "https://www.baidu.com";
// set  the size for arrange_picture
$size = array("66.66" =>"66.66" , "139.324" => "139.324", "33.33" =>"33.33");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="web.css" media="screen">
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
	        <form class="_2jvJJ mV0BM" data-test="nav-bar-search-form-form" action="/s">
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
	          <a class="_3t5Ep _1CBrG" href="/collections">Collections</a></li>
	        <li class="_29OpZ xLon9">
	          <a class="_3t5Ep _1CBrG" href="/explore">Explore</a></li>
	        <li class="bJOpW">
	          <button class="_2gFPl" type="button">
	            <svg class="_3DJPT" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	              <path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z"></path>
	            </svg>
	          </button>
	          <div class="_282bs _15tg3 FvGw_">
	            <div>
	              <ul class="_2CnfM _2Y-QM _1eXFm">
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" data-type="PopoverLink" href="/about">About</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" data-type="PopoverLink" href="/wallpapers">Wallpapers</a></li>
	                <li>
	                  <a href="https://medium.com/unsplash?utm_source=unsplash&amp;utm_medium=referral" class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink">Blog</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink" href="/community">Community</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink" href="/history">History</a></li>
	                <li>
	                  <a href="https://madewith.unsplash.com/?utm_source=unsplash&amp;utm_medium=referral" class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" target="_blank" data-type="PopoverLink">Made with Unsplash</a></li>
	                <li>
	                  <a href="https://unsplash.com/developers" class="_1zOQ1 _27Bp2 _1CBrG _13hUA" data-type="PopoverLink">API/Developers</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink" href="/press">Press</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink" href="/hiring">Join the team</a></li>
	                <li>
	                  <a class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink" href="/license">License</a></li>
	                <li>
	                  <a href="https://help.unsplash.com/?utm_source=unsplash&amp;utm_medium=referral" class="_1zOQ1 _27Bp2 _1CBrG _13hUA" rel="nofollow" data-type="PopoverLink">Help</a></li>
	                <div class="_20w1c">
	                  <ul class="_1S8We _1P-r- _2Y-QM _1eXFm _2o76E">
	                    <li>
	                      <a title="Follow Unsplash on Twitter" target="_blank" rel="noopener noreferrer" href="https://twitter.com/unsplash?utm_source=unsplash&amp;utm_medium=referral" class="_1g92g rm98t">
	                        <svg class="_2gauX _33ITs hIMT1 _33ITs" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	                          <path d="M30 7.3c-1 .5-2.1.8-3.3.9 1.2-.7 2.1-1.8 2.5-3.2-1.1.7-2.3 1.1-3.6 1.4-1-1.1-2.5-1.8-4.2-1.8-3.2 0-5.7 2.6-5.7 5.7 0 .5.1.9.1 1.3-4.8-.2-9-2.5-11.8-6-.5.9-.8 1.9-.8 3 0 2 1 3.8 2.6 4.8-.9 0-1.8-.3-2.6-.7v.1c0 2.8 2 5.1 4.6 5.6-.5.1-1 .2-1.5.2-.4 0-.7 0-1.1-.1.7 2.3 2.9 3.9 5.4 4-2 1.5-4.4 2.5-7.1 2.5-.5 0-.9 0-1.4-.1 2.5 1.6 5.6 2.6 8.8 2.6 10.6 0 16.3-8.8 16.3-16.3v-.7c1.1-1 2-2 2.8-3.2z"></path>
	                        </svg>
	                        <span class="_3t-4N _2iX7Z">Unsplash Twitter</span></a>
	                    </li>
	                    <li>
	                      <a title="Follow Unsplash on Facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pages/Unsplash/274126369394815?utm_source=unsplash&amp;utm_medium=referral" class="_1g92g rm98t">
	                        <svg class="_2gauX _33ITs hIMT1 _33ITs" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	                          <path d="M27.6 3h-23.2c-.8 0-1.4.6-1.4 1.4v23.1c0 .9.6 1.5 1.4 1.5h12.5v-10.1h-3.4v-3.9h3.4v-2.9c0-3.4 2.1-5.2 5-5.2 1.4 0 2.7.1 3 .2v3.5h-2.1c-1.6 0-1.9.8-1.9 1.9v2.5h3.9l-.5 3.9h-3.4v10.1h6.6c.8 0 1.4-.6 1.4-1.4v-23.2c.1-.8-.5-1.4-1.3-1.4z"></path>
	                        </svg>
	                        <span class="_3t-4N _2iX7Z">Unsplash Facebook</span></a>
	                    </li>
	                    <li>
	                      <a title="Follow Unsplash on Instagram" target="_blank" rel="noopener noreferrer" href="https://instagram.com/unsplash?utm_source=unsplash&amp;utm_medium=referral" class="_1g92g rm98t">
	                        <svg class="_2gauX _33ITs hIMT1 _33ITs" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	                          <path d="M16 5.34c3.47 0 3.88 0 5.25.08a7.22 7.22 0 0 1 2.42.45 3.89 3.89 0 0 1 1.49 1 3.89 3.89 0 0 1 1 1.49 7.22 7.22 0 0 1 .45 2.42c.06 1.37.08 1.78.08 5.25s0 3.88-.08 5.25a7.22 7.22 0 0 1-.45 2.42 4.3 4.3 0 0 1-2.46 2.46 7.22 7.22 0 0 1-2.42.45c-1.37.06-1.78.08-5.25.08s-3.88 0-5.25-.08a7.22 7.22 0 0 1-2.42-.45 3.89 3.89 0 0 1-1.49-1 3.89 3.89 0 0 1-1-1.49 7.22 7.22 0 0 1-.45-2.42c-.06-1.37-.08-1.78-.08-5.25s0-3.88.08-5.25a7.22 7.22 0 0 1 .45-2.42 3.89 3.89 0 0 1 1-1.49 3.89 3.89 0 0 1 1.49-1 7.22 7.22 0 0 1 2.42-.45c1.37-.06 1.78-.08 5.25-.08m-.03-2.31c-3.53 0-4 0-5.36.08a9.57 9.57 0 0 0-3.16.6 6.66 6.66 0 0 0-3.8 3.8 9.57 9.57 0 0 0-.6 3.16c-.08 1.36-.08 1.83-.08 5.36s0 4 .08 5.36a9.57 9.57 0 0 0 .6 3.16 6.66 6.66 0 0 0 3.8 3.8 9.57 9.57 0 0 0 3.16.6c1.36.08 1.83.08 5.36.08s4 0 5.36-.08a9.57 9.57 0 0 0 3.16-.6 6.66 6.66 0 0 0 3.8-3.8 9.57 9.57 0 0 0 .6-3.16c.08-1.36.08-1.83.08-5.36s0-4-.08-5.36a9.57 9.57 0 0 0-.6-3.16 6.66 6.66 0 0 0-3.8-3.8 9.57 9.57 0 0 0-3.16-.6c-1.36-.08-1.83-.08-5.36-.08zm0 6.32a6.68 6.68 0 1 0 6.68 6.68 6.68 6.68 0 0 0-6.68-6.68zm0 11a4.33 4.33 0 1 1 4.33-4.32 4.33 4.33 0 0 1-4.33 4.33zm6.94-12.82a1.56 1.56 0 1 0 1.56 1.56 1.56 1.56 0 0 0-1.56-1.56z"></path>
	                        </svg>
	                        <span class="_3t-4N _2iX7Z">Unsplash Instagram</span></a>
	                    </li>
	                    <li>
	                      <a title="Follow Unsplash on Medium" target="_blank" rel="noopener noreferrer" href="https://medium.com/unsplash?utm_source=unsplash&amp;utm_medium=referral" class="_1g92g rm98t">
	                        <svg class="_2gauX _33ITs hIMT1 _33ITs" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
	                          <path d="M3 3v26h26v-26zm21.6 6.16l-1.39 1.34a.42.42 0 0 0-.16.39v9.82a.42.42 0 0 0 .16.39l1.36 1.34v.29h-6.85v-.29l1.41-1.37c.14-.14.14-.18.14-.39v-7.94l-3.93 10h-.53l-4.56-10v6.68a.89.89 0 0 0 .25.76l1.84 2.23v.29h-5.21v-.29l1.87-2.23a.89.89 0 0 0 .23-.76v-7.72a.67.67 0 0 0-.23-.58l-1.63-2v-.25h5.07l3.91 8.58 3.44-8.58h4.81z"></path>
	                        </svg>
	                        <span class="_3t-4N _2iX7Z">Unsplash Medium</span></a>
	                    </li>
	                  </ul>
	                </div>
	              </ul>
	            </div>
	          </div>
	        </li>
	      </ul>
	    </div>
	    <div class="aApNa">
	      <div>
	        <div class="_1S7B0 _1XDQr">
	          <button type="button" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo NDx0k _2Xklx">Submit
	            <span class="_3LZjN">a soft</span></button>
	        </div>
	        <div class="QoLMB">
	          <a href="/login" rel="nofollow" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo _2YZnO NDx0k _2Xklx">Login</a>
	          <a href="https://unsplash.com/join" rel="nofollow" class="_1yvXd _1l4Hh _1CBrG _1zIyn xLon9 _2PJgo TPbmh _2Xklx">Join free</a></div>
	      </div>
	    </div>
	  </nav>
	  <div class="_1g4h6"></div>
	</header>
	<div class="_3ogFu _1w02r">
	  <nav class="_34F8y">
	    <ul class="_1Tkkp _2Y-QM _1eXFm">
	      <li class="_2TtAc">
	        <a aria-current="page" class="_3t5Ep _1CBrG XOj_G" href="/">
	          <svg class="_2DZ9T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-labelledby="go-to-homepage" aria-hidden="false">
	            <title id="go-to-homepage">go to homepage</title>
	            <path d="M16 1l-15 15v15h12v-9h6v9h12v-15l-15-15z"></path>
	          </svg>
	        </a>
	      </li>
	      <li class="_2TtAc">
	        <a class="_3t5Ep _1CBrG" href="/collections">
	          <svg class="_2DZ9T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-labelledby="go-to-collections-feed" aria-hidden="false">
	            <title id="go-to-collections-feed">go to collections feed</title>
	            <path d="M.57 9.42c4.76 2.22 9.54 4.46 14.32 6.66a2.28 2.28 0 0 0 2.21 0c4.76-2.18 9.56-4.44 14.28-6.64.27-.13.61-.2.61-.55s-.34-.45-.61-.57c-4.72-2.21-9.58-4.5-14.32-6.7a3.16 3.16 0 0 0-2.06-.02c-4.8 2.22-9.67 4.51-14.45 6.75-.23.11-.55.2-.55.52s.32.44.57.55zm19 .72v-4.14l8.09 2.3-11.66 5.43v-4.73zM31.83 22.71a1.31 1.31 0 0 0-.36-.21c-.83-.39-1.67-.8-2.52-1.18a2.63 2.63 0 0 0-2.29 0l-9.48 4.44a2.61 2.61 0 0 1-2.34 0l-9.51-4.4a2.71 2.71 0 0 0-2.36 0c-.78.38-1.58.75-2.37 1.12-.26.13-.6.2-.6.55s.34.45.59.57c4.74 2.22 9.52 4.46 14.3 6.67a3.57 3.57 0 0 0 1.1.32 3.08 3.08 0 0 0 1.18-.36c4.74-2.19 9.49-4.35 14.19-6.61a2.48 2.48 0 0 0 .47-.27.36.36 0 0 0 0-.64zM.6 16.51c4.73 2.24 9.49 4.44 14.26 6.68a6 6 0 0 0 1.13.3 4 4 0 0 0 1.09-.3c4.8-2.22 9.58-4.44 14.39-6.72a1.62 1.62 0 0 0 .32-.17.39.39 0 0 0 0-.68 2 2 0 0 0-.34-.2l-2.45-1.17a2.54 2.54 0 0 0-2.22 0q-4.83 2.23-9.62 4.5a2.54 2.54 0 0 1-2.22 0c-3.2-1.49-6.4-3-9.56-4.44a2.55 2.55 0 0 0-2.38-.06l-2.38 1.14c-.26.12-.62.19-.62.57s.36.44.6.55z"></path>
	          </svg>
	        </a>
	      </li>
	      <li class="_2TtAc">
	        <button class="_1XOP1 _3t5Ep _1CBrG _3d86A" type="button">
	          <svg class="_2DZ9T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-labelledby="open/close-uploader" aria-hidden="false">
	            <title id="open/close-uploader">open/close uploader</title>
	            <path d="M30.4 0c.96 0 1.6.64 1.6 1.6v28.8c0 .96-.64 1.6-1.6 1.6H1.6C.64 32 0 31.36 0 30.4V1.6C0 .64.64 0 1.6 0h28.8zM17.6 14.4V8h-3.2v6.4H8v3.2h6.4V24h3.2v-6.4H24v-3.2h-6.4z"></path>
	          </svg>
	        </button>
	      </li>
	      <li class="_2TtAc">
	        <a class="_3t5Ep _1CBrG" href="/mobile_search">
	          <svg class="_2DZ9T" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-labelledby="go-to-search" aria-hidden="false">
	            <title id="go-to-search">go to search</title>
	            <path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
	          </svg>
	        </a>
	      </li>
	    </ul>
	  </nav>
	  <div class="_15dRI"></div>
	  <div class="MKbw9">
	    <a href="/login" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 _3d75X PRES1 NDx0k _2Xklx">Login</a>
	    <a href="https://unsplash.com/join" class="_1yvXd _1l4Hh _1CBrG _1zIyn xLon9 _3d75X TPbmh _2Xklx">Join free</a></div>
	</div>
	<!-- 分类标签 -->
	<div class="_3VG_J">
	  <div class="_1EkxQ">
	    <div class="_1Dmzg">
	      <ul class="_2d0kJ _2Y-QM _1eXFm">
	        <li class="_1hkdt">
	          <a aria-current="page" class="qvEaq _1CBrG EfqHf" href="/">
	            <span class="_1WMnM xLon9">Editorial</span></a>
	        </li>
	      </ul>
	    </div>
	    <div class="_3Zuj5"></div>
	    <div class="_2Ru_P" style="height: 56px;">
	      <div class="_3b4NQ">
	        <div class="_1Dmzg">
	          <ul class="_2d0kJ _2Y-QM _1eXFm _2Vs_B">
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/wallpapers">
	                <span class="_1WMnM xLon9">Wallpapers</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/textures-patterns">
	                <span class="_1WMnM xLon9">Textures &amp; Patterns</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/nature">
	                <span class="_1WMnM xLon9">Nature</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/current-events">
	                <span class="_1WMnM xLon9">Current Events</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/architecture">
	                <span class="_1WMnM xLon9">Architecture</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/business-work">
	                <span class="_1WMnM xLon9">Business &amp; Work</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/film">
	                <span class="_1WMnM xLon9">Film</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/animals">
	                <span class="_1WMnM xLon9">Animals</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/travel">
	                <span class="_1WMnM xLon9">Travel</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/fashion">
	                <span class="_1WMnM xLon9">Fashion</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/food-drink">
	                <span class="_1WMnM xLon9">Food &amp; Drink</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/spirituality">
	                <span class="_1WMnM xLon9">Spirituality</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/experimental">
	                <span class="_1WMnM xLon9">Experimental</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/people">
	                <span class="_1WMnM xLon9">People</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/health">
	                <span class="_1WMnM xLon9">Health</span></a>
	            </li>
	            <li class="_1hkdt">
	              <a class="qvEaq _1CBrG" href="/t/arts-culture">
	                <span class="_1WMnM xLon9">Arts &amp; Culture</span></a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- 内容 -->
	<div data-test="editorial-route">
		<div class="_114h2">
			<div class="_2QgdQ">
				<div class="_1wT8D">
					<picture class="_2XHNB">
						<picture class="_2XHNB" style="overflow: hidden;">
							<img style="width: 100%;" src="/background/brooke-lark-9ukDOeEEs8w-unsplash.jpg">
						</picture>
					</picture>
				</div>
				<div class="_2IASm">
				  <div class="_3QkSI _2sCnE PrOBO _1CR66">
				    <div class="_24vCv _1pgnK _2HBSG">
				      <span class="VkP27 _2RmO0 _2svCU">Softsdownload.cn</span>
				      <div>
				        <h1 class="_9IFIy _27Bp2 _1iWCF">The internet's source of freely usable softs.</h1>
				        <p class="_3fk_U _27Bp2 _1iWCF">Powered by creators everywhere.</p>
				        <div class="wqRmt">
				          <div class="_3k9pE">
				            <div class="_1w02r">
				              <form class="_2FayZ mV0BM" data-test="homepage-search-form-form" action="/s">
				                <button title="Search Softs" class="_2VoZY _3d86A" type="submit" data-test="homepage-header-search-form-button">
				                  <svg class="_2-tlh _1azRR _18QGm" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
				                    <path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
				                  </svg>
				                  <span class="_3cUBZ _2iX7Z">Search</span></button>
				                <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-small" aria-expanded="false" class="_2ZbDJ">
				                  <input type="search" value="" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-small" class="zbIrd _3FYu1" name="searchKeyword" placeholder="Search Softs" required="" data-test="homepage-header-search-form-input" id="SEARCH_FORM_INPUT_homepage-header-small" title="Search Softs" autocapitalize="none" spellcheck="false">
				                  <div id="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-small" role="listbox"></div>
				                </div>
				              </form>
				            </div>
				            <div class="_3PSbf">
				              <form class="_2FayZ mV0BM" data-test="homepage-search-form-form" action="/s">
				                <button title="Search Softs" class="_2VoZY _3d86A" type="submit" data-test="homepage-header-search-form-button">
				                  <svg class="_2-tlh _1azRR _18QGm" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
				                    <path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
				                  </svg>
				                  <span class="_3cUBZ _2iX7Z">Search</span></button>
				                <div role="combobox" aria-haspopup="listbox" aria-owns="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-big" aria-expanded="false" class="_2ZbDJ">
				                  <input type="search" value="" autocomplete="off" aria-autocomplete="list" aria-controls="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-big" class="zbIrd _3FYu1" name="searchKeyword" placeholder="Search Softs" required="" data-test="homepage-header-search-form-input" id="SEARCH_FORM_INPUT_homepage-header-big" title="Search Softs" autocapitalize="none" spellcheck="false">
				                  <div id="react-autowhatever-SEARCH_FORM_INPUT_homepage-header-big" role="listbox"></div>
				                </div>
				              </form>
				            </div>
				          </div>
				          <div class="_3k9pE">
				            <div>
				              <span class="SLG9B">Trending:</span>
				              <ul class="_39Gnz _2Y-QM _1eXFm">
				                <li class="_3boor">
				                  <a class="LhP3s" href="/images/nature/flower">office</a></li>
				                <li class="_3boor">
				                  <a class="LhP3s" href="/wallpapers">photoshop</a></li>
				                <li class="_3boor">
				                  <a class="LhP3s" href="/backgrounds">Backgrounds</a></li>
				                <li class="_3boor">
				                  <a class="LhP3s" href="/images/feelings/happy">Happy</a></li>
				                <li class="_3boor">
				                  <a class="LhP3s" href="/images/feelings/love">Love</a></li>
				              </ul>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
				  <div class="_2Oa0G _1ReuZ">
				    <div class="BcmU7">
				      <div class="jGus2 -wAV0 _36V_V">
				        <a title="Landmannalaugar in Iceland" class="_2Mc8_ ICezk" href="/photos/hmtD7tLRnws">Softs of the Day</a>&nbsp;by&nbsp;
				        <div class="_1JARO">
				          <a class="ICezk" href="/home/zhoushoujian">zhoushoujianwork@163.com</a></div>
				      </div>
				      <div class="_2J1eG -wAV0 xZmk-">Read more about the&nbsp;
				        <a class="ICezk" href="/license">Softsdownload.cn License</a></div>
				      <div class="JHj-M -wAV0">
				        <div class="kT6Q5">
				          <div class="_1s1zj">
				            <a href="https://srv.buysellads.com/ads/click/x/GTND42QUCYYI5K77CW7LYKQMCASD653NC6SDVZ3JCWSIKKJ7F6AIL23KC6BI52JJCEYI6K3EHJNCLSIZ" target="_blank">
				              <img class="_200hP AMHhv" src="https://cdn4.buysellads.net/uu/7/41629/1545953812-1543526594-transparent_squarespace.png"></a>
				          </div>
				          <div>(广告位) All you need to create a website.</div></div>
				      </div>
				      <img src="https://ad.doubleclick.net/ddm/trackimp/N718679.452584BUYSELLADS.COM/B22121483.256746709;dc_trk_aid=452626607;dc_trk_cid=122221376;ord=0.5686491869228846;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" class="_25v5A" alt="Advertisement">
				      <img src="https://secure.insightexpressai.com/adServer/adServerESI.aspx?script=false&amp;bannerID=5709662&amp;rnd=[INSERT_CACHEBUSTER_HERE]&amp;redir=https://secure.insightexpressai.com/adserver/1pixel.gif&amp;network=BUYSELLADS" class="_25v5A" alt="Advertisement"></div>
				  </div>
				</div>
		</div>
		</div>
	<!-- 分割结果栏 AD -->
		<div class="_3L8zi _2sCnE PrOBO _1CR66">
		  <a class="_7bLoc" target="_blank" href="https://suzhoufloor.com">
		    <div class="_2kRHk _2KLco _1iWCF" style="background-image:url(
		    )">
		      <div class="_23ms4 _6_Gu- _39F6U _2DKvn">
		        <p class="_3FlH9 TBVsU">广告赞助位 感谢'三个木匠'对本站的支持</p>
		        <p class="_2SjKI">强化地板品牌.
		          <span class="_3mnjI cXuZu">查看更多 </span></p>
		      </div>
		    </div>
		  </a>
		</div>
	</div>
		<!-- Search Result -->
		<div>
			<div class="_14IbC _2sCnE PrOBO _1CR66">
			  	<div>
			      	<div class="qztBA _2TNYr _6fYUh" style="--column-gutter:24px;" data-test="masonry-grid-count-two">
			      		<!-- 第一栏 -->
				        <div class="_1ZjfQ _2T3hc LURmp">
			        		<!-- 横图 -->
			        		<?php
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
								$size_a = array_rand($size,1);
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
			        			<figure>
									<div style="padding-bottom: 24px;">
										<div class="_1Nk0C">
											<a title="<?php echo $soft_description ?>" itemprop="contentUrl" class="_2Mc8_" href="/introduce">
											<div style='<?php echo $arrange_picture ?>' class="IEpfq">
												<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
												<img alt="<?php echo $soft_description ?>" style="background-color:#fff;"
												srcset="/img/soft_svg/Adobe_Ae.svg"
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
									</div>
								</figure>
							<?php 
							}
							 ?>
				        </div>
				        <!-- 第二栏 -->
				        <div class="_1ZjfQ _2T3hc LURmp">
			        		<!-- 横图 -->
			        		<?php
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
								$size_a = array_rand($size,1);
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
			        			<figure>
									<div style="padding-bottom: 24px;">
										<div class="_1Nk0C">
											<a title="<?php echo $soft_description ?>" itemprop="contentUrl" class="_2Mc8_" href="/introduce">
											<div style='<?php echo $arrange_picture ?>' class="IEpfq">
												<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
												<img alt="<?php echo $soft_description ?>" style="background-color:#fff;"
												srcset="/img/soft_svg/Adobe_Ae.svg"
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
									</div>
								</figure>
							<?php 
							}
							 ?>
				        </div>
				        <!-- 第三栏 -->
				        <div class="_1ZjfQ _2T3hc LURmp">
			        		<!-- 横图 -->
			        		<?php
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
								$size_a = array_rand($size,1);
								$arrange_picture = "padding-bottom: ".$size_a."%";
							?>
			        			<figure>
									<div style="padding-bottom: 24px;">
										<div class="_1Nk0C">
											<a title="<?php echo $soft_description ?>" itemprop="contentUrl" class="_2Mc8_" href="/introduce">
											<div style='<?php echo $arrange_picture ?>' class="IEpfq">
												<!-- <div style="padding-bottom: 160.342%;" class="IEpfq"> -->
												<img alt="<?php echo $soft_description ?>" style="background-color:#fff;"
												srcset="/img/soft_svg/Adobe_Ae.svg"
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
									</div>
								</figure>
							<?php 
							}
							 ?>
				        </div>
			      	</div>
			    </div>
			</div>
		</div>
	

<!-- 下载点击弹窗 -->
<div class="_3rh8J" style="display: none;">
  <div class="_1ZJZR">
    <div class="_2xVPk">
      <div class="_1Xf4s _1SM1E">
        <div class="_3tLhF">
          <div class="_1hIRM">
            <div class="_2EpJp IEpfq">
              <img alt="" class="oyyve _2zEKz" srcset="https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;dpr=1&amp;auto=format&amp;fit=crop&amp;w=140&amp;h=200&amp;q=60 1x, https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;dpr=2&amp;auto=format&amp;fit=crop&amp;w=140&amp;h=200&amp;q=60 2x" src="https://images.unsplash.com/photo-1530281700549-e82e7bf110d6?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=140&amp;h=200&amp;q=60" width="140" height="200"></div>
            <div class="_2a4HK">
              <div class="_1DtbM">
                <button class="_3E7Ri _3d86A" type="button">
                  <svg class="dgd2H" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
                    <path d="M25.33 8.55l-1.88-1.88-7.45 7.45-7.45-7.45-1.88 1.88 7.45 7.45-7.45 7.45 1.88 1.88 7.45-7.45 7.45 7.45 1.88-1.88-7.45-7.45z"></path>
                  </svg>
                  <span class="_2iX7Z">Close</span></button>
              </div>
            </div>
          </div>
          <div class="_3Hx4x vem7e">
            <div class="_36ib3 _4y7Gs">
              <h3 class="_3Gbbu _1eXFm">Say thanks</h3>
              <div class="J3_TU">
                <a title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Funsplash.com%2Fphotos%2FyihlaRCCvd4%3Futm_source%3Dfacebook%26utm_medium%3Dreferral%26utm_content%3DcreditShareLink" target="_blank" class="_3h-zP _1l4Hh _1CBrG _1zIyn xLon9 _1tyI6 _3wYIF _5Su7U _2Xklx">
                  <svg class="_32QMn" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
                    <path d="M27.6 3h-23.2c-.8 0-1.4.6-1.4 1.4v23.1c0 .9.6 1.5 1.4 1.5h12.5v-10.1h-3.4v-3.9h3.4v-2.9c0-3.4 2.1-5.2 5-5.2 1.4 0 2.7.1 3 .2v3.5h-2.1c-1.6 0-1.9.8-1.9 1.9v2.5h3.9l-.5 3.9h-3.4v10.1h6.6c.8 0 1.4-.6 1.4-1.4v-23.2c.1-.8-.5-1.4-1.3-1.4z"></path>
                  </svg>
                </a>
                <a title="Share on Twitter" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Funsplash.com%2Fphotos%2FyihlaRCCvd4%3Futm_source%3Dtwitter%26utm_medium%3Dreferral%26utm_content%3DcreditShareLink&amp;text=Thanks%20to%20%40o5ky%20for%20making%20this%20photo%20available%20freely%20on%20%40unsplash%20%F0%9F%8E%81" target="_blank" class="_3h-zP _1l4Hh _1CBrG _1zIyn xLon9 _1tyI6 _3wYIF _5Su7U _2Xklx">
                  <svg class="_32QMn" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
                    <path d="M30 7.3c-1 .5-2.1.8-3.3.9 1.2-.7 2.1-1.8 2.5-3.2-1.1.7-2.3 1.1-3.6 1.4-1-1.1-2.5-1.8-4.2-1.8-3.2 0-5.7 2.6-5.7 5.7 0 .5.1.9.1 1.3-4.8-.2-9-2.5-11.8-6-.5.9-.8 1.9-.8 3 0 2 1 3.8 2.6 4.8-.9 0-1.8-.3-2.6-.7v.1c0 2.8 2 5.1 4.6 5.6-.5.1-1 .2-1.5.2-.4 0-.7 0-1.1-.1.7 2.3 2.9 3.9 5.4 4-2 1.5-4.4 2.5-7.1 2.5-.5 0-.9 0-1.4-.1 2.5 1.6 5.6 2.6 8.8 2.6 10.6 0 16.3-8.8 16.3-16.3v-.7c1.1-1 2-2 2.8-3.2z"></path>
                  </svg>
                </a>
              </div>
            </div>
            <p class="_21TfH _1eXFm _36ib3 _2himp">Attribution is appreciated and allows contributors to gain exposure. Copy the text below or
              <button type="button" class="_1pRnw _1jK-F _3d86A _2-V32">embed a credit badge</button>.</p>
            <div class="_36ib3">
              <div class="_1Pp3a">
                <div class="_3bJ2H CHExY">
                  <div class="_1l8RX _1ByhS">
                    <span>Photo by
                      <a href="https://unsplash.com/@o5ky?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Oscar Sutton</a>on
                      <a href="/s/photos/dog?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                  </div>
                </div>
                <div class="_1fF0E CHExY">
                  <button type="button" class="_37zTg _1l4Hh _1CBrG _1zIyn xLon9 NDx0k _2Xklx">Copy</button></div>
              </div>
            </div>
          </div>
        </div>
        <div class="K8oc9 _13vXb">
          <a class="_1rcJ3 _1CBrG" href="https://srv.buysellads.com/ads/click/x/GTND42QUCY7DCKJLC6Y4YKQMCASDC23YF67D4Z3JCWSIKK7NCAADC23KC6BI52JLC67I6K3EHJNCLSIZ" target="_blank">
            <div class="_3aCvt">
              <img class="kLr2N _3uVnx" src="https://cdn4.buysellads.net/uu/7/53660/1570729174-MC-Horizontal-Final-Reversed_1.png">
              <div class="_3Y120">
                <span class="_1BdPY">Track and manage campaigns from your phone.</span>
                <svg version="1.1" viewBox="0 0 32 32" width="12" height="12" aria-hidden="false">
                  <path d="M24 28h-20v-20h12v-4h-16v28h28v-16h-4zM22 0l3.6 3.6-1 1-8 8-1.4 1.4 2.8 2.8 1.4-1.4 8-8 1-1 3.6 3.6v-10z" fill="#d1d1d1"></path>
                </svg>
              </div>
            </div>
          </a>
        </div>
        <img src="https://ad.doubleclick.net/ddm/ad/N2434.3091281BUYSELLADS/B23311778.257110169;sz=1x1;ord=0.13746211446790113;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" class="_25v5A" alt="Advertisement">
        <img src="https://pixel.adsafeprotected.com/rfw/st/345572/39629894/skeleton.gif?network=BUYSELLADS" class="_25v5A" alt="Advertisement"></div>
    </div>
  </div>
  <span></span>
</div>

</body>
</html>
