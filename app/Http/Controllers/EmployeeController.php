<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * @OA\Post(
     *     path="/storeemployee",
     *     tags={"Employee"},
     *     summary="Store Employee Data",
     *     description="Store Employee Data",
     *     operationId="storeemployee",
     *     @OA\Parameter(
     *          name="name",
     *          description="nama karyawan",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="salary",
     *          description="Gaji",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function store(StoreEmployee $request)
    {
        $employee = Employee::create($request->all());
        return [
            "status" => 1,
            "data" => $employee
        ];
    }

    public function update(StoreEmployee $request, Employee $employee)
    {

        $employee->update($request->all());
        return [
            "status" => 1,
            "data" => $employee,
            "msg" => "Employee updated successfully"
        ];
    }

}
