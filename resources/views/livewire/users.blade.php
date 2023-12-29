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
            <input wire:model="form.name" type="text" class="form-control" id="name" name="name">
           
            <div>
        @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>

          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <input wire:model="form.email" type="text" class="form-control" id="email" name="email" >

           
            <div>
        @error('form.email') <span class="error">{{ $message }}</span> @enderror
    </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input wire:model="form.password" type="password" class="form-control" id="password" name = "password" >

            
            <div>
        @error('form.password') <span class="error">{{ $message }}</span> @enderror
    </div>
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
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <button wire:click.prevent="edit" type="button" class="btn btn-success">Edit</button>
        <button wire:click="delete" type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
    
   
  </tbody>
</table>
</div>

</div>
