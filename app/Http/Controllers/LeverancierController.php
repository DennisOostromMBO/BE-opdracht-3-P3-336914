<?php
namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::paginate(4);
        return view('leveranciers.index', compact('leveranciers'));
    }

    public function show($id)
    {
        $leverancier = Leverancier::with('contact')->findOrFail($id);
        return view('leveranciers.show', compact('leverancier'));
    }
    public function edit($id)
    {
        $leverancier = Leverancier::with('contact')->findOrFail($id);
        return view('leveranciers.edit', compact('leverancier'));
    }

    
    public function update(Request $request, $id)
    {
        // Ophalen van de leverancier en bijbehorende contactgegevens
        $leverancier = Leverancier::with('contact')->findOrFail($id);
    
        // Validatie van de invoervelden
        $validatedData = $request->validate([
            'Naam' => 'required|string|max:255',
            'Contactpersoon' => 'required|string|max:255',
            'Leveranciernummer' => 'required|string|max:255',
            'Mobiel' => 'required|string|max:255',
            'Straat' => 'nullable|string|max:255',
            'Huisnummer' => 'nullable|string|max:255',
            'Postcode' => 'nullable|string|max:255',
            'Stad' => 'nullable|string|max:255',
        ]);
    
        // Check of het telefoonnummer de specifieke waarde heeft en of de Id gelijk is aan 5
        if ($leverancier->Id == 5 && $validatedData['Mobiel'] === '06-39398825') {
            return redirect()
                ->route('leveranciers.edit', $leverancier->Id)
                ->with('error', 'Door een technische storing is het niet mogelijk de wijziging door te voeren. Probeer het op een later moment nog eens.');
        }
    
        // Update de gegevens voor Leverancier
        $leverancier->Naam = $validatedData['Naam'];
        $leverancier->Contactpersoon = $validatedData['Contactpersoon'];
        $leverancier->Leveranciernummer = $validatedData['Leveranciernummer'];
        $leverancier->Mobiel = $validatedData['Mobiel'];
        $leverancier->save();
    
        // Update de gegevens voor Contact (adressen)
        $leverancier->contact->Straat = $validatedData['Straat'];
        $leverancier->contact->Huisnummer = $validatedData['Huisnummer'];
        $leverancier->contact->Postcode = $validatedData['Postcode'];
        $leverancier->contact->Stad = $validatedData['Stad'];
        $leverancier->contact->save();
    
        // Redirect naar de edit-pagina met een succesbericht
        return redirect()
            ->route('leveranciers.edit', $leverancier->Id)
            ->with('success', 'De wijzigingen zijn doorgevoerd.');
    }
}




