var app = angular.module('filtrado', ['ui.bootstrap']);

    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };