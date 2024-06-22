<?php 
$pageTitle = "Full Catalog ";
$section = null;

//creating an array
include("../data.php");


//setting such that if nothing is selected the title still remains to be Full catalog
if (isset($_GET["cat"])){
    //setting the title to match the selected link
if($_GET['cat']== "books"){
    $pageTitle = "Books";
    $section = "books";
}
elseif($_GET["cat"]== "movies"){
    $pageTitle = "Movies";
    $section = "movies";
}
elseif($_GET["cat"]== "music"){
$pageTitle = "Music";
$section = "music ";
}
}

include("header.php");
?>
<div class = "section-page">
    <h1><?php echo $pageTitle;?></h1>
    <div class="data">
        <ul class = "item">
          <?php 
          foreach($catalog as $item){
           
            echo"<li><a href = '#'><img src = '".$item["img"]."' alt = '".$item["title"]."'/> ></a></li>";
          }
          ?>
        </ul>
    </div>
</div>
<?php 
include("footer.php");
?>