<?php 
include('data.php');
include("functions.php");

$item = null;
if (isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($catalog[$id])){
        $item = $catalog[$id];
    }
}
if(!isset($item)){
    header("location : catalog.php");
    exit();
}

include("../signup/header.php");
$pageTitle = $item ? $item["title"] : "Item not found";
?>

<div class="section page">
    <div class="wrapper">
        <?php if ($item): ?>
            <div class="media-picture">
                <span>
                    <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>">
                </span>
            </div>
            <div class="media-details">
            <h1><?php echo $item["title"]; ?></h1>
            <p>Genre: <?php echo $item["genre"]; ?></p>
            <p>Format: <?php echo $item["format"]; ?></p>
            <p>Year: <?php echo $item["year"]; ?></p>
            <p>Category: <?php echo $item["Category"]; ?></p>
            <p>Authors: <?php echo implode(", ", $item["authors"]); ?></p>
            <p>Publisher: <?php echo $item["publisher"]; ?></p>
            <p>ISBN: <?php echo $item["isbn"]; ?></p>
            </div>
        <?php else: ?>
            <p>Item not found.</p>
        <?php endif; ?>
    </div>
</div>
<?php include ("footer.php");?>
