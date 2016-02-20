<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Demo for combination of AngularJS and PHP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
		<script>
			angular.module('app', [])
			.controller('controller', function($scope, $http) {
				var debug = function(something) {
					console.log(something);
					$scope.message = something;
				};
				$scope.userChanged = function() {
					/// Init
					var user = $scope.user = $scope.user.trim();
					$scope.logs = [];
					$scope.message = 'Requesting ...';

					/// main
					$http.get('getLogs.php?user=' + user)
					.then(function(res) {
						$scope.message = '';
						if(res.data.error) return debug(res.data.error);
						if(!res.data.logs) return debug('Logs undefined.');
						if(res.data.logs.length) $scope.logs = res.data.logs;
						else $scope.message = 'No logs';
					}, debug);
				};
			});
		</script>
	</head>
	<body ng-app="app">
		<header><h1>Demo for combination of AngularJS and PHP</h1></header>
		<section ng-controller="controller">
			<dl>
				<dt>User</dt>
				<dd><input ng-model="user" ng-model-options="{debounce: 500}" ng-change="userChanged()"></dd>
			</dl>
			<dl>
				<dt>Logs of the user</dt>
				<dd>
					<p ng-show="message">{{message}}</p>
					<ul ng-show="logs.length">
						<li ng-repeat="log in logs track by $index">{{log}}</li>
					</ul>
				</dd>
			</dl>
		</section>
		<footer></footer>
	</body>
</html>
