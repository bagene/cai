/**
 * Created by Ken on 5/29/15.
 */
hsTuts.controller('mainCtrl', [
	'$scope',
	'$http',
	function($scope,$http){
		$scope.selectedMenu = 'Basic';
		$scope.data = {};
		$scope.selectMenu = function(selected){
			$scope.selectedMenu = selected;

			var submenuUrl = "/api/submenu?menu=";

			submenuUrl+=$scope.selectedMenu;

			$http.get(submenuUrl).success(function(data){
				$scope.data.submenu = data;
				console.log($scope.data.submenu);
			});

		}
	}
]);