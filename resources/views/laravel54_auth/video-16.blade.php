<h1>Testando login social</h1>


<h3>service.php</h3>
<p>Alterar o array de retorno:</p>
<ul>
  <li><pre>'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => 'http://localhost:8000/login/callback',
],

'google' => [

],</pre></li>
</ul>
 
<small>video complete</small>
