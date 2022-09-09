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
- [Step 12.][12] Create a custom 404 page
- [Step 13.][13] Create and register a custom template
- [Step 14.][14] Create a style variation __<--You Are Here__
- [Step 15.][15] Final - Export your theme!
</details>

---

### Step 14. Create a style variation

#### Create a directory/folder named `styles`
#### Create a file named `beach.json` to the `styles` directory/folder
<details open>
<summary>
<sup>collapse/expand code</sup>
</summary>

  ```json
{
    "settings": {
        "color": {
            "palette": [
                {
                    "color": "#F7ECE1",
                    "name": "Light",
                    "slug": "light"
                },
                {
                    "color": "#333333",
                    "name": "Dark",
                    "slug": "dark"
                },
                {
                    "color": "#2c418d",
                    "name": "Blue",
                    "slug": "contrast"
                },
                {
                    "color": "#606c87",
                    "name": "Grey",
                    "slug": "primary"
                },
                {
                    "color": "#e8fba0",
                    "name": "Yellow",
                    "slug": "secondary"
                },
                {
                    "color": "#F7ECE1",
                    "name": "Light Blue",
                    "slug": "tertiary"
                },
                {
                    "color": "#99dae3",
                    "name": "Green",
                    "slug": "quaternary"
                }
            ]
        },
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
							"fontFamily": "Coconat",
                            "fontStyle": "normal",
                            "fontWeight": "400",
							"src": [
								"file:./assets/fonts/coconat/Coconat-Regular.woff2"
							]
						},
                        {
							"fontFamily": "Coconat",
                            "fontStyle": "normal",
                            "fontWeight": "700",
							"src": [
								"file:./assets/fonts/coconat/Coconat-BoldExt.woff2"
							]
						}
					],
					"fontFamily": "Coconat",
					"name": "Headings Font",
					"slug": "heading-font"
				}
			]
        }
    },
    "styles": {
        "blocks": {
			"core/site-title": {
				"color": {
					"text": "var:preset|color|quaternary"
				},
				"elements": {
					"link": {
						"color": {
							"text": "var:preset|color|contrast"
						}
					}
				},
				"typography": {
					"fontFamily": "var:preset|font-family|heading-font",
					"fontSize": "3rem",
					"letterSpacing": "20px",
                    "fontWeight": "700"
				}
			}
        }
    },
    "version": 2,
    "$schema": "https://schemas.wp.org/trunk/theme.json"
}
```
</details>

  

*__Note:__* The contents of each branch reflects the theme as it should look at the _END_ of each step.

---

<div align="center">

__<-- [Previous Step (13)][13]__

 __[Next Step (Final Theme)][15] -->__

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
