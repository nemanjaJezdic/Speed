<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserReqeust;
use App\Models\UserAction;
use App\Models\Users;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminUsersCon extends BaseCon
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = Users::all();

        return view('admin.users.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegisterRequest $request)
    {
        DB::beginTransaction();

        try
        {
            Users::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => md5($request->password),
                'role_id' => 2,
            ]);

            DB::commit();

            return redirect()->route('users.create')->with('success', 'User added successfully!');
        }
        catch (Exception $e)
        {
            Log::error($e->getMessage());

            // dd($e->getMessage());

            DB::rollBack();

            return redirect()->route('users.create')->with('errorMessage', 'A server error occurred!');
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['user'] = Users::find($id);

        return view('admin.users.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserReqeust $request, $id)
    {
        $user = Users::find($id);

        DB::beginTransaction();

        try {
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => md5($request->password),
                'role_id' => 2,
            ]);

            DB::commit();

            return redirect()->route('users.index')->with('success', 'User updated successfully!');
        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());

            DB::rollBack();

            return redirect()->route('users.edit', $user->id)->with('errorMessage', 'A server error occurred!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $user =Users::find($id);
            $user->delete();

            $useraction=UserAction::where("user_id",$id);
            if($useraction){
                $useraction->delete();
            }


            DB::commit();

            return redirect()->route('users.index')->with('success', 'User deleted successfully!');

        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());


            DB::rollBack();

            return redirect()->route('users.index')->with('errorMessage', 'User can not be deleted');
        }
    }
}
