<h1>Listagem de dados</h1>

<p>Comandos ultilizados</p>
<ul>
    <li>php artisan tinker</li>
    <ul>
        <li>$client = new \App\Models\Client();</li>
        <li>$client->name = 'Luiz Carlos';</li>
        <li>$client->name</li>
        <li>$client->email = 'luiz@son.com.br';</li>
        <li>$client->email</li>
        <li>$client->save()</li>
        <li>$client</li>
        <li>$clients = \App\Models\Client::all()</li>
        <li>$clients[0]</li>
        <li>$clients = \App\Models\Client::find(1)</li>
        <li>$clients = \App\Models\Client::find(2)</li>
        <li>$client->name = "Luiz Carlos Diniz"</li>
        <li>$client->save()</li>
        <li>$client</li>
        <li>$client->delete()</li>
        <li>$clients = \App\Models\Client::find(1)</li>
        <li>$clients = \App\Models\Client::all()</li>
        <li>count($clients)</li>
    </ul>
</ul>

