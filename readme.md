# P3 Developer's Best Friend 

## 7/21: Still working on it: I got lost down rabbit holes.


## live site (such as it is)
* [Developer's Best Friend index page](http://sweeneybobusa-p3.gopagoda.com "Developer's best friend main page") is a the non-templated page. I wanted to get the generators going and then go back to make the blade template. 
* [Lorem-ipsum](http://sweeneybobusa-p3.gopagoda.com/lorem-ipsum "Lorum Ipsum Generator") this is working through the route, generating text I need but not producing html pages yet. Still working on it (see "feeling lost" below).
* [User Generator](http://sweeneybobusa-p3.gopagoda.com/user-generator "User Generator") Also got this working crudely just producing the results and not within a template. 

## Feeling lost (but learning a lot)
So I got the makings of the _master.blade.php file and a _lorum_blade.php file. I've been testing it using [billing test page](http://sweeneybobusa-p3.gopagoda.com/billing "User Generator") (why billing? I don't know, randomness) and it works except for anything after/ isn't pulling up the master template (it's getting some formatting but not all). I'm sure it's something that I need to pass  or a way to indicate the wildcard in the route. I'm sure it's the routing. I'm fried, so I'm feeling a bit zombiefied at the moment. 

###Here's what I got going so far: 
* Laravel installed an deployed. (yeah!)
* foundation installed and running for responsive design (only on index page at the moment).
* Base design for the index page (I'm in the process of making a master and use it as a template for the other pages). and it even validate! wtf? It's a miracle!
* lorum-ipsum routing logic set for getting the url validating for numerical, null, and non numeric variables beyond the / and hope to get that function as a class to use on the other pages.

### Here's my to do list:
* create views for secondary pages (some progress but stuck when you try to add anything to the url)
* create classes for url number logic esp since the number thing is used on both generators (I got the class built but had trouble getting it to work as a separate file and trying to figure out how to pass more than one variable to blade (array?). the class is in the route.php file.
* add base form to index, lorem, and user pages (Just not happening yet. anything I try sucks, and my brain hurts)
* I want to separate out a few things from the pages into logic, ie, calling the generators from a logic page
* figure out how to target the panels on the index page so that the generators can generate in their panels. 
* I'm going to hit section this afternoon to see if I can figure some of this stuff out. 



