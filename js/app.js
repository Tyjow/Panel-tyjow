var app = angular.module('app', ['ui.router', 'datatables', 'ngResource']);
app.config(function($stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise('/');
	$stateProvider
		.state('login', {
			url: '/',
			templateUrl: 'partials/login.html', 
			controller: 'DataCtrl', 
			controllerAs:'showCase'
		})

		.state('gestion', {
			url: '/gestion',
			templateUrl: 'partials/gestion.html', 
			controller: 'DataCtrl', 
			controllerAs:'showCase'
		})

		.state('fournisseur', {
			url: '/fournisseur',
			templateUrl: 'partials/fournisseur.html', 
			controller: 'DataCtrl', 
			controllerAs:'showCase'
		})

		.state('user', {
			url: '/user',
			templateUrl: 'partials/user.html', 
			controller: 'DataCtrl', 
			controllerAs:'showCase'
		})
});