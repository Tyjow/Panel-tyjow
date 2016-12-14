app.directive('datepicker', function () {
	return {
	    require: 'ngModel',
	    link: function(scope, el, attr, ngModel) {
	    	$(el).datepicker({
	    		dateFormat: "yy-mm-dd",
				onSelect: function(dateText) {
					scope.$apply(function() {
						ngModel.$setViewValue(dateText);
					});
				}
	    	});
	    }
  	};
});