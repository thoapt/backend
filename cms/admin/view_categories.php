<?php include('../include/header.php');?>
<?php include('../include/mysqli_connect.php');?>
<?php include('../include/sidebar_admin.php');?>
<div id="content">
<h2>Manage Categories</h2>
<table>
	<thead>
		<tr>
			<th><a href="view_categories.php?sort=cat">Categories</a></th>
			<th><a href="view_categories.php?sort=pos">Position</a></th>
			<th><a href="view_categories.php?sort=by">Posted by</a></th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		// sap xep theo thu tu cua table head
			if (isset($_GET['sort'])) 
			{
				// BEGIN switch 
				switch ($_GET['sort']) 
				{
					case 'cat':
						$order_by = 'cat_name';
						break;
					case 'position':
						$order_by = 'position';
						break;
					case 'by':
						$order_by = 'name';
						break;
					default:
						$order_by= 'position';
						break;
				} 
				// END switch
			} 
			else 
			{
				$order_by='position';
			}
			// end isset[$_GET['sort']]
		// truy xuat co so du lieu de hien thi
			$q= "SELECT c.cat_id, c.cat_name, c.position, c.user_id, CONCAT_WS('', first_name, last_name) AS name";
			$q.= " FROM categories AS c ";
			$q.= " JOIN users AS u ";
			$q.= " USING(user_id) ";
			$q.= " ORDER BY {$order_by} ASC";
			$r = mysqli_query($dbc, $q)or die("Query {$q} \n <br> MySQL Error:" .mysqli_error($dbc));

			//confirm_query($r, $q); --> tao function chua die...
			while ( $cats = mysqli_fetch_array($r,MYSQLI_ASSOC)) 
			{
				echo "
				<tr>
					<td>{$cats['cat_name']}</td>
					<td>{$cats['position']}</td>
					<td>{$cats['name']}</td>
					<td><a class='edit' href='edit_category.php?cid={$cats['cat_id']}'>Edit</a></td>
					<td><a  class='delete' href='delete_category.php?cid={$cats['cat_id']}'>Delete</a></td>
				</tr>
				";
			}
		?>
		
	</tbody>
</table>
</div>
<?php include('../include/sidebar_b.php');?>
<?php include('../include/footer.php');?>