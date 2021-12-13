<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyHealtStateRequest;
use App\Http\Requests\StoreHealtStateRequest;
use App\Http\Requests\UpdateHealtStateRequest;
use App\Models\HealtState;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HealtStateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('healt_state_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $healtStates = HealtState::all();

        return view('admin.healtStates.index', compact('healtStates'));
    }

    public function create()
    {
        abort_if(Gate::denies('healt_state_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.healtStates.create');
    }

    public function store(StoreHealtStateRequest $request)
    {
        $healtState = HealtState::create($request->all());

        return redirect()->route('admin.healt-states.index');
    }

    public function edit(HealtState $healtState)
    {
        abort_if(Gate::denies('healt_state_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.healtStates.edit', compact('healtState'));
    }

    public function update(UpdateHealtStateRequest $request, HealtState $healtState)
    {
        $healtState->update($request->all());

        return redirect()->route('admin.healt-states.index');
    }

    public function show(HealtState $healtState)
    {
        abort_if(Gate::denies('healt_state_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.healtStates.show', compact('healtState'));
    }

    public function destroy(HealtState $healtState)
    {
        abort_if(Gate::denies('healt_state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $healtState->delete();

        return back();
    }

    public function massDestroy(MassDestroyHealtStateRequest $request)
    {
        HealtState::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
