<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Toll-时间</title>
</head>
<body>
	<a href="<?php echo (C("home_url")); ?>/Index/index">首页</a><br/><br/>
	当前时间戳<input type="text" name="now_timestamp" value="<?php echo ($now_timestamp); ?>" disabled="true">当前日期<input type="text" name="now_datetime" value="<?php echo ($now_datetime); ?>" disabled="true"><br/><br/>
	时间戳<input type="text" name="timestamp" id="timestamp">转日期<input type="text" name="to_datetime" id="to_datetime"><br/>
	<!-- 以下是JS -->
	<script src="//cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">
		//时间戳转日期
		$('#timestamp').bind('input propertychange', function() { 
			var timestamp = $('#timestamp').val();
			console.log(timestamp);
			$.post("<?php echo (C("home_url")); ?>/Time/ajax_timestamp_to_datetime",{timestamp:timestamp},function(result){
				$("#to_datetime").val(result);
			});
		});
	</script>
	<!-- 以上是JS -->
</body>
</html>