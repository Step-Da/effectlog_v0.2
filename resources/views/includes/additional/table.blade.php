
<h2>Остатки обновления</h2>
<div class="table-responsive">
    <table id='updateTable' class="table table-sm">
        <thead>
            <tr>
                <th>Наименование</th>
                <th>Артикул</th>
                <th>Код</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody id="testTable">
            @foreach ($_SESSION['list'] as $item)
                @if ($item[0] == 10) <tr id="row" class="table-row-color--false">    
                @else  <tr id="row" class="table-row-color--true"> @endif
                <td>{{ $item[1] }}</td>
                <td>{{ $item[2] }}</td>
                <td>{{ $item[3] }}</td>
                <td>{{ $item[0] }}</td>
                </tr> 
            @endforeach

            {{-- @for($i = 0; $i < $pag; $i++)
                @if ($list[$i][0] == 10) <tr id="row" class="table-row-color--false">    
                @else  <tr id="row" class="table-row-color--true"> @endif
                <td>{{$list[$i][1]}}</td>
                <td>{{$list[$i][2]}}</td>
                <td>{{$list[$i][3]}}</td>
                <td>{{$list[$i][0]}}</td>
            </tr>
            @endfor --}}
            
        </tbody>
    </table>
</div>