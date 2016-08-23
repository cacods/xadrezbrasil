@extends('app')

@section('content')
    <table class="chessboard">
        <!-- chessboard has 8 files x 8 ranks -->
        <?php const FINAL_FILE = 'h'; const FINAL_RANK = 8 ?>
        @for($rank = FINAL_RANK; $rank >= 1; $rank--)
            <tr class="chessboard-row">
            @for($file = 'a'; $file <= FINAL_FILE; $file++)
                <td class="chessboard-cell">{{ $chessboard[$file][$rank] }}</td>
            @endfor
            </tr>
        @endfor
    </table>
@endsection