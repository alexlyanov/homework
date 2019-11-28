<!DOCTYPE html>

<html lang="en">

    <head>

    	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href = "/templates/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<title>mr_justadog</title>

    </head>

    <body>

		<div class="header">
			<img src="/templates/imgs/whitedog.png" style="margin-right: 925px">
			<a style="color: white; margin-right: 15px" href="/home/">Home</a>
			<a style="color: white; margin-right: 15px" href="/resume/">Resume</a>
			<a style="color: white; margin-right: 15px" href="/contacts/">Contacts</a>
			<a style="color: white" href="/comments/">Comments</a>
		</div>

		<div class="content" style="font-weight: bold; text-align: center; font-style: italic">

			<br>

			<div style="display: flex; text-align: left; font-style: normal; font-weight: normal">
				<div style="flex: 1"></div>
				<div style="flex: 10; font-size: 17px">
					<p style="font-size: 25px; font-weight: bold">Comments:</p>
					<?php
						include_once(ROOT.'/controllers/CommentsController.php');
						$newObject = new CommentsController();
						$comments_arr = $newObject->actionGetComments();
						for ($i = 0; $i < count($comments_arr); $i++) {
							$segments = explode('~', $comments_arr[$i]);
							?><a><?php echo ($i + 1).') '.$segments[1];?></a>
							<a style="font-style: italic; font-size: 13px"> (posted by <?php echo $segments[0];?>)</a><br><?php
						}
					?>
				</div>
				<div style="flex: 1"></div>
			</div>

			<br><br><br><br>

			<div style="display: flex">
				<div style="flex: 2"></div>
				<div style="flex: 4; font-size: 17px; font-weight: normal; text-align: center; font-style: normal">
					<p>If you want to say something, then go.</p>
					<form action="post_comment" method="post">
						Name: <input type="text" name="name">
						Comment: <input type="text" name="comment">
						<br><br>
						<input type="submit" name="submit" value=" Post comment " style="border-width: 2px; text-align: center; border-color: black; background-color: white">
					</form>
				</div>
				<div style="flex: 2"></div>
			</div>

		</div>

		<div class="footer">
			<a style="margin-right: 5px">@mr_justadog</a>
		</div>

	</body>

</html>