<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MahasiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() //Muhammad Yusuf Habibie
  {
    $mahasiswa = Mahasiswa::all();

    if (!$mahasiswa) {
      return response()->json([
        'success' => false,
        'message' => 'Mahasiswa data not found',
      ], 404);
    }

    return response()->json(
      [
        'success' => true,
        'message' => 'Grabbed all mahasiswa data',
        'mahasiswa' => $mahasiswa,
      ],
      200
    );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Equipment  $equipment
   * @return \Illuminate\Http\Response
   */
 

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Equipment  $equipment
   * @return \Illuminate\Http\Response
   */
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Equipment  $equipment
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request) //Muhammad Yusuf Habibie
  {
    $mahasiswa = Mahasiswa::find($request->nim)->delete();

    if (!$mahasiswa) {
      return response()->json([
        'success' => false,
        'message' => 'Mahasiswa data not found',
      ], 404);
    }

    return response()->json([
      'success' => 'Success',
      'message' => 'Deleted mahasiswa data'
    ], 200);
  }
}
