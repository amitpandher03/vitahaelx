<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Accedi</button>
</form>