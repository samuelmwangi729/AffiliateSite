<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" id="refsCategories-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Referral Url</th>
                <th>Visites</th>
                <th>Sign Ups</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refsCategories as $refsCategory)
            <tr>
                <td>{!! $refsCategory->name !!}</td>
                <td style="font-size:8px">{!! route('refs.user',['site' => $refsCategory->name,'user_id'=> Auth()->user()->name,'ref_category_id'=> $refsCategory->id]) !!}</td>
                <td>{!! $refsCategory->referal_visits !!}</td>
                <td>{!! $refsCategory->referal_count !!}</td>
                <td>
                    {!! Form::open(['route' => ['refsCategories.destroy', $refsCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('refsCategories.show', [$refsCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('refsCategories.edit', [$refsCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
