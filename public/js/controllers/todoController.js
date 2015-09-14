angular.module('todoController', [])

	.controller('todoController', function($scope, $http, Todo) {
		// object to hold all the data for the new comment form
		$scope.todoData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;
		
		// get all the comments first and bind it to the $scope.comments object
		Todo.get()
			.success(function(data) {
				$scope.todos = data;
				$scope.loading = false;
			});


		// function to handle submitting the form
		$scope.submitTodo = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			Todo.save($scope.todoData)
				.success(function(data) {
					$scope.todos = {};
					// if successful, we'll need to refresh the comment list
					Todo.get()
						.success(function(getData) {
							$scope.todos = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a comment
		$scope.deleteTodo = function(id) {
			$scope.loading = true; 

			Todo.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					Todo.get()
						.success(function(getData) {
							$scope.todos = getData;
							$scope.loading = false;
						});

				});
		};

	});