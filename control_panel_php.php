<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Task#3</title>
  <style>
	 .center {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 height: 200px;
	 }
	 .container {
	 margin: auto;
	 margin-left: 5px;
	 margin-right: 5px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	}
	.cspace{
	margin-left: 5px;
	margin-right: 5px;
	}
	.button1{
	background-color:#FF0000;
	}
	 </style>  
</head>
<body>    
	<h1 style="text-align:center">Control Panel</h1>
	<form action="insertToDB.php" method="post">
		<p  style="height: 100px">
		<div class="container">
		<input type="submit" name="forward" value="Forward">
		</div>
		<br>
		<div class="container">
		<input type="submit" name="left" value="Left">
		<div class="cspace"><input type="submit" name="stop"  class="button button1" value="Stop"></div>
		<input type="submit" name="right" value="Right">
		</div>
		<br>
		<div class="container">
		<input type="submit" name="backward" value="Backward">
		</div>
		</p>
		</form>
		
		<script>
  
  window.watsonAssistantChatOptions = {
      integrationID: "25e7fbd3-9d1f-4675-b80d-98b0119929e0", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "92e5417f-5da0-4e03-96b7-cd4df55d461d", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

</body>
</html>