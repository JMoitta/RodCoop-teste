<h1>Login com múltiplos campos</h1>

<h3>CMD</h3>
<ul>
  <li>php artisan make:migration add_phone_and_cpf_to_users --table=users</li>
  <li>php artisan migrate:refresh --seed</li>
  <li>composer require codeedu/code_validator:0.0.2</li>
</ul>

<h3>Tinker</h3>
<ul>
  <li>$users = App\User::all()</li>
</ul>

<small>video completo</small>