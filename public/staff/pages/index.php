<?php
require_once("../../../private/initialize.php");
$title = "Staff - Pages";
include(SHARED_PATH."/staff_header.php");

?>

  <h1>Welcome to globe bank PAGE!!!</h1>

  <?php
  $pages = [
    
            ['id' => '1', 'page_name' => 'About'],
            ['id' => '2', 'page_name' => 'Shop'],
            ['id' => '3', 'page_name' => 'Contact']
          ];
  ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Page</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo $page['id']; ?></td>
          <td><?php echo $page['page_name']; ?></td>
          <td><a class="action" href="<?php echo 'show.php?id='.$page['id'] ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>


<?php
include(SHARED_PATH."/staff_footer.php");

?>