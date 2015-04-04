=== Contact Form 7: Accessible Defaults ===
Contributors: joedolson
Donate link: http://www.joedolson.com/donate/
Tags: wpcf7, contact form 7, contact forms, accessibility, wcag, a11y, wpcf7
Requires at least: 3.7.0
Tested up to: 4.1.1
License: GPLv2 or later
Text Domain: accessible-contact-form-7
Stable tag: 1.0.0

Replaces the default Contact Form 7 form with an accessible equivalent and provides a suite of selectable base forms. 

== Description ==

= Use Contact Form 7 with an accessible default form =

This plug-in replaces the default template that Contact Form 7 automatically generates with an accessible equivalent of that form and adds a suite of additional basic form types that you can choose from to model your new forms.

The plug-in doesn't change anything about current forms that have been built with Contact Form 7. The structure of Contact Form 7 is such that it isn't possible to rewrite your forms for improved accessibility, but it *is* possible to make sure that the base you have for starting a form is accessible.

Contact Form 7 is actually a very accessible plug-in. It has an accessible back-end, and if you create the right template, the front-end form will have great accessibility. 

But the default form is not accessible. Not at all, in fact - it's missing some of the most basic elements of accessibility: form labels. This plug-in supplies a new default form that includes everything you need to make your default form accessible. 

For more information about making Contact Form 7 accessible, read [how to set up an accessible form using contact form 7](http://blog.rrwd.nl/2014/03/01/how-to-set-up-an-accessible-form-using-contact-form-7-in-wordpress/), by Rian Rietveld.

= Translations =

None yet; there are only a few strings in here, and they're all editable fields. The plug-in is translation ready, so let me know if you want them created at [my translations site](http://translate.joedolson.com). 

== Changelog ==

= 1.1.0 =

* Bug fix: incorrect label text for message field.
* New Feature: multiple selectable base forms to use as form starters.

= 1.0.0 =

* Initial release


== Installation ==

1. Upload the `contact-form-7-accessible-defaults` folder to your `/wp-content/plugins/` directory
2. Activate the plugin using the `Plugins` menu in WordPress
3. Create a new Contact Form 7 form.

== Frequently Asked Questions ==

= Will this fix all my Contact Form 7 forms? =

Nope. All this does is change Contact Form 7 so that the default form it generates is accessible. This gives you a model for what an accessible form should look like in Contact Form 7 (with appropriately associated labels and IDs, and with the response moved to the top of the form.), but does nothing at all to change how Contact Form 7 behaves. 

= Why aren't there demos for all types of fields? =

Two reasons. First, with the current version of Contact Form 7 it's not possible to make the quiz input type accessible. I've already reported this to the plug-in author, and it will be updated soon. Second, because I haven't had time to create forms that use every possible field. If you've got another example you'd like to see in a basic form, let me know!

== Screenshots ==

1. Contact Form 7 accessible default form
2. Contact Form 7 form selection

== Upgrade Notice ==

* Nothin' yet!