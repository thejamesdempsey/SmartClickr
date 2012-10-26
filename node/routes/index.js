module.exports = function(app) {
	
	// home page
	app.get('/', function(req, res) {
		// check is user's creds have been saved in a cookie
		if(req.render.email == undefined || req.cookies.pass == undefined) {
			res.render('/', { locals: { title: 'SmartClickr'}});
		} else {
			// attempt automatic login
			AM.autoLogin(req.cookies.email, req.cookies.pass, function(o){
				if (o != null) {
					req.session.email = o;
					res.redirect('/');
				} else {
					res.render('/home', { locals: { title: 'Your account page'}});
				}
			});
		}
	});

	// logged in user account page
	app.get('/home', function(req, res) {
		if(req.session.email == null) {
			res.redirect('/');

		}
	});





	
};