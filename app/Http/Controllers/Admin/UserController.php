<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\User;
use App\Group;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id','asc');

        $roles = [
            'admin' => 'Administrator',
            'user' => 'Client',
        ];

        $role = $request->input('role', false);

        if ($role) {
            $users->where('role', '=', $role);
        }

        return view('admin.user.index', [
            'users' => $users->get(),
            'role' => $role,
            'roles' => $roles
        ]);
    }

    public function create()
    {
        $user = new User;
        $user->role = 'user';
        return view('admin.user.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|unique:users',
            'login' => 'required|unique:users',
        ]);

        $data = $request->except('groups');

        if (!$data['password']) {
            $data['password'] = bcrypt('123456');
        } else {
            $data['password'] = bcrypt($data['password']);
        }

        $user = $user->create($data);

        $user->update($data);

        return redirect()->route('admin.user.index')->with('success', 'User created');
    }

    public function show(User $user)
    {
        return redirect()->route('admin.user.index');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => Rule::unique('users')->ignore($user->id),
            'login' => Rule::unique('users')->ignore($user->id),
        ]);

        $data = $request->except('groups');

        if ($request->has('password') && $data['password']) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('admin.user.edit', ['user' => $user->id])->with('success', 'User updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function sendVerifyEmail($id)
    {
        $user = User::find($id);
        $user->sendVerifyEmail();

        return response()->json('success', 200);
    }


    public function redirectTo(Request $request)
    {
        $user =Auth::user();
        $user->last_logged_in = date("Y-m-d H:i:s");
        $user->save();
        if ($user->role == 'admin') {
            return redirect('/admin/page');
        } elseif ($user->role == 'user') {
            $redirectTo = $request->session()->get('redirectTo', '/');
            if (!$user->email_verified_at) {
                return redirect('/');
            }
            $request->session()->forget('redirectTo');
            return redirect($redirectTo);
        }
    }
}
