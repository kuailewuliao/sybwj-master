

AdministratorPlatform.controller('loginCtrl', ['$http','$rootScope', '$scope', 'requestService', function ($http,$rootScope, $scope, requestService) {
    $rootScope.navShouldShow = false;
    var vm = $scope.vm = {};
  vm.values = [
    {state: 0,statetext:'student'},
    {state: 1,statetext:'teacher'},
  ];
    //管理员登陆
    $scope.login = function () {
        requestService.login($scope);
    };
}])