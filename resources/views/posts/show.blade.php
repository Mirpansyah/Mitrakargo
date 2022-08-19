<!doctype html>
<html amp lang="en">
<head>
	<meta charset="utf-8">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
	<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
	<script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
	<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
	<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
<title>{{ $post->title }}</title>
	<link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<style amp-boilerplate>
		body {
			-webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			-moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			-ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			animation: -amp-start 8s steps(1, end) 0s 1 normal both
		}
		@-webkit-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}
		@-moz-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@-ms-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@-o-keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}

		@keyframes -amp-start {
			from {
				visibility: hidden
			}

			to {
				visibility: visible
			}
		}
	</style><noscript>
		<style amp-boilerplate>
			body {
				-webkit-animation: none;
				-moz-animation: none;
				-ms-animation: none;
				animation: none
			}
		</style>
	</noscript>
	<style amp-custom='' >
		* {
			box-sizing: border-box;
			font-family: 'Roboto';
			transition: all 0.2s linear;
			font-size: 16px;
		}

		html,
		body {
			margin: 0px;
			padding: 0px;
		}

		.content-width {
			width: 80%;
		}

		.content {
			margin: 0 auto;
			padding: 50px 0px;
			line-height: 160%;
		}

		h1 {
			font-size: 240%;
			line-height: 120%;
			margin: 20px 0px;
		}

		h2 {
			font-size: 140%;
			margin: 30px 0px;
		}

		.clearfix {
			clear: both;
		}

		.subtext {
			text-align: left;
			font-weight: 400;
			color: #a5a5a5;
			font-size: 90%;
		}

		.branding {
			font-size: 90%;
			color: #fff;
		}

		.branding a {
			color: inherit;
		}

		.branding a:hover {
			color: #19B5FE;
		}
		.col-sm-5  a {
			position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: white;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  background-color: #f0bb0dfd ;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
    border-radius: 40px;
    

}

.col-sm-5 a:hover {
    background: #f47703;
  color: white;
  border-radius: 5px;
  box-shadow: 0 0 5px #f47703,
              0 0 25px #f47703,
              0 0 50px #f47703,
              0 0 100px #f47703;
}

.col-sm-5 a span {
   position: absolute ;
  display: block;

}

.col-sm-5 a span:nth-child(1) {
    top: 0;
  left: 100%;
  width: 100%;
  height: 4px;
  display: flex;
  background: linear-gradient(90deg, transparent, #ff7b00);
  animation: btn-anim1 1s linear infinite;

}

@keyframes btn-anim1{
    0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.col-sm-5 span:nth-child(2) {
    top: -100%;
  right: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #f47703);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s

}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.col-sm-5 a span:nth-child(3) {
    bottom: 0;
  right: -100%;
  width: 100%;
  height: 4px;
  background: linear-gradient(270deg, transparent, #f47703);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s

}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.col-sm-5 a span:nth-child(4) {
    bottom: -100%;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #f47703);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
		/* Header */
		header,
		footer,
		#sidebar {
			background: #f17916;
		}

		header {
			padding: 10px 0px;
			position: sticky;
			top: 0;
			z-index: 999;
		}

		#sidebar {
			width: 300px;
			padding: 1.5rem;
		}

		.sidebar-menu {
			padding: 0px;
			margin: 0px;
		}

		.amp-custom-sidebar-header {
			line-height: 3.5rem;
			min-height: 3.5rem;
			color: #fff;
		}

		#sidebar-close {
			cursor: pointer;
		}

		.sidevar-nav-item {
			padding: 10px 0px;
			margin: 0px;
			display: block;
			list-style: none;
			color: #021425;
			text-transform: capitalize;
			letter-spacing: .6px;
			line-height: 2.0625;
			cursor: pointer;
			text-decoration: none;
			color: #fff;
		}

		.sidevar-nav-item:hover {
			color: #081920;
		}

		.menu {
			display: flex;
			justify-content: space-between;
			margin: 0 auto;
		}

		.logo {
			width: 200px;
		}

		#sidebar-menu-btn {
			background: 0 0;
			border: 0;
			color: #fff;
			font-weight: 700;
			font-size: 28px;
		}

		/* POST */
		#article-wrapper {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}

		#article {
			flex-basis: 70%;
			padding-right: 30px;
			border-right: 1px solid #e3e3e3;
		}

		#article h1 {
			margin-top: 0px;
		}

		.article-image,
		.article-body {
			margin: 20px 0px;
		}

		.author-info {
			color: #9d9d9d;
			font-weight: bold;
		}

		#article a {
			color: inherit;
		}

		#article a.button {
			margin: 20px 10px 20px 0px;
			display: inline-block;
			width: 120px;
		}

		#article a.button,
		#article a.button:hover {
			color: #fff;
		}

		#article a:hover {
			color: #19B5FE;
		}

		#additional-info {
			flex-basis: 30%;
			padding-left: 30px;
		}

		#additional-info:before {
			display: block;
			height: 6px;
			background-color: #2c3e50;
			content: ' ';
			width: 50px;
			margin-left: 0;
			margin-bottom: 20px;
		}
		
		.promo,
		.related-box ul li {
			border: 1px solid #e3e3e3;
		}

		.promo {
			padding: 10px;
			margin-top: 20px;
		}

		.article-meta ul,
		.related-box ul {
			padding: 0px;
			margin: 0px;
		}

		.related-box a {
			text-decoration: none;
			color: inherit;
		}

		.related-box a.imp-link {
			color: #3ebf43;
			font-weight: 700;
		}

		.related-box ul li {
			list-style: none;
			padding: 10px;
		}

		.related-box ul li:hover,
		.related-box a:hover {
			text-decoration: underline;
			background: #ebebeb;
		}
		.article-meta {
			margin: 30px 0px;
		}
		.article-meta ul {
			display: flex;
			flex-direction: row;
		}
		#article .article-meta a.tag {
			margin-right: 10px;
			background: #ebebeb;
			font-weight: bold;
			font-size: 90%; 
			text-decoration: none;
			padding: 10px;
			color: #414141;
			text-transform: uppercase;
		}
		#article .article-meta .tag:hover {
			background: #dadada;
		}
		.article-meta li {
			list-style: none;
		}

		.blockquote-wrapper {
			position: relative;
		}

		.blockquote {
			margin-top: 50px;
			margin-bottom: 50px;
			font-size: 90%;
			font-style: italic;
			text-align: justify;
		}

		.blockquote::before {
			content: "“";
			position: absolute;
			top: 0.25em;
			left: -0.15em;
			color: #e7e6e4;
			font-size: 170px;
			z-index: -1;
		}

		cite {
			display: block;
			text-align: right;
			padding: 10px 0px;
		}

		.amp-components .component {
			margin: 30px 0px;
			position: relative;
			overflow: hidden;
		}

		/* Footer */
		footer {
			color: #fff;
			text-align: center;
		}

		@media only screen and (max-width: 1024px) {
			h1 {
				font-size: 140%;
			}
			#article {
				padding-right: 20px;
			}
			#additional-info {
				padding-left: 20px;
			}
			.related-box ul li, .promo p, .promo a {
				font-size: 90%;
			}
		}
		@media only screen and (max-width: 768px) {
			#article,
			#additional-info {
				border: 0px;
				flex-basis: 100%;
				padding: 0px;
				margin-bottom: 30px;
			}
			.logo {
				width: 160px;
			}
			h1 {
				font-size: 160%;
			}
			#article a.button,
			#article .article-meta a.tag li {
				font-size: 90%; 
			}
		}
		@media only screen and (max-width: 600px) {
			h1 {
				font-size: 120%;
			}
			.content-width { 
				width: 90%;
			}
			.content {
				padding: 30px 0px;
			}
			.logo {
				width: 140px;
			}
			header {
				padding: 5px 0px;
			}
			#article-wrapper {
				flex-direction: column;
			}
			.blockquote {
				margin: 50px 0px;
				font-size: 100%;
			}
			.article-meta ul {
				flex-wrap: wrap;
			}
			.article-meta a.tag {
				margin-bottom: 10px;
			}
			#article a.button {
				margin: 10px 10px 10px 0px;
			}
			.branding p, .branding a {
				font-size: 14px;
			}
		}
	</style>
</head>

<body>
	<header>
		<div class="menu content-width">
			<div class="logo">
				<a href="{{ url('/') }}">
                <img src="{{ asset('img/logo.png') }}"  width="35%" height="auto">
				</a>
			</div>
			<button id="sidebar-menu-btn" on="tap:sidebar.toggle">☰</button>
		</div>
	</header>
	<amp-sidebar id="sidebar" layout="nodisplay" side="right">
		<div class="amp-custom-sidebar-header">
			<div role="button" aria-label="close sidebar" on="tap:sidebar.toggle" tabindex="0" id="sidebar-close">✕</div>
		</div>
		<ul class="sidebar-menu">
			<a  href="{{ route('home') }}" class="sidevar-nav-item">
				<li>Home</li>
			</a>
			<a href="{{ route('about') }}" class="sidevar-nav-item">
				<li>about</li>
			</a>
			<a href="{{ route('contact') }}" class="sidevar-nav-item">
				<li>contact</li>
			</a>
			<a href="{{ route('posts') }}" class="sidevar-nav-item">
				<li>Blog</li>
			</a>
			
		</ul>
		
	</amp-sidebar>
	<section class="content content-width" id="article-wrapper">
		<div id="article">
			<h1 class="title">
            {{ $post->title }}
			</h1>
			<div class="author-info">
			<a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> 
            &middot; {{ $post->created_at->format("d F, Y") }}
			</div>
			<div class="article-image">
				<amp-img src="{{ asset($post->takeImage()) }}" layout="responsive" width="1484" height="989"></amp-img>
				<p class="subtext">
					Photo by Mitra Kargo
				</p>
			</div>
			<div class="article-body">
            {!! $post->body !!}
			<div class="col-sm-5">

            	<a href="{{ route('contact') }}" >
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Sales Support</a>
			</div>
            </div>
            </div>
<div id="additional-info">
			<div class="related-box">
				<h3>Related Articles</h3>
				<ul>
					<a href="https://mitrakargo.co.id/ekspedisi-darat">
						<li>
							Jasa Ekspedisi Darat
						</li>
					</a>
					<a href="https://mitrakargo.co.id/ekspedisi-laut">
						<li>
							Jasa Ekspedisi Via Laut
						</li>
					</a>
					<a href="https://mitrakargo.co.id/ekspedisi-udara">
						<li>
						Jasa Ekspedisi Via Udara
						</li>
					</a>
					<a href="https://mitrakargo.co.id/pengiriman-barang">
						<li>
							Jasa Pengiriman Barang
						</li>
					</a>
				</ul>
			</div>
		
		</div>
		</div>
		
	</section>
	<footer>
		<div class="content content-width">
			<div class="branding">
				<p>&#169; 2020 <a href="https://mitrakargo.co.id/">Mitra Kargo</a>. All Rights Reserved.</p>
				<p>Designed & Developed by <a href="https://www.instagram.com/wildan_will_/"> Wildan Will</a>. Powered by <a href="https://mitrakargo.co.id/">Mitra Kargo
						</a>.</p>
			</div>
		</div>
	</footer>
</body>

</html>