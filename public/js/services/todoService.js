angular.module('todoService', [])

	.factory('Todo', function($http) {

		return {
			get : function() {
				return $http.get('api/todo');
			},
			show : function(id) {
				return $http.get('api/todo/' + id);
			},
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: 'api/todo',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			destroy : function(id) {
				return $http.delete('api/todo/' + id);
			}
		}

	});