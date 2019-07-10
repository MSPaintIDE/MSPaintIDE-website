---
layout: default
title: Java
parent: Languages
description: Java in MS Paint IDE
nav_order: 1
permalink: /languages/java
github-path: languages/java.md
---

# Java

The Java language relies on [Eclipse's JDT Language Server](https://github.com/eclipse/eclipse.jdt.ls) for language implementation, and the standard [JDK](https://openjdk.java.net/install/) to run programs. The following items are the settings specific to Java:

### Input Directory

Accepts a directory, usually the `src` folder containing the image source files.

### Highlight Directory

Accepts a directory, to contain all the highlighted output images. Images are saved with the same name and relative location as their source, but with `_highlighted.png` instead of ending with `.png`.

### Main Class

This is the class to execute.

### Jar Output

This is the jar file to save to as the program's output.

### Class Output

Accepts a directory, and is the location to store all compiled `.class` files.

### Compiler output

Accepts an image to be saved and store all compiler console output data.

### Program Output

Accepts an image to be saved and store all of the program's console output data.

### Java Version

Versions 1.8-1.13 are available, and should be the same version as your JDK.

### Library Location

Accepts a directory to contain any .jar files to be included in the classpath.

### Other Location

Accepts a directory to store any files to be included in the output jar during build.

## Checkboxes

### Syntax Highlight

If the code should be syntax highlighted in the highlight directory.

### Compile Program

If the program should be compiled or not. If unchecked, the program will not execute either.

### Execute Program

If the program should be executed. **Compile Program** must also be checked for this to work.