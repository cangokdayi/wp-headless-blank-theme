# WP Headless Theme

Dead-simple blank WordPress theme for headless WP Gods. 

It just renders a dummy JSON object leaving you worry-free about the useless static stuff that WP Core & plugins might load on page.

It can also be configured to return HTML with the `responseType` constant inside `functions.php` but I wouldn't recommend it unless you really have to. Think about the amount of time you'll waste while waiting for the html output and http requests when you can just serve a simple JSON response and be done with it.

HTML Output:

![ScreenshotHTML](/docs/html_render.png)

JSON Output:

![ScreenshotJSON](/docs/json_render.png)

Assets folder is completely unnecessary unless you're rendering HTML and need it so delete it if you like.

#KeepOnRocking