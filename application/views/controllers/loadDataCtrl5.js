AdministratorPlatform.controller('loadDataCtrl5', ['$rootScope', '$scope', 'requestService', function ($rootScope, $scope, requestService) { 
  

console.log('xad');
   requestService.findTest($scope);
  $scope.id=0;
  $scope.opts_id=2;   
  $scope.edit = function($index) {
  $scope.id=$index;
  };
  $scope.addChoice = function() {
    $scope.testform1.form.ques[$scope.id].opts.push({id:++$scope.opts_id,content: '' });
  };
  $scope.deleteChoice = function() {
    $scope.edid=$scope.testform1.form.ques[$scope.id].opts.length-1;
    $scope.testform1.form.ques[$scope.id].opts.splice({id:$scope.edid,content: '' },1);
  };
  $scope.editQuestion=function(){
    $scope.id=0;
  };
$scope.editTest=function(){
	//requestService.editTest($scope);
};
}])