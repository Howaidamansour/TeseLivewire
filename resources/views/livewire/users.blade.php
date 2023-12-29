<div>
<div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div> 
<div class="modal fade" id="create-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input wire:model="name" type="text" class="form-control" id="name" name="name">
            @error('name')
            {{$message}}
            @enderror

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input wire:model="email" type="text" class="form-control" id="email" name="email" >

            @error('email')
            {{$message}}
            @enderror
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input wire:model="password" type="password" class="form-control" id="password" name = "password" >

            @error('password')
            {{$message}}
            @enderror
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:sub>Close</button>
        <button wire:click.prevent="store" type="button"  data-dismiss="modal" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>
        <button type="button" class="btn btn-success">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
</table>
</div>

</div>
