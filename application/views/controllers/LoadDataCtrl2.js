AdministratorPlatform.controller('LoadDataCtrl2', ['$rootScope', '$scope', 'requestService', function ($rootScope, $scope, requestService) {
    $rootScope.paginationShouldShow = true;
    requestService.findListTest($scope);
}])