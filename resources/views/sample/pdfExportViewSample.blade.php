<h1>PDF Export Sample</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @if(isset($tests) && count($tests) > 0)
        @foreach($tests as $test)
            <tr>
                <td>{{$test->Name}}</td>
                <td>{{$test->Description}}</td>
            </tr>
        @endforeach
    @endif
</table>