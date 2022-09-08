# Build Your First Block Theme Workshop
## WCUS 2022
<details><summary>Click for Table of Contents</summary>

- [Step 0.][0] Setting up Development Environment 
- [Step 1.][1] Create and Activate a Minimal Block Theme
- [Step 2.][2] Create and incorporate template parts
- [Step 3.][3] Create a theme.json file
- [Step 4.][4] Add Settings to theme.json __<--You Are Here__
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

### Step 4. Add Settings (Presets and Supports) to theme.json

  1. Navigate to the `/wp-content/themes/wcus2022` folder/directory in your local WordPress devlepment environment using your file manager.
  2. Edit the file named `theme.json` in the `wcus2022` folder/directory
  3. On a new line after the opening `{` add:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```json
        "settings": {

        },
        ```

        </details>

  4. On the line after `"settings": {`  add:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```json
		"appearanceTools": true,
        ```

        </details>

  5. On a new line add:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```json
		"color": {
			"defaultPalette": false,
			"duotone": [
				{
					"colors": [
						"var(--wp--preset--color--light)",
						"var(--wp--preset--color--contrast)"
					],
					"name": "Light-Dark",
					"slug": "light-contrast"
				},
				{
					"colors": [
						"var(--wp--preset--color--contrast)",
						"var(--wp--preset--color--light)"
					],
					"name": "Dark-Light",
					"slug": "contrast-light"
				},
				{
					"colors": [
						"var(--wp--preset--color--primary)",
						"var(--wp--preset--color--secondary)"
					],
					"name": "Pink-Magenta",
					"slug": "primary-secondary"
				}
			],
			"gradients": [
				{
					"gradient": "linear-gradient(180deg, var(--wp--preset--color--quaternary) 0%, var(--wp--preset--color--tertiary) 40%, var(--wp--preset--color--secondary) 65%, var(--wp--preset--color--primary) 75%, var(--wp--preset--color--contrast) 95%)",
					"name": "Sunset",
					"slug": "primary-gradient"
				}
			],
			"palette": [
				{
					"color": "#f9f9f9",
					"name": "Light",
					"slug": "light"
				},
				{
					"color": "#333333",
					"name": "Dark",
					"slug": "dark"
				},
				{
					"color": "#1e1a75",
					"name": "Blue",
					"slug": "contrast"
				},
				{
					"color": "#a11477",
					"name": "Magenta",
					"slug": "primary"
				},
				{
					"color": "#e13661",
					"name": "Pink",
					"slug": "secondary"
				},
				{
					"color": "#ff6f4b",
					"name": "Orange",
					"slug": "tertiary"
				},
				{
					"color": "#ffa951",
					"name": "Yellow",
					"slug": "quaternary"
				}
			]
		},
        ```

        </details>

  6. On a new line add:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```json
        "layout": {
			"contentSize": "920px",
			"wideSize": "1200px"
		},
        ```

        </details>

  7. On a new line add:

        <details open>
        <summary>
        <sup>collapse/expand code</sup>
        </summary>

        ```json
		"typography": {
			"fontFamilies": [
				{
					"fontFamily": "-apple-system, BlinkMacSystemFont, \"avenir next\", avenir, \"segoe ui\", \"helvetica neue\", helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif",
					"name": "System Sans-Serif Font",
					"slug": "sans-serif"
				},
				{
					"fontFamily": "\"Iowan Old Style\", \"Apple Garamond\", Baskerville, \"Times New Roman\", \"Droid Serif\", Times, \"Source Serif Pro\", serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\"",
					"name": "System Serif Font",
					"slug": "serif"
				},
				{
					"fontFamily": "Menlo, Consolas, Monaco, \"Liberation Mono\", \"Lucida Console\", monospace",
					"name": "System Monospace Font",
					"slug": "monospace"
				},
				{
					"fontFace": [
						{
							"fontFamily": "Bluetea",
							"src": [
								"file:./assets/fonts/bluetea/Bluetea.woff2"
							]
						}
					],
					"fontFamily": "Bluetea",
					"name": "Headings Font",
					"slug": "heading-font"
				}
			],
			"fontSizes": [
				{
					"size": "1rem",
					"slug": "small"
				},
				{
					"size": "1.125rem",
					"slug": "medium"
				},
				{
					"size": "1.75rem",
					"slug": "large"
				},
				{
					"size": "2.25rem",
					"slug": "x-large"
				}
			]
		}
        ```

        </details>

*__Note:__* The contents of each branch reflects the theme as it should look at the _END_ of each step.

---

<div align="center">

__<-- [Previous Step (3)][3]__

 __[Next Step (5)][5] -->__

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
