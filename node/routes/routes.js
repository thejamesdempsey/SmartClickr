
/*var AM = require('./modules/account-manager');*/

module.exports = function(app) {
	
	app.get('/', function(req, res){
		res.render('index', {
			title: 'SmartClickr | Home'
		})
	});
	
	app.get('/features', function(req, res){
		res.render('features', {
			title: 'SmartClickr | Features'
		})
	});
	
//SIGN UP AND CREATE ACCOUNT
	
	app.get('/signup', function(req, res){
		res.render('signup', {
			title: 'SmartClickr | Signup'
		})
	});
	
	app.post('/signup', function(req, res){
		
	});
	
	
//LOGIN AND RESET PASSWORD

	app.get('/login', function(req, res){
		res.render('login', {
			title: 'SmartClickr | Login'
		})
	});
	
	app.post('/login', function(req, res){
		
	});	
	
	app.get('/lost-password', function(req, res){
		res.render('lost-password', {
			title: ''
		})
	});
	
	app.get('/reset-password', function(req, res){
		res.render('reset-password', {
			title: 'SmartClickr | Reset'
		})
	});
	
	
//USERNAME AND ACCOUNT PAGE

	app.get('/username', function(req, res){
		res.render('username', {
			title: 'SmartClickr | All Your Polls'
		})
	});
	
	app.delete('/username', function(req, res){
		
	});
	
	//CREATE POLLS
	
		app.get('/create-poll', function(req, res){
			res.render('create-poll', {
				title: 'SmartClickr | Create a Poll'
			})
		});
		
		app.post('/create-poll', function(req, res){
			
		});
		
	//EDIT POLLS
	
		app.get('/edit-polls', function(req, res){
			res.render('edit-polls', {
				title: 'SmartClickr | Edit your Poll'
			})
		});
		
		app.put('/', function(req, res){
			
		});
		
		app.delete('/edit-polls', function(req, res){
			
		});
		
	//SETTINGS
	
		app.get('/settings', function(req, res){
			res.render('settings', {
				title: 'SmartClickr | Account Settings'
			})
		});
		
		app.put('/settings', function(req, res){
			
		});
		
		app.delete('/settings', function(req, res){
			
		});
	
};