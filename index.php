<div id="paginate"> <!-- div container for styling --> 
<?php
$_productCollection = $this->getLoadedProductCollection(); //gets all products
$count = $_productCollection->getSize(); //total number of products on all pages 

$pageNumber = $_GET['p']; //page numbers in url are added as '/?p=#'

$numberPages = floor($count / 9); // nine is the pagination number added under system > configuration > catalog > frontend
$numberPages ++; //add 1 to the number of pages for loops 

if($count > 9)
{
  if (!isset($pageNumber) || $_GET['p'] == 1 ) //if the page is the front page
  {
    echo ' <a href="?p=2">Next Page >> </a>'; //add a next arrow 
  }
  else
  {
    if (isset($pageNumber) || $_GET['p'] != 1 ) // if the page is not the home page 
    {
      $previousPage = $pageNumber -1;
      $nextPage = $pageNumber + 1; 
      echo '<a href="?p='.$previousPage.'">&#60;&#60; Previous Page</a> '; //add previous page 
    }
    if( $_GET['p'] < $numberPages) //if there are more pages 
    {
      echo ' | <a href="?p='.$nextPage.'">Next Page >> </a>'; //add next page 
    }
  }

}

?>
</div>
