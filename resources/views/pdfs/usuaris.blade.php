<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #4a90d9; color: white; padding: 8px; text-align: left; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Llista d'usuaris</h1>
    <p>Data: {{ date('d/m/Y') }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dades_usuaris as $usuari)
            <tr>
                <td>{{ $usuari->id }}</td>
                <td>{{ $usuari->name }}</td>
                <td>{{ $usuari->email }}</td>
                <td>{{ $usuari->role }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>