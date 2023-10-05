<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Liens Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lister les contacts</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>
<body>
    <section>
        <h1>Lister les contacts</h1>
        <table>
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Email</td>
                    <td>Message</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
    <footer>
    </footer>
    <script>
        fetch('http://localhost:8000/api/contact')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const tbody = document.querySelector('tbody');
            data.forEach(contact => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${contact.nom}</td>
                    <td>${contact.email}</td>
                    <td>${contact.message}</td>
                `;
                tbody.appendChild(row);
            });
        })
        .catch(error => {
            console.error('Erreur de récupération', error);
        });
    </script>
</body>
</html>
