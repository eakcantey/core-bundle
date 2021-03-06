Contao change log
=================

Version 4.0.1 (2015-XX-XX)
--------------------------

### Fixed
Support overwriting the CSS ID in an alias element (see #305).

### Fixed
Add a `StringUtil` class to restore PHP 7 compatibility (see #309).

### Fixed
Correctly handle files in the `/web` directory in the Combiner (see #300). 

### Fixed
Fix the argument order of the `ondelete_callback` (see #301).

### Fixed
Correctly apply the class `active` in the pagination template (see #315).

### Fixed
Fix the `Validator::isEmail()` method (see #313).

### Fixed
Strip tags before auto-generating aliases (see contao/core#7857). 

### Fixed
Correctly encode the URLs in the popup file manager (see contao/core#7929).

### Fixed
Check for the comments module when compiling the news meta fields (see contao/core#7901).

### Fixed
Also sort the newsletter channels alphabetically in the front end (see contao/core#7864).

### Fixed
Disable responsive images in the back end preview (see contao/core#7875).

### Fixed
Overwrite the request string when generating news/event feeds (see contao/core#7756).

### Fixed
Store the static URLs with the cached file (see contao/core#7914).

### Fixed
Correctly check the subfolders in the `hasAccess()` method (see contao/core#7920).

### Fixed
Updated the countries list (see contao/core#7918).

### Fixed
Respect the `notSortable` flag in the parent (see contao/core#7902).

### Fixed
Round the maximum upload size to an integer value (see contao/core#7880).

### Fixed
Make the markup minification less aggressive (see contao/core#7734).

### Fixed
Filter the indices in `Database::getFieldNames()` (see contao/core#7869).


Version 4.0.0 (2015-06-09)
--------------------------

### Fixed
Fixed several directory separator issues.

### Fixed
Handle bundle images in `Image::get()` (see #287).

### Fixed
Check if a custom folder is protected in the file picker (see #287).

### Fixed
Do not make textareas required if they are replaced with an RTE (see #266).

### Fixed
Correctly show the error messages in the login module (see #269).

### Fixed
Map the referer in the old Session class (see #281).

### Fixed
Store new record IDs in the persistent session bag (see #281).

### Fixed
Correctly reload the page in the install tool (see #267).

### Fixed
Correctly show the color picker images (see #268).

### Fixed
Consolidate the custom sections markup (see contao/core#7843).

### Fixed
Correctly execute the symlinks command in the automator (see #265).

### Fixed
Correctly handle an empty `_locale` attribute (see #262).

### Fixed
Correctly switch between the page and file picker in the hyperlink element.


Version 4.0.0-RC1 (2015-05-15)
------------------------------

### New
Add the "getArticles" hook.

### Fixed
Make `Validator::isValidUrl()` RFC 3986 compliant (see contao/core#7790).

### Changed
Removed the "space before/after" option (see #250).

### Changed
Consolidated the markup of all front end forms (see #249).

### Fixed
Decode sprintf placeholdes passed to `generateFrontendUrl()` as parameters.

### Fixed
Consolidate the templates and module keys (see #247).

### Fixed
Prevent recursion when creating symlinks (see #245).

### Fixed
Append the numeric ID to the `FORM_SUBMIT` variable (see contao/core#7286).

### Changed
Do not render empty custom sections (see contao/core#7742).

### Fixed
Convert dates to timestamps in the form generator (see contao/core#6827).

### New
Add schema.org tags where applicable (see contao/core#7780).

### Fixed
Correctly store the referer URLs (see #143).

### Fixed
Handle the new back end URLs in the JavaScript pickers (see #217).

### Fixed
Do not throw an exception if there are not XLIFF files (see #211).

### Fixed
Correctly check for public folders when loading content via Ajax (see #213).

### Fixed
Replace the old back end paths when generating Ajax responses (see #212).

### New
Added support for specifying the database key length (see #221).

### Fixed
Create absolute symlinks if relative symlinks are not supported (see #208).

### Removed
The "postFlushData" hook has been removed (see #196).

### Fixed
Do not check the database driver in `Config::isComplete()` (see #203).

### Improved
It is now possible to check for an authenticated back end user in a front end
template using `$this->hasAuthenticatedBackendUser()`.


Version 4.0.0-beta1 (2015-04-14)
--------------------------------

### Removed
Removed the `show_help_message()` and `die_nicely()` functions.

### Removed
The `coreOnlyMode` setting has been removed (see #145).

### Removed
The change log viewer has been removed from the back end (see #152).

### Changed
The rich text and code editor configuration files are now real templates, which
can be customized in the template editor.

### Changed
The `debugMode` setting has been removed, since the debug mode is automatically
enabled if the application is called via the `app_dev.php` script.

### Improved
The `rewriteUrl` setting has been removed, because the application now adds or
removes the script fragment automatically.

### Changed
Protect the `DcaExtractor` constructor (use `getInstance()` instead).

### Changed
Return `null` if a widget is empty and the DB field is nullable (see #17).

### Changed
Remove the JS library dependencies from the library agnostic scripts (see #23).

### Changed
Replace the syntax highlighter component with highlight.js.

### Removed
Removed the "default" theme in favor of the "flexible" theme.

### Changed
Load the third-party components via `contao-components`.

### Removed
Removed the MooTools "slimbox" plugin.

### Removed
Removed the CSS3PIE plugin.

### Changed
Make the public extension folders configurable (see #8).

### Fixed
Correctly symlink the upload folder.

### Changed
Do not use a constant for the website path (see contao/core#5347).

### Changed
Support scopes in the `Message` class (see contao/core#6558).

### Changed
Use `<fieldset>` and `<legend>` in the newsletter channel selection menu.

### Changed
Do not auto-generate article IDs from their alias names (see contao/core#4837).

### Fixed
Correctly assign the CSS classes "odd" and "even" to the table element.

### Changed
Use a `<strong>` tag to highlight keywords in search results.

### Changed
Use a `<strong>` tag instead of a `<span>` tag for active menu items.

### Changed
Use the CSS class `active` instead of `current` in the pagination menu.

### Changed
Use the CSS class `previous` instead of `prev` in the book navigation module.

### Fixed
Correctly set the folder protection status when loading subfolders (see #4).

### Changed
Adjust the logic of the `File` class (see contao/core#5341).

### Removed
Remove the Safe Mode Hack, the XHTML resources and the IE6 warning.

### Changed
Move all public resources to the `web/` subdirectory.
