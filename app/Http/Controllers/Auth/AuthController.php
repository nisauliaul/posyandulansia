<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\model\DataPasien;
use Auth;

class AuthController extends Controller
{
    public function register()
    {
      return view('otentikasi.register');
    }

    public function storeUser(Request $request)
    {
        // untuk mengisi di dua tabel/lebih
        \DB::beginTransaction(); 
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'role' => 'lansia',
            ]);
        } catch (\Exception $e) {
            // rollback ketika pada proses create user ada yg error datanya ga akan kesimpan
            \DB::rollback(); 
            return response()->json(['status' => 'Failed', 'message' =>$e->getMessage()],404);
        }try { //kalau try catch itu buat nangkap error
            DataPasien::create([
                'nama_pasien' => $request->name,
                'no_ktp' => $request->no_ktp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl_lahir,
                'gol_darah' => $request->gol_darah,
                'riwayat_penyakit' => $request->riwayat_penyakit,
                'role' => 'lansia',
            ]);
        } catch (\Exception $e) {
            \DB::rollback(); // ini juga sama, misal pada proses data pasien dia ada error, maka data yg udah dibuat 
            //ditabel user juga dihapus dan ga masuk ke database
            return response()->json(['status' => 'Failed', 'message' =>$e->getMessage()],404);
        }
        \DB::commit(); //ini digunakan buat nyimpan data yg udah diinput keduanya ke dalam database
        return redirect('login');
    }

    public function login()
    {
      return view('otentikasi.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect('login')->with('error', 'Email atau Password salah');
    }

    public function logout() {
      Auth::logout();

      return redirect('/');
    }

}
