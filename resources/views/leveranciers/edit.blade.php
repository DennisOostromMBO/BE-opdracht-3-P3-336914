<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leverancier Wijzigen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Leverancier Wijzigen</h1>
    </div>

  


    @if(session('success'))
    <div id="success-message" class="p-4 mb-4 text-green-800 bg-green-200 rounded-lg">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(() => {
            window.location.href = "{{ route('leveranciers.show', $leverancier->Id) }}";
        }, 3000);
    </script>
    @endif

    @if(session('error'))
    <div id="error-message" class="p-4 mb-4 text-red-800 bg-red-200 rounded-lg">
        {{ session('error') }}
    </div>
    <script>
        setTimeout(() => {
            window.location.href = "{{ route('leveranciers.show', $leverancier->Id) }}";
        }, 3000);
    </script>
    @endif
    
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <form action="{{ route('leveranciers.update', $leverancier->Id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-4">
                <div class="flex justify-between">
                    <label for="Naam" class="w-1/4 text-sm font-medium text-gray-700">Naam</label>
                    <input type="text" name="Naam" id="Naam" value="{{ old('Naam', $leverancier->Naam) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex justify-between">
                    <label for="Contactpersoon" class="w-1/4 text-sm font-medium text-gray-700">Contactpersoon</label>
                    <input type="text" name="Contactpersoon" id="Contactpersoon" value="{{ old('Contactpersoon', $leverancier->Contactpersoon) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex justify-between">
                    <label for="Leveranciernummer" class="w-1/4 text-sm font-medium text-gray-700">Leveranciernummer</label>
                    <input type="text" name="Leveranciernummer" id="Leveranciernummer" value="{{ old('Leveranciernummer', $leverancier->Leveranciernummer) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex justify-between">
                    <label for="Mobiel" class="w-1/4 text-sm font-medium text-gray-700">Mobiel</label>
                    <input type="text" name="Mobiel" id="Mobiel" value="{{ old('Mobiel', $leverancier->Mobiel) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-4">
                    <div class="flex justify-between">
                        <label for="Straat" class="w-1/4 text-sm font-medium text-gray-700">Straat</label>
                        <input type="text" name="Straat" id="Straat" value="{{ old('Straat', $leverancier->contact->Straat) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between">
                        <label for="Huisnummer" class="w-1/4 text-sm font-medium text-gray-700">Huisnummer</label>
                        <input type="text" name="Huisnummer" id="Huisnummer" value="{{ old('Huisnummer', $leverancier->contact->Huisnummer) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between">
                        <label for="Postcode" class="w-1/4 text-sm font-medium text-gray-700">Postcode</label>
                        <input type="text" name="Postcode" id="Postcode" value="{{ old('Postcode', $leverancier->contact->Postcode) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between">
                        <label for="Stad" class="w-1/4 text-sm font-medium text-gray-700">Stad</label>
                        <input type="text" name="Stad" id="Stad" value="{{ old('Stad', $leverancier->contact->Stad) }}" required class="w-3/4 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

            <div class="mt-6 flex justify-between items-center">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Sla op
                </button>
                <a href="{{ route('leveranciers.index') }}">
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        Terug naar overzicht
                    </button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>
