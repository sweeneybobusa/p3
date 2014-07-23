# P3 Developer's Best Friend 

## live site 

* [Developer's Best Friend index page](http://sweeneybobusa-p3.gopagoda.com "Developer's best friend main page") templated page where i have a single example of lorem and user generation. I used alternate variables in the user generator so instead of a full name I used first and last name and then used them to create the full name so I could use the first name in the headings. Used foundation framework to have responsive view. 

* [Lorem-ipsum](http://sweeneybobusa-p3.gopagoda.com/lorem-ipsum "Lorum Ipsum Generator") Used a blade template working off the master to create the page. I would have separated out the logic probably into the same model file as NewNumber.php but didn't have the brain space/time. Speaking of Model: I made a model NewNumber which tested the anything after the / for numeral, and if numeral 0, 1, >100, garbage and if it went outside 0-100 it gave a feeback message and reset the default search value to 4. This is the default class I varified the number with in both lorem and user-generator.

* [User Generator](http://sweeneybobusa-p3.gopagoda.com/user-generator "User Generator") blade template based off master, put variables in divs that used foundation to serve in dynamic rows/columns that varied on small, medium, and large screens. was able to pass multiple variables to screen. 

###Here's what I got going so far: 
* Laravel installed an deployed. (yeah!)
* foundation installed and running for responsive design on _master.blade.php and created childs for _lorem.blade.php and _user_generator.blade.php
* index as a blade template based on _master.blade.php it even validates!
* lorum-ipsum routing logic set and put in a model file for getting the url validating for numerical, null, and non numeric variables beyond the / and limits values

### ongoing issues and wish list
* I could have made a secondary blade page and passed logic to it to determine "lorem" or "user" and had the logic separate too, in the template it could take the variables and build the generators that way. 

* I took so long figuring out this much I didn't get a chance to add in the form. If I wanted to create the forms and target the panels on the first page, is that an agax thing? if I had a put version would I be able to fill the panels if the ID was called?