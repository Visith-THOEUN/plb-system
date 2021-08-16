<?php

namespace App\Http\Controllers\Admin;

use App\JobTitle;
use App\Http\Controllers\Controller;
use Gate;
use App\Http\Requests\MassDestroyJobTitleRequest;
use App\Http\Requests\StoreJobtitleRequest;
use App\Http\Requests\UpdateJobTitleRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobTitleController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('jobtitle_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobtitles = JobTitle::all();
        return view('admin.jobTitles.index', compact('jobtitles'));
    }

    public function create()
    {
        abort_if(Gate::denies('jobtitle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.jobTitles.create');
    }

    public function store(StoreJobtitleRequest $request)
    {
         JobTitle::create($request->all());
         return redirect()->route('admin.jobtitles.index');
    }

    public function show(JobTitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.jobTitles.show', compact('jobtitle'));
    }

    public function edit(JobTitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.jobTitles.edit', compact('jobtitle'));
    }

    public function update(UpdateJobTitleRequest $request, JobTitle $jobtitle)
    {
         $jobtitle->update($request->all());
         return redirect()->route('admin.jobtitles.index');
    }

    public function destroy(JobTitle $jobtitle)
    {
        abort_if(Gate::denies('jobtitle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $jobtitle->delete();
        return back();
    }

    public function massDestroy()
    {
         abort_if(Gate::denies('jobtitle_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
         JobTitle::whereIn('id', request('ids'))->delete();
         return response(null, Response::HTTP_NO_CONTENT);
    }
}
