<h1>Redirecionamentos de autenticação</h1>

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
  <li>php artisan make:migration add_role_to_users --table=users</li>
  <li>composer require doctrine/dbal</li>
  <li>php artisan make:seeder UsersTableSeeder</li>
  <li>php artisan migrate:refresh --seed</li>
</ul>

<small>video 12:32</small>