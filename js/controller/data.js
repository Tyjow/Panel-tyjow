app.controller('DataCtrl', function($scope, $http, $resource, DTOptionsBuilder, $state, AuthenticationService){

	//Variables
    /*$scope.signUpInfo = {
        username: undefined,
        password: undefined
    }
    
    $scope.loginInfo = {
        username: undefined,
        password: undefined
    }
    
    var result = {
        test: undefined
    }
    
    result.test = {
        test: "test",
        test2: "test2",
        test3: "testers"
    }
    
	result.test = JSON.stringify(result.test);*/

	// Option personnalisé de sélection du nombre d'entrée visible
	$scope.dtOptions = DTOptionsBuilder.newOptions()
        .withOption('order', [1, 'asc']).withOption('lengthMenu', [5, 10, 20, 50, 100])

	$scope.text = "Aucun article sélectionné.";
	$scope.articles = $scope.text;
	$scope.description = $scope.text;
	$scope.reference = $scope.text;
	$scope.fournisseurs = $scope.text;
	$scope.stock = $scope.text;

	$scope.blankText = "";
	
	$scope.blank_text = function() {
		$scope.date = $scope.blankText;
	}

	var vm = this;
	$scope.get_articles = function() {
	    $http.get('inc/fonction.php?action=get_articles').success(function(datas) {
	        vm.datas = datas;
	    });	
	}

    $scope.get_by_id = function(id) {
		$http.post('inc/fonction.php?action=get_by_id',{'id'     : id}).success(function(data) {
        	$scope.id = data[0]["id"];
            $scope.articles = data[0]["articles"];
            $scope.description = data[0]["description"];
            $scope.reference = data[0]["reference"];
            $scope.fournisseurs = data[0]["fournisseurs"];
            $scope.date = data[0]["date"];
            $scope.stock = data[0]["stock"];
			//console.log($scope.articles);
		});
    }

    $scope.update_article = function() {
		$http.post('inc/fonction.php?action=update_article',{
	            'id'            : $scope.id,
	            'articles'     : $scope.articles.trim(),
	            'description'     : $scope.description.trim(),
	            'reference'    : $scope.reference.trim(),
	            'fournisseurs' : $scope.fournisseurs.trim(),
	            'date' : $scope.date.trim(),
	            'stock' : $scope.stock.trim()
			}).success(function (data) {
        	$scope.get_articles();
		});
    }

    $scope.add_article = function() {
		$http.post('inc/fonction.php?action=add_article',{
	            'articles'     : $scope.articlesAdd.trim(),
	            'description'     : $scope.descriptionAdd.trim(),
	            'reference'    : $scope.referenceAdd.trim(),
	            'fournisseurs' : $scope.fournisseursAdd.trim(),
	            'date' : $scope.date.trim(),
	            'stock' : $scope.stock.trim()
			}).success(function (data) {
        	$scope.get_articles();
		});
    }

    $scope.delete_article = function(id) {  
		$http.post('inc/fonction.php?action=delete_article',{'id'     : id}).success(function(data) {
		    $scope.get_articles();
		})
    }

    $scope.login_user = function () {  
        var data = {
            'username': $scope.loginInfo.username,
            'password': $scope.loginInfo.password
        }
        console.log(data);
        $http.post("inc/fonction.php?action=login_user", data).success(function(response){
            localStorage.setItem("token", JSON.stringify(response.trim()));
            console.log(response);
            $state.go("gestion");
            //$state.go("gestion", result);
        }).error(function(error){
            console.error(error);
		});

	}

	$scope.sign_up = function (){
        var data = {
            'username': $scope.signUpInfo.username,
            'password': $scope.signUpInfo.password
        }
        
        $http.post("inc/fonction.php?action=sign_up", data).success(function(response){
            console.log(response);
            localStorage.setItem("token", JSON.stringify(response));
            $state.go("gestion");
        }).error(function(error){
            console.error(error);
        });
	}

	
	
	
	$scope.logout_user = function(){
		//Si l'utilisateur n'est pas connecté
		var token;
		if (localStorage['token']){
	    token = JSON.parse(localStorage['token']);
		} else {
		token = "something stupid";
		}

		AuthenticationService.check_token(token);

		var data = {
			token: token
		}
		
		$http.post('inc/fonction.php?action=logout_user', data).success(function(response){
			console.log(response)
			localStorage.clear();
			$state.go("login");
		}).error(function(error){
			console.error(error);
		})
	}
    
});