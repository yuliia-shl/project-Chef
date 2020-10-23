
var total_pics_num = 4; // колличество изображений
var interval = 3000;    // задержка между изображениями
var time_out = 1;       // задержка смены изображений
var i = 0;
var timeout;
var opacity = 100;
function fade_to_next() {
	opacity--;
	var k = i + 1;
	var image_now = 'image_' + i;
	if (i == total_pics_num) k = 1;
	var image_next = 'image_' + k;
	document.getElementById(image_now).style.opacity = opacity/100;
	document.getElementById(image_now).style.filter = 'alpha(opacity='+ opacity +')';
	document.getElementById(image_next).style.opacity = (100-opacity)/100;
	document.getElementById(image_next).style.filter = 'alpha(opacity='+ (100-opacity) +')';
	timeout = setTimeout("fade_to_next()",time_out);
	if (opacity==1) {
	  opacity = 100;
	  clearTimeout(timeout);
	}
}

setInterval (function() {
  i++;
  if (i > total_pics_num) i=1;
  fade_to_next();
}, interval);

$(document).ready(function() {
    $('.input_file input[type=file]').change(function() {
        var t = $(this).val();
        if (t.indexOf('C:\\fakepath\\') + 1) t = t.substr(12);
        var e = $(this).next().find('.fake_file_input');
        e.val(t);
    });
    $('.clear_input').click(function() {
        var a = $(this).parent();
        var e = a.find('.fake_file_input');
        var t = a.find('input[type=file]');
        t.replaceWith('<input type="file" name="" >');
        e.val('');
    });
});

