<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\JobTitle;
use App\Gender;
use App\Department;
use Gate;
use App\Http\Requests\MassDestroyEmployeeRequest;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('employee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        abort_if(Gate::denies('employee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobtitles = JobTitle::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $genders = Gender::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.employees.create', compact('jobtitles', 'genders', 'departments'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        Employee::create($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function show(Employee $employee)
    {
        abort_if(Gate::denies('income_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        abort_if(Gate::denies('employee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobtitles = JobTitle::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $genders = Gender::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $departments = Department::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        return view('admin.employees.edit', compact('employee','jobtitles', 'genders', 'departments'));
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect()->route('admin.employees.index');
    }

    public function destroy(Employee $employee)
    {
        abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $employee->delete();
        return back();
    }

    public function massDestroy(MassDestroyEmployeeRequest $request)
    {
         abort_if(Gate::denies('employee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         Employee::whereIn('id', request('ids'))->delete();
         return response(null, Response::HTTP_NO_CONTENT);
    }
}
