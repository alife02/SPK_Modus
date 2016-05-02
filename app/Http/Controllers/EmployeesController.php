<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    public function create()
    {
        return view('admin.employees.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('admin/employees/create')
                ->withErrors($validator);
        }

        $employee = new User();
        $employee->first_name = $request->get('first_name');
        $employee->last_name = $request->get('last_name');
        $employee->username = $request->get('username');
        $employee->email = $request->get('email');
        $employee->password = bcrypt($request->get('password'));
        $employee->status = "employee";
        $employee->save();

        return redirect('admin');

    }

    public function destroy($employee)
    {
        User::find($employee)->delete();

        return redirect('admin');
    }

    public function edit()
    {
        $user = User::find(Auth::user()->id);

        return view('employee.settings', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $user)
    {
        $userData = User::find($user);

        $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
//            'oldPassword' => 'required|min:6|old_password:' . $request->get('oldPassword') . ',' . $userData->password
        ]);

        $userData->first_name = $request->get('first_name');
        $userData->last_name = $request->get('last_name');
        $userData->username = $request->get('username');
        $userData->email = $request->get('email');
        $userData->password = bcrypt($request->get('password'));
        $userData->update();

        return redirect('admin');
    }
}
