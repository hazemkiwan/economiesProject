<!DOCTYPE html>
<html>
<head>
	<title>{{$article->name}}</title>
</head>
<body>
<span style="font-size:24px;">{{$article->name}}</span>
<span style="font-size:20px; margin-left:5px;">{{$article->category->title}}</span>
<hr>
    <div>
    	<p style="font-size:18px;">{{$article->body}}</p>
    </div>
    <?php
      $comments = App\Comment::all()->where('article_id', '=', $article->id);
      
     ?>
     <br>
     <span style="color: green;">Comments:</span>
     <hr>
     <div style="height: 100px;overflow-y: scroll;">
     	@foreach($comments as $comment)
         
         	{{$comment->comment}}
         	- 
         	{{$comment->user->name}}
         	-
         	{{$comment->created_at}}
        <br>
     	@endforeach
     </div>
     @if(Auth::user())
    <div>
    	<form action = "/users/{{Auth::user()->id}}/articles/{{$article->id}}/comment" method = "post">
    	{{ csrf_field() }}
    		<textarea name="comment" class="form-control">
    			
    		</textarea>

    		<input type="submit" name="submit" value="Comment!">
    	</form>
    </div>
    @endif
</body>
</html>