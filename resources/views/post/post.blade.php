<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="{{$info->description}}">
	<meta name="keywords" content="{{implode(',', $info->tags)}}">
	<meta name="author" content="{{$info->author}}">

	<title>Running out of ideas - SHTC english blog</title>
	
	<!--Include css file(s)-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{url('css/global.css')}}">
	<link rel="stylesheet" href="{{url('css/post.css')}}">
	<!--Twemoji library-->
	<link href="https://rawgit.com/ellekasai/twemoji-awesome/gh-pages/twemoji-awesome.css" rel="stylesheet">
	<script src="{{url('js/post.js')}}" ></script>
</head>
<body>
	@include('nav')
	<div class="post__container">
		<h1>{{$info->title}} <i class="twa twa-confused"></i></h1>
		<div class="content__block">
			@include('posts_files/' . $info->url)
			<br />
			<div class="post__metadata__container">
				<div class="post__author"><i>by</i>&nbsp;&nbsp;&nbsp; <a style="color:#000;" href="/author/{{str_slug($info->author, '_')}}">{{$info->author}}</div><br />
				<div class="post__tags">
					@foreach ($info->tags as $tag)
						@if(!$loop->last)
							<a href="/tag/{{$tag}}">{{$tag}}</a>&nbsp;|
						@else
							<a href="/tag/{{$tag}}">{{$tag}}</a>
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="post__comments__container">
		<div id="emoji" class="comment__emojis"><h3>React:</h3><br /><i id="great" class="twa twa-3x twa-grin"></i><i id="funny" class="twa twa-3x twa-joy"></i><i id="thought_provoking" class="twa twa-3x twa-thinking-face"></i><i id="confusing" class="twa twa-3x twa-confused"></i><i id="boring" class="twa twa-3x twa-sleeping-face"></i></div>
	</div>
</body>
</html>