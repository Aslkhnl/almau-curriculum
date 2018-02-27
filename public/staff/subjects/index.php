<?php require_once('../../../private/initialize.php'); ?>

<?php
    
  

<?php $page_title = 'Your Curriculum'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<div class="subjects listing">
<h1>Subjects</h1>

<div class="actions">
<a class="action" href="">Create New Subject</a>
</div>

<table class="list">
<tr>
<th>id</th>
<th>course_code</th>
<th>course_name</th>
<th>course_cycle</th>
<th>credit</th>
<th>ects</th>
<th>exam</th>
<th>assignment</th>
<th>module</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>

<?php foreach($subjects as $sql) { ?>
<tr>
<td><?php echo $subject['course_code']; ?></td>
<td><?php echo $subject['course_cycle']; ?></td>
<td><?php echo $subject['course_name']; ?></td>
<td><?php echo $subject['credit']; ?></td>
<td><?php echo $subject['exam']  == 1 ? 'true' : 'false'; ?></td>
<td><a class="action" href="<?php echo
url_for('/staff/subjects/show.php?id=' . $subject['id']); ?>">View</a></td>
<td><a class="action" href="">Edit</a></td>
<td><a class="action" href="">Delete</a></td>
</tr>
<?php } ?>
</table>
<?php
    mysqli_free_result($result_set);
    
    ?>
</div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
