=== Contact Form 7 - Mailchimp ===
Contributors: crmperks
Tags: contact form 7, mailchimp, elementor forms, ninja forms, wpforms
Requires at least: 5.8
Tested up to: 7.0
Stable tag: 1.1.9
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Send Contact Form 7, WPForms, Elementor, Ninja Forms and Formidable submissions to your Mailchimp lists.

== Description ==

Connect a form to a Mailchimp list, map the form fields to Mailchimp merge fields, and every submission is added to the list. Works with [Contact Form 7](https://wordpress.org/plugins/contact-form-7/), [WPForms](https://wordpress.org/plugins/wpforms-lite/), [Elementor Forms](https://wordpress.org/plugins/elementor/), [Ninja Forms](https://wordpress.org/plugins/ninja-forms/), [Formidable Forms](https://wordpress.org/plugins/formidable/) and [Contact Form Entries](https://wordpress.org/plugins/contact-form-entries/).

* Connect one or more Mailchimp accounts with an API key.
* Map form fields to any merge field, tags and interest groups.
* Double opt-in for new feeds, and repeat signups update the existing subscriber.
* Send only the submissions that match a condition, such as a "Subscribe to newsletter" checkbox.
* A log of every request with Mailchimp's response, and a Retry button for failed submissions.
* Keep logs for as many days as you choose.
* Error emails when a submission can't be sent.

== How to set up ==

1. Open Mailchimp > Accounts and add your Mailchimp API key.
2. Open Mailchimp > Feeds and create a feed: pick the form, the list and map the fields.
3. Submit the form and check Mailchimp > Logs.

== Frequently Asked Questions ==

= How do I require email confirmation? =

New feeds use double opt-in. To change it, edit the feed and set the subscriber status.

= What happens when someone signs up twice? =

The existing Mailchimp subscriber is updated and keeps their current status.

= How do I resend a failed submission? =

Open Mailchimp > Logs and click Retry next to the failed row, or select rows and use the Send to Mailchimp again bulk action.

= Can I keep the API key out of the database? =

Define the VXCF_MAILCHIMP_API_KEY constant in your site configuration and it's used instead of the saved key.

== Changelog ==

= Unreleased =
* Security: submitted values are no longer unserialized, log details and bulk actions require a nonce and capability, SQL queries are prepared, TLS is verified on Mailchimp requests.
* New: repeat signups update the existing Mailchimp subscriber and keep their current status.
* New: new feeds default to double opt-in. Existing feeds keep their saved status.
* New: retry failed submissions from the log, one row at a time or in bulk.
* New: log retention setting with a daily clean-up.
* Fixed PHP 8.2+ deprecation notices and several admin screen messages.

= 1.1.9 =
* fixed "birthday field" issue.

= 1.1.8 =
* fixed "select2 xss" issue.

= 1.1.7 =
* fixed "wp register version" issue.

= 1.1.6 =
* fixed "interest field" issue.

= 1.1.5 =
* added "gdpr fields".
* fixed "id field of wpforms".

= 1.1.4 =
* fixed "elementor form missing" issue.

= 1.1.3 =
* added elementor, wpforms and ninja forms.

= 1.1.2 =
* fixed "escape variables" issue.

= 1.1.1 =
* fixed "add field" button not working issue.

= 1.1.0 =
* fixed "debug xss" issue.

= 1.0.9 =
* fixed mailchimp groups.

= 1.0.8 =
* fixed file field warning.
* fixed dropdown fields.

= 1.0.7 =
* fixed mailchimp interest field.

= 1.0.6 =
* fixed mailchimp groups issue.
* removed "send from logs" option.

= 1.0.5 =
* fixed form title field.
* fixed groups.

= 1.0.4 =
* added page_url field.

= 1.0.3 =
*	increased fields limit to 200.
*	fixed empty merge fields issue.

= 1.0.2 =
*	increased lists limit to 200.
*	add tags when updating old member.

= 1.0.1 =
*	Fixed mailchimp Phone number field.

= 1.0.0 =
*	Initial release.



