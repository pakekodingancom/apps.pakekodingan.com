<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup/signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $lastName = !empty($request->lastName) ? " ".$request->lastName : "";
            $user = new User;
            $user->name = $request->firstName.$lastName;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            if($user->save()) {
                $response = [
                    'message' => 'User created',
                    'status' => [
                        'code' => 201,
                        'description' => 'Created'
                    ],
                    'results' => [
                        'data' => $user
                    ]
                ];
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $response = [
                'message' => 'An error occured',
                'status' => [
                    'code' => 500,
                    'description' => 'internal server error'
                ],
            ];
        }

        return response()->json($response, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
