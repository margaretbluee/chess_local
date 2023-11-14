function draw_empty_board() {
 
    var t='<table id="chess table">';
    for (var i=8;i>0; i--) {
    t += '<tr>';
   
    for (var j=1;j<9;j++) {
    
    t += '<td class="chess square" id="square_'+j+' '+i+'">' + j +','+i+'</td>';
    }
    t+='</tr>';
    }
    
    t+='</table>';
    $('#chess_board').html(t);

    }

$(draw_empty_board);
