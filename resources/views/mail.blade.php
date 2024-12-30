<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
        }

        .header {
            background-color: rgb(0 137 156 / 0.7);
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #f4f4f4;
            color: #888888;
            padding: 10px;
            text-align: center;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ $logo }}" alt="{{ $appname }} logo">
            <h1>Form Submission</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>Below is the metadata information of the user that reached out on
                {{ \Carbon\Carbon::now()->format('jS F Y h:ia') }}</p>
            <table>
                <tr>
                    <th>Data</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td>{{ $subject }}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{ $question }}</td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
            <p>Best regards,</p>
            <p>{{ $appname }} Mailing System.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} {{ $appname }}. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
