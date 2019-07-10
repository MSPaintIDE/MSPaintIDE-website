---
layout: default
title: JavaScript
parent: Languages
description: JavaScript in MS Paint IDE
nav_order: 3
permalink: /languages/javascript
github-path: languages/javascript.md
---

# JavaScript

The JavaScript language relies on [sourcegraph's JS and TS Language Server](https://www.npmjs.com/package/javascript-typescript-langserver) for language implementation, and [Node](https://nodejs.org/en/download/) to run programs. The following items are the settings specific to JavaScript:

### Input Directory

Accepts a directory, usually the `src` folder containing the image source files.

### Highlight Directory

Accepts a directory, to contain all the highlighted output images. Images are saved with the same name and relative location as their source, but with `_highlighted.png` instead of ending with `.png`.

### Running File

The file path to the image file to run.

### Compiler output

Accepts an image to be saved and store all compiler console output data.

### Program Output

Accepts an image to be saved and store all of the program's console output data.

## Checkboxes

### Syntax Highlight

If the code should be syntax highlighted in the highlight directory.

### Execute Program

If the program should be executed.