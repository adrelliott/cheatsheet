<html class="no-js" lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<!-- This site is optimized with the Yoast SEO plugin v16.4 - https://yoast.com/wordpress/plugins/seo/ -->
		<title>Laravel Cheat Sheet - Simple Cheat Sheet for Laravel</title>
		<style type="text/css">
			.wp-block-preformatted {
				padding: 1rem 3rem;
			font-family: monospace;
			line-height: 1.2;
			overflow: auto;
			padding: 1rem 3rem;
			text-align: left;
			margin: 2rem 0 2rem 1rem!important;
			xwidth: calc(100% + 1rem)!important;
			background: #312a2a;
			color: #FFF;
			}
			.container {
				overflow: none;
			}
			.__cf_email__ {
				color:  #fff;
			}
			h2 {
				font-size: 4em;
				text-align: center;
			}
			h3 {
				font-size: 2em;
			}
			body {
				padding: 2em;
			}
		</style>
	</head>
	<body class="">
		<div class="container grid js-toc-content">
			<div class="main-content">
				<div class="archive-header-inner section-inner medium">
					<h1 class="archive-title">Laravel Cheat Sheet</h1>
					<a href="/simple-cheat.html">Open the simple version here</a>
				</div>
				</div><!-- .archive-header-inner -->
				<!-- .archive-header -->
				<div>
					<div class="js-toc">
						<ul class="toc-list">
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-queue">Laravel Queue</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-redirect">Laravel Redirect</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-route">Laravel Route</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-config">Laravel Config</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-file">Laravel File</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#lang">Lang</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-ssh">Laravel SSH</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-cache">Laravel Cache</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-html">Laravel HTML</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-model">Laravel Model</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-db-cheat-sheet">Laravel DB Cheat Sheet</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-validation">Laravel Validation</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-view">Laravel View</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-blade">Laravel Blade</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-mail">Laravel Mail</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-session">Laravel Session</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-response">Laravel Response</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-event">Laravel Event</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-input">Laravel Input</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-url">Laravel URL</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-log">Laravel Log</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-environment">Laravel Environment</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-string">Laravel String</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-composer-command">Laravel Composer Command</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-artisan">Laravel Artisan</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-cookie">Laravel Cookie</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-messages">Laravel Messages</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-security">Laravel Security</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-schema">Laravel Schema</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-request">Laravel Request</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-container">Laravel Container</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-auth">Laravel Auth</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-auth-cheat-sheet">Laravel Auth Cheat Sheet</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#pagination">Pagination</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-form">Laravel Form</a>
							</li>
							<li class="toc-list-item">
								<a class="toc-link" href="#laravel-helper">Laravel Helper</a>
							</li>
						</ul>
					</div>
					<div class="entry-header-inner section-inner">
						<h2 class="entry-title heading-size-1" id="laravel-queue"><a href="https://simplecheatsheet.com/laravel-queue/">Laravel Queue</a></h2>
						</div><!-- .entry-header-inner -->
						<!-- .entry-header -->
						<div class="post-inner thin ">
							<div class="entry-content">
								<pre class="wp-block-preformatted">Queue::push('SendMail', array('message' =&gt; $message));<br>Queue::push('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4516202b210028242c290536202b21">[email&#160;protected]</a>', array('message' =&gt; $message));<br>Queue::push(function($job) use $id {});</pre>
								<p>Same payload to multiple workers</p>
							<pre class="wp-block-preformatted">Queue::bulk(array('SendEmail', 'NotifyUser'), $payload);</pre>
							<p>Starting the queue listener</p>
						<pre class="wp-block-preformatted">php artisan queue:listen<br>php artisan queue:listen connection<br>php artisan queue:listen --timeout=60</pre>
						<p>Process only the first job on the queue</p>
					<pre class="wp-block-preformatted">php artisan queue:work</pre>
					<p>Start a queue worker in daemon mode</p>
				<pre class="wp-block-preformatted">php artisan queue:work --daemon</pre>
				<p>Create migration file for failed jobs</p>
			<pre class="wp-block-preformatted">php artisan queue:failed-table</pre>
			<p>Listing failed jobs</p>
		<pre class="wp-block-preformatted">php artisan queue:failed</pre>
		<p>Delete failed job by id</p>
	<pre class="wp-block-preformatted">php artisan queue:forget 5</pre>
	<p>Delete all failed jobs</p>
<pre class="wp-block-preformatted">php artisan queue:flush</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
	</div><!-- .section-inner -->
	<!-- .post -->
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-redirect"><a href="https://simplecheatsheet.com/laravel-redirect/">Laravel Redirect</a></h2>
		</div><!-- .entry-header-inner -->
		<!-- .entry-header -->
		<div class="post-inner thin ">
			<div class="entry-content">
			<pre class="wp-block-preformatted">return Redirect::to('foo/bar');<br>return Redirect::to('foo/bar')-&gt;with('key', 'value');<br>return Redirect::to('foo/bar')-&gt;withInput(Input::get());<br>return Redirect::to('foo/bar')-&gt;withInput(Input::except('password'));<br>return Redirect::to('foo/bar')-&gt;withErrors($validator);</pre>
			<p>Create a new redirect response to the previous location</p>
		<pre class="wp-block-preformatted">return Redirect::back();</pre>
		<p>Create a new redirect response to a named route</p>
	<pre class="wp-block-preformatted">return Redirect::route('foobar');<br>return Redirect::route('foobar', array('value'));<br>return Redirect::route('foobar', array('key' =&gt; 'value'));</pre>
	<p>Create a new redirect response to a controller action</p>
	<pre class="wp-block-preformatted">return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4a28b8ba78b8a90968b88888196a48d8a80819c">[email&#160;protected]</a>');<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a6c45456945445e584546464f586a484b50">[email&#160;protected]</a>', array('value'));<br>return Redirect::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afe9c0c0ecc0c1dbddc0c3c3caddefcdced5">[email&#160;protected]</a>', array('key' =&gt; 'value'));</pre>
	<p>If intended redirect is not defined, defaults to foo/bar.</p>
<pre class="wp-block-preformatted">return Redirect::intended('foo/bar');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
	</div><!-- .section-inner -->
	<!-- .post -->
	<div class="entry-header-inner section-inner">
		<h2 class="entry-title heading-size-1" id="laravel-route"><a href="https://simplecheatsheet.com/laravel-route/">Laravel Route</a></h2>
		</div><!-- .entry-header-inner -->
		<!-- .entry-header -->
		<div class="post-inner thin ">
			<div class="entry-content">
				<pre class="wp-block-preformatted">Route::get('foo', function(){});
					Route::get('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dc9fb3b2a8aeb3b0b0b9ae92bdb1b99cbaa9b2bfa8b5b3b2">[email&#160;protected]</a>');
				Route::controller('foo', 'FooController');</pre>
				<h3>RESTful Controllers</h3>
			<pre class="wp-block-preformatted">Route::resource('posts','PostsController');</pre>
			<p>Specify a subset of actions to handle on the route</p>
			<pre class="wp-block-preformatted">Route::resource('photo', 'PhotoController',['only' =&gt; ['index', 'show']]);
			Route::resource('photo', 'PhotoController',['except' =&gt; ['update', 'destroy']]);</pre>
			<h3>Triggering Errors</h3>
			<pre class="wp-block-preformatted">App::abort(404);
				$handler-&gt;missing(...) in ErrorServiceProvider::boot();
			throw new NotFoundHttpException;</pre>
			<h3>Route Parameters</h3>
			<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){});
			Route::get('foo/{bar?}', function($bar = 'bar'){});</pre>
			<h3>HTTP Verbs</h3>
			<pre class="wp-block-preformatted">Route::any('foo', function(){});
				Route::post('foo', function(){});
				Route::put('foo', function(){});
				Route::patch('foo', function(){});
			Route::delete('foo', function(){});</pre>
			<p>RESTful actions</p>
		<pre class="wp-block-preformatted">Route::resource('foo', 'FooController');</pre>
		<p>Registering A Route For Multiple Verbs</p>
	<pre class="wp-block-preformatted">Route::match(['get', 'post'], '/', function(){});</pre>
	<h3>Secure Routes(TBD)</h3>
<pre class="wp-block-preformatted">Route::get('foo', array('https', function(){}));</pre>
<h3>Route Constraints</h3>
<pre class="wp-block-preformatted">Route::get('foo/{bar}', function($bar){})
	-&gt;where('bar', '[0-9]+');
	Route::get('foo/{bar}/{baz}', function($bar, $baz){})
-&gt;where(array('bar' =&gt; '[0-9]+', 'baz' =&gt; '[A-Za-z]'))</pre>
<p>Set a pattern to be used across routes</p>
<pre class="wp-block-preformatted">Route::pattern('bar', '[0-9]+')</pre>
<h3>HTTP Middleware</h3>
<p>Assigning Middleware To Routes</p>
<pre class="wp-block-preformatted">Route::get('admin/profile', ['middleware' =&gt; 'auth', function(){}]);</pre>
<h3>Named Routes</h3>
<pre class="wp-block-preformatted">Route::currentRouteName();
Route::get('foo/bar', array('as' =&gt; 'foobar', function(){}));
Route::get('user/profile', [
  'as' =&gt; 'profile', 'uses' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="16436573645579786264797a7a736456657e7961466479707f7a73">[email&#160;protected]</a>'
]);
$url = route('profile');
$redirect = redirect()-&gt;route('profile');</pre>
<h3>Route Prefixing</h3>
<pre class="wp-block-preformatted">Route::group(['prefix' =&gt; 'admin'], function()
{
  Route::get('users', function(){
      return 'Matches The "/admin/users" URL';
  });
});</pre>
<h3>Route Namespacing</h3>
<p>This route group will carry the namespace &#8216;Foo\Bar&#8217;</p>
<pre class="wp-block-preformatted">Route::group(array('namespace' =&gt; 'Foo\Bar'), function(){})</pre>
<h3>Sub-Domain Routing</h3>
<p>{sub} will be passed to the closure</p>
<pre class="wp-block-preformatted">Route::group(array('domain' =&gt; '{sub}.example.com'), function(){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-config"><a href="https://simplecheatsheet.com/laravel-config/">Laravel Config</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Config::get('app.timezone');</pre>
<p>get with Default value</p>
<pre class="wp-block-preformatted">Config::get('app.timezone', 'UTC');</pre>
<p>set Configuration</p>
<pre class="wp-block-preformatted">Config::set('database.default', 'sqlite');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="ads">
<!-- Responsive -->
</div>
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-file"><a href="https://simplecheatsheet.com/laravel-file/">Laravel File</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">File::exists('path');<br>File::get('path');<br>File::getRemote('path');</pre>
<p>Get a file&#8217;s contents by requiring it</p>
<pre class="wp-block-preformatted">File::getRequire('path');</pre>
<p>Require the given file once</p>
<pre class="wp-block-preformatted">File::requireOnce('path');</pre>
<p>Write the contents of a file</p>
<pre class="wp-block-preformatted">File::put('path', 'contents');</pre>
<p>Append to a file</p>
<pre class="wp-block-preformatted">File::append('path', 'data');</pre>
<p>Delete the file at a given path</p>
<pre class="wp-block-preformatted">File::delete('path');</pre>
<p>Move a file to a new location</p>
<pre class="wp-block-preformatted">File::move('path', 'target');</pre>
<p>Copy a file to a new location</p>
<pre class="wp-block-preformatted">File::copy('path', 'target');</pre>
<p>Extract the file extension from a file path</p>
<pre class="wp-block-preformatted">File::extension('path');</pre>
<p>Get the file type of a given file</p>
<pre class="wp-block-preformatted">File::type('path');</pre>
<p>Get the file size of a given file</p>
<pre class="wp-block-preformatted">File::size('path');</pre>
<p>Get the file&#8217;s last modification time</p>
<pre class="wp-block-preformatted">File::lastModified('path');</pre>
<p>Determine if the given path is a directory</p>
<pre class="wp-block-preformatted">File::isDirectory('directory');</pre>
<p>Determine if the given path is writable</p>
<pre class="wp-block-preformatted">File::isWritable('path');</pre>
<p>Determine if the given path is a file</p>
<pre class="wp-block-preformatted">File::isFile('file');</pre>
<p>Find path names matching a given pattern.</p>
<pre class="wp-block-preformatted">File::glob($patterns, $flag);</pre>
<p>Get an array of all files in a directory.</p>
<pre class="wp-block-preformatted">File::files('directory');</pre>
<p>Get all of the files from the given directory (recursive).</p>
<pre class="wp-block-preformatted">File::allFiles('directory');</pre>
<p>Get all of the directories within a given directory.</p>
<pre class="wp-block-preformatted">File::directories('directory');</pre>
<p>Create a directory</p>
<pre class="wp-block-preformatted">File::makeDirectory('path', $mode = 0777, $recursive = false);</pre>
<p>Copy a directory from one location to another</p>
<pre class="wp-block-preformatted">File::copyDirectory('directory', 'destination', $options = null);</pre>
<p>Recursively delete a directory</p>
<pre class="wp-block-preformatted">File::deleteDirectory('directory', $preserve = false);</pre>
<p>Empty the specified directory of all files and folders</p>
<pre class="wp-block-preformatted">File::cleanDirectory('directory');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="lang"><a href="https://simplecheatsheet.com/lang/">Lang</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">App::setLocale('en');
Lang::get('messages.welcome');
Lang::get('messages.welcome', array('foo' =&gt; 'Bar'));
Lang::has('messages.welcome');
Lang::choice('messages.apples', 10);</pre>
<p>Lang::get alias</p>
<pre class="wp-block-preformatted">trans('messages.welcome');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-ssh"><a href="https://simplecheatsheet.com/laravel-ssh/">Laravel SSH</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>Executing Commands</p>
<pre class="wp-block-preformatted">SSH::run(array $commands);
SSH::into($remote)-&gt;run(array $commands); </pre>
<p>specify remote, otherwise assumes default</p>
<pre class="wp-block-preformatted">SSH::run(array $commands, function($line)
{
  echo $line.PHP_EOL;
});</pre>
<h3>Tasks</h3>
<p>define</p>
<pre class="wp-block-preformatted">SSH::define($taskName, array $commands);</pre>
<p>execute</p>
<pre class="wp-block-preformatted">SSH::task($taskName, function($line)
{
  echo $line.PHP_EOL;
});</pre>
<h3>SFTP Uploads</h3>
<pre class="wp-block-preformatted">SSH::put($localFile, $remotePath);
SSH::putString($string, $remotePath);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-cache"><a href="https://simplecheatsheet.com/laravel-cache/">Laravel Cache</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Cache::put('key', 'value', $minutes);<br>Cache::add('key', 'value', $minutes);<br>Cache::forever('key', 'value');<br>Cache::remember('key', $minutes, function(){ return 'value' });<br>Cache::rememberForever('key', function(){ return 'value' });<br>Cache::forget('key');<br>Cache::has('key');<br>Cache::get('key');<br>Cache::get('key', 'default');<br>Cache::get('key', function(){ return 'default'; });<br>Cache::tags('my-tag')-&gt;put('key','value', $minutes);<br>Cache::tags('my-tag')-&gt;has('key');<br>Cache::tags('my-tag')-&gt;get('key');<br>Cache::tags('my-tag')-&gt;forget('key');<br>Cache::tags('my-tag')-&gt;flush();<br>Cache::increment('key');<br>Cache::increment('key', $amount);<br>Cache::decrement('key');<br>Cache::decrement('key', $amount);<br>Cache::section('group')-&gt;put('key', $value);<br>Cache::section('group')-&gt;get('key');<br>Cache::section('group')-&gt;flush();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-html"><a href="https://simplecheatsheet.com/laravel-html/">Laravel HTML</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">HTML::macro('name', function(){});</pre>
<p>Convert an HTML string to entities</p>
<pre class="wp-block-preformatted">HTML::entities($value);</pre>
<p>Convert entities to HTML characters</p>
<pre class="wp-block-preformatted">HTML::decode($value);</pre>
<p>Generate a link to a JavaScript file</p>
<pre class="wp-block-preformatted">HTML::script($url, $attributes);</pre>
<p>Generate a link to a CSS file</p>
<pre class="wp-block-preformatted">HTML::style($url, $attributes);</pre>
<p>Generate an HTML image element</p>
<pre class="wp-block-preformatted">HTML::image($url, $alt, $attributes);</pre>
<p>Generate a HTML link</p>
<pre class="wp-block-preformatted">HTML::link($url, 'title', $attributes, $secure);</pre>
<p>Generate a HTTPS HTML link</p>
<pre class="wp-block-preformatted">HTML::secureLink($url, 'title', $attributes);</pre>
<p>Generate a HTML link to an asset</p>
<pre class="wp-block-preformatted">HTML::linkAsset($url, 'title', $attributes, $secure);</pre>
<p>Generate a HTTPS HTML link to an asset</p>
<pre class="wp-block-preformatted">HTML::linkSecureAsset($url, 'title', $attributes);</pre>
<p>Generate a HTML link to a named route</p>
<pre class="wp-block-preformatted">HTML::linkRoute($name, 'title', $parameters, $attributes);</pre>
<p>Generate a HTML link to a controller action</p>
<pre class="wp-block-preformatted">HTML::linkAction($action, 'title', $parameters, $attributes);</pre>
<p>Generate a HTML link to an email address</p>
<pre class="wp-block-preformatted">HTML::mailto($email, 'title', $attributes);</pre>
<p>Obfuscate an e-mail address to prevent spam-bots from sniffing it</p>
<pre class="wp-block-preformatted">HTML::email($email);</pre>
<p>Generate an ordered list of items</p>
<pre class="wp-block-preformatted">HTML::ol($list, $attributes);</pre>
<p>Generate an un-ordered list of items</p>
<pre class="wp-block-preformatted">HTML::ul($list, $attributes);</pre>
<p>Create a listing HTML element</p>
<pre class="wp-block-preformatted">HTML::listing($type, $list, $attributes);</pre>
<p>Create the HTML for a listing element</p>
<pre class="wp-block-preformatted">HTML::listingElement($key, $type, $value);</pre>
<p>Create the HTML for a nested listing attribute</p>
<pre class="wp-block-preformatted">HTML::nestedListing($key, $type, $value);</pre>
<p>Build an HTML attribute string from an array</p>
<pre class="wp-block-preformatted">HTML::attributes($attributes);</pre>
<p>Build a single attribute element</p>
<pre class="wp-block-preformatted">HTML::attributeElement($key, $value);</pre>
<p>Obfuscate a string to prevent spam-bots from sniffing it</p>
<pre class="wp-block-preformatted">HTML::obfuscate($value);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-model"><a href="https://simplecheatsheet.com/laravel-model/">Laravel Model</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Basic Usage</h3>
<p>Defining An Eloquent Model</p>
<pre class="wp-block-preformatted">class User extends Model {}</pre>
<p>generate Eloquent models</p>
<pre class="wp-block-preformatted">php artisan make:model User</pre>
<p>specify a custom table name</p>
<pre class="wp-block-preformatted">class User extends Model {
    protected $table = 'my_users';
}</pre>
<h3>More</h3>
<pre class="wp-block-preformatted">Model::create(array('key' =&gt; 'value'));</pre>
<p>Find first matching record by attributes or create</p>
<pre class="wp-block-preformatted">Model::firstOrCreate(array('key' =&gt; 'value'));</pre>
<p>Find first record by attributes or instantiate</p>
<pre class="wp-block-preformatted">Model::firstOrNew(array('key' =&gt; 'value'));</pre>
<p>Create or update a record matching attibutes, and fill with values</p>
<pre class="wp-block-preformatted">Model::updateOrCreate(array('search_key' =&gt; 'search_value'), array('key' =&gt; 'value'));</pre>
<p>Fill a model with an array of attributes, beware of mass assignment!</p>
<pre class="wp-block-preformatted">Model::fill($attributes);<br>Model::destroy(1);<br>Model::all();<br>Model::find(1);</pre>
<p>Find using dual primary key</p>
<pre class="wp-block-preformatted">Model::find(array('first', 'last'));</pre>
<p>Throw an exception if the lookup fails</p>
<pre class="wp-block-preformatted">Model::findOrFail(1);</pre>
<p>Find using dual primary key and throw exception if the lookup fails</p>
<pre class="wp-block-preformatted">Model::findOrFail(array('first', 'last'));<br>Model::where('foo', '=', 'bar')-&gt;get();<br>Model::where('foo', '=', 'bar')-&gt;first();</pre>
<p>dynamic</p>
<pre class="wp-block-preformatted">Model::whereFoo('bar')-&gt;first();</pre>
<p>Throw an exception if the lookup fails</p>
<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;firstOrFail();<br>Model::where('foo', '=', 'bar')-&gt;count();<br>Model::where('foo', '=', 'bar')-&gt;delete();</pre>
<p>Output raw query</p>
<pre class="wp-block-preformatted">Model::where('foo', '=', 'bar')-&gt;toSql();<br>Model::whereRaw('foo = bar and cars = 2', array(20))-&gt;get();<br>Model::remember(5)-&gt;get();<br>Model::remember(5, 'cache-key-name')-&gt;get();<br>Model::cacheTags('my-tag')-&gt;remember(5)-&gt;get();<br>Model::cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();<br>Model::on('connection-name')-&gt;find(1);<br>Model::with('relation')-&gt;get();<br>Model::all()-&gt;take(10);<br>Model::all()-&gt;skip(10);</pre>
<p>Default Eloquent sort is ascendant</p>
<pre class="wp-block-preformatted">Model::all()-&gt;orderBy('column');<br>Model::all()-&gt;orderBy('column','desc');</pre>
<h3>Soft Delete</h3>
<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;get();</pre>
<p>Include the soft deleted models in the results</p>
<pre class="wp-block-preformatted">Model::withTrashed()-&gt;where('cars', 2)-&gt;restore();<br>Model::where('cars', 2)-&gt;forceDelete();</pre>
<p>Force the result set to only included soft deletes</p>
<pre class="wp-block-preformatted">Model::onlyTrashed()-&gt;where('cars', 2)-&gt;get();</pre>
<h3>Events</h3>
<pre class="wp-block-preformatted">Model::creating(function($model){});
Model::created(function($model){});
Model::updating(function($model){});
Model::updated(function($model){});
Model::saving(function($model){});
Model::saved(function($model){});
Model::deleting(function($model){});
Model::deleted(function($model){});
Model::observe(new FooObserver);</pre>
<h3>Eloquent Configuration</h3>
<p>Disables mass assignment exceptions from being thrown from model inserts and updates</p>
<pre class="wp-block-preformatted">Eloquent::unguard();</pre>
<p>Renables any ability to throw mass assignment exceptions</p>
<pre class="wp-block-preformatted">Eloquent::reguard();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-db-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-db-cheat-sheet/">Laravel DB Cheat Sheet</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Basic Database Usage</h3>
<pre class="wp-block-preformatted">DB::connection('connection_name');</pre>
<p>Running A Select Query</p>
<pre class="wp-block-preformatted">$results = DB::select('select * from users where id = ?', [1]);<br>$results = DB::select('select * from users where id = :id', ['id' =&gt; 1]);</pre>
<p>Running A General Statement</p>
<pre class="wp-block-preformatted">DB::statement('drop table users');</pre>
<p>Listening For Query Events</p>
<pre class="wp-block-preformatted">DB::listen(function($sql, $bindings, $time){ code_here; });</pre>
<p>Database Transactions</p>
<pre class="wp-block-preformatted">DB::transaction(function()<br>{<br>DB::table('users')-&gt;update(['votes' =&gt; 1]);<br>DB::table('posts')-&gt;delete();<br>});<br>DB::beginTransaction();<br>DB::rollback();<br>DB::commit();</pre>
<h3>Laravel Query Builder</h3>
<p>Retrieving All Rows From A Table</p>
<pre class="wp-block-preformatted">DB::table('name')-&gt;get();</pre>
<p>Chunking Results From A Table</p>
<pre class="wp-block-preformatted">DB::table('users')-&gt;chunk(100, function($users) {
 foreach ($users as $user) { //}
});</pre>
<p>Retrieving A Single Row From A Table</p>
<pre class="wp-block-preformatted">$user = DB::table('users')-&gt;where('name', 'John')-&gt;first();<br>DB::table('name')-&gt;first();</pre>
<p>Retrieving A Single Column From A Row</p>
<pre class="wp-block-preformatted">$name = DB::table('users')-&gt;where('name', 'John')-&gt;pluck('name');<br>DB::table('name')-&gt;pluck('column');</pre>
<p>Retrieving A List Of Column Values</p>
<pre class="wp-block-preformatted">$roles = DB::table('roles')-&gt;lists('title');<br>$roles = DB::table('roles')-&gt;lists('title', 'name');</pre>
<p>Specifying A Select Clause</p>
<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;select('name', 'email')-&gt;get();<br>$users = DB::table('users')-&gt;distinct()-&gt;get();<br>$users = DB::table('users')-&gt;select('name as user_name')-&gt;get();</pre>
<p>Adding A Select Clause To An Existing Query</p>
<pre class="wp-block-preformatted">$query = DB::table('users')-&gt;select('name');<br>$users = $query-&gt;addSelect('age')-&gt;get();</pre>
<p>Using Where Operators</p>
<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;get();<br>$users = DB::table('users')<br>-&gt;where('votes', '&gt;', 100)<br>-&gt;orWhere('name', 'John')<br>-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotBetween('votes', [1, 100])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNotIn('id', [1, 2, 3])-&gt;get();<br>$users = DB::table('users')<br>-&gt;whereNull('updated_at')-&gt;get();<br>DB::table('name')-&gt;whereNotNull('column')-&gt;get();</pre>
<p>Dynamic Where Clauses</p>
<pre class="wp-block-preformatted">$admin = DB::table('users')-&gt;whereId(1)-&gt;first();<br>$john = DB::table('users')<br>-&gt;whereIdAndEmail(2, '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1dbded9dff1d5ded49fd2dedc">[email&#160;protected]</a>')<br>-&gt;first();<br>$jane = DB::table('users')<br>-&gt;whereNameOrAge('Jane', 22)<br>-&gt;first();</pre>
<p>Order By, Group By, And Having</p>
<pre class="wp-block-preformatted">$users = DB::table('users')<br>-&gt;orderBy('name', 'desc')<br>-&gt;groupBy('count')<br>-&gt;having('count', '&gt;', 100)<br>-&gt;get();<br>DB::table('name')-&gt;orderBy('column')-&gt;get();<br>DB::table('name')-&gt;orderBy('column','desc')-&gt;get();<br>DB::table('name')-&gt;having('count', '&gt;', 100)-&gt;get();</pre>
<p>Offset &amp; Limit</p>
<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;skip(10)-&gt;take(5)-&gt;get();</pre>
<h3>Laravel Joins</h3>
<p>Basic Join Statement</p>
<pre class="wp-block-preformatted">DB::table('users')
          -&gt;join('contacts', 'users.id', '=', 'contacts.user_id')
          -&gt;join('orders', 'users.id', '=', 'orders.user_id')
          -&gt;select('users.id', 'contacts.phone', 'orders.price')
-&gt;get();</pre>
<p>Left Join Statement</p>
<pre class="wp-block-preformatted">DB::table('users')
      -&gt;leftJoin('posts', 'users.id', '=', 'posts.user_id')
-&gt;get();</pre>
<p>select * from users where name = &#8216;John&#8217; or (votes &gt; 100 and title &lt;&gt; &#8216;Admin&#8217;)</p>
<pre class="wp-block-preformatted">DB::table('users')
          -&gt;where('name', '=', 'John')
          -&gt;orWhere(function($query)
          {
              $query-&gt;where('votes', '&gt;', 100)
                    -&gt;where('title', '&lt;&gt;', 'Admin');
          })
-&gt;get();</pre>
<h3>Laravel Aggregates</h3>
<pre class="wp-block-preformatted">$users = DB::table('users')-&gt;count();
$price = DB::table('orders')-&gt;max('price');
$price = DB::table('orders')-&gt;min('price');
$price = DB::table('orders')-&gt;avg('price');
$total = DB::table('users')-&gt;sum('votes');
DB::table('name')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;remember(5, 'cache-key-name')-&gt;get();
DB::table('name')-&gt;cacheTags('my-key')-&gt;remember(5)-&gt;get();
DB::table('name')-&gt;cacheTags(array('my-first-key','my-second-key'))-&gt;remember(5)-&gt;get();</pre>
<h3>Laravel Raw Expressions&nbsp;</h3>
<pre class="wp-block-preformatted">$users = DB::table('users')
                   -&gt;select(DB::raw('count(*) as user_count, status'))
                   -&gt;where('status', '&lt;&gt;', 1)
                   -&gt;groupBy('status')
-&gt;get();</pre>
<p>return rows</p>
<pre class="wp-block-preformatted">DB::select('select * from users where id = ?', array('value'));</pre>
<p>return nr affected rows</p>
<pre class="wp-block-preformatted">DB::insert('insert into foo set bar=2');
DB::update('update foo set bar=2');
DB::delete('delete from bar');</pre>
<p>returns void</p>
<pre class="wp-block-preformatted">DB::statement('update foo set bar=2');</pre>
<p>raw expression inside a statement</p>
<pre class="wp-block-preformatted">DB::table('name')-&gt;select(DB::raw('count(*) as count, column2'))-&gt;get();</pre>
<h3>Laravel Inserts / Updates / Deletes / Unions / Pessimistic Locking</h3>
<p>Inserts</p>
<pre class="wp-block-preformatted">DB::table('users')-&gt;insert(
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="076d686f6947627f666a776b6229">[email&#160;protected]</a>com', 'votes' =&gt; 0]
);
$id = DB::table('users')-&gt;insertGetId(
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2d8dddadcf2d7cad3dfc2ded79cd1dddf">[email&#160;protected]</a>', 'votes' =&gt; 0]
);
DB::table('users')-&gt;insert([
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0672677f6a697446637e676b766a632865696b">[email&#160;protected]</a>', 'votes' =&gt; 0],
  ['email' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d494c5441486d48554c405d4148034e4240">[email&#160;protected]</a>', 'votes' =&gt; 0]
]);</pre>
<p>Updates</p>
<pre class="wp-block-preformatted">DB::table('users')
          -&gt;where('id', 1)
          -&gt;update(['votes' =&gt; 1]);
DB::table('users')-&gt;increment('votes');
DB::table('users')-&gt;increment('votes', 5);
DB::table('users')-&gt;decrement('votes');
DB::table('users')-&gt;decrement('votes', 5);
DB::table('users')-&gt;increment('votes', 1, ['name' =&gt; 'John']);</pre>
<p>Deletes</p>
<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&lt;', 100)-&gt;delete();
DB::table('users')-&gt;delete();
DB::table('users')-&gt;truncate();</pre>
<p>Unions. The unionAll() method is also available, and has the same method signature as union.</p>
<pre class="wp-block-preformatted">$first&nbsp;= DB::table('users')-&gt;whereNull('first_name');
$users = DB::table('users')-&gt;whereNull('last_name')-&gt;union($first)-&gt;get();</pre>
<p>Pessimistic Locking</p>
<pre class="wp-block-preformatted">DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;sharedLock()-&gt;get();
DB::table('users')-&gt;where('votes', '&gt;', 100)-&gt;lockForUpdate()-&gt;get();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-validation"><a href="https://simplecheatsheet.com/laravel-validation/">Laravel Validation</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Validator::make(
    array('key' => 'Foo'),
    array('key' => 'required|in:Foo')
);
Validator::extend('foo', function($attribute, $value, $params){});
Validator::extend('foo', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c98fa6a69fa8a5a0ada8bda6bb89bfa8a5a0ada8bdac">[email&#160;protected]</a>');
Validator::resolver(function($translator, $data, $rules, $msgs)
{
    return new FooValidator($translator, $data, $rules, $msgs);
});</pre>
<h3>Laravel Rules</h3>
<pre class="wp-block-preformatted">accepted
active_url
after:YYYY-MM-DD
before:YYYY-MM-DD
alpha
alpha_dash
alpha_num
array
between:1,10
confirmed
date
date_format:YYYY-MM-DD
different:fieldname
digits:value
digits_between:min,max
boolean
email
exists:table,column
image
in:foo,bar,...
not_in:foo,bar,...
integer
numeric
ip
max:value
min:value
mimes:jpeg,png
regex:[0-9]
required
required_if:field,value
required_with:foo,bar,...
required_with_all:foo,bar,...
required_without:foo,bar,...
required_without_all:foo,bar,...
same:field
size:value
timezone
unique:table,column,except,idColumn
url</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-view"><a href="https://simplecheatsheet.com/laravel-view/">Laravel View</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">View::make('path/to/view');
View::make('foo/bar')-&gt;with('key', 'value');
View::make('foo/bar')-&gt;withKey('value');
View::make('foo/bar', array('key' =&gt; 'value'));
View::exists('foo/bar');</pre>
<p>Share a value across all views</p>
<pre class="wp-block-preformatted">View::share('key', 'value');</pre>
<p>Nesting views</p>
<pre class="wp-block-preformatted">View::make('foo/bar')-&gt;nest('name', 'foo/baz', $data);</pre>
<p>Register a view composer</p>
<pre class="wp-block-preformatted">View::composer('viewname', function($view){});</pre>
<p>Register multiple views to a composer</p>
<pre class="wp-block-preformatted">View::composer(array('view1', 'view2'), function($view){});</pre>
<p>Register a composer class</p>
<pre class="wp-block-preformatted">View::composer('viewname', 'FooComposer');
View::creator('viewname', function($view){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-blade"><a href="https://simplecheatsheet.com/laravel-blade/">Laravel Blade</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>Show a section in a template</p>
<pre class="wp-block-preformatted">@yield('name')<br>@extends('layout.name')</pre>
<p>Begin a section</p>
<pre class="wp-block-preformatted">@section('name')</pre>
<p>End a section</p>
<pre class="wp-block-preformatted">@stop</pre>
<p>End a section and yield</p>
<pre class="wp-block-preformatted">@section('sidebar')<br>@show<br>@parent</pre>
<pre class="wp-block-preformatted">@include('view.name')<br>@include('view.name', array('key' =&gt; 'value'));<br>@lang('messages.name')<br>@choice('messages.name', 1);</pre>
<pre class="wp-block-preformatted">@if<br>@else<br>@elseif<br>@endif</pre>
<pre class="wp-block-preformatted">@unless<br>@endunless</pre>
<pre class="wp-block-preformatted">@for<br>@endfor</pre>
<pre class="wp-block-preformatted">@foreach<br>@endforeach</pre>
<pre class="wp-block-preformatted">@while<br>@endwhile</pre>
<p>forelse 4.2 feature</p>
<pre class="wp-block-preformatted">@forelse($users as $user)<br>@empty<br>@endforelse</pre>
<p>Echo content</p>
<pre class="wp-block-preformatted">{{ $var }}</pre>
<p>Echo escaped content</p>
<pre class="wp-block-preformatted">{{{ $var }}}</pre>
<p>Echo unescaped content; 5.0 feature</p>
<pre class="wp-block-preformatted">{!! $var !!}<br>{{-- Blade Comment --}}</pre>
<p>Echoing Data After Checking For Existence</p>
<pre class="wp-block-preformatted">{{{ $name or 'Default' }}}</pre>
<p>Displaying Raw Text With Curly Braces</p>
<pre class="wp-block-preformatted">@{{ This will not be processed by Blade }}</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-mail"><a href="https://simplecheatsheet.com/laravel-mail/">Laravel Mail</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Mail::send('email.view', $data, function($message){});
Mail::send(array('html.view', 'text.view'), $data, $callback);
Mail::queue('email.view', $data, function($message){});
Mail::queueOn('queue-name', 'email.view', $data, $callback);
Mail::later(5, 'email.view', $data, function($message){});</pre>
<p>Write all email to logs instead of sending</p>
<pre class="wp-block-preformatted">Mail::pretend();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-session"><a href="https://simplecheatsheet.com/laravel-session/">Laravel Session</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Session::get('key');</pre>
<p>Returns an item from the session</p>
<pre class="wp-block-preformatted">Session::get('key', 'default');<br>Session::get('key', function(){ return 'default'; });</pre>
<p>Get the session ID</p>
<pre class="wp-block-preformatted">Session::getId();</pre>
<p>Put a key / value pair in the session</p>
<pre class="wp-block-preformatted">Session::put('key', 'value');</pre>
<p>Push a value into an array in the session</p>
<pre class="wp-block-preformatted">Session::push('foo.bar','value');</pre>
<p>Returns all items from the session</p>
<pre class="wp-block-preformatted">Session::all();</pre>
<p>Checks if an item is defined</p>
<pre class="wp-block-preformatted">Session::has('key');</pre>
<p>Remove an item from the session</p>
<pre class="wp-block-preformatted">Session::forget('key');</pre>
<p>Remove all of the items from the session</p>
<pre class="wp-block-preformatted">Session::flush();</pre>
<p>Generate a new session identifier</p>
<pre class="wp-block-preformatted">Session::regenerate();</pre>
<p>Flash a key / value pair to the session</p>
<pre class="wp-block-preformatted">Session::flash('key', 'value');</pre>
<p>Reflash all of the session flash data</p>
<pre class="wp-block-preformatted">Session::reflash();</pre>
<p>Reflash a subset of the current flash data</p>
<pre class="wp-block-preformatted">Session::keep(array('key1', 'key2'));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-response"><a href="https://simplecheatsheet.com/laravel-response/">Laravel Response</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">return Response::make($contents);<br>return Response::make($contents, 200);<br>return Response::json(array('key' =&gt; 'value'));<br>return Response::json(array('key' =&gt; 'value'))<br>-&gt;setCallback(Input::get('callback'));<br>return Response::download($filepath);<br>return Response::download($filepath, $filename, $headers);</pre>
<p>Create a response and modify a header value</p>
<pre class="wp-block-preformatted">$response = Response::make($contents, 200);<br>$response-&gt;header('Content-Type', 'application/json');<br>return $response;</pre>
<p>Attach a cookie to a response</p>
<pre class="wp-block-preformatted">return Response::make($content)<br>-&gt;withCookie(Cookie::make('key', 'value'));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-event"><a href="https://simplecheatsheet.com/laravel-event/">Laravel Event</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Event::fire('foo.bar', array($bar));</pre>
<p>Register an event listener with the dispatcher. void listen(string|array $events, mixed $listener, int $priority)</p>
<pre class="wp-block-preformatted">Event::listen('App\Events\UserSignup', function($bar){});
Event::listen('foo.*', function($bar){});
Event::listen('foo.bar', 'FooHandler', 10);
Event::listen('foo.bar', 'BarHandler', 5);</pre>
<p>Stopping The Propagation Of An Event. You may do so using it by returning false from your handler.</p>
<pre class="wp-block-preformatted">Event::listen('foor.bar', function($event){ return false; });<br>Event::subscribe('UserEventHandler');</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-input"><a href="https://simplecheatsheet.com/laravel-input/">Laravel Input</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Input::get('key');</pre>
<p>Default if the key is missing</p>
<pre class="wp-block-preformatted">Input::get('key', 'default');<br>Input::has('key');<br>Input::all();</pre>
<p>Only retrieve &#8216;foo&#8217; and &#8216;bar&#8217; when getting input</p>
<pre class="wp-block-preformatted">Input::only('foo', 'bar');</pre>
<p>Disregard &#8216;foo&#8217; when getting input</p>
<pre class="wp-block-preformatted">Input::except('foo');<br>Input::flush();</pre>
<h3>Laravel Session Input (flash)</h3>
<p>Flash input to the session</p>
<pre class="wp-block-preformatted">Input::flash();</pre>
<p>Flash only some of the input to the session</p>
<pre class="wp-block-preformatted">Input::flashOnly('foo', 'bar');</pre>
<p>Flash only some of the input to the session</p>
<pre class="wp-block-preformatted">Input::flashExcept('foo', 'baz');</pre>
<p>Retrieve an old input item</p>
<pre class="wp-block-preformatted">Input::old('key','default_value');</pre>
<h3>Laravel Files</h3>
<p>Use a file that&#8217;s been uploaded</p>
<pre class="wp-block-preformatted">Input::file('filename');</pre>
<p>Determine if a file was uploaded</p>
<pre class="wp-block-preformatted">Input::hasFile('filename');</pre>
<p>Access file properties</p>
<pre class="wp-block-preformatted">Input::file('name')-&gt;getRealPath();<br>Input::file('name')-&gt;getClientOriginalName();<br>Input::file('name')-&gt;getClientOriginalExtension();<br>Input::file('name')-&gt;getSize();<br>Input::file('name')-&gt;getMimeType();</pre>
<p>Move an uploaded file</p>
<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath);</pre>
<p>Move an uploaded file</p>
<pre class="wp-block-preformatted">Input::file('name')-&gt;move($destinationPath, $fileName);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-url"><a href="https://simplecheatsheet.com/laravel-url/">Laravel URL</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">URL::full();
URL::current();
URL::previous();
URL::to('foo/bar', $parameters, $secure);
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afe1cad8dcecc0c1dbddc0c3c3caddefc6dbcac2">[email&#160;protected]</a>', ['id'=&gt;123]);</pre>
<p>need be in appropriate namespace</p>
<pre class="wp-block-preformatted">URL::action('Auth\<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afeedadbc7ecc0c1dbddc0c3c3caddefc3c0c8c0dadb">[email&#160;protected]</a>');
URL::action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="470128280428293335282b2b2235072a22332f2823">[email&#160;protected]</a>', $parameters, $absolute);
URL::route('foo', $parameters, $absolute);
URL::secure('foo/bar', $parameters);
URL::asset('css/foo.css', $secure);
URL::secureAsset('css/foo.css');
URL::isValidUrl('http://example.com');
URL::getRequest();
URL::setRequest($request);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-log"><a href="https://simplecheatsheet.com/laravel-log/">Laravel Log</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>The logger provides the seven logging levels defined in RFC 5424: debug, info, notice, warning, error, critical, and alert.</p>
<pre class="wp-block-preformatted">Log::info('info');<br>Log::info('info',array('context'=&gt;'additional info'));<br>Log::error('error');<br>Log::warning('warning');</pre>
<p>get monolog instance</p>
<pre class="wp-block-preformatted">Log::getMonolog();</pre>
<p>add listener</p>
<pre class="wp-block-preformatted">Log::listen(function($level, $message, $context) {});</pre>
<h3>Laravel Query Logging</h3>
<p>enable the log</p>
<pre class="wp-block-preformatted">DB::connection()-&gt;enableQueryLog();</pre>
<p>get an array of the executed queries</p>
<pre class="wp-block-preformatted">DB::getQueryLog();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-environment"><a href="https://simplecheatsheet.com/laravel-environment/">Laravel Environment</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">$environment = app()-&gt;environment();
$environment = App::environment();
$environment = $app-&gt;environment(); </pre>
<p>The environment is local</p>
<pre class="wp-block-preformatted">if ($app-&gt;environment('local')){}</pre>
<p>The environment is either local OR staging&#8230;</p>
<pre class="wp-block-preformatted">if ($app-&gt;environment('local', 'staging')){}</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-string"><a href="https://simplecheatsheet.com/laravel-string/">Laravel String</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>Transliterate a UTF-8 value to ASCII</p>
<pre class="wp-block-preformatted">Str::ascii($value)
Str::camel($value)
Str::contains($haystack, $needle)
Str::endsWith($haystack, $needles)</pre>
<p>Cap a string with a single instance of a given value.</p>
<pre class="wp-block-preformatted">Str::finish($value, $cap)
Str::is($pattern, $value)
Str::length($value)
Str::limit($value, $limit = 100, $end = '…')
Str::lower($value)
Str::words($value, $words = 100, $end = '…')
Str::plural($value, $count = 2)</pre>
<p>Generate a more truly &#8220;random&#8221; alpha-numeric string.</p>
<pre class="wp-block-preformatted">Str::random($length = 16)</pre>
<p>Generate a &#8220;random&#8221; alpha-numeric string.</p>
<pre class="wp-block-preformatted">Str::quickRandom($length = 16)
Str::upper($value)
Str::title($value)
Str::singular($value)
Str::slug($title, $separator = '-')
Str::snake($value, $delimiter = '_')
Str::startsWith($haystack, $needles)</pre>
<p>Convert a value to studly caps case.</p>
<pre class="wp-block-preformatted">Str::studly($value)
Str::macro($name, $macro)</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-composer-command"><a href="https://simplecheatsheet.com/laravel-composer-command/">Laravel Composer Command</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">composer create-project laravel/laravel folder_name
composer install
composer update
composer dump-autoload [--optimize]
composer self-update
composer require [options] [--] [vender/packages]…</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-artisan"><a href="https://simplecheatsheet.com/laravel-artisan/">Laravel Artisan</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<table><tbody><tr><td>php artisan make:policy PostPolicy</td><td>Added in</td></tr><tr><td>php artisan&nbsp;--help <br>OR -h</td><td>Displays help for a given command</td></tr><tr><td>php artisan&nbsp;--quiet <br>OR -q</td><td>Do not output any message</td></tr><tr><td>php artisan&nbsp;--version <br>OR -V</td><td>Display this application version</td></tr><tr><td>php artisan&nbsp;&#8211;no-interaction <br>OR -n</td><td>Do not ask any interactive question</td></tr><tr><td>php artisan&nbsp;--ansi</td><td>Force ANSI output</td></tr><tr><td>php artisan&nbsp;--no-ansi</td><td>Disable ANSI output</td></tr><tr><td>php artisan&nbsp;--env</td><td>The environment the command should run under</td></tr><tr><td>php artisan&nbsp;--verbose</td><td>-v|vv|vvv Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</td></tr><tr><td>php artisan clear-compiled</td><td>Remove the compiled class file</td></tr><tr><td>php artisan env</td><td>Display the current framework environment</td></tr><tr><td>php artisan help</td><td>Displays help for a command</td></tr><tr><td>php artisan list</td><td>Lists commands</td></tr><tr><td>php artisan tinker</td><td>Interact with your application</td></tr><tr><td>php artisan down</td><td>Put the application into maintenance mode</td></tr><tr><td>php artisan up</td><td>Bring the application out of maintenance mode</td></tr><tr><td>php artisan optimize&nbsp;[--force] [--psr]</td><td>Optimize the framework for better performance<br>--force Force the compiled class file to be <br>--psr Do not optimize Composer dump-autoload.</td></tr><tr><td>php artisan serve</td><td>Serve the application on the PHP development server</td></tr><tr><td>php artisan serve&nbsp;--port 8080</td><td>Change the default port</td></tr><tr><td>php artisan serve&nbsp;--host 0.0.0.0</td><td>Get it to work outside localhost</td></tr><tr><td>php artisan app:name namespace</td><td>Set the application namespace</td></tr><tr><td>php artisan auth:clear-resets</td><td>Flush expired password reset tokens</td></tr><tr><td>php artisan cache:clear</td><td>Flush the application cache</td></tr><tr><td>php artisan cache:table</td><td>Create a migration for the cache database table</td></tr><tr><td>php artisan config:cache</td><td>Create a cache file for faster configuration loading</td></tr><tr><td>php artisan config:clear</td><td>Remove the configuration cache file</td></tr><tr><td>$exitCode&nbsp;= Artisan::call('config:cache');</td><td>In program</td></tr><tr><td>php artisan db:seed [--class[="..."]] [--database[="..."]] [--force]</td><td>Seed the database with records<br>--class The class name of the root seeder (default: &#8220;DatabaseSeeder&#8221;)<br>--database The database connection to seed<br>--force Force the operation to run when in production.</td></tr><tr><td>php artisan&nbsp;event:generate</td><td>Generate the missing events and handlers based on registration</td></tr><tr><td>php artisan handler:command [--command="..."] name</td><td>Create a new command handler class<br>--command The command class the handler handles.</td></tr><tr><td>php artisan handler:event [--event="..."] [--queued] name</td><td>Create a new event handler class<br>--event The event class the handler handles.<br>--queued Indicates the event handler should be queued.</td></tr><tr><td>php artisan key:generate</td><td>Set the application key</td></tr><tr><td>php artisan make:command [--handler] [--queued] name</td><td>By default, this creates a self-handling command that isn&#8217;t pushed to the queue. Pass this the --handler flag to generate a handler, and the --queued flag to make it queued.</td></tr><tr><td>make:console [--command[="..."]] name</td><td>Create a new Artisan command<br>--command The terminal command should be assigned. (default: &#8220;command:name&#8221;)</td></tr><tr><td>php artisan make:controller [--plain] name</td><td>Create a new resourceful controller<br>--plain Generate an empty controller class.</td></tr><tr><td>php artisan make:event name</td><td>Create a new event class</td></tr><tr><td>php artisan make:middleware name</td><td>Create a new middleware class</td></tr><tr><td>php artisan make:migration [--create[="..."]] [--table[="..."]] name</td><td>Create a new migration file<br>--create The table to be created.<br>--table The table to migrate.</td></tr><tr><td>php artisan make:model name</td><td>Create a new Eloquent model class</td></tr><tr><td>php artisan make:provider name</td><td>Create a new service provider class</td></tr><tr><td>php artisan make:request name</td><td>Create a new form request class</td></tr><tr><td>php artisan migrate&nbsp;[--database[="..."]] [--force] [--path[="..."]] [--pretend] [--seed]</td><td>Database migrations<br>--database The database connection to use.<br>--force Force the operation to run when in production.<br>--path The path of migrations files to be executed.<br>--pretend Dump the SQL queries that would be run.<br>--seed Indicates if the seed task should be re-run.</td></tr><tr><td>php artisan migrate:install [--database[="..."]]</td><td>Create the migration repository</td></tr><tr><td>php artisan migrate:refresh [--database[="..."]] [--force] [--seed] [--seeder[="..."]]</td><td>Create a new migration file<br>--seeder The class name of the root seeder.</td></tr><tr><td>php artisan migrate:reset [--database[="..."]] [--force] [--pretend]</td><td>Rollback all database migrations<br>--pretend Dump the SQL queries that would be run.</td></tr><tr><td>php artisan migrate:rollback [--database[="..."]] [--force] [--pretend]</td><td>Rollback the last database migration</td></tr><tr><td>php artisan migrate:status</td><td>Show a list of migrations up/down</td></tr><tr><td>php artisan queue:table</td><td>Create a migration for the queue jobs database table</td></tr><tr><td>php artisan queue:listen [--queue[="..."]] [--delay[="..."]] [--memory[="..."]] [--timeout[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</td><td>Listen to a given queue<br>--queue The queue to listen on<br>--delay Amount of time to delay failed jobs (default: 0)<br>--memory The memory limit in megabytes (default: 128)<br>--timeout Seconds a job may run before timing out (default: 60)<br>--sleep Seconds to wait before checking queue for jobs (default: 3)<br>--tries Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td>php artisan queue:failed</td><td>List all of the failed queue jobs</td></tr><tr><td>php artisan queue:failed-table</td><td>Create a migration for the failed queue jobs database table</td></tr><tr><td>php artisan queue:flush</td><td>Flush all of the failed queue jobs</td></tr><tr><td>php artisan queue:forget</td><td>Delete a failed queue job</td></tr><tr><td>php artisan queue:restart</td><td>Restart queue worker daemons after their current job</td></tr><tr><td>php artisan queue:retry id</td><td>Retry a failed queue job(id: The ID of the failed job)</td></tr><tr><td>php artisan queue:subscribe [--type[="..."]] queue url</td><td>Subscribe a URL to an Iron.io push queue<br>queue: The name of Iron.io queue.<br>url: The URL to be subscribed.<br>--type The push type for the queue.</td></tr><tr><td>php artisan queue:work [--queue[="..."]] [--daemon] [--delay[="..."]] [--force] [--memory[="..."]] [--sleep[="..."]] [--tries[="..."]] [connection]</td><td>Process the next job on a queue<br>--queue The queue to listen on<br>--daemon Run the worker in daemon mode<br>--delay Amount of time to delay failed jobs (default: 0)<br>--force Force the worker to run even in maintenance mode<br>--memory The memory limit in megabytes (default: 128)<br>--sleep Number of seconds to sleep when no job is available (default: 3)<br>--tries Number of times to attempt a job before logging it failed (default: 0)</td></tr><tr><td>php artisan route:cache</td><td>Create a route cache file for faster route registration</td></tr><tr><td>php artisan route:clear</td><td>Remove the route cache file</td></tr><tr><td>php artisan route:list</td><td>List all registered routes</td></tr><tr><td>php artisan schedule:run</td><td>Run the scheduled commands</td></tr><tr><td>php artisan session:table</td><td>Create a migration for the session database table</td></tr><tr><td>php artisan vendor:publish [--force] [--provider[="..."]] [--tag[="..."]] php artisan tail [--path[="..."]] [--lines[="..."]] [connection]</td><td>Publish any publishable assets from vendor packages<br>--force Overwrite any existing files.<br>--provider The service provider that has assets you want to publish.<br>--tag The tag that has assets you want to publish.</td></tr></tbody></table>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-cookie"><a href="https://simplecheatsheet.com/laravel-cookie/">Laravel Cookie</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Cookie::get('key');<br>Cookie::get('key', 'default');</pre>
<p>Create a cookie that lasts for ever</p>
<pre class="wp-block-preformatted">Cookie::forever('key', 'value');
Create a cookie that lasts N minutes
Cookie::make('key', 'value', 'minutes');</pre>
<p>Set a cookie before a response has been created</p>
<pre class="wp-block-preformatted">Cookie::queue('key', 'value', 'minutes');</pre>
<p>Forget cookie</p>
<pre class="wp-block-preformatted">Cookie::forget('key');</pre>
<p>Send a cookie with a response</p>
<pre class="wp-block-preformatted">$response = Response::make('Hello World');</pre>
<p>Add a cookie to the response</p>
<pre class="wp-block-preformatted">$response-&gt;withCookie(Cookie::make('name', 'value', $minutes));</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-messages"><a href="https://simplecheatsheet.com/laravel-messages/">Laravel Messages</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>These can be used on the $message instance passed into Mail::send() or Mail::queue()</p>
<pre class="wp-block-preformatted">$message-&gt;from('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51343c30383d113429303c213d347f323e3c">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;sender('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a2f272b23260a2f322b273a262f64292527">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;returnPath('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbded6dad2d7fbdec3dad6cbd7de95d8d4d6">[email&#160;protected]</a>');
$message-&gt;to('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ceaba3afa7a28eabb6afa3bea2abe0ada1a3">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;cc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5a525e56537f5a475e524f535a115c5052">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;bcc('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c39313d35301c39243d312c3039723f3331">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;replyTo('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3a323e36331f3a273e322f333a713c3032">[email&#160;protected]</a>', 'Mr. Example');
$message-&gt;subject('Welcome to the Jungle');
$message-&gt;priority(2);
$message-&gt;attach('foo\bar.txt', $options);</pre>
<p>This uses in-memory data as attachments</p>
<pre class="wp-block-preformatted">$message-&gt;attachData('bar', 'Data Name', $options);</pre>
<p>Embed a file in the message and get the CID</p>
<pre class="wp-block-preformatted">$message-&gt;embed('foo\bar.txt');
$message-&gt;embedData('foo', 'Data Name', $options);</pre>
<p>Get the underlying Swift Message instance</p>
<pre class="wp-block-preformatted">$message-&gt;getSwiftMessage();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-security"><a href="https://simplecheatsheet.com/laravel-security/">Laravel Security</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Hashing</h3>
<pre class="wp-block-preformatted">Hash::make('secretpassword');
Hash::check('secretpassword', $hashedPassword);
Hash::needsRehash($hashedPassword);</pre>
<h3>Encryption</h3>
<pre class="wp-block-preformatted">Crypt::encrypt('secretstring');
Crypt::decrypt($encryptedString);
Crypt::setMode('ctr');
Crypt::setCipher($cipher);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-schema"><a href="https://simplecheatsheet.com/laravel-schema/">Laravel Schema</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>Indicate that the table needs to be created</p>
<pre class="wp-block-preformatted">Schema::create('table', function($table) {
    $table-&gt;increments('id');
});</pre>
<p>Specify a Connection</p>
<pre class="wp-block-preformatted">Schema::connection('foo')-&gt;create('table', function($table){});</pre>
<p>Rename the table to a given name</p>
<pre class="wp-block-preformatted">Schema::rename($from, $to);</pre>
<p>Indicate that the table should be dropped</p>
<pre class="wp-block-preformatted">Schema::drop('table');</pre>
<p>Indicate that the table should be dropped if it exists</p>
<pre class="wp-block-preformatted">Schema::dropIfExists('table');</pre>
<p>Determine if the given table exists</p>
<pre class="wp-block-preformatted">Schema::hasTable('table');</pre>
<p>Determine if the given table has a given column</p>
<pre class="wp-block-preformatted">Schema::hasColumn('table', 'column');</pre>
<p>Update an existing table</p>
<pre class="wp-block-preformatted">Schema::table('table', function($table){});</pre>
<p>Indicate that the given columns should be renamed</p>
<pre class="wp-block-preformatted">$table-&gt;renameColumn('from', 'to');</pre>
<p>Indicate that the given columns should be dropped<br></p>
<pre class="wp-block-preformatted">$table-&gt;dropColumn(string|array);</pre>
<p>The storage engine that should be used for the table</p>
<pre class="wp-block-preformatted">$table-&gt;engine = 'InnoDB';</pre>
<p>Only work on MySQL</p>
<pre class="wp-block-preformatted">$table-&gt;string('name')-&gt;after('email');</pre>
<h3>Laravel Indexes</h3>
<pre class="wp-block-preformatted">$table-&gt;string('column')-&gt;unique();<br>$table-&gt;primary('column');</pre>
<p>Creates a dual primary key</p>
<pre class="wp-block-preformatted">$table-&gt;primary(array('first', 'last'));
$table-&gt;unique('column');
$table-&gt;unique('column', 'key_name');</pre>
<p>Creates a dual unique index<br></p>
<pre class="wp-block-preformatted">$table-&gt;unique(array('first', 'last'));
$table-&gt;unique(array('first', 'last'), 'key_name');
$table-&gt;index('column');
$table-&gt;index('column', 'key_name');</pre>
<p>Creates a dual index</p>
<pre class="wp-block-preformatted">$table-&gt;index(array('first', 'last'));
$table-&gt;index(array('first', 'last'), 'key_name');
$table-&gt;dropPrimary('table_column_primary');
$table-&gt;dropUnique('table_column_unique');
$table-&gt;dropIndex('table_column_index');</pre>
<h3>Laravel Foreign Keys</h3>
<pre class="wp-block-preformatted">$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onDelete('cascade'|'restrict'|'set null'|'no action');
$table-&gt;foreign('user_id')-&gt;references('id')-&gt;on('users')-&gt;onUpdate('cascade'|'restrict'|'set null'|'no action');
$table-&gt;dropForeign('posts_user_id_foreign');</pre>
<h3>Laravel Column Types</h3>
<p>Increments</p>
<pre class="wp-block-preformatted">$table-&gt;increments('id');
$table-&gt;bigIncrements('id');</pre>
<p>Numbers</p>
<pre class="wp-block-preformatted">$table-&gt;integer('votes');
$table-&gt;tinyInteger('votes');
$table-&gt;smallInteger('votes');
$table-&gt;mediumInteger('votes');
$table-&gt;bigInteger('votes');
$table-&gt;float('amount');
$table-&gt;double('column', 15, 8);
$table-&gt;decimal('amount', 5, 2);</pre>
<p>String and Text</p>
<pre class="wp-block-preformatted">$table-&gt;char('name', 4);
$table-&gt;string('email');
$table-&gt;string('name', 100);
$table-&gt;text('description');
$table-&gt;mediumText('description');
$table-&gt;longText('description');</pre>
<p>Date and Time</p>
<pre class="wp-block-preformatted">$table-&gt;date('created_at');
$table-&gt;dateTime('created_at');
$table-&gt;time('sunrise');
$table-&gt;timestamp('added_on');</pre>
<p>Adds created_at and updated_at columns</p>
<pre class="wp-block-preformatted">$table-&gt;timestamps();<br>$table-&gt;nullableTimestamps();</pre>
<p>Others</p>
<pre class="wp-block-preformatted">$table-&gt;binary('data');
$table-&gt;boolean('confirmed');</pre>
<p>Adds deleted_at column for soft deletes</p>
<pre class="wp-block-preformatted">$table-&gt;softDeletes();
$table-&gt;enum('choices', array('foo', 'bar'));</pre>
<p>Adds remember_token as VARCHAR(100) NULL</p>
<pre class="wp-block-preformatted">$table-&gt;rememberToken();</pre>
<p>Adds INTEGER parent_id and STRING parent_type</p>
<pre class="wp-block-preformatted">$table-&gt;morphs('parent');<br>-&gt;nullable()<br>-&gt;default($value)<br>-&gt;unsigned()</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-request"><a href="https://simplecheatsheet.com/laravel-request/">Laravel Request</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>url: http://xx.com/aa/bb</p>
<pre class="wp-block-preformatted">Request::url();</pre>
<p>path: /aa/bb</p>
<pre class="wp-block-preformatted">Request::path();</pre>
<p>getRequestUri: /aa/bb/?c=d</p>
<pre class="wp-block-preformatted">Request::getRequestUri();</pre>
<p>Returns user&#8217;s IP</p>
<pre class="wp-block-preformatted">Request::getClientIp();</pre>
<p>getUri: http://xx.com/aa/bb/?c=d</p>
<pre class="wp-block-preformatted">Request::getUri();</pre>
<p>getQueryString: c=d</p>
<pre class="wp-block-preformatted">Request::getQueryString();</pre>
<p>Get the port scheme of the request (e.g., 80, 443, etc.)</p>
<pre class="wp-block-preformatted">Request::getPort();</pre>
<p>Determine if the current request URI matches a pattern</p>
<pre class="wp-block-preformatted">Request::is('foo/*');</pre>
<p>Get a segment from the URI (1 based index)</p>
<pre class="wp-block-preformatted">Request::segment(1);</pre>
<p>Retrieve a header from the request</p>
<pre class="wp-block-preformatted">Request::header('Content-Type');</pre>
<p>Retrieve a server variable from the request</p>
<pre class="wp-block-preformatted">Request::server('PATH_INFO');</pre>
<p>Determine if the request is the result of an AJAX call</p>
<pre class="wp-block-preformatted">Request::ajax();</pre>
<p>Determine if the request is over HTTPS</p>
<pre class="wp-block-preformatted">Request::secure();</pre>
<p>Get the request method</p>
<pre class="wp-block-preformatted">Request::method();</pre>
<p>Checks if the request method is of specified type</p>
<pre class="wp-block-preformatted">Request::isMethod('post');</pre>
<p>Get raw POST data</p>
<pre class="wp-block-preformatted">Request::instance()-&gt;getContent();</pre>
<p>Get requested response format</p>
<pre class="wp-block-preformatted">Request::format();</pre>
<p>true if HTTP Content-Type header contains */json</p>
<pre class="wp-block-preformatted">Request::isJson();</pre>
<p>true if HTTP Accept header is application/json</p>
<pre class="wp-block-preformatted">Request::wantsJson();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-container"><a href="https://simplecheatsheet.com/laravel-container/">Laravel Container</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">App::bind('foo', function($app){ return new Foo; });<br>App::make('foo');</pre>
<p>If this class exists, it&#8217;s returned</p>
<pre class="wp-block-preformatted">App::make('FooBar');</pre>
<p>Register a shared binding in the container</p>
<pre class="wp-block-preformatted">App::singleton('foo', function(){ return new Foo; });</pre>
<p>Register an existing instance as shared in the container</p>
<pre class="wp-block-preformatted">App::instance('foo', new Foo);</pre>
<p>Register a binding with the container</p>
<pre class="wp-block-preformatted">App::bind('FooRepositoryInterface', 'BarRepository');</pre>
<p>Register a service provider with the application</p>
<pre class="wp-block-preformatted">App::register('FooServiceProvider');</pre>
<p>Listen for object resolution</p>
<pre class="wp-block-preformatted">App::resolving(function($object){});</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-auth"><a href="https://simplecheatsheet.com/laravel-auth/">Laravel Auth</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Laravel Authentication</h3>
<p>Determine if the current user is authenticated</p>
<pre class="wp-block-preformatted">Auth::check();</pre>
<p>Get the currently authenticated user</p>
<pre class="wp-block-preformatted">Auth::user();</pre>
<p>Get the ID of the currently authenticated user</p>
<pre class="wp-block-preformatted">Auth::id();</pre>
<p>Attempt to authenticate a user using the given credentials</p>
<pre class="wp-block-preformatted">Auth::attempt(array('email' =&gt; $email, 'password' =&gt; $password));</pre>
<p>&#8216;Remember me&#8217; by passing true to Auth::attempt()</p>
<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>
<p>Log in for a single request</p>
<pre class="wp-block-preformatted">Auth::once($credentials);</pre>
<p>Log a user into the application</p>
<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>
<p>Log the given user ID into the application</p>
<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>
<p>Log the user out of the application</p>
<pre class="wp-block-preformatted">Auth::logout();</pre>
<p>Validate a user&#8217;s credentials</p>
<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>
<p>Attempt to authenticate using HTTP Basic Auth</p>
<pre class="wp-block-preformatted">Auth::basic('username');</pre>
<p>Perform a stateless HTTP Basic login attempt</p>
<pre class="wp-block-preformatted">Auth::onceBasic();</pre>
<p>Send a password reminder to a user</p>
<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>
<h3>Laravel Authorization</h3>
<p>Define abilities</p>
<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4e7c8c5d7d7e4c9c1d0cccbc0">[email&#160;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>
<p>Passing multiple argument</p>
<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>
<p>Check abilities</p>
<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>
<p>Specified a user for checking</p>
<pre class="wp-block-preformatted">Gate::forUser($user)-&gt;allows('update-post', $post);</pre>
<p>Through User model, using Authorizable trait</p>
<pre class="wp-block-preformatted">User::find(1)-&gt;can('update-post', $post);<br>User::find(1)-&gt;cannot('update-post', $post);</pre>
<p>Intercepting Authorization Checks</p>
<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>
<p>Chekcing in Blade template</p>
<pre class="wp-block-preformatted">@can('update-post', $post)
@endcan
// with <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="24414857416447454a">[email&#160;protected]</a>('update-post', $post)
@else
@endcan
</pre>
<p>Generate a Policy</p>
<pre class="wp-block-preformatted">php artisan make:policy PostPolicy</pre>
<p>`policy` helper function</p>
<pre class="wp-block-preformatted">policy($post)-&gt;update($user, $post)</pre>
<p>Controller Authorization</p>
<pre class="wp-block-preformatted">$this-&gt;authorize('update', $post);</pre>
<p>for $user</p>
<pre class="wp-block-preformatted">$this-&gt;authorizeForUser($user, 'update', $post);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-auth-cheat-sheet"><a href="https://simplecheatsheet.com/laravel-auth-cheat-sheet/">Laravel Auth Cheat Sheet</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Authentication</h3>
<p>Determine if the current user is authenticated</p>
<pre class="wp-block-preformatted">Auth::check();</pre>
<p>Get the currently authenticated user</p>
<pre class="wp-block-preformatted">Auth::user();</pre>
<p>Get the ID of the currently authenticated user</p>
<pre class="wp-block-preformatted">Auth::id();</pre>
<p>Attempt to authenticate a user using the given credentials</p>
<pre class="wp-block-preformatted">Auth::attempt(array('email' => $email, 'password' => $password));</pre>
<p>&#8216;Remember me&#8217; by passing true to Auth::attempt()</p>
<pre class="wp-block-preformatted">Auth::attempt($credentials, true);</pre>
<p>Log in for a single request</p>
<pre class="wp-block-preformatted">Auth::once($credentials);</pre>
<p>Log a user into the application</p>
<pre class="wp-block-preformatted">Auth::login(User::find(1));</pre>
<p>Log the given user ID into the application</p>
<pre class="wp-block-preformatted">Auth::loginUsingId(1);</pre>
<p>Log the user out of the application</p>
<pre class="wp-block-preformatted">Auth::logout();</pre>
<p>Validate a user&#8217;s credentials</p>
<pre class="wp-block-preformatted">Auth::validate($credentials);</pre>
<p>Attempt to authenticate using HTTP Basic Auth</p>
<pre class="wp-block-preformatted">Auth::basic('username');</pre>
<p>Perform a stateless HTTP Basic login attempt</p>
<pre class="wp-block-preformatted">Auth::onceBasic();</pre>
<p>Send a password reminder to a user</p>
<pre class="wp-block-preformatted">Password::remind($credentials, function($message, $user){});</pre>
<h3>Authorization</h3>
<p>Define abilities</p>
<pre class="wp-block-preformatted">Gate::define('update-post', '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="27644b465454674a42534f4843">[email&#160;protected]</a>');<br>Gate::define('update-post', function ($user, $post) {…});</pre>
<p>Passing multiple argument</p>
<pre class="wp-block-preformatted">Gate::define('delete-comment', function ($user, $post, $comment) {});</pre>
<p>Check abilities</p>
<pre class="wp-block-preformatted">Gate::denies('update-post', $post);<br>Gate::allows('update-post', $post);<br>Gate::check('update-post', $post);</pre>
<p>Specified a user for checking</p>
<pre class="wp-block-preformatted">Gate::forUser($user)->allows('update-post', $post);</pre>
<p>Through User model, using Authorizable trait</p>
<pre class="wp-block-preformatted">User::find(1)->can('update-post', $post);<br>User::find(1)->cannot('update-post', $post);</pre>
<p>Intercepting Authorization Checks</p>
<pre class="wp-block-preformatted">Gate::before(function ($user, $ability) {});<br>Gate::after(function ($user, $ability) {});</pre>
<p>Chekcing in Blade template</p>
<pre class="wp-block-preformatted">@can('update-post', $post)<br>@endcan</pre>
<p>with else</p>
<pre class="wp-block-preformatted">@can('update-post', $post)<br>@else<br>@endcan</pre>
<p>Generate a Policy</p>
<p>php artisan make:policy PostPolicy</p>
<p>policy helper function</p>
<pre class="wp-block-preformatted">policy($post)->update($user, $post)</pre>
<p>// Controller Authorization</p>
<pre class="wp-block-preformatted">$this->authorize('update', $post);</pre>
<p>for $user </p>
<pre class="wp-block-preformatted">$this->authorizeForUser($user, 'update', $post);</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="pagination"><a href="https://simplecheatsheet.com/pagination/">Pagination</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<p>Auto-Magic Pagination</p>
<pre class="wp-block-preformatted">Model::paginate(15);<br>Model::where('cars', 2)-&gt;paginate(15);</pre>
<p>&#8220;Next&#8221; and &#8220;Previous&#8221; only</p>
<pre class="wp-block-preformatted">Model::where('cars', 2)-&gt;simplePaginate(15);</pre>
<p>Manual Paginator</p>
<pre class="wp-block-preformatted">Paginator::make($items, $totalItems, $perPage);</pre>
<p>Print page navigators in view</p>
<pre class="wp-block-preformatted">$variable-&gt;links();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-form"><a href="https://simplecheatsheet.com/laravel-form/">Laravel Form</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<pre class="wp-block-preformatted">Form::open(array('url' =&gt; 'foo/bar', 'method' =&gt; 'PUT'));
Form::open(array('route' =&gt; 'foo.bar'));
Form::open(array('route' =&gt; array('foo.bar', $parameter)));
Form::open(array('action' =&gt; '<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f3b59c9cb09c9d87819c9f9f9681b39e96879b9c97">[email&#160;protected]</a>'));
Form::open(array('action' =&gt; array('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="692f06062a06071d1b0605050c1b29040c1d01060d">[email&#160;protected]</a>', $parameter)));
Form::open(array('url' =&gt; 'foo/bar', 'files' =&gt; true));
Form::close();
Form::token();
Form::model($foo, array('route' =&gt; array('foo.bar', $foo-&gt;bar)));</pre>
<h3>Form Elements</h3>
<pre class="wp-block-preformatted">Form::label('id', 'Description');
Form::label('id', 'Description', array('class' =&gt; 'foo'));
Form::text('name');
Form::text('name', $value);
Form::text('name', $value, array('class' =&gt; 'name'));
Form::textarea('name');
Form::textarea('name', $value);
Form::textarea('name', $value, array('class' =&gt; 'name'));
Form::hidden('foo', $value);
Form::password('password');
Form::password('password', array('placeholder' =&gt; 'Password'));
Form::email('name', $value, array());
Form::file('name', array('class' =&gt; 'name'));
Form::checkbox('name', 'value');</pre>
<p>Generating a checkbox that is checked</p>
<pre class="wp-block-preformatted">Form::checkbox('name', 'value', true, array('class' =&gt; 'name'));
Form::radio('name', 'value');</pre>
<p>Generating a radio input that is selected</p>
<pre class="wp-block-preformatted">Form::radio('name', 'value', true, array('class' =&gt; 'name'));
Form::select('name', array('key' =&gt; 'value'));
Form::select('name', array('key' =&gt; 'value'), 'key', array('class' =&gt; 'name'));
Form::selectRange('range', 1, 10);
Form::selectYear('year', 2011, 2015);
Form::selectMonth('month');
Form::submit('Submit!', array('class' =&gt; 'name'));
Form::button('name', array('class' =&gt; 'name'));
Form::macro('fooField', function()
{
return '&lt;input type="custom"/&gt;';
});
Form::fooField();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="entry-header-inner section-inner">
<h2 class="entry-title heading-size-1" id="laravel-helper"><a href="https://simplecheatsheet.com/laravel-helper/">Laravel Helper</a></h2>
</div><!-- .entry-header-inner -->
<!-- .entry-header -->
<div class="post-inner thin ">
<div class="entry-content">
<h3>Arrays</h3>
<p>adds a given key / value pair to the array if the given key doesn&#8217;t already exist in the array</p>
<pre class="wp-block-preformatted">array_add($array, 'key', 'value');</pre>
<p>collapse an array of arrays into a single array</p>
<pre class="wp-block-preformatted">array_collapse($array);</pre>
<p>Divide an array into two arrays. One with keys and the other with values</p>
<pre class="wp-block-preformatted">array_divide($array);</pre>
<p>Flatten a multi-dimensional associative array with dots</p>
<pre class="wp-block-preformatted">array_dot($array);</pre>
<p>Get all of the given array except for a specified array of items</p>
<pre class="wp-block-preformatted">array_except($array, array('key'));</pre>
<p>Return the first element in an array passing a given truth test</p>
<pre class="wp-block-preformatted">array_first($array, function($key, $value){}, $default);</pre>
<p>Strips keys from the array</p>
<pre class="wp-block-preformatted">array_flatten($array);</pre>
<p>Remove one or many array items from a given array using &#8220;dot&#8221; notation</p>
<pre class="wp-block-preformatted">array_forget($array, 'foo');</pre>
<p>Dot notation</p>
<pre class="wp-block-preformatted">array_forget($array, 'foo.bar');</pre>
<p>Get an item from an array using &#8220;dot&#8221; notation</p>
<pre class="wp-block-preformatted">array_get($array, 'foo', 'default');<br>array_get($array, 'foo.bar', 'default');</pre>
<p>Checks that a given item exists in an array using &#8220;dot&#8221; notation</p>
<pre class="wp-block-preformatted">array_has($array, 'products.desk');</pre>
<p>Get a subset of the items from the given array</p>
<pre class="wp-block-preformatted">array_only($array, array('key'));</pre>
<p>Return array of key => values</p>
<pre class="wp-block-preformatted">array_pluck($array, 'key');</pre>
<p>Return and remove &#8216;key&#8217; from array</p>
<pre class="wp-block-preformatted">array_pull($array, 'key');</pre>
<p>Set an array item to a given value using &#8220;dot&#8221; notation</p>
<pre class="wp-block-preformatted">array_set($array, 'key', 'value');</pre>
<p>Dot notation</p>
<pre class="wp-block-preformatted">array_set($array, 'key.subkey', 'value');</pre>
<p>Sorts the array by the results of the given Closure</p>
<pre class="wp-block-preformatted">array_sort($array, function(){});</pre>
<p>Recursively sorts the array using the sort function</p>
<pre class="wp-block-preformatted">array_sort_recursive();</pre>
<p>Filters the array using the given Closure</p>
<pre class="wp-block-preformatted">array_where();</pre>
<p>First element of an array</p>
<pre class="wp-block-preformatted">head($array);</pre>
<p>Last element of an array</p>
<pre class="wp-block-preformatted">last($array);</pre>
<h3>Paths</h3>
<p>Fully qualified path to the app directory</p>
<pre class="wp-block-preformatted">app_path();</pre>
<p>Get the path to the public folder</p>
<pre class="wp-block-preformatted">base_path();</pre>
<p>Fully qualified path to the application configuration directory</p>
<pre class="wp-block-preformatted">config_path();</pre>
<p>Fully qualified path to the application&#8217;s database directory</p>
<pre class="wp-block-preformatted">database_path();</pre>
<p>Gets the path to the versioned Elixir file:</p>
<pre class="wp-block-preformatted">elixir();</pre>
<p>Fully qualified path to the public directory</p>
<pre class="wp-block-preformatted">public_path();</pre>
<p>Get the path to the storage folder</p>
<pre class="wp-block-preformatted">storage_path();</pre>
<h3>Strings</h3>
<p>Convert a value to camel case</p>
<pre class="wp-block-preformatted">camel_case($value);</pre>
<p>Get the class &#8220;basename&#8221; of the given object / class</p>
<pre class="wp-block-preformatted">class_basename($class);</pre>
<p>Escape a string</p>
<pre class="wp-block-preformatted">e('');</pre>
<p>Determine if a given string starts with a given substring</p>
<pre class="wp-block-preformatted">starts_with('Foo bar.', 'Foo');</pre>
<p>Determine if a given string ends with a given substring</p>
<pre class="wp-block-preformatted">ends_with('Foo bar.', 'bar.');</pre>
<p>Convert a string to snake case</p>
<pre class="wp-block-preformatted">snake_case('fooBar');</pre>
<p>Limits the number of characters in a string</p>
<pre class="wp-block-preformatted">str_limit();</pre>
<p>Determine if a given string contains a given substring</p>
<pre class="wp-block-preformatted">str_contains('Hello foo bar.', 'foo');</pre>
<p>Result: foo/bar/</p>
<pre class="wp-block-preformatted">str_finish('foo/bar', '/');<br>str_is('foo*', 'foobar');<br>str_plural('car');<br>str_random(25);<br>str_singular('cars');<br>str_slug("Laravel 5 Framework", "-");</pre>
<p>Result: FooBar</p>
<pre class="wp-block-preformatted">studly_case('foo_bar');<br>trans('foo.bar');<br>trans_choice('foo.bar', $count);</pre>
<h3>URLs and Links</h3>
<pre class="wp-block-preformatted">action('<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2e4cdcde1cdccd6d0cdcecec7d0e2cfc7d6cacdc6">[email&#160;protected]</a>', $parameters);</pre>
<p>HTML Link</p>
<pre class="wp-block-preformatted">asset('img/photo.jpg', $title, $attributes);</pre>
<p>HTTPS link</p>
<pre class="wp-block-preformatted">secure_asset('img/photo.jpg', $title, $attributes);
route($route, $parameters, $absolute = true);
url('path', $parameters = array(), $secure = null);</pre>
<h3>Miscellaneous</h3>
<p>Authenticator instance (Auth)</p>
<pre class="wp-block-preformatted">auth()->user();</pre>
<p>Generates a redirect response to the user&#8217;s previous location</p>
<pre class="wp-block-preformatted">back();</pre>
<p>Hashes the given value using Bcrypt (Hash)</p>
<pre class="wp-block-preformatted">bcrypt('my-secret-password');</pre>
<p>Creates a collection instance from the supplied items</p>
<pre class="wp-block-preformatted">collect(['taylor', 'abigail']);</pre>
<p>Gets the value of a configuration variable</p>
<pre class="wp-block-preformatted">config('app.timezone', $default);</pre>
<p>Generates an HTML hidden input field containing the value of the CSRF token</p>
<pre class="wp-block-preformatted">{!! csrf_field() !!}</pre>
<p>Retrieves the value of the current CSRF token</p>
<pre class="wp-block-preformatted">$token = csrf_token();</pre>
<p>Dumps the given variable and ends execution of the script</p>
<pre class="wp-block-preformatted">dd($value);</pre>
<p>Gets the value of an environment variable or returns a default value</p>
<pre class="wp-block-preformatted">$env = env('APP_ENV');<br>$env = env('APP_ENV', 'production');</pre>
<p>Dispatches the given event to its listeners:</p>
<pre class="wp-block-preformatted">event(new UserRegistered($user));</pre>
<p>Creates a model factory builder for a given class</p>
<pre class="wp-block-preformatted">$user = factory(App\User::class)->make();</pre>
<p>Generates an HTML hidden input field containing the spoofed value of the form&#8217;s HTTP verb</p>
<pre class="wp-block-preformatted">{!! method_field('delete') !!}</pre>
<p>Retrieves an old input value flashed into the session</p>
<pre class="wp-block-preformatted">$value = old('value');<br>$value = old('value', 'default');</pre>
<p>Returns an instance of the redirector to do redirects:</p>
<pre class="wp-block-preformatted">return redirect('/home');</pre>
<p>Returns the current request instance or obtains an input item</p>
<pre class="wp-block-preformatted">$value = request('key', $default = null)</pre>
<p>Creates a response instance or obtains an instance of the response factory</p>
<pre class="wp-block-preformatted">return response('Hello World', 200, $headers);</pre>
<p>Used to get / set a session value</p>
<pre class="wp-block-preformatted">$value = session('key');<br>$value = session()->get('key');<br>session()->put('key', $value);</pre>
<p>Will simply return the value it is given.</p>
<pre class="wp-block-preformatted">value(function(){ return 'bar'; });</pre>
<p>Retrieves a view instance</p>
<pre class="wp-block-preformatted">return view('auth.login');</pre>
<p>Returns the value it is given</p>
<pre class="wp-block-preformatted">$value = with(new Foo)->work();</pre>
</div><!-- .entry-content -->
</div><!-- .post-inner -->
<div class="section-inner">
</div><!-- .section-inner -->
<!-- .post -->
<div class="ads">
<!-- Responsive -->
</div>
</div>
<div class="js-toc">
<ul class="toc-list">
<li class="toc-list-item">
<a class="toc-link" href="#laravel-queue">Laravel Queue</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-redirect">Laravel Redirect</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-route">Laravel Route</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-config">Laravel Config</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-file">Laravel File</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#lang">Lang</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-ssh">Laravel SSH</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-cache">Laravel Cache</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-html">Laravel HTML</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-model">Laravel Model</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-db-cheat-sheet">Laravel DB Cheat Sheet</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-validation">Laravel Validation</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-view">Laravel View</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-blade">Laravel Blade</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-mail">Laravel Mail</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-session">Laravel Session</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-response">Laravel Response</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-event">Laravel Event</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-input">Laravel Input</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-url">Laravel URL</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-log">Laravel Log</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-environment">Laravel Environment</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-string">Laravel String</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-composer-command">Laravel Composer Command</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-artisan">Laravel Artisan</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-cookie">Laravel Cookie</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-messages">Laravel Messages</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-security">Laravel Security</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-schema">Laravel Schema</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-request">Laravel Request</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-container">Laravel Container</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-auth">Laravel Auth</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-auth-cheat-sheet">Laravel Auth Cheat Sheet</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#pagination">Pagination</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-form">Laravel Form</a>
</li>
<li class="toc-list-item">
<a class="toc-link" href="#laravel-helper">Laravel Helper</a>
</li>
</ul>
<div class="ads">
<!-- Responsive -->
</div>
</div>
</div>
</body>
</html>
