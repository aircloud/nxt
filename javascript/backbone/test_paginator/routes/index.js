var express = require('express');
var router = express.Router();
var http = require('http');
var url = require('url');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/getdata',function (req,res,next) {
  var arg = url.parse(req.url, true).query;
  console.log('infomation',arg);
  // console.log("infomation",req.body);
  // console.log('example',req.body.order);
  res.json({"total_count":3971, "incomplete_results":false, "items":[
    {
      "url": "https://api.github.com/repos/jashkenas/backbone/issues/4061",
      "id": 166700725,
      "number": 4061,
      "title": "Implements the JavaScript Iterable protocol.",
      "comments": 11,
      "body": "This introduces new methods related to Iterators on Backbone.Collection to mirror those found on Array: `values`, `keys`, `entries`, and `@@iterator`. Each of these methods will return a JavaScript Iterator, which has a `next` method, yielding the models or ids of models contained in the Collection.\r\n\r\nThe CollectionIterator is careful to use the `at()` and `modelId()` methods on the host collection rather than direct access to the `models` property, which should ensure it is resilient to creative subclassing of Backbone.Collection and future feature addition.\r\n\r\nCollectionIterator's `next` method follows the same [algorithm defined by ES6 for ArrayIterator's `next`](http://www.ecma-international.org/ecma-262/6.0/#sec-%arrayiteratorprototype%.next).\r\n\r\nThe [`@@iterator`](http://www.ecma-international.org/ecma-262/6.0/#sec-well-known-symbols) method is defined using `Symbol.iterator` if it exists in the JavaScript runtime (modern browsers/node.js) and falls back to the string `\"@@iterator\"` which was popularized by older versions of Firefox and has become the standard fallback behavior for other third-party libraries. This ensures that Backbone can still be used across all browsers, even with use of these new methods.\r\n\r\nSupporting Iterable allows better integration between Backbone and the most recent additions to the JavaScript language, including `for of` loops and data-collection constructor functions, as well as better integration with other third-party libraries that accept Iterables instead of only Arrays.\r\n\r\nFixes #3954"
    },
    {
      "url": "https://api.github.com/repos/jashkenas/backbone/issues/4060",
      "id": 166232516,
      "number": 4060,
      "title": "separate view's dom target from its constructed element",
      "comments": 6,
      "created_at": "2016-07-19T02:05:27Z",
      "body": "This PR allows for a separation of a view's dom target from the view's constructed element, so that a view with a dom target can have access to the constructed element before it is in the dom.\r\n\r\nCurrently, if a view is assigned an `el`, when the template html is appended to it (with whatever custom rendering process), it is reflected in the dom. You could use a temporary element, but then you lose the niceties of this.el's integration in the view. It seems like this.el should be precisely the element the view builds, and separate from the target element in the dom. This PR is backwards compatible with current behavior, but allows for this separation. A non-theoretical use case for the separation is for plugins - to be able to pass actual elements for transformation before they are added to the dom. In order to do this now, an `el` must not be passed to the view, and something must sit over the view to manage this. This proposal would allow for the separation of concerns by the view itself.\r\n\r\nI could very well be missing something in backbone that would already foster this; or maybe I am too entrenched in how I see views and need to re-imagine their construction. Part of the difficulty in writing this is that there are so many possible scenarios for views - from simple wrappers for already rendered dom elements, to deeply nested hierarchies in single page apps.\r\n\r\nIf there is positive feedback I'll add tests and update the docs. Thanks for your feedback!"
    }]});
});

module.exports = router;
