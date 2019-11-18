<div class="table-responsive">
    @auth
    <table class="table" id="refsLevels-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Reward</th>
                <th>Welcome Message</th>
                <th title="Total Referrals">TR</th>
                <th title="Points Per Referal">PPR</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refsLevels as $refsLevels)
            <tr>
                <td>{!! $refsLevels->name !!}</td>
            <td>{!! $refsLevels->description !!}</td>
            <td>{!! $refsLevels->reward !!}</td>
            <td>{!! $refsLevels->CongraturatoryMessage !!}</td>
            <td>{!! $refsLevels->TargetRefferals !!}</td>
            <td>{!! $refsLevels->target_per_referal !!}</td>
                <td>
                    {!! Form::open(['route' => ['refsLevels.destroy', $refsLevels->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('refsLevels.show', [$refsLevels->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('refsLevels.edit', [$refsLevels->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
