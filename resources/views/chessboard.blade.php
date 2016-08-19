@extends('app')

@section('content')
    <table class="chessboard">
        <!-- chessboard has 8 files x 8 ranks -->
        <?php const FILES = 8; const RANKS = 8 ?>
        @for($file = 0; $file < FILES; $file++)
            <tr class="chessboard-row">
            @for($ranks = 0; $ranks < RANKS; $ranks++)
                <td class="chessboard-cell"></td>
            @endfor
            </tr>
        @endfor
    </table>
@endsection