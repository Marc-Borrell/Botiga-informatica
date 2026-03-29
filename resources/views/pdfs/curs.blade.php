<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        h1 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #4a90d9; color: white; padding: 8px; text-align: left; width: 40%; }
        td { padding: 8px; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>Dades del curs</h1>
    <p>Data: {{ date('d/m/Y') }}</p>
    <table>
        <tr><th>Index</th><td>{{ $dades_curs->index }}</td></tr>
        <tr><th>Nom</th><td>{{ $dades_curs->nomCurs }}</td></tr>
        <tr><th>Tema</th><td>{{ $dades_curs->tema }}</td></tr>
        <tr><th>Descripció</th><td>{{ $dades_curs->descripcio }}</td></tr>
        <tr><th>Durada (hores)</th><td>{{ $dades_curs->durada_hores }}</td></tr>
        <tr><th>Nivell</th><td>{{ $dades_curs->nivell }}</td></tr>
        <tr><th>Preu</th><td>{{ $dades_curs->preu }}</td></tr>
        <tr><th>Data inici</th><td>{{ $dades_curs->data_inici }}</td></tr>
        <tr><th>Actiu</th><td>{{ $dades_curs->actiu }}</td></tr>
        <tr><th>Modalitat</th><td>{{ $dades_curs->modalitat }}</td></tr>
        <tr><th>Places màximes</th><td>{{ $dades_curs->places_maximes }}</td></tr>
    </table>
</body>
</html>