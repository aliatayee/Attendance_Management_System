<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Role;
use App\Models\Schedule;
use App\Http\Requests\EmployeeRec;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{

    public function index()
    {

        return view('admin.employee')->with(['employees'=> Employee::all(), 'schedules'=>Schedule::all()]);
    }

    public function store(EmployeeRec $request)
    {
        $request->validated();

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->email = $request->email;
        $employee->pin_code = bcrypt($request->pin_code);
        $employee->save();

        if($request->schedule){

            $schedule = Schedule::whereSlug($request->schedule)->first();

            $employee->schedules()->attach($schedule);
        }

        // $role = Role::whereSlug('emp')->first();

        // $employee->roles()->attach($role);

        flash()->success('Success','Employee Record has been created successfully !');

        return redirect()->route('employees.index')->with('success');
    }
    public function storeFromApi(EmployeeRec $request)
    {
        /*  $datas = [
             "operation" => "fetch_user_list",
            "auth_user" => "tirono_ppa",
            "auth_code" => "iw1fcd25584jw79a6b7zr7twp452x4p",
            "access_id" => 103952415
        ];
          $datapayload = json_encode($datas);

        // Use Laravel's Http facade for the POST request (replaces cURL)
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Content-Length' => strlen($datapayload)
        ])->post('https://rumytechnologies.com/rams/json_api', $datas); // Pass as array for JSON serialization

        $result = $response->body();
        return DD($result); */

        /* $employee = new Employee;
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->email = $request->email;
        $employee->pin_code = bcrypt($request->pin_code);
        $employee->save();

        if($request->schedule){

            $schedule = Schedule::whereSlug($request->schedule)->first();

            $employee->schedules()->attach($schedule);
        }



        flash()->success('Success','Employee Record has been created successfully !');

        return redirect()->route('employees.index')->with('success'); */
    }


    public function update(EmployeeRec $request, $id)
    {
        $request->validated();
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->email = $request->email;
        $employee->pin_code = bcrypt($request->pin_code);
        $employee->save();

        if ($request->schedule) {

            $employee->schedules()->detach();

            $schedule = Schedule::whereSlug($request->schedule)->first();

            $employee->schedules()->attach($schedule);
        }

        flash()->success('Success','Employee Record has been Updated successfully !');

        return redirect()->route('employees.index')->with('success');
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();
        flash()->success('Success','Employee Record has been Deleted successfully !');
        return redirect()->route('employees.index')->with('success');
    }
}
