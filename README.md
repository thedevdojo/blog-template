<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/thedevdojo/blog-template/main/public/logo.svg" height="150" alt="Laravel Blog"></a></p>

<img src="https://raw.githubusercontent.com/thedevdojo/blog-template/main/public/screenshot.png" alt="screenshot" />

<h1>Blog Template</h1>
<p>This is a dry blog template to use for package development or any other test you want to perform with a plain and dry blog UI. In this package is a plain <a href="https://laravel.com" target="_blank">Laravel application</a> with the <a href="https://github.com/laravel-frontend-presets/tall" target="_blank">Tallstack preset</a></p>

<h2>Steps to load a local version</h2>
<ul>
<li>Git clone https://github.com/thedevdojo/blog-template.git</li>
<li>CD into that new folder</p>
<li>Run <code>composer install</code></li>
<li>Install dependencies with <code>npm install</code></li>
<li>Run asset watcher with <code>npm run dev</code></li>
</ul>

<p>Visit the homepage, and BOOM 💥 (it will pull the data from a local sqlite file)</p>

> If you want to re-run migrations and re-create posts you can do so from the following 👇

<h2>Re-run migrations and re-create posts</h2>
<p>Follow these steps to re-run the migrations and create a single user and 10 posts</p>
<ul>
<li>Run <code>php artisan migrate</code></li>
<li>Inside of <code>php artisan tinker</code>, run <code>User::factory()->create()</code> to create a new user</li>
<li>Insiide of <code>php artisan tinker</code>, run <code>Post::factory()->count(10)->create()</code> to create posts</li>
</ul>

<p>That's it! 🍻 Enjoy.</p>