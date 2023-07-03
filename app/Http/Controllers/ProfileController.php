<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileFormRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class ProfileController extends Controller
{
    use HasRoles;
    use InteractsWithMedia;
    /**
     * @return Factory|Application|View
     */
    public function index(): Factory|Application|View
    {
        $userId = auth('web')->id();
        $user = \auth()->user();
        $profile = Profile::with('user')
            ->where('user_id', $userId);


        return view('profile.index', [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('profile.create');
    }

    /**
     * @param $id
     * @param ProfileFormRequest $request
     * @return Redirector|RedirectResponse|Application
     */
    public function store($id, ProfileFormRequest $request): Redirector|RedirectResponse|Application
    {
        $user = User::with('profile')->findOrFail($id);

        $user->profile()->create($request->validated());

        return redirect('/profile')->with('success', 'Profile created successful');
    }

    /**
     * Display the user's profile form.
     * @param string $id
     * @return View
     */
    public function edit(string $id): View
    {
        $profile = Profile::with('user')->findOrFail($id);
        return view('profile.edit', [
            'profile' => $profile,
        ]);
    }

    /**
     * @param ProfileFormRequest $request
     * @param string $id
     * @return Redirector|Application|RedirectResponse
     */
    public function update(ProfileFormRequest $request, string $id): Redirector|Application|RedirectResponse
    {
        $profile = Profile::with('user')->findOrFail($id);
        $profile->update($request->validated());

        return redirect('/profile')->with('success', 'Profile updated successful');
    }

    /**
     * Update the user's profile information.
     * @param ProfileUpdateRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function userUpdate(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        $user = User::with('profile')->findOrFail($id);
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        if ($request->hasFile('avatar')) {
            $media = $user->getMedia('avatars')->first();

            if ($media) {
                $user->clearMediaCollection('avatars');
            }

            $user->addMediaFromRequest('avatar')
                ->toMediaCollection('avatars');
        }
        $request->user()->save();

        return Redirect::route('profile.show')->with('status', 'profile-updated');
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
}
