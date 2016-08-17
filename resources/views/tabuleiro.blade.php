@extends('app')

@section('content')
    <div class="tabuleiro">
        <table>
            <?php const SIZE = 8; ?> <!-- it's 8 x 8 cels -->
            @for($i = 0; $i < SIZE; $i++)
                <tr>
                @for($j = 0; $j < SIZE; $j++)
                    <td></td>
                @endfor
                </tr>
            @endfor
        </table>
    </div>
@endsection