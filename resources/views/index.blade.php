<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript">
		function magic(...nums) {
			let sum = 0;
			nums.filter(n => n % 2 == 0).map(el => sum += el);
			return sum;
		}
		document.write(magic(1,2,3,4,5,6));
	</script>

	
</body>
</html>