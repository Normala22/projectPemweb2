<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showDataPengguna()
    {
        $users = User::all(); // Fetch all users from the database
        return view('anggota', compact('users'));
    }

    public function editAnggota($id)
    {
        $user = User::findOrFail($id);
        return view('editAnggota', compact('user'));
    }

    public function updateAnggota(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'is_admin' => $request->is_admin ? 1 : 0,
        ]);

        return redirect()->route('dashboard.showDataPengguna')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.showDataPengguna')->with('success', 'User deleted successfully');
    }

}