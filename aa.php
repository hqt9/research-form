
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="all">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		.wrapper {overflow: hidden; min-height: 100%;}
		.page {width: 200%;padding-right: 100%;height: 100%; overflow: scroll; position: relative; transform: translateX(0);transition: transform .3s;box-sizing: border-box;}
		.page.page-shift {transform: translateX(-50%);}
		.one {width: 100%; height: 100% }
		.one .content {padding: 10px;font-size: 20px; }
		.two {position: absolute;top: 0;left: 50%; width: 50%; height: 100%;background: #cae3d8;}
		.first-div {padding: 10px;} 
		form input::placeholder {font-size: 14px;} 
		.input-text {width: 50%; border: 1px solid #ddd; height: 40px;padding: 0 10px;} 
		.btn {display: block; width: 80%;margin: 10px auto; height: 50px;line-height: 50px;text-align: center;border-radius: 5px; background-color: #99c4f2; border: 1px solid transparent;}
		#input-name, #input-tel, #input-email {transition: .3s; }
		.input-names {padding: 10px;color: red;height: 40px;line-height: 40px;}
		#input-tel1, #input-tel2 {display: none;padding: 10px;color: red; transition: .3s; }
		#input-email {padding: 10px;color: red; transition: .3s; }
		#input-email.email-hidden {opacity: 0;display: none;}

	</style>
</head>

<body>
	<div class="wrapper">
		<div class="page">
			<div class="one">
				<div><button class="btn">左右切换</button></div>
				<div class="content">The input name use ajax getHttp</div>

				<div class="two"><div style="padding: 10px;padding-top: 50px;">左右切换</div></div>
				<div style="width: 100%; ">
					<form name="test-form" id="test-form" method="post" action="#">
						<div class="first-div"><label>name: </label><input type="text" name="name" class="input-text" placeholder="name"></div>
						<div id="input-name" class="input-name"></div>
					</form>
				</div>
			</div>
			<div class="two"><div style="padding: 10px;">左右切换</div></div>
		</div>
	</div>

<script type="text/javascript">
	$(function(){
		$('button').on('click', function(){
			$('.page').addClass('page-shift');
		})

		$('.two').on('click', function(){
			$('.page').removeClass('page-shift');
		})

		$('.input-text').on('keyup', function(){
			var str = trim($('.input-text').val());
			console.log(str);
			if(str.length == 0){
				$("#input-name").text('').removeClass('input-names');
				return;
			}
			$.ajax({
				url: './gethint.php',
				data: { 'q':str }
			}).done(function(result){
				$("#input-name").text(result).addClass('input-names');
			})
		})
	});
</script>

<script type="text/javascript">
	function trim(str){ //删除左右两端的空格
　　    return str.replace(/(^\s*)|(\s*$)/g, "");
　　}
　　function ltrim(str){ //删除左边的空格
　　    return str.replace(/(^\s*)/g,"");
　　}
　　function rtrim(str){ //删除右边的空格
　　    return str.replace(/(\s*$)/g,"");
　　}
</script>

</body>

</html>