<h1>Login</h1>
<form action="http://localhost:8000/api/auth/login" method="post">
@csrf
Email : <input name="email"/> Pwd : <input type="password" name="password"/> <button>Se connecter</button>
</form>


<h1>Supprimer le todo n°7</h1>
<form action="http://localhost:8000/api/todos/7" method="post">
@method('DELETE') 
@csrf
<button>DELETE</button>
</form>

<passport-clients></passport-clients>
<passport-authorized-clients></passport-authorized-clients>
<passport-personal-access-tokens></passport-personal-access-tokens>