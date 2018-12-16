<html>
  <head>
  </head>
  <body>
    <h1>Lista clientes</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody>
      @foreach($clients as $client)
        <tr>
          <td>{{ $client->id }}</td>
          <td>{{ $client->name }}</td>
          <td>{{ $client->email }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </body>
</html>