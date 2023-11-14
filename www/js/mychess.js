function draw_empty_board() {
    var t = '<table id="chess_square">';

    for (var i = 8; i > 0; i--) {
        t += '<tr>';
        for (var j = 1; j < 9; j++) {
            t += '<td class="chess_square" id="square_' + j + '_' + i + '">' + j + ',' + i + '</td>';
        }
        t += '</tr>';
    }
    t += '</table>';

    $('#chess_board').html(t);
}

 
$(document).ready(function() {
    // Your jQuery code here
    draw_empty_board();
});