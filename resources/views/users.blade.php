<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <p><input type="text" name="userName" placeholder="Enter userID"></p>
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <br>
    <button type="submit">Login</button>

</form>