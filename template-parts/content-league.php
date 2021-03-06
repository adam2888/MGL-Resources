<?php
$table = get_field('league_table')
?>

<table id="myTable">
  <thead>
    <th class="team_name"> Team Name</th>
    <th onclick="sortTable(1)">P</th>
    <th onclick="sortTable(2)">W</th>
    <th onclick="sortTable(3)">D</th>
    <th onclick="sortTable(4)">L</th>
    <th onclick="sortTable(5)">GF</th>
    <th onclick="sortTable(6)">GA</th>
    <th onclick="sortTable(7)">GD</th>
    <th onclick="sortTable(8)">Pts</th>
<tbody>

<?php  foreach ( $table['body'] as $tr ){ ?>

  <tr>
     <?php foreach ( $tr as $td ){ ?>
       <td><?php echo $td['c'] ?> </td>
     <?php } ?>
  </tr>
<?php } ?>
</tbody>
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc";
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
        shouldSwitch = true
        break;
        }
      } else if (dir == "desc") {
        if (Number(x.innerHTML) > Number(y.innerHTML)) {
        shouldSwitch = true
        break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>



<?php    wp_reset_postdata();
?>
