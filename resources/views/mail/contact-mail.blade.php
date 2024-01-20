<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <section>
        <div>
            <h1>You have a new contact notification</h1>

            <ul style="list-style: none;">
                <li>
                    Full Name: {{ $data['name'] }}
                </li>
                <li>
                    Email: {{ $data['email'] }}
                </li>
            </ul>

            <p>
                {{ $data['message'] }}
            </p>
        </div>
    </section>
</body>
</html>