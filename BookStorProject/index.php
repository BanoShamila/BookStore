<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted" style="color: black">Latest books</p>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
      <div id="navbar" class="navbar-collapse collapse"><br>
        <p>SELECT YOUR FAVORITE BOOK PART..</p>
          <ul class="nav navbar-nav navbar-center">
              <li><a href="books.php"><u>All Book</u></a></li>
              <li><a href="#"><U>Novels</U> </a></li>
              <li><a href="#"><u>Psychologies</u></a></li>
              <li><a href="#"><u>Sceinces</u></a></li>
            </ul>
        </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>