app.service('AuthenticationService', function($http, $state){
	var self = this;
	self.check_token = function(token){
		var data = {token: token};
		$http.post("inc/fonction.php?action=check_token", data).success(function(response){
			console.log(response);
			if (response === "unauthorized"){
				console.log("Logged out");
				$state.go("login")
			} else {
				console.log("Logged In");
				return response;
			}
		}).error(function(error){
			$state.go("login")
		})
		
	}

});