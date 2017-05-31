<div class="container">
  <h2>Update Form</h2>
  <form method="POST" action="<?php echo base_url()?>hello/updatebaby">
  <input type="hidden" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo $record->id;?>">
    <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname" value="<?php echo $record->fname;?>">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname" value="<?php echo $record->lname;?>" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $record->email;?>">
    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $record->username;?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password" value="<?php echo $record->password;?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>