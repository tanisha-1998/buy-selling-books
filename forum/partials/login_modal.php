

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to iDiscuss</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/forum/partials/handleLogin.php" method="post">
  <div class="form-group">
    <label for="LoginEmail">user name</label>
    <!-- <input type="email" class="form-control" id="LoginEmail" aria-describedby="emailHelp" name="LoginEmail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    <input type="text" class="form-control" id="signupEmail" aria-describedby="emailHelp" name="LoginEmail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="LoginPass" name="LoginPass">
  </div>
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>