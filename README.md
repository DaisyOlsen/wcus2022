# Build Your First Block Theme Workshop
## WCUS 2022
<details><summary>Click for Table of Contents</summary>

- [Step 0.][0] Setting up Development Environment 
- [Step 1.][1] Create and Activate a Minimal Block Theme __<--You Are Here__
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
- [Step 12.][12] Create a custom 404 page
- [Step 13.][13] Create and register a custom template
- [Step 14.][14] Create a style variation
- [Step 15.][15] Final - Export your theme!
</details>

---

### Step 1. Create and Activate a Minimal Block Theme

  1. Navigate to the `/wp-content/themes` folder/directory in your local WordPress devlepment environment using your file manager.
  2. Create a folder/directory named `wcus-2022` for your theme.
  3. Create a file named `style.css` using your preferred IDE or text editor with the following contents:

        ```css 
        /** Theme Name: WCUS 2022 **/
        ```

  4. Create a folder/directory named `templates`
  5. Create a file named `index.html` in the `templates` folder/directory with the following code:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```html
        <!-- wp:site-title /-->
        <!-- wp:site-tagline /-->

        <!-- wp:query {"queryId":0} -->
        <div class="wp-block-query">

            <!-- wp:post-template -->

                <!-- wp:post-title /-->

                <!-- wp:post-excerpt /-->

            <!-- /wp:post-template -->

            <!-- wp:query-pagination -->

                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-next /-->

            <!-- /wp:query-pagination -->

        </div>
        <!-- /wp:query -->

        <!-- wp:paragraph -->
        <p>WCUS 2022 Block Theme Workshop</p>
        <!-- /wp:paragraph -->
        ```
        </details>

 1. Navigate to `Appearance > Themes` in your WordPress development site
 2. Activate the `WCUS 2022` theme
 3. Access the front end of the site to see the theme in action

*__Note:__* The contents of each branch reflects the theme as it should look at the _END_ of each step.

---

<div align="center">

__<-- [Previous Step (0)][0]__

 __[Next Step (2)][2] -->__

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
