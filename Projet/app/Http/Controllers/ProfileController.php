<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\postulation;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function annonce(Request $request, $idAnnonce){

        $annonces = DB::table('Annonces')-> where("idAnnonce",$idAnnonce)->get();


        $idCandidat = Cookie::get('idCandidat');
        $Nom = request('nom');
        $Email = request('email');
        $Website = request('website');
        $CV = request('CV');
        $LettreMotivation = request('LettreMotivation');

        postulation::create([
            'idCandidat' => $idCandidat,
            'idAnnonce' => $idAnnonce,
            'Nom' => $Nom,
            'Email' => $Email,
            'Website' => $Website,
            'CV' => $CV,
            'LettreMotivation' => $LettreMotivation,

        ]);

        //return redirect()->route('/annonces/{idAnnonce}', ['Annonces' => $annonces]);
        return redirect()->route('annonces', ['idAnnonce' => $idAnnonce]);



    }
}
