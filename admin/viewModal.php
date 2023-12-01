<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
          <h1 style="color: rgb(199, 131, 5); font-weight: bold;">MESSAGE HISTORY</h1>
          <table class="table text-center table-responsive-sm font-weight-bold mt-3">
            <thead>
              <tr class="table-dark table-active">
                <th>Student ID</th>
                <th>Message</th>
                <th>Stat</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'fetchdata.php';
                if ($result_messages->num_rows > 0) {
                    while ($row = $result_messages->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['studentID'] . "</td>";
                        echo "<td>" . $row['msg'] . "</td>";
                        echo "<td class='bg-success rounded text-white'>" . $row['stat'] . "</td>";
                        $dateDelivered = isset($row['dateDelivered']) ? date("F j, Y", strtotime($row['dateDelivered'])) : '';
                        echo "<td>" . $dateDelivered . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>