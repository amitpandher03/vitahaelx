<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Conferma Password">
    <button type="submit">Registrati</button>
</form>
