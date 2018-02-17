<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/scrollBar.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<title>MIST Journal</title>

<link rel="stylesheet" type="text/css" href="css/home.css">

<style>

	@font-face {
		font-family:lobster;
		src:url(fonts/Lobster_1.3.otf);	
	}
	
	* {
		margin:0px;
		padding:0px;
		box-sizing:border-box;	
	}
	
	.textarea-icon-container ::-webkit-scrollbar {
		width: 12px;
	}
	
	.textarea-icon-container ::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
		border-radius: 10px;
	}
	 
	.textarea-icon-container ::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}
	
	.author-copy-editor-message-container {
		position:relative;
		top:110px;
		min-height:400px;
		width:80%;
		margin:0px auto 10px auto;	
	}
	
	.author-copy-editor-message-container h1 {
		color:#32CD99;
		text-shadow:3px 0px 5px black;	
		font-size:50px;
		font-family:lobster;
	}
	
	.author-copy-editor-message-container h1 {
		text-align:center;
	}	
	
	.author-copy-editor-comment {
		width:100%;
		position:relative;
		background-color:#d3d3d3;
		border-radius:10px;
		padding:20px 40px;	
		margin-bottom:30px;
		/*box-shadow:3px 0px 10px black;*/
	}
	
	.author-comment {
		width:100%;
		background-color:#f1f1f1;
		position:relative;
		padding:20px 40px;
		border-radius:10px;	
		margin-bottom:30px;
		/*box-shadow:3px 0px 10px black;*/
	}
	
	.topNavbar {
		margin-top:-10px;	
	}
	
	strong {
		font-size:25px;	
		color:#542a0c;
	}
	
	small {
		font-size:20px;	
		color:#d2691e;
	}
	
	.textarea-icon-container {
		width:100%;
		height:60px;
		background-color:blue;
		position:relative;	
	}
	
	textarea {
		resize:none;
		position:absolute;	
		width:100%;
		height:100%;
		padding-right:40px;
	}
	
	.textarea-icon-container i {
		position:absolute;
		right:20px;
		bottom:10px;
		cursor:pointer;
	}
</style>
</head>

<body>
	<?php include_once("authorNavigationBar.php"); ?>
    	
        
        <div class="author-copy-editor-message-container">
        
          <h1>Author & Copy Editor conversession</h1>  
          
          <!--<a name="author-bottom"></a>-->  
          
          <div class="author-copy-editor-comment w3-card-4">
              <strong style="display:block;">Adam Ratner(Copy Editor)</strong>
              <small style="display:block;">SEPTEMBER 14, 2013</small>
              <p>Well sure, there’s a plugin out there for everything, but this article is not only about learning this technique but thinking about it and maybe using it in different ways in different places. I mean, yeah, you could just use that plugin you’ve pointed out, but the article is about learning. I didn’t actually know about everything in this article so it was pretty eye opening.</p>
          </div>

          
          <div class="author-comment w3-card-4">
              <strong style="display:block;">Author</strong>
              <small style="display:block;">SEPTEMBER 17, 2013</small>
              <p>Great article that’s transparent about the complexities involved with this stuff. Thanks for sharing. Just a few things to point out…

That one example wasn’t a true pause/resume because easing isn’t maintained (it restarts each time).
You cannot jump to a specific spot in the css animation/transition like seek(). So no scrubbing. Correct me if I’m wrong.
It’s impossible (or incredibly complex) to independently control aspects of the transform like scale, rotation, skew, and position with different timing and/or easing. Imagine rotating for 5 seconds, but halfway through that, start scaling up, and then move for the final second using a unique ease. This is a major problem (in my opinion).
Easing options are pretty limited in css. You can’t do Elastic, Bounce, etc.

In my experience, simple animation is fine with CSS (assuming compatibility with older browsers isn’t a concern), but anything moderately complex quickly becomes a nightmare. There’s a reason specialized libraries like GSAP (as felix mentioned) are becoming so popular. For all the hype surrounding CSS animations/transitions, they just aren’t well-suited for a robust animation workflow. Few people are talking candidly about the limitations and complexities, so I sure appreciate your article.

I know your goal wasn’t to say JS animation is “bad” or CSS is “better” – I just thought I’d chime in with a few caveats I’ve stumbled across when wrestling with css animations . I don’t mean any of this in an argumentative way.

Shameless plug: there’s a “cage match” article that gives a detailed comparison between CSS animations/transitions and GSAP at http://www.greensock.com/transitions/ and http://www.greensock.com/why-gsap/. You might be surprised.</p>
          </div>
          
          <div class="textarea-icon-container">
          	  <textarea placeholder="Type your message..."></textarea>
              <i class="fa fa-paperclip w3-text-red w3-xlarge" aria-hidden="true" title="attach-file"></i>
          </div>
           	
        </div>
        
        
    <?php include_once("footer.php"); ?>
    
    <script>
    	document.getElementsByClassName("header-link")[2].classList.add("active");
    </script>
</body>
</html>