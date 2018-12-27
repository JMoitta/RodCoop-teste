<h1>Adicionando campos no registro de usuário</h1>

<h3>composer.json</h3>
<p>Adicionar em autoload:</p>
<ul>
  <li><pre>"files" : [
    "app/helpers.php"
],</pre>
    </li>
</ul>

<h3>CMD</h3>
<ul>
  <li>php artisan make:migration add_phone_and_cpf_to_users --table=users</li>
  <li>php artisan migrate:refresh --seed</li>
  <li>composer require codeedu/code_validator:0.0.2</li>



  <li>php artisan make:seeder UsersTableSeeder</li>
</ul>

<h3>Tinker</h3>
<ul>
  <li>$users = App\User::all()</li>
</ul>

<small>video 12:32</small>