/*global Backbone */
var app = app || {};

(function () {
	'use strict';

	// Todo Router
	// ----------
	var TodoRouter = Backbone.Router.extend({
		routes: {
			'active/:wuhan': 'setFilter'
		},

		setFilter: function (wuhan) {
			// Set the current filter to be used
			console.log(wuhan);
            // alert(11);
			app.TodoFilter = wuhan || '';
			// Trigger a collection filter event, causing hiding/unhiding
			// of Todo view items
			app.todos.trigger('filter');
		}
	});

	app.TodoRouter = new TodoRouter();
	Backbone.history.start();
})();
