

  <form wire:submit.prevent="submit">
  
    <label for="fname">Name</label>
    <input wire:model="name" type="text" id="name" name="name" placeholder="Your name..">
    @error("name")
    {{$message}}
    @enderror
    <br>    
    <label for="lname">Email</label>
    <input wire:model="email" type="email" id="email" placeholder="Your email..">
    @error("email")
    {{$message}}
    @enderror
<br>
    <label for="subject">Phone</label>
    <input wire:model = "phone" type="text" id="phone" name="phone" placeholder="Your phone.." >
    @error("phone")
    {{$message}}
    @enderror
<br>
    <label for="country">Message</label>
    <textarea wire:model = "message" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    @error("message")
    {{$message}}
    @enderror
    
    

    <input wire:target="submit" type="submit" value="Submit">

  </form>
