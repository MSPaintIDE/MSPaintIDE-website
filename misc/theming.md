---
layout: default
title: Theming
parent: Misc
description: Theming with MS Paint IDE
nav_order: 5
permalink: /misc/theming
github-path: misc/theming.md
---

# Theming

MS Paint IDE themes have the option for two modes for each theme. There can be a light mode and a dark mode, toggleable through the droplet icon shown below.

![](/assets/images/misc/theme-toggle.png)
{: .img }

Themes can be changed through the Settings page (**File > Settings**) in the **Appearance** page. The **Dark Theme** checkbox is simply an alternative to the droplet icon. There is the option to change the taskbar icon for the IDE here as well.

Themes can be added through clicking **Add Theme** in the **Themes** category. A friendly name should be supplied on the left text field, and then the absolite file location in the right text field, such as shown below.

![](/assets/images/misc/appearance-themes.png)
{: .img }

The theme can then be switched through like normal through the radio button.

## Creating Custom Themes

The most basic themes modify some premade variables available as a theme template. This is how a theme like "Extra Dark" is made. The following is the code for the theme template as of the 3.0.0 release.

```css
.root {
    -left-background: #F4F4F4;
    -right-background: #FFFFFF;
    -left-background-dark: #424242;
    -right-background-dark: #616161;
    -window-border: #5472d3;

    -primary-button-color: #0d47a1;
    -input-accent: #5472d3;
    -input-accent-hover: #4b6eaf;
    -error-accent: #c62828;

    -hover-color: #dadada;
    -hover-color-dark: #5b5b5b;

    -text-color: #000;
    -text-color-dark: #fff;
    -text-field-prompt-color: #808080;
    -text-field-prompt-color-dark: #808080;
    -text-color-console: #000;
    -text-color-dark-console: #fff;
}
```

These values can just be changed in a css file for a custom theme. For more advanced themes, the css file can override anything from [the default style.scss](https://github.com/MSPaintIDE/MSPaintIDE/blob/master/src/main/resources/style.scss), which is where MS Paint IDE derives all of its styles from. Make sure to transpile the scss before or after using it, as the IDE's theming system only accepts css files (The scss file is transpiled to css during compilation).

