<!-- INDV SMS -->
<div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="smsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="smsModalLabel">Send SMS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="smsForm" action="smstest.php" method="POST">
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Type Message" required></textarea>
            <input type="hidden" id="studentid" name="studentId">
            <input type="hidden" id="phonenumber" name="phoneNumber">
          </div>
          <button type="submit" class="btn btn-success">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Group Sms modal -->
<div class="modal fade" id="groupsmsModal" tabindex="-1" role="dialog" aria-labelledby="smsModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="smsModalLabel">Group Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="groupsmsForm" action="smstest.php" method="POST">
          <div class="form-group">
            <Label for="groupr">PROGRAM</Label>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Program/Course" list="list-timezone" id="course"
                name="course">
            </div>

            <label for="groupmessage">MESSAGE</label>
            <textarea class="form-control" name="groupmessage" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="groupsmsForm">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>