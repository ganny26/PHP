<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>



$.ajax({
  url: 'get.php',
  method: 'GET'
}).then(function(data) {
  console.log(data);
});


// $.ajax({
//   url: 'get.php',
//   method: 'POST',
//   data:{
//   	username:'raj',
//   	age:'22'
//   }
// }).then(function(data) {
//   console.log(data);
// });

</script>


</body>
</html>
