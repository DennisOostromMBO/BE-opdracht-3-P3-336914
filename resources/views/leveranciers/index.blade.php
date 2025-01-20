<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overzicht Leveranciers</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Overzicht Leveranciers</h1>
        
        <!-- Link naar de homepage -->
        <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800">Terug naar homepage</a>
    </div>

    <!-- Tabel -->
    <div class="container mx-auto p-4 bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Naam</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Contactpersoon</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Leveranciernummer</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Mobiel</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Leverancier details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leveranciers as $leverancier)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Naam }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Contactpersoon }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Leveranciernummer }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Mobiel }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <!-- Details knop -->
                            <a href="{{ route('leveranciers.show', $leverancier->Id) }}" class="text-blue-600 hover:text-blue-800">
                                <!-- Pen icoon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708L4.207 14.793a.5.5 0 0 1-.168.11l-4 1.5a.5.5 0 0 1-.63-.63l1.5-4a.5.5 0 0 1 .11-.168L12.146.854zM11.207 3L13 4.793 4.5 13.293 2.707 11.5 11.207 3zm1.586-.793L12 2.793 13.793 4.5 14.793 3.5 12.793 1.5z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $leveranciers->links() }}
        </div>
    </div>
</body>
</html>
