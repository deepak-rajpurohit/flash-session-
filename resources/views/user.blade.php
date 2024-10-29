<div>
    <h1>Add new User</h1>
    {{ session('message') }}

    {{ session()->reflash() }}
    <form action="{{ route('add') }}" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter user name"/>
        <br><br>
        <input type="email" name="email" placeholder="Entre emial"/>
        <br><br>
        <input type="text" name="phone" placeholder="Enter Number"/>
        <br><br>
        <button>Add new user</button>
    </form>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
