<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class UserController extends Controller //Abiyyu Dwi Fawwazy
{
  public function profile(Request $request)
  {
    return response()->json([
      'success' => true,
      'message' => 'grabbed user by token',
      'mahasiswa' => $request->token,
    ], 200);
  }
}
