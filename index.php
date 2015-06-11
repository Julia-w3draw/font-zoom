<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<div id='_main' style='font-size: 1em'>
			Fusce vel nisi eu lacus viverra condimentum. Cras sed pharetra tortor, et sollicitudin arcu. Aliquam quam tortor, luctus sed ultrices sed, gravida lobortis leo. Ut ac urna pharetra, scelerisque neque in, blandit risus. Aliquam erat volutpat. Praesent rhoncus at velit id mollis. Donec eget arcu quam. Aliquam ut orci ut turpis sollicitudin faucibus quis at nulla. Morbi ut nibh magna. Aliquam vestibulum neque tempus, ornare quam quis, accumsan ligula. Praesent eu elit sit amet tellus venenatis tempus a quis metus. Proin ac vestibulum libero. Aliquam erat volutpat. Mauris porttitor est a pellentesque posuere. Nunc consequat nunc ut lacus cursus ultrices. Aliquam mattis vel lacus ac lacinia. 
		</div>
		<br>
		<div id='font_up' onclick='_font_up()' style='width: 50px; height: 30px; background: rgba(0,0,0,0.5)'>F++</div>
		<br>
		<div id='font_down' onclick='_font_down()' style='width: 50px; height: 30px; background: rgba(0,0,0,0.5)'>F--</div>

		<script>
		var _main=document.getElementById('_main')		
		
		function _font_up(){			
			var _font_size=parseFloat(_main.style.fontSize)
			_font_size+=.1
			_main.style.fontSize=_font_size+'em'
		}
		
		function _font_down(){
			var _font_size=parseFloat(_main.style.fontSize)
			_font_size-=.1
			if(_font_size<0.2)_font_size=0.2
			_main.style.fontSize=_font_size+'em'		}
		</script>
	</body>
</html>
