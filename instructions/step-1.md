# Build Your First Block Theme Workshop
## WCUS 2022

### Part 1 - Create and activate a minimal block theme
In this first step we'll create three files that will comprise the most basic Block theme.

1. create a `file` named `style.css` with the following content:

<details>
<summary>Expand to see code</summary>

```css
/* 
    Theme Name: My First Block Theme
*/
```

</details>
<br>

The completed contents of this file can be found in the step-1 branch of this repository in the `style.css` file

2. create a `file` named `theme.json` with the following content:

<details>
<summary>Expand to see code</summary>

```json
{
    "$schema": "https://schemas.wp.org/wp/6.0/theme.json",
    "version": 2
}
```
</details>
<br>

3.  create a `directory` named `templates` in your theme's root directory.

4.  create a `file` named `index.html` inside the `templates` `directory` with the following content:
<details>
<summary>Expand to see code</summary>

```html
<!-- wp:site-title /-->
<!-- wp:site-tagline /-->
<!-- wp:navigation /-->

<!-- wp:query { "queryId":0 } -->
<div class="wp-block-query">
    <!-- wp:post-template -->
        <!-- wp:post-title /-->
        <!-- wp:post-content /-->
    <!-- /wp:post-template -->
    
    <!-- wp:query-pagination -->
        <!-- wp:query-pagination-numbers /-->
    <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

<!-- wp:paragraph -->
<p>Proudly powered by WordPress</p>
<!-- /wp:paragraph -->
```
</details>
<br>

5. Navigate to your WordPress site admin area to `appearance > themes` to activate your theme.

6. Access the front end of your site to see your site with it's newly activated block theme.