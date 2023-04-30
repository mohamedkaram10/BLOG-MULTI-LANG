<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.add');
    }

    public function getUsersDataTable()
    {
        // if (auth()->user()->can('viewAny', $this->user)) {
            $data = User::select('*');
        // } else {
        //     $data = User::where('id', auth()->user()->id);
        // }
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                return $btn = '<a href= "' . Route('dashboard.users.edit', $row->id) . '" class = "edit btn btn-success btn-sm"><i class = "fa fa-edit"></i></a><a id="deleteBtn" data-id = "' . $row->id . '" class = "edit btn btn-danger btn-sm data-toggle" data-toggle = "modal" data-target = "#deletemodal"><i class = "fa fa-trash"></i></a>';

            })

                // return $btn = '';
                //     if (auth()->user()->can('update', $row)) {
                //         $btn .= '<a href="' . Route('dashboard.users.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>';
                //     }
                //     if (auth()->user()->can('delete', $row)) {
                //         $btn .= '

                //             <a id="deleteBtn" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>';
                //     }
                // return $btn;
        //     })
            ->addColumn('status', function ($row) {
                return $row->status == null ? __('words.not activated') : __('words.' . $row->status);
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name'     => 'required|string',
            'email'     => 'required|email|unique:users',
            'status'     => 'nullable|in:admin,writer,null',
        ];

        $validatedData = $request->validate($data);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'password' =>bcrypt($request->password),
        ]);
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(Request $require)
    {
        if (is_numeric($require->id)) {
            User::where('id', $require->id)->delete();
        }
        return redirect()->route('dashboard.users.index');
    }
}

