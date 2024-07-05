<?php 
$pageTitle = "Full Catalog";
$section = null;

// Including the data file that contains the $catalog array
include("../data.php");
include("functions.php");

// Setting the title and section based on the selected category
if (isset($_GET["cat"])){
    if($_GET['cat'] == "books"){
        $pageTitle = "Books";
        $section = "books";
    } elseif($_GET["cat"] == "movies"){
        $pageTitle = "Movies";
        $section = "movies";
    } elseif($_GET["cat"] == "music"){
        $pageTitle = "Music";
        $section = "music";
    }
}

include("header.php");
?>
<div class="section-catalog-page">
    <h1><?php echo $pageTitle; ?></h1>
    <div class="wrapper">
        <ul class="items">
          <?php 
          foreach($catalog as $id => $item){
           echo get_item_html($id,$item);
          }
          ?>
        </ul>
    </div>
</div>
<?php 
include("footer.php");
?>
