AdministratorPlatform.controller('LoadDataCtrl4', ['$rootScope', '$scope', 'requestService', function ($rootScope, $scope, requestService) { 
    requestService.findTest($scope) ;
}])