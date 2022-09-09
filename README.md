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
- [Step 10.][10] Create a Template Layout Block Pattern __<--You Are Here__
- [Step 11.][11] Create and Register singular.html
- [Step 12.][12] Create a custom 404 page
- [Step 13.][13] Create and register a custom template
- [Step 14.][14] Create a style variation
- [Step 15.][15] Final - Export your theme!
</details>

---

### Step 10. Create a Template Layout Block Pattern

#### Create a directory/folder named `patterns`
#### Create a file named `full-page.php`

Add the following to the file:
<details open>
<summary>
<sup>collapse/expand code</sup>
</summary>

  ```json
<?php
/**
 * Title: Full Page Default
 * Slug: wcus/full-page-default
 * Block Types: core/template-part/footer, core/template-part/header
 * Categories: featured
 */
?>

<!-- wp:group {"lock":{"move":true,"remove":true},"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px","left":"0px"},"blockGap":"0px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"contrast","textColor":"light","className":"is-style-full-height-group","layout":{"inherit":true}} -->
<div class="wp-block-group is-style-full-height-group has-light-color has-contrast-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:30px;padding-left:0px">

    <!-- wp:template-part {"slug":"header","theme":"wcus2022","align":"full"} /-->

    <!-- wp:group {"lock":{"move":true,"remove":true},"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"light","textColor":"dark","layout":{"contentSize":""}} -->
    <div class="wp-block-group alignwide has-dark-color has-light-background-color has-text-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
        
        <!-- wp:paragraph {"placeholder":"Add Blocks Here ..."} -->
        <p></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:template-part {"slug":"footer","theme":"wcus2022","align":"wide"} /-->

</div>
<!-- /wp:group -->
```
</details>

  

*__Note:__* The contents of each branch reflects the theme as it should look at the _END_ of each step.

---

<div align="center">

__<-- [Previous Step (9)][9]__

 __[Next Step (11)][11] -->__

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
