@extends('layouts.admin')
@section('content')
@can('anamnese_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.anamneses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.anamnese.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.anamnese.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Anamnese">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.air') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.tiredness') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.fever') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.pain') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.head') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.chest') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.muscle') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.smell') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.taste') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.diarrhea') }}
                        </th>
                        <th>
                            {{ trans('cruds.anamnese.fields.sneeze') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($anamneses as $key => $anamnese)
                        <tr data-entry-id="{{ $anamnese->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $anamnese->id ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->air ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->air ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->tiredness ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->tiredness ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->fever ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->fever ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->pain ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->pain ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->head ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->head ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->chest ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->chest ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->muscle ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->muscle ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->smell ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->smell ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->taste ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->taste ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->diarrhea ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->diarrhea ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $anamnese->sneeze ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $anamnese->sneeze ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('anamnese_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.anamneses.show', $anamnese->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('anamnese_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.anamneses.edit', $anamnese->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('anamnese_delete')
                                    <form action="{{ route('admin.anamneses.destroy', $anamnese->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('anamnese_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.anamneses.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Anamnese:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection