AdministratorPlatform.controller('LoadDataCtrl3', ['$rootScope', '$scope', 'requestService', function ($rootScope, $scope, requestService) {
    $rootScope.paginationShouldShow = true;
    requestService.findStudentListTest($scope);
}])