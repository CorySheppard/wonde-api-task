<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <title>Teachers | Wonde Task</title>

        <style>
            tr:nth-child(even) {
                background-color: #f3f4f6;
            }
        </style>
    </head>
    <body>

        <div class="max-w-7xl mx-auto my-8">
            <!-- Title -->

            <h1 class="text-3xl text-gray-700 font-bold">Wonde Testing School Teachers</h1>

            <!-- Table of teachers -->

            <table class="mt-8 w-full text-gray-700 text-left">
                <thead class="bg-gray-700 text-white">
                    <tr>
                        <th>Title</th>
                        <th>Forename</th>
                        <th>Surname</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers['data'] as $teacher)
                        <tr>
                            <td>{{ $teacher['title'] }}</td>
                            <td>{{ $teacher['forename'] }}</td>
                            <td>{{ $teacher['surname'] }}</td>
                        </tr>
                    @empty
                        <tr colspan="3">
                            <td>No teachers found...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </body>
</html>
