<?php require_once("includes/database.php");?>
<?php require_once("includes/functions.php");?>
<?php
	$sel_subj = "";
	$sel_page = "";
	if(isset($_GET['subj'])){
		$sel_subj = $_GET['subj'];
	}
	else if(isset($_GET['page'])){
		$sel_page = $_GET['page'];
	}
?>

<?php include("includes/header.php");?>
<table id="structure">
	<tr>
		<td id="navigation">
			<ul class="subjects">
				<?php
					$result = get_all_subjects();

					while($row = mysql_fetch_array($result)){
						echo "<li class='" . ($row["id"] == $sel_subj ? "selected" : "") . "'><a href='content.php?subj=" . urlencode($row["id"]) ."'>{$row['menu_name']}</a></li>";

						$res1 = get_pages_for_subject($row["id"]);

						echo "<ul class='pages'>";
						while($row1 = mysql_fetch_array($res1)){
							echo "<li class='" . ($row1["id"] == $sel_page ? "selected" : "") . "'><a href='content.php?page=" . urlencode($row1["id"]) . "'>" . $row1["menu_name"] . "</a></li>";
						}
						echo "</ul>";
					}
				?>
			</ul>

		</td>
		<td id="page">
			<h2>Content Area</h2>
			<?php
				echo $sel_subj;
				echo $sel_page;
			?>
		</td>
	</tr>
</table>

<?php require("includes/footer.php");?>