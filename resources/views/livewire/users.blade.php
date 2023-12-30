<div>
@include('livewire.includes.create-user')
        @include('livewire.includes.search-box')
        <div id="todos-list">
           @foreach($users as $user)
                @include('livewire.includes.user-card')
           @endforeach

            <div class="my-2">
                {{$users->links()}}
            </div>
        </div>
</div>