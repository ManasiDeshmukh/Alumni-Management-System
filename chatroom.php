<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		#messages {
			height: 200px;
			background: whitesmoke;
			overflow: auto;
		}
		#chat-room-frm {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<hr>
		<div class="row">
			<div class="col-md-4">
				<?php
					session_start();
					if(!isset($_SESSION['user'])) {
						header("location: index.php");
					}
					require("db/users.php");
					require("db/chatrooms.php");

					$objChatroom = new chatrooms;
					$chatrooms   = $objChatroom->getAllChatRooms();

					$objUser = new users;
					$users   = $objUser->getAllUsers();
				 ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<td>
								<?php

									foreach ($_SESSION['user'] as $key => $user) {
										$userId = $key;
										echo '<input type="hidden" name="userId" id="userId" value="'.$key.'">';
										echo "<div>".$user['name']."</div>";
									}
								 ?>
							</td>
							<td align="right" colspan="2">
										<input type="button" class="btn btn-warning" id="leave-chat" name="leave-chat" value="Leave">
									</td>
						</tr>
						<tr>
							<th colspan="3">Users</th>
						</tr>
					</thead>
					<tbody>
						 <?php
							foreach ($users as $key => $user) {
								$color = 'color: red';
								if($user['login_status'] == 1) {
									$color = 'color: green';
								}
								if(!isset($_SESSION['user'][$user['id']])) {
								echo "<tr><td>".$user['name']."</td>";
								echo "<td><span class='glyphicon glyphicon-globe' style='".$color."'></span></td>";
								echo "<td>".$user['last_login']."</td></tr>";
								}
							}
						 ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-8">
				<div id="messages">
					<table id="chats" class="table table-striped">
					  <thead>
					    <tr>
					      <th colspan="4" scope="col"><strong>Chat Room</strong></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  		foreach ($chatrooms as $key => $chatroom) {

					  			if($userId == $chatroom['userid']) {
					  				$from = "Me";
					  			} else {
					  				$from = $chatroom['name'];
					  			}
					  			echo '<tr><td valign="top"><div><strong>'.$from.'</strong></div><div>'.$chatroom['msg'].'</div><td align="right" valign="top">'.date("d/m/Y h:i:s A", strtotime($chatroom['created_on'])).'</td></tr>';
					  		}
					  	 ?>
					  </tbody>
					</table>
				</div>

				<form id="chat-room-frm" method="post" action="">
					<div class="form-group">
                    	<textarea class="form-control" id="msg" name="msg" placeholder="Enter Message"></textarea>
	                </div>
	                <div class="form-group">
	                    <input type="button" value="Send" class="btn btn-success btn-block" id="send" name="send">
	                </div>
			    </form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
	// copied from ratchet
	var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
	var data = JSON.parse(e.data);
	var row = '<tr><td valign="top"><div><strong>' + data.from +'</strong></div><div>'+data.msg+'</div><td align="right" valign="top">'+data.dt+'</td></tr>';
		    $('#chats > tbody').append(row);
};

//here #chats is table id tbody is table body(<tbody>tag)


		conn.onclose=function(e)
		{
			console.log("Connection Closed");
		}


//on button click
		$("#send").click(function(){
			var userId 	= $("#userId").val();
			//get msg from textarea
			var msg 	= $("#msg").val();
			var data = {
				userId: userId,
				msg: msg
			};
			//JSON.stringify()for encoding data
			conn.send(JSON.stringify(data));

			$("#msg").val("");

					});

		$("#leave-chat").click(function(){
			var userId 	= $("#userId").val();
			$.ajax({
				url:"action.php",
				method:"post",
				data: "userId="+userId+"&action=leave"
			}).done(function(result){
				var data = JSON.parse(result);
				if(data.status == 1) {
					conn.close();
					location = "search.php";
				} else {
					console.log(data.msg);
				}

			});

		})


	})

</script>
</html>
