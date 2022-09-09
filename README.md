# Build Your First Block Theme Workshop
## WCUS 2022
<details><summary>Click for Table of Contents</summary>

- [Step 0.][0] Setting up Development Environment 
- [Step 1.][1] Create and Activate a Minimal Block Theme
- [Step 2.][2] Create and incorporate template parts
- [Step 3.][3] Create a theme.json file
- [Step 4.][4] Add Settings to theme.json
- [Step 5.][5] Refine Templates and Parts
- [Step 6.][6] Add styles to theme.json
- [Step 7.][7] Enqueue style.css for custom CSS
- [Step 8.][8] Register and use block styles and custom variables
- [Step 9.][9] Surface a block pattern via theme.json
- [Step 10.][10] Create a Template Layout Block Pattern
- [Step 11.][11] Create and Register singular.html
- [Step 12.][12] Create a custom 404 page __<--You Are Here__
- [Step 13.][13] Create and register a custom template
- [Step 14.][14] Create a style variation
- [Step 15.][15] Final - Export your theme!
</details>

---

### Step 12. Create a custom 404 Template and Hidden Block Pattern

#### Add file named `hidden-404-content.php` to the `patterns` directory/folder

<details open>
<summary>
<sup>collapse/expand code</sup>
</summary>

  ```json
<?php
/**
 * Title: 404 content
 * Slug: wcus/hidden-404-content
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Sorry We couldn't find anything for you, here's a cute Wapuu instead.</h2>
<!-- /wp:heading -->

<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-full">
    <img src="<?php echo esc_url( get_template_directory_uri()) ?>/assets/images/surferpuu.jpeg" alt="<?php echo esc_attr__( 'WCUS 2022 Wapuu.', 'wcus' ) ?>"/>
</figure>
<!-- /wp:image -->
```
</details>
  
#### Add file named `404.html` to the `templates` directory/folder
<details open>
<summary>
<sup>collapse/expand code</sup>
</summary>

  ```html
<!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"contrast","textColor":"light","className":"is-style-full-height-group","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-full-height-group has-light-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:30px;padding-left:0px">
    
    <!-- wp:template-part {"lock":{"move":true,"remove":true},"slug":"header","align":"full"} /-->

    <!-- wp:group {"lock":{"move":true,"remove":true},"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"light","textColor":"dark","layout":{"contentSize":""}} -->
    <div class="wp-block-group alignwide has-dark-color has-light-background-color has-text-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">

        <!-- wp:pattern {"slug":"wcus/hidden-404-content"} /-->

    </div>
    <!-- /wp:group -->

    <!-- wp:template-part {"lock":{"move":true,"remove":true},"slug":"footer","align":"wide"} /-->

</div>
<!-- /wp:group -->
```
</details>

*__Note:__* The contents of each branch reflects the theme as it should look at the _END_ of each step.

---

<div align="center">

__<-- [Previous Step (11)][11]__

 __[Next Step (13)][13] -->__

</div>


---

[0]: ../../tree/step-0/#wcus-2022
[1]: ../../tree/step-1/#wcus-2022
[2]: ../../tree/step-2/#wcus-2022
[3]: ../../tree/step-3/#wcus-2022
[4]: ../../tree/step-4/#wcus-2022
[5]: ../../tree/step-5/#wcus-2022
[6]: ../../tree/step-6/#wcus-2022
[7]: ../../tree/step-7/#wcus-2022
[8]: ../../tree/step-8/#wcus-2022
[9]: ../../tree/step-9/#wcus-2022
[10]: ../../tree/step-10/#wcus-2022
[11]: ../../tree/step-11/#wcus-2022
[12]: ../../tree/step-12/#wcus-2022
[13]: ../../tree/step-13/#wcus-2022
[14]: ../../tree/step-14/#wcus-2022
[15]: ../../tree/final/#wcus-2022
