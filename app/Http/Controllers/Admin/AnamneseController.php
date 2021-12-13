<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnamneseRequest;
use App\Http\Requests\StoreAnamneseRequest;
use App\Http\Requests\UpdateAnamneseRequest;
use App\Models\Anamnese;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnamneseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('anamnese_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $anamneses = Anamnese::all();

        return view('admin.anamneses.index', compact('anamneses'));
    }

    public function create()
    {
        abort_if(Gate::denies('anamnese_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.anamneses.create');
    }

    public function store(StoreAnamneseRequest $request)
    {
        $anamnese = Anamnese::create($request->all());

        return redirect()->route('admin.anamneses.index');
    }

    public function edit(Anamnese $anamnese)
    {
        abort_if(Gate::denies('anamnese_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.anamneses.edit', compact('anamnese'));
    }

    public function update(UpdateAnamneseRequest $request, Anamnese $anamnese)
    {
        $anamnese->update($request->all());

        return redirect()->route('admin.anamneses.index');
    }

    public function show(Anamnese $anamnese)
    {
        abort_if(Gate::denies('anamnese_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.anamneses.show', compact('anamnese'));
    }

    public function destroy(Anamnese $anamnese)
    {
        abort_if(Gate::denies('anamnese_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $anamnese->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnamneseRequest $request)
    {
        Anamnese::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
