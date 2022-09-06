# Build Your First Block Theme Workshop
## WCUS 2022

### Step 1. Create and Activate a Minimal Block Theme

  1. Create a folder/directory named `wcus-2022` for your theme.
  2. Open the folder in your preferred IDE
  3. Create a file named style.css with the following contents

```css 
/** Theme Name: WCUS 2022 **/
```

  4. Create a folder/directory named `templates`
  5. Create a file named `index.html` in the `templates` folder/directory with the code below

        <details open><summary>`index.html` code</summary>

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

 1. Navigate to `appearance > themes` in your WordPress development site
 2. Activate the WCUS 2022 theme
 3. Access the front end of the site to see the theme in action


---
### Previous Step
[Step 0. Preparation - Setting up Development Environment][0]

### Next Step
[Step 1. Create and Activate a Minimal Block Theme][1]

<details><summary>Expand to See All Steps</summary>

- [Step 0.][0] Preparation - Setting up Development Environment 
- [Step 1.][1] Create and Activate a Minimal Block Theme __<--You Are Here__
- [Step 2.][2] Create and incorporate template parts - Demonstrate Block Locking options
- [Step 3.][3] Create a theme.json file with schema, version, and template part registration
- [Step 4.][4] Add Presets and Supports to theme.json
- [Step 5.][5] Refine Templates and Parts in the Site Editor
- [Step 6.][6] Add styles to theme.json
- [Step 7.][7] Enqueue style.css for custom CSS
- [Step 8.][8] Register and use block styles & custom colors in theme.json
- [Step 9.][9] Surface a Block Pattern from the Pattern directory via theme.json
- [Step 10.][10] Create a Template Layout Block Pattern
- [Step 11.][11] Create and Register singular.html (use template layout block pattern via site editor)
- [Step 12.][12] Create a custom 404 page with a local image, and translatable text with a Hidden Block Pattern
- [Step 13.][13] Create and register a custom template for posts and pages
- [Step 14.][14] Create a style variation and add a font
- [Step 15.][15] Final - Export your theme!
</details>

---

__Not covered here but still important!__
- Preparing your theme for the Theme Directory
- Accessibility
- Responsivity Testing

[0]: ../step-0
[1]: ../step-1
[2]: ../step-2
[3]: ../step-3
[4]: ../step-4
[5]: ../step-5
[6]: ../step-6
[7]: ../step-7
[8]: ../step-8
[9]: ../step-9
[10]: ../step-10
[11]: ../step-11
[12]: ../step-12
[13]: ../step-13
[14]: ../step-14
[15]: ../final
