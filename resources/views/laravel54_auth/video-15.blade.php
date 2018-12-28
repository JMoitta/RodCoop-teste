<h1>Iniciando com Socialite</h1>

<h3>CMD</h3>
<ul>
  <li>composer require laravel/socialite</li>
</ul>

<h3>app.php</h3>
<p>Adicionar ao array de retorno:</p>
<ul>
  <li>\Laravel\Socialite\SocialiteServiceProvider::class</li>
</ul>

<h3>service.php</h3>
<p>Adicionar ao array de retorno:</p>
<ul>
  <li><pre>'github' => [
    'client_id' => env('GITHUB_CLIENT_ID'),
    'client_secret' => env('GITHUB_CLIENT_SECRET'),
    'redirect' => 'http://schoolofnet.com',
],</pre></li>
</ul>


<h3>.env</h3>
<p>Adicionar ao final do arquivo:</p>
<ul>
  <li>GITHUB_CLIENT_ID=5dbf33dd8059505dc6eb</li>
  <li>GITHUB_CLIENT_SECRET=909d33831db3bcd3f1c40333a3974b1c6f6b45fa</li>
</ul>
 
<small>video complete</small>