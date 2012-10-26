
var AM = require('./modules/account_manager');


module.exports = function(app) {
	
	app.get('/features', function(req, res){
		res.render('features', {
			title: 'home'
		})
	});
	// main login page //
/*
		app.get('/', function(req, res){
		// check if the user's credentials are saved in a cookie //
			if (req.cookies.user == undefined || req.cookies.pass == undefined){
				res.render('index', { 
					title: 'Home' 
				});
			}	else{
		// attempt automatic login //
				AM.autoLogin(req.cookies.user, req.cookies.pass, function(o){
					if (o != null){
					    req.session.user = o;
						res.redirect('/home');
					}	else{
						res.render('index', {
							title: 'Hello - Please Login To Your Account' 
						});
					}
				});
			}
		});
*/
		app.post('/', function(req, res){
			AM.manualLogin(req.param('user'), req.param('pass'), function(e, o){
				if (!o){
					res.send(e, 400);
				}	else{
				    req.session.user = o;
					if (req.param('remember-me') == 'true'){
						res.cookie('user', o.user, { maxAge: 900000 });
						res.cookie('pass', o.pass, { maxAge: 900000 });
					}
					res.send(o, 200);
				}
			});
		});
	
	app.get('/login', function(req, res){
		res.render('login',{
			title: 'Login'
		});
	});
	
	
	app.get('/signup', function(req, res) {
		res.render('signup', { 
			title: 'Signup'
		 });
	});
	
	app.post('/signup', function(req, res){
		AM.signup({
			name 	: req.param('name'),
			email 	: req.param('email'),
			pass	: req.param('pass'),
		}, function(e, o){
			if (e){
				res.send(e, 400);
			}	else{
				res.send('ok', 200);
			}
		});
	});
	

};