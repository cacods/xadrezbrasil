@extends('app')

@section('content')
    <table class="chessboard">
        <?php const SIZE = 8; ?> <!-- chessboard has 8 x 8 cells -->
        @for($i = 0; $i < SIZE; $i++)
            <tr class="chessboard-row">
            @for($j = 0; $j < SIZE; $j++)
                <td class="chessboard-cell"></td>
            @endfor
            </tr>
        @endfor
    </table>
@endsection