<div class="col-sm-12 col-md-12">
<h1>User Page</h1>
</div>
<div class="col-sm-12 col-md-12">
	<button type="button" class="btn btn-primary" onclick="show_add_modal();">Create user</button>
</div>
<br><br>




 <div class="table-responsive"> 
<div class="col-sm-12 col-md-12" id="pagination_data">
</div>
</div>
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<form>
        		  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
				   
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				   
				  </div>

				  <div class="form-group">
				    <label for="pass">Email password</label>
				    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password">
				   
				  </div>

				 <div class="form-group">
			    <label for="user_rola">Rola for users</label>
			    <select class="form-control" id="user_rola">
			      <option value="-1">Select rola for user</option>
			      <option value="A">Administrator</option>
			      <option value="U">User</option>
			    </select>
  </div>
				 
				
			</form>
			<div class="col-md-12 col-sm-12">
				 <p id='error'></p>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="save_new_user();">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name_edit" aria-describedby="name" placeholder="Enter name">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email_edit" aria-describedby="emailHelp" placeholder="Enter email">
           
          </div>

          <div class="form-group">
            <label for="pass">Email password</label>
            <input type="password" class="form-control" id="password_edit" aria-describedby="emailHelp" placeholder="Enter password">
           
          </div>

         <div class="form-group">
          <label for="user_rola">Rola for users</label>
          <select class="form-control" id="user_rola_edit">
            <option value="-1">Select rola for user</option>
            <option value="A">Administrator</option>
            <option value="U">User</option>
          </select>
  </div>
         
        <input type="hidden" name="value_id" id='id_user' value="">
      </form>
      <div class="col-md-12 col-sm-12">
         <p id='error_edit'></p>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="edit_user_data();">Edit user</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Delete user</h4>
          <form>
             
        <input type="hidden" name="value_id" id='delete_user_id' value="">
      </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="delete_user_data();">Delete user</button>
      </div>
    </div>
  </div>
</div>


