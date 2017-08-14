<!DOCTYPE html>
<html>
<head>
	<title>articles</title>
</head>
<body>
@foreach($articles as $article)
    <div>
    	<span style="font-size:18px;">
    	<a href="/articles/{{$article->id}}">{{$article->name}}</a>
    	</span>
    	<span style="font-size:14px; margin-left:5px;">{{$article->category->title}}</span>
    	<hr>
    	<p>{{$article->body}}</p>
    </div>
@endforeach
</body>
</html>