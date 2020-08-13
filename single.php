<?php include"includes/header.php" ?>
<?php require_once("includes/connection.php") ?>
		<?php 
			if (isset($_GET["id"])) {
				$id=$_GET["id"];
				$query=mysqli_query($conn,"select * from tb_blog where id = $id");
				$data=mysqli_fetch_array($query);
				?>
				<div class="single-blog">
					<div class="text-center">
						<h1><?php echo $data["title"]; ?></h1>
						<p>Ngày đăng :<?php echo $data["date"]; ?></p>
						<img src=" <?php echo "img/".$data["url"] ; ?>">
					</div>
				</div>
			<?php }
		 ?>
<?php include"includes/footer.php" ?>