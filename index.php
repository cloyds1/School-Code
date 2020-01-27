<?php

$posts = [

		['creator'=>'Delta', 'date_posted'=>'10/4/2019', 'title'=>'Title1', 'content'=>'Lorem ipsum dolor sit amPraesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.et, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.', 'rating'=>0, 'times_viewed'=>0],
		['creator'=>'markisbob', 'date_posted'=>'10/4/2019', 'title'=>'Title2', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.', 'rating'=>0, 'times_viewed'=>0],
		['creator'=>'PewdiepiesBro', 'date_posted'=>'10/4/2019', 'title'=>'Title3', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.ultrices interdum, nisl sem consectetur quam, sed varius.', 'rating'=>0, 'times_viewed'=>0],
		['creator'=>'Falsad', 'date_posted'=>'10/4/2019', 'title'=>'Title4', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.', 'rating'=>0, 'times_viewed'=>0],
		['creator'=>'cdawg', 'date_posted'=>'10/4/2019', 'title'=>'Title5', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.quam, sed varius.', 'rating'=>0, 'times_viewed'=>0],
		['creator'=>'gamerTown', 'date_posted'=>'10/4/2019', 'title'=>'Title6', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec metus vel ante sollicitudin ornare sed eget elit. Aenean diam nisl, convallis ac ipsum ac, sodales tempor magna. Cras blandit congue lobortis. Donec imperdiet nunc ut porttitor euismod. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius. Praesent auctor, sem tempor ultrices interdum, nisl sem consectetur quam, sed varius.', 'rating'=>0, 'times_viewed'=>0]

];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Peruser: A Reddit Clone</title>
	<style>
	
		a {
			text-decoration: none;
		}
		
		a:link {
			color: black;
			
			
		}
		
		a:visited {
			color: black;
			
			
		}
		
		a:hover {
			color: black;
			text-decoration: none;
			
		}
		
		
		
		.box:hover {
			border-color: black;
			border-width: 1px;
			border-style: solid;
		}
		
		.post-style {
			
			background-color: #FCFCFC;
			width: 100%;
			margin-bottom: 1em;
			border-radius: 1%;
			padding: 1em;
		}
		
		.post-area {
			
			margin-top: 1em;
			margin-left: 1%;
			width: 50%;

		}
		
		.post-header-style {
			
			font-weight: 5px;
			font-size: 0.75em;
		}
		
		body {
			
			background-color: #F4F4F4;
			
		}
		
	</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="" href="index.php"><h3>Peruser&nbsp;&nbsp;&nbsp;</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
	<div class="post-area">
		<?php 
			
			for($count = 0; $count < count($posts); $count++){
				echo '<a href="detail.php?id='.$count.'"><div class="post-style box"><p class="post-header-style">Posted by '.$posts[$count]['creator'].' on: ' .$posts[$count]['date_posted'].'</p><hr><p>'.$posts[$count]['content'].'</p></div></a>';
					
			}
			
		?>
	</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>