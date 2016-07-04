<section id="member">
        <div class="container">
            <div class="row">
       <center>
           <!-- php include brings in contents of msg.php -->
           <?php
           session_start();
if(isset($_SESSION['myusername'])){
echo "<h2>Members Only Section</h2>";
//include("members/games.php"); 
//New HTML5 JS Movie
echo "<h2>Favorite Movie</h2>";
include("movies/index.php");
echo "<h2>#RVCHourOfCode</h2>";
include("photos.php");
//include("galaga.php"); 
}
?>
       </center>
          </div>
        </div>
</section>
