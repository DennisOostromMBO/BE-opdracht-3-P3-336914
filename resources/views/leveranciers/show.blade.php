<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leverancier Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Header -->
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Leverancier Details</h1>
    </div>

    <!-- Details van de leverancier -->
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <tbody>
                <tr class="border-b">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Naam</th>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Naam }}</td>
                </tr>
                <tr class="border-b">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Contactpersoon</th>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Contactpersoon }}</td>
                </tr>
                <tr class="border-b">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Leveranciernummer</th>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Leveranciernummer }}</td>
                </tr>
                <tr class="border-b">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Mobiel</th>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->Mobiel }}</td>
                </tr>

                <!-- Controleer of er een contactpersoon is gekoppeld -->
                @if ($leverancier->contact)
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Straat</th>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->contact->Straat }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Huisnummer</th>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->contact->Huisnummer }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Postcode</th>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->contact->Postcode }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Stad</th>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $leverancier->contact->Stad }}</td>
                    </tr>
                @else
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Contactgegevens</th>
                        <td class="px-4 py-2 text-sm text-gray-700">Geen contactgegevens beschikbaar</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Wijzig Knop -->
    <div class="container mx-auto p-4">
        <a href="{{ route('leveranciers.edit', $leverancier->Id) }}" class="inline-block">
            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Wijzig</button>
        </a>
        <a href="{{ route('leveranciers.index') }}" class="inline-block">
            <button class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Terug naar overzicht</button>
        </a>
    </div>

</body>
</html>
